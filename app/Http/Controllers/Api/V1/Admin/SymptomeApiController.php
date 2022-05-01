<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSymptomeRequest;
use App\Http\Requests\UpdateSymptomeRequest;
use App\Http\Resources\Admin\SymptomeResource;
use App\Models\Symptome;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SymptomeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('symptome_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SymptomeResource(Symptome::with(['maladies'])->get());
    }

    public function store(StoreSymptomeRequest $request)
    {
        $symptome = Symptome::create($request->all());
        $symptome->maladies()->sync($request->input('maladies', []));

        return (new SymptomeResource($symptome))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Symptome $symptome)
    {
        abort_if(Gate::denies('symptome_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SymptomeResource($symptome->load(['maladies']));
    }

    public function update(UpdateSymptomeRequest $request, Symptome $symptome)
    {
        $symptome->update($request->all());
        $symptome->maladies()->sync($request->input('maladies', []));

        return (new SymptomeResource($symptome))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Symptome $symptome)
    {
        abort_if(Gate::denies('symptome_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $symptome->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

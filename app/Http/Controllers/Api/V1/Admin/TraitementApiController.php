<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTraitementRequest;
use App\Http\Requests\UpdateTraitementRequest;
use App\Http\Resources\Admin\TraitementResource;
use App\Models\Traitement;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TraitementApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('traitement_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TraitementResource(Traitement::with(['maladies'])->get());
    }

    public function store(StoreTraitementRequest $request)
    {
        $traitement = Traitement::create($request->all());
        $traitement->maladies()->sync($request->input('maladies', []));

        return (new TraitementResource($traitement))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Traitement $traitement)
    {
        abort_if(Gate::denies('traitement_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TraitementResource($traitement->load(['maladies']));
    }

    public function update(UpdateTraitementRequest $request, Traitement $traitement)
    {
        $traitement->update($request->all());
        $traitement->maladies()->sync($request->input('maladies', []));

        return (new TraitementResource($traitement))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Traitement $traitement)
    {
        abort_if(Gate::denies('traitement_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $traitement->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

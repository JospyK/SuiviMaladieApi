<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreListeExamanRequest;
use App\Http\Requests\UpdateListeExamanRequest;
use App\Http\Resources\Admin\ListeExamanResource;
use App\Models\ListeExaman;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ListeExamenApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('liste_examan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ListeExamanResource(ListeExaman::with(['maladies'])->get());
    }

    public function store(StoreListeExamanRequest $request)
    {
        $listeExaman = ListeExaman::create($request->all());
        $listeExaman->maladies()->sync($request->input('maladies', []));

        return (new ListeExamanResource($listeExaman))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ListeExaman $listeExaman)
    {
        abort_if(Gate::denies('liste_examan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ListeExamanResource($listeExaman->load(['maladies']));
    }

    public function update(UpdateListeExamanRequest $request, ListeExaman $listeExaman)
    {
        $listeExaman->update($request->all());
        $listeExaman->maladies()->sync($request->input('maladies', []));

        return (new ListeExamanResource($listeExaman))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ListeExaman $listeExaman)
    {
        abort_if(Gate::denies('liste_examan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $listeExaman->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

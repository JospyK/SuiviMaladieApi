<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreListeMaladieRequest;
use App\Http\Requests\UpdateListeMaladieRequest;
use App\Http\Resources\Admin\ListeMaladieResource;
use App\Models\ListeMaladie;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ListeMaladieApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('liste_maladie_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ListeMaladieResource(ListeMaladie::all());
    }

    public function store(StoreListeMaladieRequest $request)
    {
        $listeMaladie = ListeMaladie::create($request->all());

        return (new ListeMaladieResource($listeMaladie))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ListeMaladie $listeMaladie)
    {
        abort_if(Gate::denies('liste_maladie_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ListeMaladieResource($listeMaladie);
    }

    public function update(UpdateListeMaladieRequest $request, ListeMaladie $listeMaladie)
    {
        $listeMaladie->update($request->all());

        return (new ListeMaladieResource($listeMaladie))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ListeMaladie $listeMaladie)
    {
        abort_if(Gate::denies('liste_maladie_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $listeMaladie->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

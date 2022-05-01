<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInterventionRequest;
use App\Http\Requests\UpdateInterventionRequest;
use App\Http\Resources\Admin\InterventionResource;
use App\Models\Intervention;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InterventionApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('intervention_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InterventionResource(Intervention::all());
    }

    public function store(StoreInterventionRequest $request)
    {
        $intervention = Intervention::create($request->all());

        return (new InterventionResource($intervention))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Intervention $intervention)
    {
        abort_if(Gate::denies('intervention_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InterventionResource($intervention);
    }

    public function update(UpdateInterventionRequest $request, Intervention $intervention)
    {
        $intervention->update($request->all());

        return (new InterventionResource($intervention))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Intervention $intervention)
    {
        abort_if(Gate::denies('intervention_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $intervention->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

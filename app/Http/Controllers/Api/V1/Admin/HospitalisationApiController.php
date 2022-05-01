<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHospitalisationRequest;
use App\Http\Requests\UpdateHospitalisationRequest;
use App\Http\Resources\Admin\HospitalisationResource;
use App\Models\Hospitalisation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HospitalisationApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('hospitalisation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new HospitalisationResource(Hospitalisation::all());
    }

    public function store(StoreHospitalisationRequest $request)
    {
        $hospitalisation = Hospitalisation::create($request->all());

        return (new HospitalisationResource($hospitalisation))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Hospitalisation $hospitalisation)
    {
        abort_if(Gate::denies('hospitalisation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new HospitalisationResource($hospitalisation);
    }

    public function update(UpdateHospitalisationRequest $request, Hospitalisation $hospitalisation)
    {
        $hospitalisation->update($request->all());

        return (new HospitalisationResource($hospitalisation))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Hospitalisation $hospitalisation)
    {
        abort_if(Gate::denies('hospitalisation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $hospitalisation->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

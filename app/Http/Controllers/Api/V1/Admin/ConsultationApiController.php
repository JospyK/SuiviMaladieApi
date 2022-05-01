<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreConsultationRequest;
use App\Http\Requests\UpdateConsultationRequest;
use App\Http\Resources\Admin\ConsultationResource;
use App\Models\Consultation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ConsultationApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('consultation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ConsultationResource(Consultation::with(['patient', 'medecin'])->get());
    }

    public function store(StoreConsultationRequest $request)
    {
        $consultation = Consultation::create($request->all());

        return (new ConsultationResource($consultation))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Consultation $consultation)
    {
        abort_if(Gate::denies('consultation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ConsultationResource($consultation->load(['patient', 'medecin']));
    }

    public function update(UpdateConsultationRequest $request, Consultation $consultation)
    {
        $consultation->update($request->all());

        return (new ConsultationResource($consultation))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Consultation $consultation)
    {
        abort_if(Gate::denies('consultation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $consultation->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

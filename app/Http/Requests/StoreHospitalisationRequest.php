<?php

namespace App\Http\Requests;

use App\Models\Hospitalisation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreHospitalisationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('hospitalisation_create');
    }

    public function rules()
    {
        return [
            'organe' => [
                'string',
                'nullable',
            ],
            'pathologie' => [
                'string',
                'nullable',
            ],
            'type' => [
                'string',
                'nullable',
            ],
        ];
    }
}

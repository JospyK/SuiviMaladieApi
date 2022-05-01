<?php

namespace App\Http\Requests;

use App\Models\Intervention;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInterventionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('intervention_create');
    }

    public function rules()
    {
        return [
            'type' => [
                'string',
                'nullable',
            ],
            'date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
        ];
    }
}

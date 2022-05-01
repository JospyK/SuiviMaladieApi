<?php

namespace App\Http\Requests;

use App\Models\Symptome;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSymptomeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('symptome_edit');
    }

    public function rules()
    {
        return [
            'nom' => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'maladies.*' => [
                'integer',
            ],
            'maladies' => [
                'array',
            ],
        ];
    }
}

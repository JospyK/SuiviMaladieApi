<?php

namespace App\Http\Requests;

use App\Models\Traitement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTraitementRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('traitement_edit');
    }

    public function rules()
    {
        return [
            'nom' => [
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

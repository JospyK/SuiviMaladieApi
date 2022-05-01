<?php

namespace App\Http\Requests;

use App\Models\Traitement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTraitementRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('traitement_create');
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

<?php

namespace App\Http\Requests;

use App\Models\ListeExaman;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateListeExamanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('liste_examan_edit');
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

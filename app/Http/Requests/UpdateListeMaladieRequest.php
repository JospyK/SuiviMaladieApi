<?php

namespace App\Http\Requests;

use App\Models\ListeMaladie;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateListeMaladieRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('liste_maladie_edit');
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
            'users.*' => [
                'integer',
            ],
            'users' => [
                'array',
            ],
        ];
    }
}

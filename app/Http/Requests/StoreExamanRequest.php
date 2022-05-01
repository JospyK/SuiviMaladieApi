<?php

namespace App\Http\Requests;

use App\Models\Examan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreExamanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('examan_create');
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
        ];
    }
}

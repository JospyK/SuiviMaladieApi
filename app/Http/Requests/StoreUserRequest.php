<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
                'unique:users',
            ],
            'password' => [
                'required',
            ],
            'date_naissance' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'sexe' => [
                'string',
                'nullable',
            ],
            'assurance_medicale' => [
                'string',
                'nullable',
            ],
            'code_assurance' => [
                'string',
                'nullable',
            ],
            'reference_medecin' => [
                'string',
                'nullable',
            ],
            'personne_a_prevenir' => [
                'string',
                'nullable',
            ],
            'telephone_personne_a_prevenir' => [
                'string',
                'nullable',
            ],
            'roles.*' => [
                'integer',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'examens.*' => [
                'integer',
            ],
            'examens' => [
                'array',
            ],
        ];
    }
}

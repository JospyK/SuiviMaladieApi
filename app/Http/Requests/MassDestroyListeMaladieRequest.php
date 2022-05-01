<?php

namespace App\Http\Requests;

use App\Models\ListeMaladie;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyListeMaladieRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('liste_maladie_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:liste_maladies,id',
        ];
    }
}

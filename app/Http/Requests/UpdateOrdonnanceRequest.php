<?php

namespace App\Http\Requests;

use App\Models\Ordonnance;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOrdonnanceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('ordonnance_edit');
    }

    public function rules()
    {
        return [];
    }
}

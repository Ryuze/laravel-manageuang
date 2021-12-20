<?php

namespace App\Http\Requests\Accounting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AccountingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'description' => 'required|max:255|string',
            'date' => 'required|date',
            'total' => 'required|numeric|min:1'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'total' => $this->toNumber($this->total)
        ]);
    }

    private function toNumber($total)
    {
        return (int)str_replace('.', '', substr($total, 4));
    }
}

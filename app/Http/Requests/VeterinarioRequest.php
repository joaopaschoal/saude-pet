<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeterinarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'crmv' => 'required|string|max:20|unique:veterinario,crmv' . (isset($this->veterinario) ? ',' . $this->veterinario->id : ''),
            'nome' => 'required|string|max:100',
            'nascimento' => 'nullable|date',
            'especialidade_id' => 'required|exists:especialidade,id',
        ];
    }
}

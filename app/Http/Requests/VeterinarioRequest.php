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
        $rules = [
            'crmv' => 'required|string|max:20|unique:veterinarios,crmv' . ($this->id ? ',' . $this->id : ''),
            'nome' => 'required|string|max:100',
            'nascimento' => 'nullable|date',
            'especialidade' => 'nullable|string|max:100',
        ];
    
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['id'] = 'required|integer|exists:veterinarios,id';
        }
    
        return $rules;
    }

    public function messages(): array
    {
        return [
            'crmv.unique' => 'Este CRMV já existe no banco de dados.',
            'crmv.string' => 'O crmv deve ser uma string.',
            'crmv.max' => 'O crmv não pode ter mais de :max caracteres.',
            'nome.required' => 'O nome é obrigatório.',
            'nome.string' => 'O nome deve ser uma string.',
            'nome.max' => 'O nome não pode ter mais de :max caracteres.',
            'nascimento.date' => 'A data de nascimento deve ser uma data válida.',
            'especialidade.string' => 'O nome deve ser uma string.',
            'especialidade.max' => 'O nome não pode ter mais de :max caracteres.',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
            'nome' => 'required|string|max:100',
            'nascimento' => 'nullable|date',
            'flg_castrado' => 'nullable|boolean',
        ];
    }

    /**
     * Modifica os dados de entrada antes da validação.
     */
    protected function prepareForValidation()
    {
        // Certifica-se de que `flg_castrado` sempre tenha um valor booleano
        $this->merge([
            'flg_castrado' => $this->has('flg_castrado') ? true : false,
        ]);
    }
}

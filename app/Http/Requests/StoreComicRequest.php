<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'description' => 'nullable',
            'thumb' => 'url|max:255',
            'price' => 'required|numeric',
            'series' => 'required|max:100',
            'sale_date' => 'date',
            'type' => 'required|max:20',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'thumb.url' => 'L\'immagine deve essere una url valida',
            'thumb.max' => 'L\'immagine deve avere massimo :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'series.required' => 'La serie è obbligatoria',
            'series.max' => 'La serie deve avere massimo :max caratteri',
            'sale_date.date' => 'La data di vendita deve essere una data valida',
            'type.required' => 'Il tipo è obbligatorio',
            'type.max' => 'Il tipo deve avere massimo :max caratteri',
        ];
    }
}

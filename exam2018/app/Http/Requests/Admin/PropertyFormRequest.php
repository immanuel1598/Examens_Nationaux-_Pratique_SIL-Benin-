<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        // Logique d'autorisation à implémenter selon les besoins de l'application
        return true; // Par défaut, autorise toutes les requêtes, à adapter en fonction des permissions
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        // Définir les règles de validation pour les données de la requête
        return [
            //'nom' => 'required|string|max:255',
            'title' => ['required','min8'],
            'description' => ['required','min8'],
            'surface' => ['required','integer','min8'],
            'rooms' => ['required','integer','min1'],
            'bedrooms' => ['required','integer','min0'],
            'floor' => ['required','integer','min0'],
            'price' => ['required','integer','min0'],
            'city' => ['required','min8'],
            'address' => ['required','min8'],
            'postal_code' => ['required','min8'],
            'sold' => ['required','boolean'],
           




            // Ajoutez d'autres règles de validation selon les champs de votre formulaire
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateLivreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows("book_edit");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     *
     *
     */

    public function rules(): array
    {
        return [
            "title" => "required",
            "author" => "required",
            "genre" => "required",
            "description" => "required",
            "publication_year" => "required",
            "total_copies" => "required",
            "available_copies" => "required",
        ];
    }
}

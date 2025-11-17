<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $article = $this->route('article');

        return [
            'title'   => ['required','string','min:3','max:150'],
            'slug'    => [
                'nullable','string','max:180',
                Rule::unique('articles','slug')->ignore($article)
            ],
            'excerpt' => ['nullable','string','max:255'],
            'content' => ['nullable','string'],
        ];
    }

    public function messages(): array
    {
        return [
            'slug.unique' => 'Ce slug est déjà pris par un autre article.',
        ];
    }
}

<?php

namespace App\Http\Requests\Auth\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'min:2' , 'max:20' , 'string'],
            'category' => ['required'],
            'is_publish' => ['required'],
            'file' => ['required', 'image', 'mimes:jpeg,png,PNG,jpg,gif,svg' ],
            'description' => ['required', 'min:10' , 'max:5000' , 'string'],
        ];
    }
}

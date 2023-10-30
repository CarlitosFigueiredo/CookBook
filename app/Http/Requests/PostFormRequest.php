<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            'title' => 'required|min:3',
            'body' => 'required|min:3',
            'excerpt' => 'required|min:3',
        ];
    }

    public function updateOrCreate(Post $post)
    {
        $post->user_id = 1;
        $post->title = $this->title;
        $post->body = $this->body;
        $post->excerpt = $this->excerpt;

        $post->save();
    }
}

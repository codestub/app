<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Pet;

class NewPetForm extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'breed' => 'required|string|min:1|max:30',
            'description' => 'required|string|min:1|max:100',
            'date_of_birth' => 'required|date_format:Y-m-d|before:now',
            'price' => 'required|integer|between:0,999999',
            'males' => 'required|integer|between:0,101',
            'females' => 'required|integer|between:0,101'
        ];
    }

    public function persist()
    {
        Pet::create([
            'breed' => request('breed'),
            'description' => request('description'),
            'date_of_birth' => request('date_of_birth'),
            'price' => request('price'),
            'males' => request('males'),
            'females' => request('females'),
            'user_id' => auth()->id(),
            'active' => 1
        ]);
    }
}

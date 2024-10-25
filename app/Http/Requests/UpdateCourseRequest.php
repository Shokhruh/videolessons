<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'field_id' => 'required',
            'for_whom' => 'required',
            'status' => 'required',
            'thumbnail' => 'file|mimes:jpg,png,jpeg|max:5120',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Kurs nomini kiriting!",
            'description.required' => "Kurs izohini(description) kiriting!",
            'for_whom.required' => "Kurs kimlar uchun? ekanligini kiriting!",
            'thumbnail.file' => 'Fayl yuklash majburiy!',
            'thumbnail.mimes' => 'Faqat jpg, png yoki jpeg fayllarni yuklashingiz mumkin.',
            'thumbnail.max' => 'Fayl hajmi 5MB dan oshmasligi kerak.',
        ];
    }
}

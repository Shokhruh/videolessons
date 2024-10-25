<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVideoRequest extends FormRequest
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
            'course_id' => 'required',
            'user_id' => 'required',
            'status' => 'required',
            'min' => 'required',
            'sec' => 'required',
            'video' => 'file|mimes:mp4,avi,mkv,wmv|max:151200',
            'thumbnail' => 'file|mimes:jpg,png,jpeg|max:5120',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Kurs nomini kiriting!",
            'course_id.required' => "Kurs yaratganingizga ishonch hosil qiling!",
            'thumbnail.file' => 'Yuklamoqchi bolgan rasmingiz fayl bolishi shart!',
            'thumbnail.mimes' => 'Faqat jpg, png yoki jpeg fayllarni yuklashingiz mumkin!',
            'thumbnail.max' => 'Rasm hajmi 5MB dan oshmasligi kerak!',
            'min.required' => 'Yuklayotgan videongizni faqatgina minut qismini kiriting!',
            'sec.required' => 'Yuklayotgan videongizni faqatgina sekund qismini kiriting!',
            'video.file' => 'Yuklamoqchi bolgan videongiz fayl bolishi shart!',
            'video.mimes' => 'Faqat mp4, avi, wmv yoki mkv fayllarni yuklashingiz mumkin!',
            'video.max' => 'Video hajmi 150MB dan oshmasligi kerak!',
        ];
    }
}

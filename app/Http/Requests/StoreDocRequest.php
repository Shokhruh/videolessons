<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocRequest extends FormRequest
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
            'user_id' => 'required',
            'video_id' => 'required',
            'status' => 'required',
            'file' => 'file|mimes:jpg,png,doc,docs,pdf|max:10240',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Fayl nomini kiriting!",
            'file.file' => 'Fayl yuklash majburiy!',
            'file.mimes' => 'Faqat jpg, png, doc, docs yoki pdf fayllarni yuklashingiz mumkin.',
            'file.max' => 'Fayl hajmi 10MB dan oshmasligi kerak.',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HelpRequest extends FormRequest
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
        $rules = [];
        $rules += ['title' => ['required','max:100']];
        $rules += ['first_name' => ['required','max:100']];
        $rules += ['last_name' => ['required','max:100']];
        $rules += ['email' => ['required','email','max:100']];
        $rules += ['phone' => ['required','digits_between:5,30']];
        $rules += ['company_name' => ['required','max:100']];
        $rules += ['company_size' => ['required']];
        $rules += ['agree' => ['required']];
        $rules += ['read' => ['required']];
        return $rules;
    }

    public function messages()
    {
       return [
        "title.required" => __('validation.title_required'),
        "first_name.required" => __('validation.first_name_required'),
        "first_name.max" => __('validation.first_name_max'),
        "last_name.required" => __('validation.last_name_required'),
        "last_name.max" => __('validation.last_name_max'),
        "email.required" => __('validation.email_required'),
        "email.email" => __('validation.email_email'),
        "email.max" => __('validation.email_max'),
        "phone.required" => __('validation.phone_required'),
        "phone.max" => __('validation.phone_max'),
        "company_name.required" => __('validation.company_name_required'),
        "company_name.max" => __('validation.company_name_max'),
        "company_size.required" => __('validation.company_size_required'),
        'agree.required' => __('site.agree_required'),
        'read.required' => __('site.read_required'),
       ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SliderRequest extends FormRequest
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

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $slider = $this->route()->parameter('slider');
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.title' => ['required','max:100', Rule::unique('slider_translations', 'title')->ignore($slider->id, 'slider_id')]];
                $rules += [$locale . '.top_header' => ['required','max:100']];
                $rules += [$locale . '.buttom_header' => ['required','max:100']];
                $rules += [$locale . '.goto' => ['required','max:100']];
            }//end of for each
           // $rules += ['image' => ['image','dimensions:width=1103,height=556']];
        }//end of if
        else{
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.title' => ['required','max:100', Rule::unique('slider_translations', 'title')]];
                $rules += [$locale . '.top_header' => ['required','max:100']];
                $rules += [$locale . '.buttom_header' => ['required','max:100']];
                $rules += [$locale . '.goto' => ['required','max:100']];
            }//end of for each
          //  $rules += ['image' => ['required','image','dimensions:width=1103,height=556']];
        }
         $rules += ['linkto' => ['required','max:100']];

        return $rules;
    }

    public function messages()
    {
       return [
        'en.title.required' => __('sliders.title_en_required'),
        'ar.title.required' => __('sliders.title_ar_required'),
        'en.title.unique' => __('sliders.name_en_unique'),
        'ar.title.unique' => __('sliders.name_ar_unique'),
        'en.title.max' => __('sliders.title_en_max'),
        'ar.title.max' => __('sliders.title_ar_max'),
        'en.top_header.required' => __('sliders.top_header_en_required'),
        'ar.top_header.required' => __('sliders.top_header_ar_required'),
        'en.top_header.max' => __('sliders.top_header_en_max'),
        'ar.top_header.max' => __('sliders.top_header_ar_max'),
        'en.buttom_header.required' => __('sliders.buttom_header_en_required'),
        'ar.buttom_header.required' => __('sliders.buttom_header_ar_required'),
        'en.buttom_header.max' => __('sliders.buttom_header_en_max'),
        'ar.buttom_header.max' => __('sliders.buttom_header_ar_max'),
        'linkto.required' => __('sliders.linkto_required'),
        'linkto.max' => __('sliders.linkto_max'),

        'en.goto.required' => __('sliders.goto_en_required'),
        'ar.goto.required' => __('sliders.goto_ar_required'),
        'en.goto.max' => __('sliders.goto_en_max'),
        'ar.goto.max' => __('sliders.goto_ar_max'),
       ];
    }
}

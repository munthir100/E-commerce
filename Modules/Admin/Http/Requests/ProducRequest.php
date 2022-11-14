<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProducRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'sku' => 'sometimes',
            'quantity' => 'required',
            'wheight' => 'sometimes',
            'short_description' => 'sometimes|max:20',
            'description' => 'sometimes',
            'price' => 'required',
            'cost' => 'sometimes',
            'discount' => 'sometimes',
            'on_store' => 'required',
            'category_id' => 'required:exists:categories,id',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}

<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'required',
            'sku' => 'required',
            'description' => 'nullable',
            'features' => 'nullable',
            'price' => 'required',
            'discounted_price' => 'nullable',
            'parent_category_id' => 'required',
            'child_category_id' => 'nullable',
            'color' => 'required|array',
            'product_length' => 'nullable',
            'product_weight' => 'nullable',
            'product_height' => 'nullable',
            'product_width' => 'nullable',
            'availability' => 'nullable|in:on,off'
        ];
    }
    protected function prepareForValidation()
    {
        // If 'availability' is not in the request, set its value to 'off'
        if (! $this->has('availability')) {
            $this->merge(['availability' => 'off']);
        }
    }
}

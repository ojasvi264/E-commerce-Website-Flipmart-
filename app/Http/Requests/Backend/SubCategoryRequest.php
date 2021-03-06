<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'category_id'=>'required|integer',
            'name' => 'max:191|string|required|unique:subcategories'.(request()->method()=="POST"?'':',name,'.$this->id),
            'rank' => 'required|integer',
            'slug' => 'max:191|string|required|unique:subcategories'.(request()->method()=="POST"?'':',slug,'.$this->id),
            'meta_keyword' => 'string|max:191',
            'meta_description' => 'string|max:191',
        ];
    }
    function messages()
    {
        return[
            'category_id.required'=>'Category id is required',
            'category_id.integer'=>'Category id must be integer type',

            'name.unique'=>'Name must be unique',
            'name.required'=>'Name field is required',
            'name.string'=>'Name field must be of String type',

            'rank.required'=>'Rank field is required',
            'rank.string'=>'Rank field must be of string type',

            'slug.unique'=>'Slug must be unique',
            'slug.required'=>'Slug field is required',
            'slug.string'=>'Slug field must be of String type',

            'meta_keyword.string'=>'Meta keyword must be of string type',
            'meta_description.string'=>'Meta description must be of string type',
        ];
    }
}

<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'director_id' => 'required', //director_id
            'employee_id' => 'required', // employee_id
            'title' => 'required', // title
            'description' => 'required', //description
            'status' => 'required', //status
            'work_time' =>'required', //work_time
            'month' => 'required', //month
            'year' => 'required' //year
        ];
    }
}

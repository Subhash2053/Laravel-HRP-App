<?php

namespace App\Modules\Vacancy\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyFormRequest extends FormRequest
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
    { switch ($this->method()) {

        case 'POST':
            return [
                'department_id' =>'required',
                'title' => 'required',
                'sort_order' => 'numeric|min:1',
            ];
        case 'PUT':
            return [
                'department_id' =>'required',
                'title' => 'required' ,
                'sort_order' => 'numeric|min:1',
            ];
        default:
            break;
    }
    }

}

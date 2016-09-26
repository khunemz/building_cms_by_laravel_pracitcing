<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DeleteUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->route('users') == auth()->user()->id) {
            return true;
        }
    }

    public function forbiddendResponse () {
      return redirect()->array_replace_recursive([
            'error' => 'You are not able to delete yourself !!'
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}

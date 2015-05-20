<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// abstract class Request extends FormRequest {
//
// 	//
//
// }

class createRequest extends FormRequest
{
	public function rules(){
		return [
			'title'   => 'required',
			'comment' => 'required',
		];
	}

	public function authorize(){
		return true;
	}
}

<?php namespace App\Http\Controllers;

// use \Input as Input;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller {

	public function upload(){

		if(Input::hasFile('file')){

			echo 'Uploaded';
			$file = Input::file('file');
			$file->move('uploads', $file->getClientOriginalName());
			echo '<img src="uploads/'. $file->getClientOriginalName() . '" />';
		}

	}
}

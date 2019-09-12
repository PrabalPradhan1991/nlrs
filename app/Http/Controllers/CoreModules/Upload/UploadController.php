<?php

namespace App\Http\Controllers\CoreModules\Upload;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    private $view   = 'core-modules.upload.backend.';
    private $frontend_view = 'core-modules.upload.frontend.';
    private $model = '\App\Http\Controllers\CoreModules\Upload\UploadModel';
    private $storage_folder = 'upload';

    //

    public function __construct() {
        parent::__construct();
    }

    public function getFrontendUpload() {
        $data = (new $this->model)->getUpload();
        return view($this->frontend_view.'upload')
                ->with('data', $data);
    }

    public function getUpload() {
        $data = (new $this->model)->getUpload();
        return view($this->view.'upload')
                ->with('data', $data);
    }

    public function postUpload() {
        $input = request()->all();
        $textarea = [];//['address', 'more_info', 'business_hours'];
        $data = $this->model::first();
        $data = is_null($data) ? (new $this->model) : $data;

        foreach($input['data'] as $property => $value) {

            $data->$property = in_array($property, $textarea) ? nl2br($value) : $value;
        }

        $data->save();

        session()->flash('success-msg', 'Details successfully updated');

        return redirect()->back();
    }

    
}

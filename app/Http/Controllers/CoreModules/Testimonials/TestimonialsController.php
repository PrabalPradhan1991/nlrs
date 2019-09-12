<?php

namespace App\Http\Controllers\CoreModules\Testimonials;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    private $view   = 'core-modules.testimonials.backend.';
    private $frontend_view = 'core-modules.testimonials.frontend.';
    private $model = '\App\Http\Controllers\CoreModules\Testimonials\TestimonialsModel';
    private $storage_folder = 'testimonials';

    //

    public function __construct() {
        parent::__construct();
    }

    public function getFrontendTestimonials() {
        $our_team = $this->model::orderBy('ordering', 'ASC')->get();

        return view($this->frontend_view.'testimonials')
                ->with('our_team', $our_team);
    }

    public function getListView() {
        $data = TestimonialsModel::orderBy('ordering', 'ASC')->get();

        return view()->make($this->view.'list')
                    ->with('data', $data);
    }

    public function getCreateView() {
        return view()->make($this->view.'create');
    }

    public function postCreateView() {
        $input = request()->all();

        $validator = \Validator::make($input['data'], (new $this->model)->getRule());

        if($validator->fails()) {
            session()->flash('friendly-error-msg', 'There are some validation errors');
            return redirect()->back()->withErrors($validator)
                                     ->withInput();
        } else {
            request()->file('data.asset')->store($this->storage_folder);
            $input['data']['asset'] = request()->file('data.asset')->hashName();
            $record = $this->model::create($input['data']);
            session()->flash('success-msg', 'Testimonials successfully created!');
            return redirect()->back();
        }
    }

    public function getEditView($id) {
        $data = $this->model::where('id', $id)->firstOrFail();

        return view()->make($this->view.'edit')
                    ->with('data', $data);
    }

    public function postEditView($id) {
        $data = $this->model::where('id', $id)->firstOrFail();
        $input = request()->all();

        $validator = \Validator::make($input['data'], (new $this->model)->getRule($id));

        if($validator->fails()) {
            session()->flash('friendly-error-msg', 'There are some validation errors');
            return redirect()->back()->withErrors($validator)
                                     ->withInput();
        } else {
            if(request()->hasFile('data.asset')) {
                request()->file('data.asset')->store($this->storage_folder);
                $input['data']['asset'] = request()->file('data.asset')->hashName();
            }
            $record = $this->model::where('id', $id)->update($input['data']);
            session()->flash('success-msg', 'Testimonials successfully edited!');
            return redirect()->back();
        }


    }

    public function postDeleteView($id) {
        $record = $this->model::where('id', $id)->first();
        $filename = $record->asset;
        $record->delete();
        try {
            @unlink(storage_path().'/'.'app/'.$this->storage_folder.'/'.$filename);
        } catch(\Exception $e) {
            //do nothing
        }
        session()->flash('success-msg', 'Testimonials successfully deleted');

        return redirect()->back();
    }
}

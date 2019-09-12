<?php

namespace App\Http\Controllers\CoreModules\Testimonials;

use Illuminate\Database\Eloquent\Model;

class TestimonialsModel extends Model
{
    protected $table = 'core_testimonials';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static $rule = [
    	//'feature_name' => ['required'],
    	//'slug' => ['required', 'unique:pages,slug'],
    	//'display_text' => ['required'],
        //'ordering'  =>  ['integer', 'min:0']
    ];

    public function getRule($id=NULL) {
    	$rule = [
    		'client'	=>	'required',
    		'rating'	=>	'required',
    		'testimonial'	=>	'',
    		'asset'	=>	['required', 'mimes:png,webp,jpeg'],
            //'description'   =>  ['required']
    	];

        if($id) {
            $rule['asset'] = ['mimes:png,webp,jpeg'];
        }

    	return $rule;
    }
}
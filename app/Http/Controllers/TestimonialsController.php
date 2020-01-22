<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
	private function getData() {
		$data = array();

		foreach (\App\Testimonials::where('approved', 1)->get() as $testimonial) {
			$testimonial_data = array();
			$testimonial_data['name'] = $testimonial->name;
			$testimonial_data['description'] = $testimonial->description;
			$testimonial_data['created_at'] = substr($testimonial->created_at, 0, 10);
			$testimonial_data['id'] = $testimonial->id;
			array_push($data, $testimonial_data);
		}

		$data = array_reverse($data);
		return $data;
	}

	public function index()
	{
		return view('home.about.testimonials', ['data' => $this->getData()]);
	}

    public function new(Request $request)
    {
    	$name = 'Anonymous';
    	$description = '';

    	if (isset($request->name)) {
    		if ($request->name != '')
    			$name = htmlspecialchars($request->name);
    	}

    	if (isset($request->description))
    		$description = htmlspecialchars($request->description);

    	$testimonial = new \App\Testimonials;
    	$testimonial->name = $name;
    	$testimonial->approved = 0;
    	$testimonial->description = $description;
    	$testimonial->save();

    	return view('home.about.testimonials', ['status' => '1', 'data' => $this->getData()]);
    }

    public function delete($id)
    {
    	return view('home.about.testimonials', ['check_delete' => $id, 'data' => $this->getData()]);
    }

    public function delete_confirm($id)
    {
    	$testimonial = \App\Testimonials::where('id', $id)->firstOrFail();
    	$testimonial->delete();

    	return view('home.about.testimonials', ['deleted' => '1', 'data' => $this->getData()]);
    }
}

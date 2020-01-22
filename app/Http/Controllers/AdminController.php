<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    private function getTestimonialData() {
        $t_data = array();

        foreach (\App\Testimonials::where('approved', 0)->get() as $testimonial) {
            $testimonial_data = array();
            $testimonial_data['name'] = $testimonial->name;
            $testimonial_data['description'] = $testimonial->description;
            $testimonial_data['created_at'] = substr($testimonial->created_at, 0, 10);
            $testimonial_data['id'] = $testimonial->id;
            array_push($t_data, $testimonial_data);
        }

        return $t_data;
    }

    private function getRequestData() {
        $r_data = array();

        foreach (\App\QuoteRequest::where('seen', 0)->get() as $request) {
            $request_data = array();
            $request_data['id'] = $request->id;
            $request_data['name'] = $request->name;
            $request_data['created_at'] = $request->created_at;
            $request_data['auth_code'] = $request->auth_code;

            array_push($r_data, $request_data);
        }

        return $r_data;
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $t_data = $this->getTestimonialData();
        $r_data = $this->getRequestData();

        return view('admin.home', [ 'testimonial_data' => $t_data, 'request_data' => $r_data ]);
    }

    public function delete_testimonial($id) 
    {
        $testimonial = \App\Testimonials::where('id', $id)->firstOrFail();
        $testimonial->delete();

        $t_data = $this->getTestimonialData();
        $r_data = $this->getRequestData();

        return view('admin.home', [ 'testimonial_deleted' => '1', 
            'testimonial_data' => $t_data,
            'request_data' => $r_data ]);
    }

    public function approve_testimonial($id)
    {
        $testimonial = \App\Testimonials::where('id', $id)->firstOrFail();
        $testimonial->approved = 1;
        $testimonial->save();

        $t_data = $this->getTestimonialData();
        $r_data = $this->getRequestData();

        return view('admin.home', [ 'testimonial_approved' => '1', 
            'testimonial_data' => $t_data,
            'request_data' => $r_data ]);
    }
}

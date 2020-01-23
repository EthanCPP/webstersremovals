<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteRequestController extends Controller
{
	private $data = [
    		'q_name' => '',
    		'q_phone_number' => '',
    		'q_email_address' => '',
    		'q_property_type' => '2',
    		'q_moving_from' => '',
    		'q_post_code_from' => '',
    		'q_moving_to' => '',
    		'q_post_code_to' => '',
    		'q_parking_dist' => '',
    		'q_lounge_sofa' => '',
    		'q_lounge_armchair' => '',
    		'q_lounge_bookcase' => '',
    		'q_lounge_coffee_table' => '',
    		'q_lounge_nest_of_tables' => '',
    		'q_lounge_lamp' => '',
    		'q_lounge_cabinet' => '',
    		'q_lounge_music_system' => '',
    		'q_lounge_television' => '',
    		'q_lounge_rugs' => '',
    		'q_lounge_pictures' => '',
    		'q_lounge_boxes_packed' => '',
    		'q_lounge_boxes' => '',
    		'q_dining_cabinet' => '',
    		'q_dining_dresser' => '',
    		'q_dining_desk' => '',
    		'q_dining_bureau' => '',
    		'q_dining_table' => '',
    		'q_dining_chairs' => '',
    		'q_dining_sideboard' => '',
    		'q_dining_piano' => '',
    		'q_dining_cabinet_corner' => '',
    		'q_dining_bookcase' => '',
    		'q_dining_chairs_easy' => '',
    		'q_dining_pictures' => '',
    		'q_dining_boxes_packed' => '',
    		'q_dining_boxes' => '',
    		'q_kitchen_microwave' => '',
    		'q_kitchen_fridge_freezer' => '',
    		'q_kitchen_washing_machine' => '',
    		'q_kitchen_dryer' => '',
    		'q_kitchen_dishwasher' => '',
    		'q_kitchen_fridge' => '',
    		'q_kitchen_freezer' => '',
    		'q_kitchen_chest_freezer' => '',
    		'q_kitchen_table' => '',
    		'q_kitchen_chairs' => '',
    		'q_kitchen_dresser' => '',
    		'q_kitchen_boxes_packed' => '',
    		'q_kitchen_boxes' => '',
    		'q_cons_sofa' => '',
    		'q_cons_armchairs' => '',
    		'q_cons_bookcase' => '',
    		'q_cons_coffee_table' => '',
    		'q_cons_television' => '',
    		'q_cons_boxes_packed' => '',
    		'q_cons_boxes' => '',
    		'q_hall_table' => '',
    		'q_hall_bookcase' => '',
    		'q_hall_trunk' => '',
    		'q_hall_rugs' => '',
    		'q_hall_pictures' => '',
    		'q_hall_boxes_packed' => '',
    		'q_hall_boxes' => '',
    		'q_bed1_wardrobe_single' => '',
    		'q_bed1_wardrobe_double' => '',
    		'q_bed1_bed_double' => '',
    		'q_bed1_bed_single' => '',
    		'q_bed1_chest' => '',
    		'q_bed1_dressing' => '',
    		'q_bed1_ottoman' => '',
    		'q_bed1_tallboy' => '',
    		'q_bed1_computer_desk' => '',
    		'q_bed1_television' => '',
    		'q_bed1_bookcase' => '',
    		'q_bed1_boxes' => '',
    		'q_bed1_wardrobe_cartons' => '',
    		'q_bed2_wardrobe_single' => '',
    		'q_bed2_wardrobe_double' => '',
    		'q_bed2_bed_double' => '',
    		'q_bed2_bed_single' => '',
    		'q_bed2_chest' => '',
    		'q_bed2_dressing' => '',
    		'q_bed2_ottoman' => '',
    		'q_bed2_tallboy' => '',
    		'q_bed2_computer_desk' => '',
    		'q_bed2_television' => '',
    		'q_bed2_bookcase' => '',
    		'q_bed2_boxes' => '',
    		'q_bed2_wardrobe_cartons' => '',
    		'q_bed3_wardrobe_single' => '',
    		'q_bed3_wardrobe_double' => '',
    		'q_bed3_bed_double' => '',
    		'q_bed3_bed_single' => '',
    		'q_bed3_chest' => '',
    		'q_bed3_dressing' => '',
    		'q_bed3_ottoman' => '',
    		'q_bed3_tallboy' => '',
    		'q_bed3_computer_desk' => '',
    		'q_bed3_television' => '',
    		'q_bed3_bookcase' => '',
    		'q_bed3_boxes' => '',
    		'q_bed3_wardrobe_cartons' => '',
    		'q_bed4_wardrobe_single' => '',
    		'q_bed4_wardrobe_double' => '',
    		'q_bed4_bed_double' => '',
    		'q_bed4_bed_single' => '',
    		'q_bed4_chest' => '',
    		'q_bed4_dressing' => '',
    		'q_bed4_ottoman' => '',
    		'q_bed4_tallboy' => '',
    		'q_bed4_computer_desk' => '',
    		'q_bed4_television' => '',
    		'q_bed4_bookcase' => '',
    		'q_bed4_boxes' => '',
    		'q_bed4_wardrobe_cartons' => '',
    		'q_garage_tool_boxes' => '',
    		'q_garage_workbench' => '',
    		'q_garage_racking' => '',
    		'q_garage_timber' => '',
    		'q_garage_cabinets' => '',
    		'q_garage_bicycles' => '',
    		'q_garage_ladders' => '',
    		'q_garage_step_ladders' => '',
    		'q_garden_mower' => '',
    		'q_garden_strimmer' => '',
    		'q_garden_roller' => '',
    		'q_garden_wheel_barrow' => '',
    		'q_garden_dustbins' => '',
    		'q_garden_tools' => '',
    		'q_garden_bench' => '',
    		'q_garden_bbq' => '',
    		'q_garden_tables' => '',
    		'q_garden_chairs' => '',
    		'q_garden_loungers' => '',
    		'q_garden_swing' => '',
    		'q_garden_pots_large' => '',
    		'q_garden_pots_small' => '',
    		'q_garden_ornaments' => '',
    		'q_garden_other' => '',
    		'q_loft_contents' => '',
    		'q_cupboard_contents' => '',
    		'sent', '0',
    		'viewing', '0'
    	];

    public function index() 
    {
    	return view('home.request-a-quote', $this->data);
    }

    public function submit(Request $request)
    {
    	$auth_code = hash("sha1", rand() . rand());
    	$quote_request = new \App\QuoteRequest;
    	$quote_request->name = $request->q_name;
    	$quote_request->phone_number = $request->q_phone_number;
    	$quote_request->email_address = $request->q_email_address;
    	$quote_request->property_type = $request->q_property_type;
    	$quote_request->moving_from = $request->q_moving_from;
    	$quote_request->post_code_from = $request->q_post_code_from;
    	$quote_request->moving_to = $request->q_moving_to;
    	$quote_request->post_code_to = $request->q_post_code_to;
    	$quote_request->parking_dist = $request->q_parking_dist;
    	$quote_request->lounge_sofa = $request->q_lounge_sofa;
    	$quote_request->lounge_armchair = $request->q_lounge_armchair;
    	$quote_request->lounge_bookcase = $request->q_lounge_bookcase;
    	$quote_request->lounge_coffee_table = $request->q_lounge_coffee_table;
    	$quote_request->lounge_nest_of_tables = $request->q_lounge_nest_of_tables;
    	$quote_request->lounge_lamp = $request->q_lounge_lamp;
    	$quote_request->lounge_cabinet = $request->q_lounge_cabinet;
    	$quote_request->lounge_music_system = $request->q_lounge_music_system;
    	$quote_request->lounge_television = $request->q_lounge_television;
    	$quote_request->lounge_rugs = $request->q_lounge_rugs;
    	$quote_request->lounge_pictures = $request->q_lounge_pictures;
    	$quote_request->lounge_boxes_packed = $request->q_lounge_boxes_packed;
    	$quote_request->lounge_boxes = $request->q_lounge_boxes;
    	$quote_request->dining_cabinet = $request->q_dining_cabinet;
    	$quote_request->dining_dresser = $request->q_dining_dresser;
    	$quote_request->dining_desk = $request->q_dining_desk;
    	$quote_request->dining_bureau = $request->q_dining_bureau;
    	$quote_request->dining_table = $request->q_dining_table;
    	$quote_request->dining_chairs = $request->q_dining_chairs;
    	$quote_request->dining_sideboard = $request->q_dining_sideboard;
    	$quote_request->dining_piano = $request->q_dining_piano;
    	$quote_request->dining_cabinet_corner = $request->q_dining_cabinet_corner;
    	$quote_request->dining_bookcase = $request->q_dining_bookcase;
    	$quote_request->dining_chairs_easy = $request->q_dining_chairs_easy;
    	$quote_request->dining_pictures = $request->q_dining_pictures;
    	$quote_request->dining_boxes_packed = $request->q_dining_boxes_packed;
    	$quote_request->dining_boxes = $request->q_dining_boxes;
    	$quote_request->kitchen_microwave = $request->q_kitchen_microwave;
    	$quote_request->kitchen_fridge_freezer = $request->q_kitchen_fridge_freezer;
    	$quote_request->kitchen_washing_machine = $request->q_kitchen_washing_machine;
    	$quote_request->kitchen_dryer = $request->kitchen_dryer;
    	$quote_request->kitchen_dishwasher = $request->q_kitchen_dishwasher;
    	$quote_request->kitchen_fridge = $request->q_kitchen_fridge;
    	$quote_request->kitchen_freezer = $request->q_kitchen_freezer;
    	$quote_request->kitchen_chest_freezer = $request->q_kitchen_chest_freezer;
    	$quote_request->kitchen_table = $request->q_kitchen_table;
    	$quote_request->kitchen_chairs = $request->q_kitchen_chairs;
    	$quote_request->kitchen_dresser = $request->q_kitchen_dresser;
    	$quote_request->kitchen_boxes_packed = $request->q_kitchen_boxes_packed;
    	$quote_request->kitchen_boxes = $request->q_kitchen_boxes;
    	$quote_request->cons_sofa = $request->q_cons_sofa;
    	$quote_request->cons_armchairs = $request->q_cons_armchairs;
    	$quote_request->cons_bookcase = $request->q_cons_bookcase;
    	$quote_request->cons_coffee_table = $request->q_cons_coffee_table;
    	$quote_request->cons_television = $request->q_cons_television;
    	$quote_request->cons_boxes_packed = $request->q_cons_boxes_packed;
    	$quote_request->cons_boxes = $request->q_cons_boxes;
    	$quote_request->hall_table = $request->q_hall_table;
    	$quote_request->hall_bookcase = $request->q_hall_bookcase;
    	$quote_request->hall_trunk = $request->q_hall_trunk;
    	$quote_request->hall_rugs = $request->q_hall_rugs;
    	$quote_request->hall_pictures = $request->q_hall_pictures;
    	$quote_request->hall_boxes_packed = $request->q_hall_boxes_packed;
    	$quote_request->hall_boxes = $request->q_hall_boxes;
    	$quote_request->bed1_wardrobe_single = $request->q_bed1_wardrobe_single;
    	$quote_request->bed1_wardrobe_double = $request->q_bed1_wardrobe_double;
    	$quote_request->bed1_bed_double = $request->q_bed1_bed_double;
    	$quote_request->bed1_bed_single = $request->q_bed1_bed_single;
    	$quote_request->bed1_chest = $request->q_bed1_chest;
    	$quote_request->bed1_dressing = $request->q_bed1_dressing;
    	$quote_request->bed1_ottoman = $request->q_bed1_ottoman;
    	$quote_request->bed1_tallboy = $request->q_bed1_tallboy;
    	$quote_request->bed1_computer_desk = $request->q_bed1_computer_desk;
    	$quote_request->bed1_television = $request->q_bed1_television;
    	$quote_request->bed1_bookcase = $request->q_bed1_bookcase;
    	$quote_request->bed1_boxes = $request->q_bed1_boxes;
    	$quote_request->bed1_wardrobe_cartons = $request->q_bed1_wardrobe_cartons;
    	$quote_request->bed2_wardrobe_single = $request->q_bed2_wardrobe_single;
    	$quote_request->bed2_wardrobe_double = $request->q_bed2_wardrobe_double;
    	$quote_request->bed2_bed_double = $request->q_bed2_bed_double;
    	$quote_request->bed2_bed_single = $request->q_bed2_bed_single;
    	$quote_request->bed2_chest = $request->q_bed2_chest;
    	$quote_request->bed2_dressing = $request->q_bed2_dressing;
    	$quote_request->bed2_ottoman = $request->q_bed2_ottoman;
    	$quote_request->bed2_tallboy = $request->q_bed2_tallboy;
    	$quote_request->bed2_computer_desk = $request->q_bed2_computer_desk;
    	$quote_request->bed2_television = $request->q_bed2_television;
    	$quote_request->bed2_bookcase = $request->q_bed2_bookcase;
    	$quote_request->bed2_boxes = $request->q_bed2_boxes;
    	$quote_request->bed2_wardrobe_cartons = $request->q_bed2_wardrobe_cartons;
    	$quote_request->bed3_wardrobe_single = $request->q_bed3_wardrobe_single;
    	$quote_request->bed3_wardrobe_double = $request->q_bed3_wardrobe_double;
    	$quote_request->bed3_bed_double = $request->q_bed3_bed_double;
    	$quote_request->bed3_bed_single = $request->q_bed3_bed_single;
    	$quote_request->bed3_chest = $request->q_bed3_chest;
    	$quote_request->bed3_dressing = $request->q_bed3_dressing;
    	$quote_request->bed3_ottoman = $request->q_bed3_ottoman;
    	$quote_request->bed3_tallboy = $request->q_bed3_tallboy;
    	$quote_request->bed3_computer_desk = $request->q_bed3_computer_desk;
    	$quote_request->bed3_television = $request->q_bed3_television;
    	$quote_request->bed3_bookcase = $request->q_bed3_bookcase;
    	$quote_request->bed3_boxes = $request->q_bed3_boxes;
    	$quote_request->bed3_wardrobe_cartons = $request->q_bed3_wardrobe_cartons;
    	$quote_request->bed4_wardrobe_single = $request->q_bed4_wardrobe_single;
    	$quote_request->bed4_wardrobe_double = $request->q_bed4_wardrobe_double;
    	$quote_request->bed4_bed_double = $request->q_bed4_bed_double;
    	$quote_request->bed4_bed_single = $request->q_bed4_bed_single;
    	$quote_request->bed4_chest = $request->q_bed4_chest;
    	$quote_request->bed4_dressing = $request->q_bed4_dressing;
    	$quote_request->bed4_ottoman = $request->q_bed4_ottoman;
    	$quote_request->bed4_tallboy = $request->q_bed4_tallboy;
    	$quote_request->bed4_computer_desk = $request->q_bed4_computer_desk;
    	$quote_request->bed4_television = $request->q_bed4_television;
    	$quote_request->bed4_bookcase = $request->q_bed4_bookcase;
    	$quote_request->bed4_boxes = $request->q_bed4_boxes;
    	$quote_request->bed4_wardrobe_cartons = $request->q_bed4_wardrobe_cartons;
    	$quote_request->garage_tool_boxes = $request->q_garage_tool_boxes;
    	$quote_request->garage_workbench = $request->q_garage_workbench;
    	$quote_request->garage_racking = $request->q_garage_racking;
    	$quote_request->garage_timber = $request->q_garage_timber;
    	$quote_request->garage_cabinets = $request->q_garage_cabinets;
    	$quote_request->garage_bicycles = $request->q_garage_bicycles;
    	$quote_request->garage_ladders = $request->q_garage_ladders;
    	$quote_request->garage_step_ladders = $request->q_garage_step_ladders;
    	$quote_request->garden_mower = $request->q_garden_mower;
    	$quote_request->garden_strimmer = $request->q_garden_strimmer;
    	$quote_request->garden_roller = $request->q_garden_roller;
    	$quote_request->garden_wheel_barrow = $request->q_garden_wheel_barrow;
    	$quote_request->garden_dustbins = $request->q_garden_dustbins;
    	$quote_request->garden_tools = $request->q_garden_tools;
    	$quote_request->garden_bench = $request->q_garden_bench;
    	$quote_request->garden_bbq = $request->q_garden_bbq;
    	$quote_request->garden_tables = $request->q_garden_tables;
    	$quote_request->garden_chairs = $request->q_garden_chairs;
    	$quote_request->garden_loungers = $request->q_garden_loungers;
    	$quote_request->garden_swing = $request->q_garden_swing;
    	$quote_request->garden_pots_large = $request->q_garden_pots_large;
    	$quote_request->garden_pots_small = $request->q_garden_pots_small;
    	$quote_request->garden_ornaments = $request->q_garden_ornaments;
    	$quote_request->garden_other = $request->q_garden_other;
    	$quote_request->loft_contents = $request->q_loft_contents;
    	$quote_request->cupboard_contents = $request->q_cupboard_contents;
    	$quote_request->auth_code = $auth_code;
    	$quote_request->seen = 0;
    	$quote_request->save();
    	$this->data['sent'] = '1';

    	mail('webstersremovals@btconnect.com', 'Request a Quote', 'Someone has requested a quote. Go here to view it: http://webstersremovals.co.uk/request-a-quote/view/' . $quote_request->auth_code . '/' . $quote_request->id);

    	return $this->index();
    }

    public function view($auth, $id)
    {
    	$quote = \App\QuoteRequest::where([
    		['id', $id],
    		['auth_code', $auth]
    	])->firstOrFail();

    	$this->data['q_name'] = $quote->name;
    	$this->data['q_phone_number'] = $quote->phone_number;
    	$this->data['q_email_address'] = $quote->email_address;
    	$this->data['q_property_type'] = $quote->property_type;
    	$this->data['q_moving_from'] = $quote->moving_from;
    	$this->data['q_post_code_from'] = $quote->post_code_from;
    	$this->data['q_moving_to'] = $quote->moving_to;
    	$this->data['q_post_code_to'] = $quote->post_code_to;
    	$this->data['q_parking_dist'] = $quote->parking_dist;
    	$this->data['q_lounge_sofa'] = $quote->lounge_sofa;
    	$this->data['q_lounge_armchair'] = $quote->lounge_armchair;
    	$this->data['q_lounge_bookcase'] = $quote->lounge_bookcase;
    	$this->data['q_lounge_coffee_table'] = $quote->lounge_coffee_table;
    	$this->data['q_lounge_nest_of_tables'] = $quote->lounge_nest_of_tables;
    	$this->data['q_lounge_lamp'] = $quote->lounge_lamp;
    	$this->data['q_lounge_cabinet'] = $quote->lounge_cabinet;
    	$this->data['q_lounge_music_system'] = $quote->lounge_music_system;
    	$this->data['q_lounge_television'] = $quote->lounge_television;
    	$this->data['q_lounge_rugs'] = $quote->lounge_rugs;
    	$this->data['q_lounge_pictures'] = $quote->lounge_pictures;
    	$this->data['q_lounge_boxes_packed'] = $quote->lounge_boxes_packed;
    	$this->data['q_lounge_boxes'] = $quote->lounge_boxes;
    	$this->data['q_dining_cabinet'] = $quote->dining_cabinet;
    	$this->data['q_dining_dresser'] = $quote->dining_dresser;
    	$this->data['q_dining_desk'] = $quote->dining_desk;
    	$this->data['q_dining_bureau'] = $quote->dining_bureau;
    	$this->data['q_dining_table'] = $quote->dining_table;
    	$this->data['q_dining_chairs'] = $quote->dining_chairs;
    	$this->data['q_dining_sideboard'] = $quote->dining_sideboard;
    	$this->data['q_dining_piano'] = $quote->dining_piano;
    	$this->data['q_dining_cabinet_corner'] = $quote->dining_cabinet_corner;
    	$this->data['q_dining_bookcase'] = $quote->dining_bookcase;
    	$this->data['q_dining_chairs_easy'] = $quote->dining_chairs_easy;
    	$this->data['q_dining_pictures'] = $quote->dining_pictures;
    	$this->data['q_dining_boxes_packed'] = $quote->dining_boxes_packed;
    	$this->data['q_dining_boxes'] = $quote->dining_boxes;
    	$this->data['q_kitchen_microwave'] = $quote->kitchen_microwave;
    	$this->data['q_kitchen_fridge_freezer'] = $quote->kitchen_fridge_freezer;
    	$this->data['q_kitchen_washing_machine'] = $quote->kitchen_washing_machine;
    	$this->data['q_kitchen_dryer'] = $quote->kitchen_dryer;
    	$this->data['q_kitchen_dishwasher'] = $quote->kitchen_dishwasher;
    	$this->data['q_kitchen_fridge'] = $quote->kitchen_fridge;
    	$this->data['q_kitchen_freezer'] = $quote->kitchen_freezer;
    	$this->data['q_kitchen_chest_freezer'] = $quote->kitchen_chest_freezer;
    	$this->data['q_kitchen_table'] = $quote->kitchen_table;
    	$this->data['q_kitchen_chairs'] = $quote->kitchen_chairs;
    	$this->data['q_kitchen_dresser'] = $quote->kitchen_dresser;
    	$this->data['q_kitchen_boxes_packed'] = $quote->kitchen_boxes_packed;
    	$this->data['q_kitchen_boxes'] = $quote->kitchen_boxes;
    	$this->data['q_cons_sofa'] = $quote->cons_sofa;
    	$this->data['q_cons_armchairs'] = $quote->cons_armchairs;
    	$this->data['q_cons_bookcase'] = $quote->cons_bookcase;
    	$this->data['q_cons_coffee_table'] = $quote->cons_coffee_table;
    	$this->data['q_cons_television'] = $quote->cons_television;
    	$this->data['q_cons_boxes_packed'] = $quote->cons_boxes_packed;
    	$this->data['q_cons_boxes'] = $quote->cons_boxes;
    	$this->data['q_hall_table'] = $quote->hall_table;
    	$this->data['q_hall_bookcase'] = $quote->hall_bookcase;
    	$this->data['q_hall_trunk'] = $quote->hall_trunk;
    	$this->data['q_hall_rugs'] = $quote->hall_rugs;
    	$this->data['q_hall_pictures'] = $quote->hall_pictures;
    	$this->data['q_hall_boxes_packed'] = $quote->hall_boxes_packed;
    	$this->data['q_hall_boxes'] = $quote->hall_boxes;
    	$this->data['q_bed1_wardrobe_single'] = $quote->bed1_wardrobe_single;
    	$this->data['q_bed1_wardrobe_double'] = $quote->bed1_wardrobe_double;
    	$this->data['q_bed1_bed_double'] = $quote->bed1_bed_double;
    	$this->data['q_bed1_bed_single'] = $quote->bed1_bed_single;
    	$this->data['q_bed1_chest'] = $quote->bed1_chest;
    	$this->data['q_bed1_dressing'] = $quote->bed1_dressing;
    	$this->data['q_bed1_ottoman'] = $quote->bed1_ottoman;
    	$this->data['q_bed1_tallboy'] = $quote->bed1_tallboy;
    	$this->data['q_bed1_computer_desk'] = $quote->bed1_computer_desk;
    	$this->data['q_bed1_television'] = $quote->bed1_television;
    	$this->data['q_bed1_bookcase'] = $quote->bed1_bookcase;
    	$this->data['q_bed1_boxes'] = $quote->bed1_boxes;
    	$this->data['q_bed1_wardrobe_cartons'] = $quote->bed1_wardrobe_cartons;
    	$this->data['q_bed2_wardrobe_single'] = $quote->bed2_wardrobe_single;
    	$this->data['q_bed2_wardrobe_double'] = $quote->bed2_wardrobe_double;
    	$this->data['q_bed2_bed_double'] = $quote->bed2_bed_double;
    	$this->data['q_bed2_bed_single'] = $quote->bed2_bed_single;
    	$this->data['q_bed2_chest'] = $quote->bed2_chest;
    	$this->data['q_bed2_dressing'] = $quote->bed2_dressing;
    	$this->data['q_bed2_ottoman'] = $quote->bed2_ottoman;
    	$this->data['q_bed2_tallboy'] = $quote->bed2_tallboy;
    	$this->data['q_bed2_computer_desk'] = $quote->bed2_computer_desk;
    	$this->data['q_bed2_television'] = $quote->bed2_television;
    	$this->data['q_bed2_bookcase'] = $quote->bed2_bookcase;
    	$this->data['q_bed2_boxes'] = $quote->bed2_boxes;
    	$this->data['q_bed2_wardrobe_cartons'] = $quote->bed2_wardrobe_cartons;
    	$this->data['q_bed3_wardrobe_single'] = $quote->bed3_wardrobe_single;
    	$this->data['q_bed3_wardrobe_double'] = $quote->bed3_wardrobe_double;
    	$this->data['q_bed3_bed_double'] = $quote->bed3_bed_double;
    	$this->data['q_bed3_bed_single'] = $quote->bed3_bed_single;
    	$this->data['q_bed3_chest'] = $quote->bed3_chest;
    	$this->data['q_bed3_dressing'] = $quote->bed3_dressing;
    	$this->data['q_bed3_ottoman'] = $quote->bed3_ottoman;
    	$this->data['q_bed3_tallboy'] = $quote->bed3_tallboy;
    	$this->data['q_bed3_computer_desk'] = $quote->bed3_computer_desk;
    	$this->data['q_bed3_television'] = $quote->bed3_television;
    	$this->data['q_bed3_bookcase'] = $quote->bed3_bookcase;
    	$this->data['q_bed3_boxes'] = $quote->bed3_boxes;
    	$this->data['q_bed3_wardrobe_cartons'] = $quote->bed3_wardrobe_cartons;
    	$this->data['q_bed4_wardrobe_single'] = $quote->bed4_wardrobe_single;
    	$this->data['q_bed4_wardrobe_double'] = $quote->bed4_wardrobe_double;
    	$this->data['q_bed4_bed_double'] = $quote->bed4_bed_double;
    	$this->data['q_bed4_bed_single'] = $quote->bed4_bed_single;
    	$this->data['q_bed4_chest'] = $quote->bed4_chest;
    	$this->data['q_bed4_dressing'] = $quote->bed4_dressing;
    	$this->data['q_bed4_ottoman'] = $quote->bed4_ottoman;
    	$this->data['q_bed4_tallboy'] = $quote->bed4_tallboy;
    	$this->data['q_bed4_computer_desk'] = $quote->bed4_computer_desk;
    	$this->data['q_bed4_television'] = $quote->bed4_television;
    	$this->data['q_bed4_bookcase'] = $quote->bed4_bookcase;
    	$this->data['q_bed4_boxes'] = $quote->bed4_boxes;
    	$this->data['q_bed4_wardrobe_cartons'] = $quote->bed4_wardrobe_cartons;
    	$this->data['q_garage_tool_boxes'] = $quote->garage_tool_boxes;
    	$this->data['q_garage_workbench'] = $quote->garage_workbench;
    	$this->data['q_garage_racking'] = $quote->garage_racking;
    	$this->data['q_garage_timber'] = $quote->garage_timber;
    	$this->data['q_garage_cabinets'] = $quote->garage_cabinets;
    	$this->data['q_garage_bicycles'] = $quote->garage_bicycles;
    	$this->data['q_garage_ladders'] = $quote->garage_ladders;
    	$this->data['q_garage_step_ladders'] = $quote->garage_step_ladders;
    	$this->data['q_garden_mower'] = $quote->garden_mower;
    	$this->data['q_garden_strimmer'] = $quote->garden_strimmer;
    	$this->data['q_garden_roller'] = $quote->garden_roller;
    	$this->data['q_garden_wheel_barrow'] = $quote->garden_wheel_barrow;
    	$this->data['q_garden_dustbins'] = $quote->garden_dustbins;
    	$this->data['q_garden_tools'] = $quote->garden_tools;
    	$this->data['q_garden_bench'] = $quote->garden_bench;
    	$this->data['q_garden_bbq'] = $quote->garden_bbq;
    	$this->data['q_garden_tables'] = $quote->garden_tables;
    	$this->data['q_garden_chairs'] = $quote->garden_chairs;
    	$this->data['q_garden_loungers'] = $quote->garden_loungers;
    	$this->data['q_garden_swing'] = $quote->garden_swing;
    	$this->data['q_garden_pots_large'] = $quote->garden_pots_large;
    	$this->data['q_garden_pots_small'] = $quote->garden_pots_small;
    	$this->data['q_garden_ornaments'] = $quote->garden_ornaments;
    	$this->data['q_garden_other'] = $quote->garden_other;
    	$this->data['q_loft_contents'] = $quote->loft_contents;
    	$this->data['q_cupboard_contents'] = $quote->cupboard_contents;
    	$this->data['viewing'] = '1';

    	return $this->index();

    }
}
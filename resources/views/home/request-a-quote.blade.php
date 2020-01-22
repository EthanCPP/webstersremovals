@extends('home.layout')

@section('page_title')
	Request a Quote | Websters Removals & Storage
@endsection

@section('content')
	<h3>Request a Quote</h3>
	<p>Below you will find a house contents form which you can complete online or download to complete later and email/post to us. You may write additional comments in the quantity box. Required fields are marked with an asterisk (*)</p>
	<a href="/contentsform.docx" target="_blank" class="btn btn-secondary">Download Form</a><br /><br />
	<form action="" method="post">
		@csrf
		<h4>About You</h4>
		<div class="row">
			<div class="form-group col-md-4">
				<label><span style="color: red;">*</span>Name</label>
				<input required type="text" class="form-control" name="q_name" value="{{ $q_name }}" />
			</div>
			<div class="form-group col-md-4">
				<label><span style="color: red;">*</span>Phone Number</label>
				<input required type="text" class="form-control" name="q_phone_number" value="{{ $q_phone_number }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Email Address</label>
				<input type="text" class="form-control" name="q_email_address" value="{{ $q_email_address }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label><span style="color: red;">*</span>Property Type</label>
				<select class="form-control" name="q_property_type">
					<option autocomplete="off" value="1" {{ $q_property_type == '1' ? 'selected=selected' : '' }}>House</option>
					<option autocomplete="off" value="2" {{ $q_property_type == '2' ? 'selected=selected' : '' }}>Bungalow</option>
					<option autocomplete="off" value="3" {{ $q_property_type == '3' ? 'selected=selected' : '' }}>Flat</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label><span style="color: red;">*</span>Moving From</label>
				<input required type="text" class="form-control" name="q_moving_from" value="{{ $q_moving_from }}" />
			</div>
			<div class="form-group col-md-4">
				<label><span style="color: red;">*</span>Postcode From</label>
				<input required type="text" class="form-control" name="q_post_code_from" value="{{ $q_post_code_from }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label><span style="color: red;">*</span>Moving To</label>
				<input required type="text" class="form-control" name="q_moving_to" value="{{ $q_moving_to }}" />
			</div>
			<div class="form-group col-md-4">
				<label><span style="color: red;">*</span>Postcode To</label>
				<input required type="text" class="form-control" name="q_post_code_to" value="{{ $q_post_code_to }}" />
			</div>
		</div>
		<div class="form-group">
			<label>Distance from property to parking for large removal truck (ft)</label>
			<input type="text" class="form-control" name="q_parking_dist" value="{{ $q_parking_dist }}" />
		</div>
		<hr />
		<h4>Lounge</h4>
		<p>Please enter the quantity of each of the items you have in the lounge. Leave blank if not applicable.</p>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Sofa</label>
				<input type="text" class="form-control" name="q_lounge_sofa" value="{{ $q_lounge_sofa }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Armchair</label>
				<input type="text" class="form-control" name="q_lounge_armchair" value="{{ $q_lounge_armchair }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Bookcase</label>
				<input type="text" class="form-control" name="q_lounge_bookcase" value="{{ $q_lounge_bookcase }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Coffee Tables</label>
				<input type="text" class="form-control" name="q_lounge_coffee_table" value="{{ $q_lounge_coffee_table }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Nest of Tables</label>
				<input type="text" class="form-control" name="q_lounge_nest_of_tables" value="{{ $q_lounge_nest_of_tables }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Standard Lamp</label>
				<input type="text" class="form-control" name="q_lounge_lamp" value="{{ $q_lounge_lamp }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Display Cabinet</label>
				<input type="text" class="form-control" name="q_lounge_cabinet" value="{{ $q_lounge_cabinet }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Music System</label>
				<input type="text" class="form-control" name="q_lounge_music_system" value="{{ $q_lounge_music_system }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Television</label>
				<input type="text" class="form-control" name="q_lounge_television" value="{{ $q_lounge_television }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Rugs</label>
				<input type="text" class="form-control" name="q_lounge_rugs" value="{{ $q_lounge_rugs }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Pictures / Mirrors</label>
				<input type="text" class="form-control" name="q_lounge_pictures" value="{{ $q_lounge_pictures }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Boxes (packed)</label>
				<input type="text" class="form-control" name="q_lounge_boxes_packed" value="{{ $q_lounge_boxes_packed }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Boxes (to be packed)</label>
				<input type="text" class="form-control" name="q_lounge_boxes" value="{{ $q_lounge_boxes }}" />
			</div>
		</div>
		<hr />
		<h4>Dining Room</h4>
		<p>Please enter the quantity of each of the items you have in the dining room. Leave blank if not applicable.</p>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Display Cabinet</label>
				<input type="text" class="form-control" name="q_dining_cabinet" value="{{ $q_dining_cabinet }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Welsh Dresser</label>
				<input type="text" class="form-control" name="q_dining_dresser" value="{{ $q_dining_dresser }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Desk</label>
				<input type="text" class="form-control" name="q_dining_desk" value="{{ $q_dining_desk }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Bureau</label>
				<input type="text" class="form-control" name="q_dining_bureau" value="{{ $q_dining_bureau }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Dining Table</label>
				<input type="text" class="form-control" name="q_dining_table" value="{{ $q_dining_table }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Dining Chairs</label>
				<input type="text" class="form-control" name="q_dining_chairs" value="{{ $q_dining_chairs }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Sideboard</label>
				<input type="text" class="form-control" name="q_dining_sideboard" value="{{ $q_dining_sideboard }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Piano</label>
				<input type="text" class="form-control" name="q_dining_piano" value="{{ $q_dining_piano }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Corner Cabinet</label>
				<input type="text" class="form-control" name="q_dining_cabinet_corner" value="{{ $q_dining_cabinet_corner }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Bookcase</label>
				<input type="text" class="form-control" name="q_dining_bookcase" value="{{ $q_dining_bookcase }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Easy Chairs</label>
				<input type="text" class="form-control" name="q_dining_chairs_easy" value="{{ $q_dining_chairs_easy }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Pictures / Mirrors</label>
				<input type="text" class="form-control" name="q_dining_pictures" value="{{ $q_dining_pictures }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Boxes (packed)</label>
				<input type="text" class="form-control" name="q_dining_boxes_packed" value="{{ $q_dining_boxes_packed }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Boxes (to be packed)</label>
				<input type="text" class="form-control" name="q_dining_boxes" value="{{ $q_dining_boxes }}" />
			</div>
		</div>
		<hr />
		<h4>Kitchen</h4>
		<p>Please enter the quantity of each of the items you have in the kitchen. Leave blank if not applicable.</p>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Microwave</label>
				<input type="text" class="form-control" name="q_kitchen_microwave" value="{{ $q_kitchen_microwave }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Fridge / Freezer</label>
				<input type="text" class="form-control" name="q_kitchen_fridge_freezer" value="{{ $q_kitchen_fridge_freezer }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Washing Machine</label>
				<input type="text" class="form-control" name="q_kitchen_washing_machine" value="{{ $q_kitchen_washing_machine }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Dryer</label>
				<input type="text" class="form-control" name="q_kitchen_dryer" value="{{ $q_kitchen_dryer }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Dishwasher</label>
				<input type="text" class="form-control" name="q_kitchen_dishwasher" value="{{ $q_kitchen_dishwasher }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Fridge</label>
				<input type="text" class="form-control" name="q_kitchen_fridge" value="{{ $q_kitchen_fridge }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Freezer</label>
				<input type="text" class="form-control" name="q_kitchen_freezer" value="{{ $q_kitchen_freezer }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Chest Freezer</label>
				<input type="text" class="form-control" name="q_kitchen_chest_freezer" value="{{ $q_kitchen_chest_freezer }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Kitchen Table</label>
				<input type="text" class="form-control" name="q_kitchen_table" value="{{ $q_kitchen_table }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Kitchen Chairs / Stools</label>
				<input type="text" class="form-control" name="q_kitchen_chairs" value="{{ $q_kitchen_chairs }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Welsh Dresser</label>
				<input type="text" class="form-control" name="q_kitchen_dresser" value="{{ $q_kitchen_dresser }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Boxes (packed)</label>
				<input type="text" class="form-control" name="q_kitchen_boxes_packed" value="{{ $q_kitchen_boxes_packed }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Boxes (to be packed)</label>
				<input type="text" class="form-control" name="q_kitchen_boxes" value="{{ $q_kitchen_boxes }}" />
			</div>
		</div>
	</form>
@endsection

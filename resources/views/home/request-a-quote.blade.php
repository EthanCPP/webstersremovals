@extends('home.layout')

@section('page_title')
	Request a Quote | Websters Removals & Storage
@endsection

@section('scripts')
	<!--<script type="text/javascript">
	    var onloadCallback = function() {
	        grecaptcha.render('grecap', {
	            'sitekey' : '6LclX6sUAAAAAE9MqOg_bsaBrx31nH18p662q6oz'
	        });
	    };

	    $(document).ready(function() {
	        $('#i_form').submit(function() {
	            if (grecaptcha.getResponse().length == 0) {
	                return false;
	            }
	        });
	    });
	</script>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>-->
@endsection

@section('content')
	<?php
	if (isset($sent)) {
		if ($sent == '1') {
			?>
			<div class="alert alert-success">
				The form has been sent successfully. We will get in touch soon to discuss your quote.
			</div>
			<?php
		}
	}

	$is_view = false;
	if (isset($viewing)) {
		if ($viewing == '1') {
			$is_view = true;
		}
	}
	?>
	<h3>Request a Quote</h3>
	<?php
	if (!$is_view) {
		?>
		<p>Below you will find a house contents form which you can complete online or download to complete later and email/post to us. You may write additional comments in the quantity box. Required fields are marked with an asterisk (*)</p>
		<a href="/contentsform.docx" target="_blank" class="btn btn-secondary">Download Form</a><br /><br />
		<?php
	}
	?>
	<form action="" method="post" id="i_form">
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
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in the lounge. Leave blank if not applicable.</p>
			<?php
		}
		?>
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
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in the dining room. Leave blank if not applicable.</p>
			<?php
		}
		?>
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
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in the kitchen. Leave blank if not applicable.</p>
			<?php
		}
		?>
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
		<hr />
		<h4>Conservatory</h4>
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in the conservatory. Leave blank if not applicable.</p>
			<?php
		}
		?>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Sofa</label>
				<input type="text" class="form-control" name="q_cons_sofa" value="{{ $q_cons_sofa }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Armchairs</label>
				<input type="text" class="form-control" name="q_cons_armchairs" value="{{ $q_cons_armchairs }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Bookcase</label>
				<input type="text" class="form-control" name="q_cons_bookcase" value="{{ $q_cons_bookcase }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Coffee Table</label>
				<input type="text" class="form-control" name="q_cons_coffee_table" value="{{ $q_cons_coffee_table }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Television</label>
				<input type="text" class="form-control" name="q_cons_television" value="{{ $q_cons_television }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Boxes (packed)</label>
				<input type="text" class="form-control" name="q_cons_boxes_packed" value="{{ $q_cons_boxes_packed }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Boxes (to be packed)</label>
				<input type="text" class="form-control" name="q_cons_boxes" value="{{ $q_cons_boxes }}" />
			</div>
		</div>
		<hr />
		<h4>Hall</h4>
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in the hall. Leave blank if not applicable.</p>
			<?php
		}
		?>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Hall Table</label>
				<input type="text" class="form-control" name="q_hall_table" value="{{ $q_hall_table }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Bookcase</label>
				<input type="text" class="form-control" name="q_hall_bookcase" value="{{ $q_hall_bookcase }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Trunk</label>
				<input type="text" class="form-control" name="q_hall_trunk" value="{{ $q_hall_trunk }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Rugs</label>
				<input type="text" class="form-control" name="q_hall_rugs" value="{{ $q_hall_rugs }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Pictures / Mirrors</label>
				<input type="text" class="form-control" name="q_hall_pictures" value="{{ $q_hall_pictures }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Boxes (packed)</label>
				<input type="text" class="form-control" name="q_hall_boxes_packed" value="{{ $q_hall_boxes_packed }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Boxes (to be packed)</label>
				<input type="text" class="form-control" name="q_hall_boxes" value="{{ $q_hall_boxes }}" />
			</div>
		</div>
		<hr />
		<h4>Conservatory</h4>
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in the conservatory. Leave blank if not applicable.</p>
			<?php
		}
		?>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Sofa</label>
				<input type="text" class="form-control" name="q_cons_sofa" value="{{ $q_cons_sofa }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Armchairs</label>
				<input type="text" class="form-control" name="q_cons_armchairs" value="{{ $q_cons_armchairs }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Bookcase</label>
				<input type="text" class="form-control" name="q_cons_bookcase" value="{{ $q_cons_bookcase }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Coffee Table</label>
				<input type="text" class="form-control" name="q_cons_coffee_table" value="{{ $q_cons_coffee_table }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Television</label>
				<input type="text" class="form-control" name="q_cons_television" value="{{ $q_cons_television }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Boxes (packed)</label>
				<input type="text" class="form-control" name="q_cons_boxes_packed" value="{{ $q_cons_boxes_packed }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Boxes (to be packed)</label>
				<input type="text" class="form-control" name="q_cons_boxes" value="{{ $q_cons_boxes }}" />
			</div>
		</div>
		<hr />
		<h4>Bedroom One</h4>
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in bedroom one. Leave blank if not applicable.</p>
			<?php
		}
		?>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Wardrobe (Single)</label>
				<input type="text" class="form-control" name="q_bed1_wardrobe_single" value="{{ $q_bed1_wardrobe_single }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Wardrobe (Double)</label>
				<input type="text" class="form-control" name="q_bed1_wardrobe_double" value="{{ $q_bed1_wardrobe_double }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Double Bed</label>
				<input type="text" class="form-control" name="q_bed1_bed_double" value="{{ $q_bed1_bed_double }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Single Bed</label>
				<input type="text" class="form-control" name="q_bed1_bed_single" value="{{ $q_bed1_bed_single }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Chest of Drawers</label>
				<input type="text" class="form-control" name="q_bed1_chest" value="{{ $q_bed1_chest }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Dressing Table</label>
				<input type="text" class="form-control" name="q_bed1_dressing" value="{{ $q_bed1_dressing }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Ottoman</label>
				<input type="text" class="form-control" name="q_bed1_ottoman" value="{{ $q_bed1_ottoman }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Tallboy</label>
				<input type="text" class="form-control" name="q_bed1_tallboy" value="{{ $q_bed1_tallboy }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Computer Desk</label>
				<input type="text" class="form-control" name="q_bed1_computer_desk" value="{{ $q_bed1_computer_desk }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Television</label>
				<input type="text" class="form-control" name="q_bed1_television" value="{{ $q_bed1_television }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Bookcase</label>
				<input type="text" class="form-control" name="q_bed1_bookcase" value="{{ $q_bed1_bookcase }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Boxes</label>
				<input type="text" class="form-control" name="q_bed1_boxes" value="{{ $q_bed1_boxes }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Wardrobe Cartons</label>
				<input type="text" class="form-control" name="q_bed1_wardrobe_cartons" value="{{ $q_bed1_wardrobe_cartons }}" />
			</div>
		</div>
		<hr />
		<h4>Bedroom Two</h4>
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in bedroom two. Leave blank if not applicable.</p>
			<?php
		}
		?>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Wardrobe (Single)</label>
				<input type="text" class="form-control" name="q_bed2_wardrobe_single" value="{{ $q_bed2_wardrobe_single }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Wardrobe (Double)</label>
				<input type="text" class="form-control" name="q_bed2_wardrobe_double" value="{{ $q_bed2_wardrobe_double }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Double Bed</label>
				<input type="text" class="form-control" name="q_bed2_bed_double" value="{{ $q_bed2_bed_double }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Single Bed</label>
				<input type="text" class="form-control" name="q_bed2_bed_single" value="{{ $q_bed2_bed_single }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Chest of Drawers</label>
				<input type="text" class="form-control" name="q_bed2_chest" value="{{ $q_bed2_chest }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Dressing Table</label>
				<input type="text" class="form-control" name="q_bed2_dressing" value="{{ $q_bed2_dressing }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Ottoman</label>
				<input type="text" class="form-control" name="q_bed2_ottoman" value="{{ $q_bed2_ottoman }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Tallboy</label>
				<input type="text" class="form-control" name="q_bed2_tallboy" value="{{ $q_bed2_tallboy }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Computer Desk</label>
				<input type="text" class="form-control" name="q_bed2_computer_desk" value="{{ $q_bed2_computer_desk }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Television</label>
				<input type="text" class="form-control" name="q_bed2_television" value="{{ $q_bed2_television }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Bookcase</label>
				<input type="text" class="form-control" name="q_bed2_bookcase" value="{{ $q_bed2_bookcase }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Boxes</label>
				<input type="text" class="form-control" name="q_bed2_boxes" value="{{ $q_bed2_boxes }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Wardrobe Cartons</label>
				<input type="text" class="form-control" name="q_bed2_wardrobe_cartons" value="{{ $q_bed2_wardrobe_cartons }}" />
			</div>
		</div>
		<hr />
		<h4>Bedroom Three</h4>
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in bedroom three. Leave blank if not applicable.</p>
			<?php
		}
		?>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Wardrobe (Single)</label>
				<input type="text" class="form-control" name="q_bed3_wardrobe_single" value="{{ $q_bed3_wardrobe_single }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Wardrobe (Double)</label>
				<input type="text" class="form-control" name="q_bed3_wardrobe_double" value="{{ $q_bed3_wardrobe_double }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Double Bed</label>
				<input type="text" class="form-control" name="q_bed3_bed_double" value="{{ $q_bed3_bed_double }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Single Bed</label>
				<input type="text" class="form-control" name="q_bed3_bed_single" value="{{ $q_bed3_bed_single }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Chest of Drawers</label>
				<input type="text" class="form-control" name="q_bed3_chest" value="{{ $q_bed3_chest }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Dressing Table</label>
				<input type="text" class="form-control" name="q_bed3_dressing" value="{{ $q_bed3_dressing }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Ottoman</label>
				<input type="text" class="form-control" name="q_bed3_ottoman" value="{{ $q_bed3_ottoman }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Tallboy</label>
				<input type="text" class="form-control" name="q_bed3_tallboy" value="{{ $q_bed3_tallboy }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Computer Desk</label>
				<input type="text" class="form-control" name="q_bed3_computer_desk" value="{{ $q_bed3_computer_desk }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Television</label>
				<input type="text" class="form-control" name="q_bed3_television" value="{{ $q_bed3_television }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Bookcase</label>
				<input type="text" class="form-control" name="q_bed3_bookcase" value="{{ $q_bed3_bookcase }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Boxes</label>
				<input type="text" class="form-control" name="q_bed3_boxes" value="{{ $q_bed3_boxes }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Wardrobe Cartons</label>
				<input type="text" class="form-control" name="q_bed3_wardrobe_cartons" value="{{ $q_bed3_wardrobe_cartons }}" />
			</div>
		</div>
		<hr />
		<h4>Bedroom Four</h4>
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in bedroom four. Leave blank if not applicable.</p>
			<?php
		}
		?>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Wardrobe (Single)</label>
				<input type="text" class="form-control" name="q_bed4_wardrobe_single" value="{{ $q_bed4_wardrobe_single }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Wardrobe (Double)</label>
				<input type="text" class="form-control" name="q_bed4_wardrobe_double" value="{{ $q_bed4_wardrobe_double }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Double Bed</label>
				<input type="text" class="form-control" name="q_bed4_bed_double" value="{{ $q_bed4_bed_double }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Single Bed</label>
				<input type="text" class="form-control" name="q_bed4_bed_single" value="{{ $q_bed4_bed_single }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Chest of Drawers</label>
				<input type="text" class="form-control" name="q_bed4_chest" value="{{ $q_bed4_chest }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Dressing Table</label>
				<input type="text" class="form-control" name="q_bed4_dressing" value="{{ $q_bed4_dressing }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Ottoman</label>
				<input type="text" class="form-control" name="q_bed4_ottoman" value="{{ $q_bed4_ottoman }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Tallboy</label>
				<input type="text" class="form-control" name="q_bed4_tallboy" value="{{ $q_bed4_tallboy }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Computer Desk</label>
				<input type="text" class="form-control" name="q_bed4_computer_desk" value="{{ $q_bed4_computer_desk }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Television</label>
				<input type="text" class="form-control" name="q_bed4_television" value="{{ $q_bed4_television }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Bookcase</label>
				<input type="text" class="form-control" name="q_bed4_bookcase" value="{{ $q_bed4_bookcase }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Boxes</label>
				<input type="text" class="form-control" name="q_bed4_boxes" value="{{ $q_bed4_boxes }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Wardrobe Cartons</label>
				<input type="text" class="form-control" name="q_bed4_wardrobe_cartons" value="{{ $q_bed4_wardrobe_cartons }}" />
			</div>
		</div>
		<hr />
		<h4>Garage</h4>
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in garage. Leave blank if not applicable.</p>
			<?php
		}
		?>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Toolboxes</label>
				<input type="text" class="form-control" name="q_garage_tool_boxes" value="{{ $q_garage_tool_boxes }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Workbench</label>
				<input type="text" class="form-control" name="q_garage_workbench" value="{{ $q_garage_workbench }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Racking</label>
				<input type="text" class="form-control" name="q_garage_racking" value="{{ $q_garage_racking }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Timber</label>
				<input type="text" class="form-control" name="q_garage_timber" value="{{ $q_garage_timber }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Cabinets</label>
				<input type="text" class="form-control" name="q_garage_cabinets" value="{{ $q_garage_cabinets }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Bicycles</label>
				<input type="text" class="form-control" name="q_garage_bicycles" value="{{ $q_garage_bicycles }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Ladders</label>
				<input type="text" class="form-control" name="q_garage_ladders" value="{{ $q_garage_ladders }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Step Ladders</label>
				<input type="text" class="form-control" name="q_garage_step_ladders" value="{{ $q_garage_step_ladders }}" />
			</div>
		</div>
		<hr />
		<h4>Garden / Shed</h4>
		<?php
		if (!$is_view) {
			?>
			<p>Please enter the quantity of each of the items you have in garden / shed. Leave blank if not applicable.</p>
			<?php
		}
		?>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Mower</label>
				<input type="text" class="form-control" name="q_garden_mower" value="{{ $q_garden_mower }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Strimmer</label>
				<input type="text" class="form-control" name="q_garden_strimmer" value="{{ $q_garden_strimmer }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Roller</label>
				<input type="text" class="form-control" name="q_garden_roller" value="{{ $q_garden_roller }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Wheelbarrow</label>
				<input type="text" class="form-control" name="q_garden_wheel_barrow" value="{{ $q_garden_wheel_barrow }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Dustbins</label>
				<input type="text" class="form-control" name="q_garden_dustbins" value="{{ $q_garden_dustbins }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Garden Tools</label>
				<input type="text" class="form-control" name="q_garden_tools" value="{{ $q_garden_tools }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Garden Bench</label>
				<input type="text" class="form-control" name="q_garden_bench" value="{{ $q_garden_bench }}" />
			</div>
			<div class="form-group col-md-4">
				<label>BBQ</label>
				<input type="text" class="form-control" name="q_garden_bbq" value="{{ $q_garden_bbq }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Patio Tables</label>
				<input type="text" class="form-control" name="q_garden_tables" value="{{ $q_garden_tables }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Patio Chairs</label>
				<input type="text" class="form-control" name="q_garden_chairs" value="{{ $q_garden_chairs }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Sun Loungers</label>
				<input type="text" class="form-control" name="q_garden_loungers" value="{{ $q_garden_loungers }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Swing / Slide</label>
				<input type="text" class="form-control" name="q_garden_swing" value="{{ $q_garden_swing }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Pots (Large)</label>
				<input type="text" class="form-control" name="q_garden_pots_large" value="{{ $q_garden_pots_large }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Pots (Small)</label>
				<input type="text" class="form-control" name="q_garden_pots_small" value="{{ $q_garden_pots_small }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Ornaments</label>
				<input type="text" class="form-control" name="q_garden_ornaments" value="{{ $q_garden_ornaments }}" />
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Other</label>
				<input type="text" class="form-control" name="q_garden_other" value="{{ $q_garden_other }}" />
			</div>
		</div>
		<hr />
		<h4>Other</h4>
		<?php
		if (!$is_view) {
			?>
			<p>Leave blank if not applicable.</p>
			<?php
		}
		?>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Loft Contents</label>
				<input type="text" class="form-control" name="q_loft_contents" value="{{ $q_loft_contents }}" />
			</div>
			<div class="form-group col-md-4">
				<label>Cupboard Contents</label>
				<input type="text" class="form-control" name="q_cupboard_contents" value="{{ $q_cupboard_contents }}" />
			</div>
		</div>
		<?php
		if (!$is_view) {
			?>
			<input type="submit" name="submit" class="btn btn-primary" value="Submit Form" />
			<p>Please make sure your email address and/or phone number is entered correctly so that we can contact you to discuss your quote</p>
			<?php
		}
		?>
	</form>
@endsection

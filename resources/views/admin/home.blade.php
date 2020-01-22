@extends('admin.layout')

@section('content')
    <?php
    if (isset($testimonial_deleted)) {
        if ($testimonial_deleted == '1') {
            ?>
            <div class="alert alert-success">
                The testimonial was removed
            </div>
            <?php
        }
    }

    if (isset($testimonial_approved)) {
        if ($testimonial_approved == '1') {
            ?>
            <div class="alert alert-success">
                The testimonial was approved
            </div>
            <?php
        }
    }
    ?>
    <h3>Admin Dashboard</h3><br />
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#" class="nav-link active" id="nav-testimonials">Testimonials</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link" id="nav-requests">Quote Requests</a>  
        </li>
    </ul>
    <div id="tab-testimonials" class="tab-pane">
        <?php
        if (isset($testimonial_data)) {
            if ($testimonial_data == null)
                echo "<br />There are no new testimonials";
            else {
                foreach ($testimonial_data as $testimonial) {
                ?>
                <div class="testimonial-div">
                    <h4 style="margin: 0;">{{ $testimonial['name'] }}</h4>
                    <small style="color: #777; margin-top: -6px;">{{ $testimonial['created_at'] }}</small>
                    <p style="margin-top: 10px;">{{ $testimonial['description'] }}</p>
                    <a href="/admin/testimonials/approve/{{ $testimonial['id'] }}" class="btn btn-success btn-sm">Approve</a>
                    <a href="/admin/testimonials/delete/{{ $testimonial['id'] }}" class="btn btn-danger btn-sm">Delete</a>
                </div>
                <?php
                } 
            }
        }
        ?>
    </div>
    <div style="display: none;" id="tab-requests" class="tab-pane">
        <?php
        if (isset($request_data)) {
            if ($request_data == null)
                echo "<br />There are no new quote requests";
            else {
                foreach ($request_data as $request) {
                ?>
                <div class="testimonial-div">
                    <h4 style="margin: 0;">{{ $request['name'] }}</h4>
                    <small style="color: #777; margin-top: -6px;">{{ $request['created_at'] }}</small>
                    <br /><a href="/request-a-quote/view/{{ $request['auth_code'] }}/{{ $request['id']}}" class="btn btn-primary btn-sm">View</a>
                </div>
                <?php
                } 
            }
        }
        ?>
    </div>
@endsection
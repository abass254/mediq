@extends('layouts')

@section('content')
@section('page-title', 'Facility Registration')
<div class="container-fluid">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home Page</a></li>
		</ol>
	</div>
    <div class="col-xl-12 col-lg-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Please fill in the form below</h4>
				</div>
				<div class="card-body">
					<div class="basic-form">
						<form method="POST" action="{{ route('facility-register') }}">
							<h3>Facility information</h3>
							@if ($errors->any())
								<div class="alert alert-danger">
									{{ $errors->first() }}
								</div>
							@endif
							@csrf
							<div class="row">
								
								<br>
								<div class="col-md-3">
									<label class="form-label">FACILITY NAME</label>
									<input name="fc_name" id="hospital" type="text" class="form-control" placeholder="ABC Hospital Clinic">
								</div>
                                <div class="mb-3 col-md-3">
									<label class="form-label">FACILITY LOCATION</label>
									<input name="fc_location" id="facility_location" type="text" class="form-control" placeholder="ABC Building, Juja Rd, Pangani, Nairobi">
								</div>
								<div class="mb-3 col-md-3">
									<label class="form-label">FACILITY EMAIL</label>
									<input name="fc_email" id="email" type="email" class="form-control" placeholder="johndoe@mail.com">
								</div>
								<div class="mb-3 col-md-2">
									<label class="form-label">FACILITY PHONE</label>
									<input name="fc_phone" id="phone" type="text" class="form-control" placeholder="07XXXXXXXX">
								</div>
								<div class="mb-3 col-md-12">
									<label class="form-label">SERVICES WE OFFER</label>
									<textarea name="fc_desc" placeholder="We offer Optical, Dentist, etc" rows="4" id="" class="form-control"></textarea>
								</div>
                                
							</div>
							<hr>
							<div class="row">
								<h3>Doctor's information</h3>
								<br>
								<br>
								<div class="mb-3 col-md-3">
									<label class="form-label">PRIMARY DOCTOR</label>
									<input name="name" id="name" type="text" class="form-control" placeholder="John Doe">
								</div>
								<div class="mb-3 col-md-3">
									<label class="form-label">EMAIL ADDRESS</label>
									<input name="email" type="email" class="form-control" placeholder="johndoe@mail.com">
								</div>
								<div class="mb-3 col-md-2">
									<label class="form-label">PHONE NUMBER</label>
									<input name="phone" type="text" class="form-control" placeholder="07XXXXXXXX">
								</div>
								<div class="mb-3 col-md-3">
									<label class="form-label">SPECIALITY</label>
									<input name="dc_speciality" type="text" class="form-control" placeholder="Optician, Dentist, Phlebotomist">
								</div>
								
							</div>
							<button type="submit" class="btn btn-primary btn-register-doctor">REGISTER FACILITY</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	<!-- row -->
@endsection

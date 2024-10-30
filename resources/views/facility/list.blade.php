@extends('layouts')

@section('content')
@section('page-title', 'Facilities')
<div class="container-fluid">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home Page</a></li>
		</ol>
	</div>

	<div class="col-lg-12">
		<div class="card overflow-hidden">
			<div class="card-body py-0 px-3">
				<div class="table-responsive">
					<table class="table table-sm mb-0">
						<thead>
							<tr class="text-uppercase">
								<th class="align-middle">
									<div class="form-check custom-checkbox">
										<input type="checkbox" class="form-check-input" id="checkAll">
										<label class="form-check-label d-block" for="checkAll"></label>
									</div>
								</th>
								<th>#</th>
								<th class="align-middle">Facility Name</th>
								<th class="align-middle pe-7">contact information</th>
								<th class="align-middle" style="min-width: 12.5rem;">Primary Location</th>
								<th class="align-middle text-end">Status</th>
								<th class="align-middle text-end">Action</th>
							</tr>
						</thead>
						<tbody id="orders">
							@foreach($data as $key => $dt)
							<tr class="btn-reveal-trigger">
								<td class="py-2">
									<div class="form-check custom-checkbox checkbox-success">
										<input type="checkbox" class="form-check-input" id="checkbox">
										<label class="form-check-label" for="checkbox"></label>
									</div>
								</td>
								<td><strong class="text-primary">{{ $key+1 }}</strong></td>
								<td class="py-2" style="width:12px;">
									<a href="#">
										<strong class="text-primary"></strong></a> <strong class="text-primary">{{ $dt['fac_name'] }}
										</strong><br><a href="{{ $dt['fac_email'] }}">{{ $dt['fac_email'] }}</a></td>
								<td class="py-2" style="width:12px;">{{ $dt['fac_phone'] }}</td>
								<td class="py-2">{{ $dt['fac_location'] }}
									<p class="mb-0 text-500"></p>
								</td>
								<td class="py-2 text-end"><span class="badge badge-{{ $dt['fac_theme'] }} text-uppercase badge-sm">{{ $dt['fac_status'] }}<span class="ms-1 fa fa-dot"></span></span>
								</td>
								<td class="py-2 text-end">
									<a href="" class="btn btn-danger btn-sm"><b>EDIT</b></a>
									<a href="" class="btn btn-primary btn-sm"><b>VIEW</b></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


@endsection
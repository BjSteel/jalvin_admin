@extends('layouts.back')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">All Properties Listing</li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="checkAll" required="">
														<label class="custom-control-label" for="checkAll"></label>
													</div>
												</th>
                                                <th>Property Id</th>
                                                <th>Property Type</th>
                                                <th>Date</th>
                                                <th>Property Name</th>
                                                <th>Price</th>
                                                <th>Beds</th>
                                                <th>Property Size</th>
                                                <th>Status</th>
                                                <th>Property City</th>
                                                <th>Property Area</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($properties as $property)
                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>{{ $property->prop_id }}</td>
                                                <td>
                                                    @foreach(json_decode($property->type) as $type)
                                                     {{ $type }}
                                                    @endforeach
                                                </td>
                                                <td>{{ $property->created_at }}</td>
                                                <td>{{ $property->name }}</td>
                                                <td>{{$property->price}}</td>
                                                <td>{{$property->beds}}</td>
                                                <td>{{$property->size}}</td>
												<td>
													<span class="badge light badge-warning mb-2">
														<i class="fas fa-circle text-warning me-1"></i>
														For sale
													</span>
                                                    <span class="badge light badge-success mb-2">
														<i class="fas fa-circle text-success me-1"></i>
														Ready For Sale
													</span>
                                                    <span class="badge light badge-success">
														<i class="fas fa-circle text-success me-1"></i>
														Featured
													</span>
												</td>
                                                <td>{{$property->city}}</td>
                                                <td>Lekki</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="{{route('properties.update', $property->id)}}">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="{{route('properties.view', $property->id)}}">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
		
@endsection
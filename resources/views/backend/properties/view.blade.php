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
                                                <th>Property Address</th>
                                                <th>Property City</th>
                                                <th>Property Area</th>
                                                <th>Property State</th>
                                                <th>Property Country</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="property-details.html">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-02362</td>
                                                <td>Semi Detached</td>
                                                <td>01/12/2023</td>
                                                <td>6 Bedroom Semi Detached Duplex</td>
                                                <td>N280,000,00</td>
                                                <td>6+</td>
                                                <td>17,000 sqm</td>
												<td>
													<span class="badge light badge-warning mb-2">
														<i class="fas fa-circle text-warning me-1"></i>
														For sale
													</span>

                                                    <span class="badge light badge-warning mb-2">
														<i class="fas fa-circle text-warning me-1"></i>
														New Listing
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
                                                <td>Chevron Ikate</td>
                                                <td>Lagos Island</td>
                                                <td>Chevron</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-88541</td>
                                                <td>Commercial Land</td>
                                                <td>26/02/2025</td>
                                                <td>Zylus Home Dry Land</td>
                                                <td>N6,000,000</td>
                                                <td>---</td>
                                                <td>11,000 sqm</td>
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
                                                <td>GRA</td>
                                                <td>Lagos Island</td>
                                                <td>Ikeja</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-03001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>4 Bedroom Terrace Duplex</td>
                                                <td>N60,000,000</td>
                                                <td>4+</td>
                                                <td>7,500 sqm</td>
												<td>
													<span class="badge light badge-danger mb-2">
														<i class="fas fa-circle text-danger me-1"></i>
														Sold Out
													</span>
                                                    <span class="badge light badge-success">
														<i class="fas fa-circle text-success me-1"></i>
														Featured
													</span>
												</td>
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Mainland</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-25551</td>
                                                <td>Bungalow</td>
                                                <td>26/02/2023</td>
                                                <td>4 Bedroom Fully Detached Duplex</td>
                                                <td>N90,000,000</td>
                                                <td>4+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>White House</td>
                                                <td>Abuja</td>
                                                <td>Aso Rock</td>
                                                <td>Abuja State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>


                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                             <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                             <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                             <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                             <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                             <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                             <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>
                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>Residential</td>
                                                <td>26/02/2023</td>
                                                <td>5 Bedroom Fully Detached Duplex</td>
                                                <td>N600,000,000</td>
                                                <td>5+</td>
                                                <td>11,000 sqm</td>
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
                                                <td>Osapa London LEKKI</td>
                                                <td>Lagos Island</td>
                                                <td>Lekki</td>
                                                <td>Lagos State</td>
                                                <td>Nigeria</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Edit Property</a>
															<a class="dropdown-item" href="#">Delete Property</a>
															<a class="dropdown-item" href="#">View Property</a>
														</div>
													</div>
												</td>												
                                            </tr>

                                            <!-- <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
														<label class="custom-control-label" for="customCheckBox3"></label>
													</div>
												</td>
                                                <td>#P-00002</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Kelvin Fasan</td>
                                                <td>Big Snow</td>
												<td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fas fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-002</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>


                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
														<label class="custom-control-label" for="customCheckBox3"></label>
													</div>
												</td>
                                                <td>#P-00002</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Garrett Winters</td>
                                                <td>Dr. Cedric</td>
												<td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fas fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-002</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
														<label class="custom-control-label" for="customCheckBox4"></label>
													</div>
												</td>
                                                <td>#P-00003</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Rhona</td>
												<td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-success">
														<i class="fas fa-circle text-success me-1"></i>
														Recovered
													</span>
												</td>
                                                <td>AB-003</td>
												<td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox5" required="">
														<label class="custom-control-label" for="customCheckBox5"></label>
													</div>
												</td>
                                                <td>#P-00004</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Cedric</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fas fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-004</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox6" required="">
														<label class="custom-control-label" for="customCheckBox6"></label>
													</div>
												</td>
                                                <td>#P-00005</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Cedric</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fas fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-005</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox7" required="">
														<label class="custom-control-label" for="customCheckBox7"></label>
													</div>
												</td>
                                                <td>#P-00006</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
												<td>
													<span class="badge light badge-warning">
														<i class="fas fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-006</td>
												<td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox8" required="">
														<label class="custom-control-label" for="customCheckBox8"></label>
													</div>
												</td>
                                                <td>#P-00007</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fas fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-007</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox9" required="">
														<label class="custom-control-label" for="customCheckBox9"></label>
													</div>
												</td>
                                                <td>#P-00008</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Garrett </td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fas fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-008</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox10" required="">
														<label class="custom-control-label" for="customCheckBox10"></label>
													</div>
												</td>
                                                <td>#P-00009</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fas fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-009</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox11" required="">
														<label class="custom-control-label" for="customCheckBox11"></label>
													</div>
												</td>
                                                <td>#P-00010</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fas fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-010</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox12" required="">
														<label class="custom-control-label" for="customCheckBox12"></label>
													</div>
												</td>
                                                <td>#P-00011</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
												<td>
													<span class="badge light badge-warning">
														<i class="fas fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-011</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox13" required="">
														<label class="custom-control-label" for="customCheckBox13"></label>
													</div>
												</td>
                                                <td>#P-00012</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fas fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-012</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox14" required="">
														<label class="custom-control-label" for="customCheckBox14"></label>
													</div>
												</td>
                                                <td>#P-00013</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fas fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-013</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox15" required="">
														<label class="custom-control-label" for="customCheckBox15"></label>
													</div>
												</td>
                                                <td>#P-00014</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fas fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-014</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox16" required="">
														<label class="custom-control-label" for="customCheckBox16"></label>
													</div>
												</td>
                                                <td>#P-00015</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
												<td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fas fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-015</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox17" required="">
														<label class="custom-control-label" for="customCheckBox17"></label>
													</div>
												</td>
                                                <td>#P-00016</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
												<td>Sleep Problem</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fas fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-016</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox18" required="">
														<label class="custom-control-label" for="customCheckBox18"></label>
													</div>
												</td>
                                                <td>#P-00017</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
												<td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fas fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-017</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox19" required="">
														<label class="custom-control-label" for="customCheckBox19"></label>
													</div>
												</td>
                                                <td>#P-00018</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fas fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-018</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox20" required="">
														<label class="custom-control-label" for="customCheckBox20"></label>
													</div>
												</td>
                                                <td>#P-00019</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fas fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-019</td>
												<td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox21" required="">
														<label class="custom-control-label" for="customCheckBox21"></label>
													</div>
												</td>
                                                <td>#P-00020</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fas fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-020</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr> -->
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
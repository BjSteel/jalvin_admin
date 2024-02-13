@extends('layouts.back')
@section('content')
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Add Properties</li><br>
						@if ($errors)
							<span style="color:red;font-size:14px">
								<strong>{{ $errors }}</strong>
							</span>
						@endif
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="">
											<div class="compose-content">
												<form action="{{ route('properties.add') }}" method="post" enctype="multipart/form-data">
													@csrf
													<div class="form-group span3 mb-3">
														<input type="text" placeholder=" Name:" name="name">
														<input type="text" placeholder="Address:" name="address">
														<input type="text" placeholder="Price:" name="price">
													</div>
													<div class="form-group span4 mb-3">
												<select name="city" id="city">
													<option value="" disabled selected>Select City</option>
													<option value="null">---</option>
													<option value="abuja">Abuja</option>
													<option value="lagos_island">Lagos Island</option>
													<option value="lagos_mainland">Lagos Mainland</option>
													<option value="ibadan">Ibadan</option>
													<option value="dubai">Dubai</option>
												</select>

												<select name="country" id="country">
													<option value="" disabled selected>Select country</option>
													<option value="null">---</option>
													<option value="nigeria">nigeria</option>
													<option value="uae">United Arab Emirates (UAE)</option>
												</select>

												<select name="beds" id="beds">
													<option value="" disabled selected>Select Beds</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7+">7+</option>
												</select>

												<select name="baths" id="bath">
													<option value="" disabled selected>Select Bath</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="6">5</option>
													<option value="6">6</option>
													<option value="7">7+</option>
												</select>
													</div>

													<div class="form-group span2 mb-3">
														<input type="number" placeholder="Year Built" name="year">
														<input type="text" placeholder="Property Size" name="size">
													</div>

													<div class="feats">
														<h6>property status</h6>
														
													<div class="form-group features mb-3">
														
														<div class="item">
															<input type="checkbox" class="my-checkbox" value="0" name="ready_to_move"> <span>Ready to move in</span>
														</div>

														<div class="item">
															<input type="checkbox" class="my-checkbox" value="0" name="sold_out"> <span>Sold out</span>
														</div>

														<div class="item">
															<input type="checkbox" class="my-checkbox" value="0" name="open_house"> <span>Open house</span>
														</div>

														<div class="item">
															<input type="checkbox" class="my-checkbox" value="0" name="reduced_price"> <span>reduced price</span>
														</div>

														<div class="item">
															<input type="checkbox" class="my-checkbox" value="0" name="resale"> <span>resale</span>
														</div>

														<div class="item">
															<input type="checkbox" class="my-checkbox" value="0" name="off_plan"> <span>offplan project</span>
														</div>

														<div class="item">
															<input type="checkbox" class="my-checkbox" value="0" name="new_listing" > <span>new listing</span>
														</div>

														<div class="item">
															<input type="checkbox" class="my-checkbox" value="0" name="for_sale"> <span>for sale</span>
														</div>
													</div>
													</div>

													<div class="feats">
														
														<h6>property type</h6>

														<div class="form-group features mb-3">
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="residential"> <span>Residential</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="commercial"> <span>Commercial</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="fully_detached_duplex"> <span>Fully Detached Duplex</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="semi_detatched_duplex"> <span>Semi Detached Duplex</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="bungalow"> <span>Bungalow</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="penthouse"> <span>Penthouse</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="terrace"> <span>Terrace</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="apartment"> <span>Apartment</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="massiontte"> <span>Maisontte</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="residential land"> <span>Residential Land</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="commercial_land"> <span>Commercial Land</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="office"> <span>office</span>
															</div>
														</div>
													</div>

													<div class="feats">
														<h6>Property Features</h6>

														<div class="form-group features mb-3">
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="fitted_kitchen"> <span>Fitted Kitchen With Accessories</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="24_hour_security"> <span>24 Hour Security</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="modern_pop_ceiling"> <span>Modern Day POP Ceiling</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="detailed_finishing"> <span>Detailed Finishing</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="wardrobes"> <span>Wardrobes</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="jacuzzi"> <span>jacuzzi</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="cctv"> <span>CCTV</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="automated_lights"> <span>Automated Light</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="water_heater"> <span>water heater</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="clean_water"> <span>clean water</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="heat_extractor"> <span>Heat Extractor</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="ample_parking_space"> <span>Ample Parking Space</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="gym"> <span>gym</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="cinema"> <span>cinema</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="swimming_pool"> <span>swimming pool</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="boys_quaters"> <span>comes with boys quarters</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="elevator"> <span>elevator</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="installed_soundsystem"> <span>installed bluetooth speakers</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="beach_front"> <span>beach front</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="gate_house"> <span>Gate house</span>
															</div>
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="good_drainage"> <span>Good drainage</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="lagoon_front_view"> <span>lagoon front view</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="fully_furnished"> <span>fully furnished</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="air_conditioning"> <span>air conditioning</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="shildren_playgroud"> <span>chilren's playground</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="barbeque"> <span>barbeque</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="spacious_compound"> <span>spacious compound</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="estate_lounge"> <span>estate lounge</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="close_to_landmark"> <span>close to landmark</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="smart_home"> <span>smart home</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="category"> <span>dry land</span>
															</div>
	
															<div class="item">
																<input type="checkbox"  class="my-checkbox" value="0" name="wet_land"> <span>wet land</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="government_approved"> <span>goverment approved</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="with_c_of_o"> <span>with c of o</span>
															</div>
	
															<div class="item">
																<input type="checkbox" class="my-checkbox" value="0" name="gate_house"> <span>gate house</span>
															</div>
	
														</div>
													</div>

													

												
												<h5 class="mb-4"><i class="fa fa-paperclip"></i> Add Property Images</h5>
												<!-- <div action="#" class="dropzone"> -->
													<div class="fallback">
														<input name="images" type="file" multiple />
													</div>
												<!-- </div> -->
											</div>
											<div class="text-start mt-4 mb-3">
												<button class="btn btn-primary btn-sl-sm me-2" type="submit"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Upload Property</button>
												<button class="btn btn-danger light btn-sl-sm" type="button"><span class="me-2"><i class="fa fa-times"></i></span>Discard</button>
											</div>
										</form>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
@endsection
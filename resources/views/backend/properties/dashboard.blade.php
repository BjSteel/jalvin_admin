@extends('layouts.back')
@section('content')
       <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
					<div class="me-auto  d-lg-block">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">Welcome to Jalvin Homes Admin</p>
					</div>
					<a href="index.html" class="btn btn-primary rounded light me-3">Refresh</a>
				</div>
				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card bg-danger property-bx text-white">
									<div class="card-body">
										<div class="media d-sm-flex d-block align-items-center">
											<span class="me-4 d-block mb-sm-0 mb-3">
												<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M31.8333 79.1667H4.16659C2.33325 79.1667 0.833252 77.6667 0.833252 75.8333V29.8333C0.833252 29 1.16659 28 1.83325 27.5L29.4999 1.66667C30.4999 0.833332 31.8333 0.499999 32.9999 0.999999C34.3333 1.66667 34.9999 2.83333 34.9999 4.16667V76C34.9999 77.6667 33.4999 79.1667 31.8333 79.1667ZM7.33325 72.6667H28.4999V11.6667L7.33325 31.3333V72.6667Z" fill="white"/>
													<path d="M75.8333 79.1667H31.6666C29.8333 79.1667 28.3333 77.6667 28.3333 75.8334V36.6667C28.3333 34.8334 29.8333 33.3334 31.6666 33.3334H75.8333C77.6666 33.3334 79.1666 34.8334 79.1666 36.6667V76C79.1666 77.6667 77.6666 79.1667 75.8333 79.1667ZM34.9999 72.6667H72.6666V39.8334H34.9999V72.6667Z" fill="white"/>
													<path d="M60.1665 79.1667H47.3332C45.4999 79.1667 43.9999 77.6667 43.9999 75.8334V55.5C43.9999 53.6667 45.4999 52.1667 47.3332 52.1667H60.1665C61.9999 52.1667 63.4999 53.6667 63.4999 55.5V75.8334C63.4999 77.6667 61.9999 79.1667 60.1665 79.1667ZM50.6665 72.6667H56.9999V58.8334H50.6665V72.6667Z" fill="white"/>
												</svg>
											</span>
											<div class="media-body mb-sm-0 mb-3 me-5">
												<h4 class="fs-22 text-white">Total Properties</h4>
												<div class="progress mt-3 mb-2" style="height:8px;">
													<div class="progress-bar bg-white progress-animated" style="width: 86%; height:8px;" role="progressbar">
														<span class="sr-only">86% Complete</span>
													</div>
												</div>
												<span class="fs-14">431 more to break last month record</span>
											</div>
											<span class="fs-46 font-w500">4,562</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body me-3">	
												<h2 class="fs-36 text-black font-w600">2,356</h2>
												<p class="fs-18 mb-0 text-black font-w500">Residential</p>
												<span class="fs-13">Target 3k/month</span>
											</div>
											<div class="d-inline-block position-relative donut-chart-sale">
												<span class="donut1" data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>5/8</span>
												<small class="text-primary">71%</small>
												<span class="circle bgl-primary"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body me-3">	
												<h2 class="fs-36 text-black font-w600">2,206</h2>
												<p class="fs-18 mb-0 text-black font-w500">Commercial</p>
												<span class="fs-13">Target 3k/month</span>
											</div>
											<div class="d-inline-block position-relative donut-chart-sale">
												<span class="donut1" data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>7/8</span>
												<small class="text-success">90%</small>
												<span class="circle bgl-success"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">List of Properties</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-12">
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:100%; height:10px;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div> -->
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Fully Detached Duplex
													<span class="pull-right text-dark fs-14 ms-2">18 Properties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:75%; height:10px;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div> -->
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Semi Detached Duplex
													<span class="pull-right text-dark fs-14 ms-2">53 Properties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:50%; height:10px;" role="progressbar">
														<span class="sr-only">50% Complete</span>
													</div>
												</div> -->
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Terrace Duplex
													<span class="pull-right text-dark fs-14 ms-2">45 Properties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:70%; height:10px;" role="progressbar">
														<span class="sr-only">70% Complete</span>
													</div>
												</div> -->
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Bungalow
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->

												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Apartment
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->

												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Maisontte
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->

												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Penthouse
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->

												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Residential Land
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->

												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Commercial Land
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->

												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Office
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->

												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Abuja
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->

												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Lagos Island
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->

												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Lagos Mainland
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->

												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Ibadan
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->

												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Dubai
													<span class="pull-right text-dark fs-14 ms-2">120 Proprties</span>
												</p>
												<!-- <div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							
							<div class="col-xl-12 col-lg-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">Recent Property</h3>
									</div>
									<div class="card-body">
										<div class="testimonial-one owl-carousel">
											<div class="items">
												<a href="property-details.html"><img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 bath.jpg" alt="#" class="w-100 mw-100 mb-3 rounded"></a>
												<h5 class="fs-16 font-w600 mb-0"><a href="property-details.html" class="text-black">5BEDROOM CONTEMPORARY DETACHED DUPLEX</a></h5>
												<span class="fs-14 d-block mb-4">Lekki Phase 1</span>
												<a href="javascript:void(0);" class="bgl-primary text-black p-1 ps-2 pe-2 me-3 font-w600 rounded">
												<svg class="me-2" width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.8125 5.54171C17.6264 5.54171 19.1667 7.01538 19.1667 8.89588V11.7709H17.7292V12.7292H16.7708V11.7709H2.39583V12.7292H1.4375V11.7709H0V8.89588C0 7.08201 1.48814 5.54171 3.35417 5.54171H15.8125ZM14.8542 0.270874C16.1425 0.270874 17.2504 1.30663 17.25 2.66671L17.2504 4.95601C16.8146 4.71707 16.3271 4.58337 15.8125 4.58337L14.8542 4.58289C14.8542 3.76226 14.1822 3.14587 13.4167 3.14587H10.5417C10.1735 3.14587 9.8377 3.28427 9.58338 3.51186C9.32939 3.28444 8.99338 3.14587 8.625 3.14587H5.75C4.95625 3.14587 4.31276 3.78921 4.3125 4.58289L3.35417 4.58337C2.83975 4.58337 2.35239 4.71699 1.91667 4.95579V2.66671C1.91667 1.37835 2.95002 0.270874 4.3125 0.270874H14.8542ZM8.625 4.10397C8.88503 4.10397 9.10417 4.34355 9.10417 4.58337L5.27083 4.58289C5.27083 4.28973 5.50427 4.10421 5.75 4.10421L8.625 4.10397ZM13.4167 4.10743C13.6878 4.10397 13.8956 4.33738 13.8958 4.58289H10.0625C10.0625 4.28554 10.2959 4.10421 10.5417 4.10421L13.4167 4.10743Z" fill="#FF6600"/>
												</svg>
												4</a>
												</div>

												<div class="items">
													<a href="property-details.html"><img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 kitchen.jpg" alt="#" class="w-100 mw-100 mb-3 rounded"></a>
													<h5 class="fs-16 font-w600 mb-0"><a href="property-details.html" class="text-black">5BEDROOM CONTEMPORARY DETACHED DUPLEX</a></h5>
													<span class="fs-14 d-block mb-4">Lekki Phase 1</span>
													<a href="javascript:void(0);" class="bgl-primary text-black p-1 ps-2 pe-2 me-3 font-w600 rounded">
													<svg class="me-2" width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M15.8125 5.54171C17.6264 5.54171 19.1667 7.01538 19.1667 8.89588V11.7709H17.7292V12.7292H16.7708V11.7709H2.39583V12.7292H1.4375V11.7709H0V8.89588C0 7.08201 1.48814 5.54171 3.35417 5.54171H15.8125ZM14.8542 0.270874C16.1425 0.270874 17.2504 1.30663 17.25 2.66671L17.2504 4.95601C16.8146 4.71707 16.3271 4.58337 15.8125 4.58337L14.8542 4.58289C14.8542 3.76226 14.1822 3.14587 13.4167 3.14587H10.5417C10.1735 3.14587 9.8377 3.28427 9.58338 3.51186C9.32939 3.28444 8.99338 3.14587 8.625 3.14587H5.75C4.95625 3.14587 4.31276 3.78921 4.3125 4.58289L3.35417 4.58337C2.83975 4.58337 2.35239 4.71699 1.91667 4.95579V2.66671C1.91667 1.37835 2.95002 0.270874 4.3125 0.270874H14.8542ZM8.625 4.10397C8.88503 4.10397 9.10417 4.34355 9.10417 4.58337L5.27083 4.58289C5.27083 4.28973 5.50427 4.10421 5.75 4.10421L8.625 4.10397ZM13.4167 4.10743C13.6878 4.10397 13.8956 4.33738 13.8958 4.58289H10.0625C10.0625 4.28554 10.2959 4.10421 10.5417 4.10421L13.4167 4.10743Z" fill="#FF6600"/>
													</svg>
													4</a>
													</div>

													<div class="items">
														<a href="property-details.html"><img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet 2.jpg" alt="#" class="w-100 mw-100 mb-3 rounded"></a>
														<h5 class="fs-16 font-w600 mb-0"><a href="property-details.html" class="text-black">5BEDROOM CONTEMPORARY DETACHED DUPLEX</a></h5>
														<span class="fs-14 d-block mb-4">Lekki Phase 1</span>
														<a href="javascript:void(0);" class="bgl-primary text-black p-1 ps-2 pe-2 me-3 font-w600 rounded">
														<svg class="me-2" width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M15.8125 5.54171C17.6264 5.54171 19.1667 7.01538 19.1667 8.89588V11.7709H17.7292V12.7292H16.7708V11.7709H2.39583V12.7292H1.4375V11.7709H0V8.89588C0 7.08201 1.48814 5.54171 3.35417 5.54171H15.8125ZM14.8542 0.270874C16.1425 0.270874 17.2504 1.30663 17.25 2.66671L17.2504 4.95601C16.8146 4.71707 16.3271 4.58337 15.8125 4.58337L14.8542 4.58289C14.8542 3.76226 14.1822 3.14587 13.4167 3.14587H10.5417C10.1735 3.14587 9.8377 3.28427 9.58338 3.51186C9.32939 3.28444 8.99338 3.14587 8.625 3.14587H5.75C4.95625 3.14587 4.31276 3.78921 4.3125 4.58289L3.35417 4.58337C2.83975 4.58337 2.35239 4.71699 1.91667 4.95579V2.66671C1.91667 1.37835 2.95002 0.270874 4.3125 0.270874H14.8542ZM8.625 4.10397C8.88503 4.10397 9.10417 4.34355 9.10417 4.58337L5.27083 4.58289C5.27083 4.28973 5.50427 4.10421 5.75 4.10421L8.625 4.10397ZM13.4167 4.10743C13.6878 4.10397 13.8956 4.33738 13.8958 4.58289H10.0625C10.0625 4.28554 10.2959 4.10421 10.5417 4.10421L13.4167 4.10743Z" fill="#FF6600"/>
														</svg>
														4</a>
														</div>
											<div class="items">
												<a href="property-details.html"><img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 cinema.jpg" alt="#" class="w-100 mw-100 mb-3 rounded"></a>
												<h5 class="fs-16 font-w600 mb-0"><a href="property-details.html" class="text-black">98AB Alexander Court, London</a></h5>
												<span class="fs-14 d-block mb-4"> 5 BEDROOM FULLY DETACHED DUPLEX</span>
												<a href="javascript:void(0);" class="bgl-primary text-black p-1 ps-2 pe-2 me-3 font-w600 rounded">
												<svg class="me-2" width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.8125 5.54171C17.6264 5.54171 19.1667 7.01538 19.1667 8.89588V11.7709H17.7292V12.7292H16.7708V11.7709H2.39583V12.7292H1.4375V11.7709H0V8.89588C0 7.08201 1.48814 5.54171 3.35417 5.54171H15.8125ZM14.8542 0.270874C16.1425 0.270874 17.2504 1.30663 17.25 2.66671L17.2504 4.95601C16.8146 4.71707 16.3271 4.58337 15.8125 4.58337L14.8542 4.58289C14.8542 3.76226 14.1822 3.14587 13.4167 3.14587H10.5417C10.1735 3.14587 9.8377 3.28427 9.58338 3.51186C9.32939 3.28444 8.99338 3.14587 8.625 3.14587H5.75C4.95625 3.14587 4.31276 3.78921 4.3125 4.58289L3.35417 4.58337C2.83975 4.58337 2.35239 4.71699 1.91667 4.95579V2.66671C1.91667 1.37835 2.95002 0.270874 4.3125 0.270874H14.8542ZM8.625 4.10397C8.88503 4.10397 9.10417 4.34355 9.10417 4.58337L5.27083 4.58289C5.27083 4.28973 5.50427 4.10421 5.75 4.10421L8.625 4.10397ZM13.4167 4.10743C13.6878 4.10397 13.8956 4.33738 13.8958 4.58289H10.0625C10.0625 4.28554 10.2959 4.10421 10.5417 4.10421L13.4167 4.10743Z" fill="#FF6600"/>
												</svg>
												4</a>
												</div>
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
@extends('layouts.front')

@section('content')
	<div class="navbars" id="navbars">
		<div class="nav-body">
			<div class="nav-contents">
				<div class="list-navs">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">Meet Jennifer</a></li>
					<li><a href="homesearch.html">Property Search</a></li>
					<li><a href="inquiry.html">inquiry</a></li>
					<li><a href="contact.html">contact</a></li>
					<li><a href="+2349021348995">(+234)9021348995</a></li>
				</div>
			</div>
		</div>
	</div>
	</div>


<div class="inquiry section">
    <div class="inquiry-body">
		<div class="head">
			<h6>Got an Inquiry?</h6>
		<p>Start here. It only takes a few seconds.</p>
		</div>
		<form method="post">
			<div class="form-group">
				<label for="type">Inquiry Type <span>*</span></label>
				<select name="type" id="type">
					<option value="">---</option>
					<option value="" id="purchase">Purchase</option>
					<option value="" id="rent">Rent</option>
					<option value="" id="mortage">Mortage</option>
				</select>
			</div>

			
			<div class="form-group">
				<label for="type">Information<span>*</span></label>
				<select name="info" id="info" title="Information">
					<option value="">I am a</option>
					<option value="" id="purchase">first time buyer</option>
					<option value="" id="rent">Real Estate agent</option>
					<option value="" id="mortage">real Estate investor</option>
				</select>
			</div>

			<div class="form-groups">
				<div class="form-group">
					<input type="text" name="Fname" placeholder="Enter first name" title="First Name">
				</div>
				
				<div class="form-group">
					<input type="text" name="Lname" placeholder="Enter last name" title="Last Name">
				</div>
			</div>

			

			<div class="form-groups">
				<div class="form-group">
					<input type="email" name="email" placeholder="Enter email" title="Email">
				</div>
				
				<div class="form-group">
					<input type="text" name="mobile" placeholder="Enter Mobile Number" title="Mobile Number">
				</div>
			</div>

				
			<div class="form-group">
				<label for="type">Property<span>*</span></label>
				<select name="info" id="info" title="Information">
					<option value="">Select type of property interest</option>
					<option value="" id="purchase">first time buyer</option>
					<option value="" id="rent">Real Estate agent</option>
					<option value="" id="mortage">real Estate investor</option>
				</select>
			</div>
			

			<div class="form-groups">
				<div class="form-group">
					<input type="text" name="maxBeds" placeholder="Max Beds" title="Maximum Bedrooms">
				</div>
				
				<div class="form-group">
					<input type="text" name="minBeds" placeholder="Min Beds" title="Minimum Bedrooms">
				</div>
			</div>


			<div class="form-groups">
				<div class="form-group">
					<input type="number" name="maxPrice" placeholder="Max Price" title="Maximum Price">
				</div>
				
				<div class="form-group">
					<input type="number" name="minPrice" placeholder="Min Price" title="Minimum Price">
				</div>
			</div>
		</form>
	</div>
</div>

@endsection
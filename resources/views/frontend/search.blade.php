@extends('layouts.front')

@section('content')
<div class="sections">

        
	<div class="filter-top" id="hanger">
		<div class="search">
			<img src="../../images/icons8-search-50.png" alt="">
			<input type="text" placeholder="address, city, neighborhood">
			</div>

            <div class="filter-btn">
                <i class='bx bx-filter' id="btns"></i>
                </div>
		</div>
    <div class="container-max">
        <div class="row">
                <div class="filter-space" id="filterspace">

                    <div class="reset">
                        <button type="submit">Apply filters</button>
                        <a href="homesearch.html">Reset</a>
                        </div>

                    <div class="search">
                        <p>keywords search</p>
                        <input type="text" placeholder="e.g, swimming pool, BQ, Gym">
                        </div>
                        
                        
                        <div class="property-type">
                            <p>Price Range</p>
                            <div class="containers">
                                <div class="slider-labels">
                                  <div class="caption">
                                    <strong>Min:</strong> <span id="slider-range-value1"></span>
                                  </div>
                                  <div class="text-right caption">
                                    <strong>Max:</strong> <span id="slider-range-value2"></span>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-12">
                                    <div id="slider-range"></div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-12">
                                    <form>
                                      <input type="hidden" name="min-value" value="">
                                      <input type="hidden" name="max-value" value="">
                                    </form>
                                  </div>
                                </div>
                              </div>
                        </div>

                            

                            <div class="property-type">
                                <p>Property types</p>

                    <div class="containers">
                        <div class="select-btn">
                            <span class="btn-text">0 Selected</span>
                            <span class="arrow-dwn">
                                <i class="fa-solid fa-chevron-down"></i>
                            </span>
                        </div>
            
                        <ul class="list-items">
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">Duplex <span class="list-num">10</span></span>
                            </li>
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">Bootstrap</span>
                            </li>
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">JavaScript</span>
                            </li>
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">Node.Js</span>
                            </li>
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">React JS</span>
                            </li>
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">Mango DB</span>
                            </li>
                        </ul>
                    </div>

                                
                                </div>

                            <div class="property-type">
                                <p>Beds</p>
                                
                    <div class="containers">
                        <div class="select-btn">
                            <span class="btn-text">0 Selected</span>
                            <span class="arrow-dwn">
                                <i class="fa-solid fa-chevron-down"></i>
                            </span>
                        </div>
            
                        <ul class="list-items">
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">1 Beds <span class="list-num">10</span></span>
                            </li>
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">2 Beds <span class="list-num">20</span></span>
                            </li>
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">3 Beds <span class="list-num">10</span></span>
                            </li>
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">4 Beds <span class="list-num">10</span></span>
                            </li>
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">5 Beds <span class="list-num">10</span></span>
                            </li>
                            <li class="item">
                                <span class="checkbox">
                                    <i class="fa-solid fa-check check-icon"></i>
                                </span>
                                <span class="item-text">6 Beds+<span class="list-num">10</span></span>
                            </li>
                        </ul>
                    </div>

                                
                                </div>

                                <div class="property-type">
                                    <p>Baths</p>
                                    
                        <div class="containers">
                            <div class="select-btn">
                                <span class="btn-text">0 Selected</span>
                                <span class="arrow-dwn">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </span>
                            </div>
                
                            <ul class="list-items">
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">1 Baths <span class="list-num">10</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">2 Baths <span class="list-num">20</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">3 Baths <span class="list-num">10</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">4 Baths <span class="list-num">10</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">5 Baths <span class="list-num">10</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">6 Baths+<span class="list-num">10</span></span>
                                </li>
                            </ul>
                        </div>
    
                                    
                                    </div>

                                    

                                <div class="property-type">
                                    <p>Property Status</p>
                                    
                        <div class="containers">
                            <div class="select-btn">
                                <span class="btn-text">0 Selected</span>
                                <span class="arrow-dwn">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </span>
                            </div>
                
                            <ul class="list-items">
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">For Sale <span class="list-num">109</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">New Listing <span class="list-num">20</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">Off Plan Project <span class="list-num">10</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">Open House <span class="list-num">10</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">Ready to move in <span class="list-num">10</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">Reduced Price<span class="list-num">10</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">Resale <span class="list-num">10</span></span>
                                </li>
                                <li class="item">
                                    <span class="checkbox">
                                        <i class="fa-solid fa-check check-icon"></i>
                                    </span>
                                    <span class="item-text">Sold Out<span class="list-num">10</span></span>
                                </li>
                            </ul>
                        </div>
    
                                    
                                    </div>

                                    <div class="property-type">
                                        <p>Other Features</p>
                                        
                            <div class="containers">
                                <div class="select-btn">
                                    <span class="btn-text">0 Selected</span>
                                    <span class="arrow-dwn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                                </div>
                    
                                <ul class="list-items">
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Swimming Pool <span class="list-num">9</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">24 hour power supply <span class="list-num">20</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">24 Hour Security<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">24 Hour Water Supply <span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Air Conditioning<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Barbeque<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Boat Jetty<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Dancing Water Display<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">CCTV<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Earth Road<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Dryer<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Electricity<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Elevator<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Estate Lounge<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Fully Fitted Kitchen<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Gate House<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Good Drainage<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Jacuzzi<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Gym<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Kids Playground<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Lagoon Front View<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Laundry<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Microwave<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Lawn<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Outdoor Shower<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Perimeter Fencing<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Refrigerator<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">In-built Bluetooth speakers<span class="list-num">10</span></span>
                                    </li>
                                    <li class="item">
                                        <span class="checkbox">
                                            <i class="fa-solid fa-check check-icon"></i>
                                        </span>
                                        <span class="item-text">Smart home<span class="list-num">10</span></span>
                                    </li>
                                </ul>
                            </div>
        
                                        
                        </div>
                    </div>
                
                    <div class="filter-content">
                        <div class="top">
                            <select name="sort" id="sort">
                                <option value="highest">highest</option>
                                <option value="lowest">lowest</option>
                                <option value="newest">newest</option>
                                <option value="oldest">oldest</option>
                                <option value="largest">largest</option>
                                <option value="smallest">smallest</option>
                                </select>

                                <div class="results">
                                    <p>332 results</p>
                                    </div>
                            </div>

                            <div class="extra-feature">
							<div class="content">
							<div class="extra-img">
								<section aria-label="Newest Photos">
          <div class="carousel" data-carousel>
            <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-chevron-left"></i></button>
            <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-chevron-right"></i></button>
            <ul data-slides>
              

                <li class="slide" data-active>
				<a href="property-single.html">
					<div class="captions">
					<span>featured</span>
					<span>new listing</span>
					<span>off plan project</span>
					</div>
                <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1.jpg" alt="Nature Image #1">
                <div class="under-caption">
					<p class="price">from <span>₦450,000,000</span></p>
					</div>
					</a>
              </li>

              <li class="slide">
                <a href="#">
					<div class="captions">
					<span>featured</span>
					<span>new listing</span>
					<span>for sale</span>
					</div>
                <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet 2.jpg" alt="Nature Image #2">
                <div class="under-caption">
					<p class="price">from <span>₦450,000,000</span></p>
					</div>
					</a>
              </li>
              <li class="slide">
                <a href="#">
					<div class="captions">
					<span>featured</span>
					<span>for sale</span>
					</div>
                <img src="../../images/abuja.jpg" alt="Nature Image #3">
                <div class="under-caption">
					<p class="price">from <span>₦450,000,000</span></p>
					</div>
					</a>
              </li>
              <li class="slide">
                <a href="#">
					<div class="captions">
					<span>featured</span>
					<span>new listing</span>
					<span>off plan project</span>
					</div>
                <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet.jpg" alt="Nature Image #4">
                <div class="under-caption">
					<p class="price">from <span>₦450,000,000</span></p>
					</div>
					</a>
              </li>
            </ul>
          </div>
        </section>
								</div>
            
            <div class="details">
               <a href="#">
                <h5>5BEDROOM CONTEMPORARY DETACHED DUPLEX</h5>
                <div class="asking-prices">
                    <p class="map"><i class='bx bx-map-pin'></i>  <span>Lekki Phase 1, Lagos Nigeria</span></p>
                    <div class="beds">
                        <p><i class='bx bx-bed'></i> 5 Beds</p>
                        <p><i class='bx bx-bath'></i> 5 Baths</p>
                        </div>
                    </div>
                </a>

                    <div class="bottom">
                        <p class="type">Terrace Duplex</p>
                        <p class="view"><a href="#">View Details</a> <i class='bx bx-heart'></i></p>
                        </div>
                </div>
								</div>

                                
							<div class="content">
                                <div class="extra-img">
                                    <section aria-label="Newest Photos">
              <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-chevron-right"></i></button>
                <ul data-slides>
                  
    
                    <li class="slide" data-active>
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>off plan project</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1.jpg" alt="Nature Image #1">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
    
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>for sale</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet 2.jpg" alt="Nature Image #2">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>for sale</span>
                        </div>
                    <img src="../../images/abuja.jpg" alt="Nature Image #3">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>off plan project</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet.jpg" alt="Nature Image #4">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                </ul>
              </div>
            </section>
                                    </div>
                
                <div class="details">
                   <a href="#">
                    <h5>5BEDROOM CONTEMPORARY DETACHED DUPLEX</h5>
                    <div class="asking-prices">
                        <p class="map"><i class='bx bx-map-pin'></i>  <span>Lekki Phase 1, Lagos Nigeria</span></p>
                        <div class="beds">
                            <p><i class='bx bx-bed'></i> 5 Beds</p>
                            <p><i class='bx bx-bath'></i> 5 Baths</p>
                            </div>
                        </div>
                    </a>
    
                        <div class="bottom">
                            <p class="type">Terrace Duplex</p>
                            <p class="view"><a href="#">View Details</a> <i class='bx bx-heart'></i></p>
                            </div>
                    </div>
                                    </div>

                                
							<div class="content">
                                <div class="extra-img">
                                    <section aria-label="Newest Photos">
              <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-chevron-right"></i></button>
                <ul data-slides>
                  
    
                    <li class="slide" data-active>
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>off plan project</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1.jpg" alt="Nature Image #1">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
    
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>for sale</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet 2.jpg" alt="Nature Image #2">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>for sale</span>
                        </div>
                    <img src="../../images/abuja.jpg" alt="Nature Image #3">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>off plan project</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet.jpg" alt="Nature Image #4">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                </ul>
              </div>
            </section>
                                    </div>
                
                <div class="details">
                   <a href="#">
                    <h5>5BEDROOM CONTEMPORARY DETACHED DUPLEX</h5>
                    <div class="asking-prices">
                        <p class="map"><i class='bx bx-map-pin'></i>  <span>Lekki Phase 1, Lagos Nigeria</span></p>
                        <div class="beds">
                            <p><i class='bx bx-bed'></i> 5 Beds</p>
                            <p><i class='bx bx-bath'></i> 5 Baths</p>
                            </div>
                        </div>
                    </a>
    
                        <div class="bottom">
                            <p class="type">Terrace Duplex</p>
                            <p class="view"><a href="#">View Details</a> <i class='bx bx-heart'></i></p>
                            </div>
                    </div>
                                    </div>
                                
                                
							<div class="content">
                                <div class="extra-img">
                                    <section aria-label="Newest Photos">
              <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-chevron-right"></i></button>
                <ul data-slides>
                  
    
                    <li class="slide" data-active>
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>off plan project</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1.jpg" alt="Nature Image #1">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
    
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>for sale</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet 2.jpg" alt="Nature Image #2">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>for sale</span>
                        </div>
                    <img src="../../images/abuja.jpg" alt="Nature Image #3">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>off plan project</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet.jpg" alt="Nature Image #4">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                </ul>
              </div>
            </section>
                                    </div>
                
                <div class="details">
                   <a href="#">
                    <h5>5BEDROOM CONTEMPORARY DETACHED DUPLEX</h5>
                    <div class="asking-prices">
                        <p class="map"><i class='bx bx-map-pin'></i>  <span>Lekki Phase 1, Lagos Nigeria</span></p>
                        <div class="beds">
                            <p><i class='bx bx-bed'></i> 5 Beds</p>
                            <p><i class='bx bx-bath'></i> 5 Baths</p>
                            </div>
                        </div>
                    </a>
    
                        <div class="bottom">
                            <p class="type">Terrace Duplex</p>
                            <p class="view"><a href="#">View Details</a> <i class='bx bx-heart'></i></p>
                            </div>
                    </div>
                                    </div>
                                
                                    <div class="content">
                                        <div class="extra-img">
                                            <section aria-label="Newest Photos">
                      <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-chevron-left"></i></button>
                        <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-chevron-right"></i></button>
                        <ul data-slides>
                          
            
                            <li class="slide" data-active>
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>off plan project</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1.jpg" alt="Nature Image #1">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
            
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>for sale</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet 2.jpg" alt="Nature Image #2">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>for sale</span>
                                </div>
                            <img src="../../images/abuja.jpg" alt="Nature Image #3">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>off plan project</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet.jpg" alt="Nature Image #4">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                        </ul>
                      </div>
                    </section>
                                            </div>
                        
                        <div class="details">
                           <a href="#">
                            <h5>5BEDROOM CONTEMPORARY DETACHED DUPLEX</h5>
                            <div class="asking-prices">
                                <p class="map"><i class='bx bx-map-pin'></i>  <span>Lekki Phase 1, Lagos Nigeria</span></p>
                                <div class="beds">
                                    <p><i class='bx bx-bed'></i> 5 Beds</p>
                                    <p><i class='bx bx-bath'></i> 5 Baths</p>
                                    </div>
                                </div>
                            </a>
            
                                <div class="bottom">
                                    <p class="type">Terrace Duplex</p>
                                    <p class="view"><a href="#">View Details</a> <i class='bx bx-heart'></i></p>
                                    </div>
                            </div>
                                            </div>
                                        
                                        
                                    <div class="content">
                                        <div class="extra-img">
                                            <section aria-label="Newest Photos">
                      <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-chevron-left"></i></button>
                        <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-chevron-right"></i></button>
                        <ul data-slides>
                          
            
                            <li class="slide" data-active>
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>off plan project</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1.jpg" alt="Nature Image #1">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
            
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>for sale</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet 2.jpg" alt="Nature Image #2">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>for sale</span>
                                </div>
                            <img src="../../images/abuja.jpg" alt="Nature Image #3">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>off plan project</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet.jpg" alt="Nature Image #4">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                        </ul>
                      </div>
                    </section>
                                            </div>
                        
                        <div class="details">
                           <a href="#">
                            <h5>5BEDROOM CONTEMPORARY DETACHED DUPLEX</h5>
                            <div class="asking-prices">
                                <p class="map"><i class='bx bx-map-pin'></i>  <span>Lekki Phase 1, Lagos Nigeria</span></p>
                                <div class="beds">
                                    <p><i class='bx bx-bed'></i> 5 Beds</p>
                                    <p><i class='bx bx-bath'></i> 5 Baths</p>
                                    </div>
                                </div>
                            </a>
            
                                <div class="bottom">
                                    <p class="type">Terrace Duplex</p>
                                    <p class="view"><a href="#">View Details</a> <i class='bx bx-heart'></i></p>
                                    </div>
                            </div>
                                            </div>
                                
							<div class="content">
                                <div class="extra-img">
                                    <section aria-label="Newest Photos">
              <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-chevron-right"></i></button>
                <ul data-slides>
                  
    
                    <li class="slide" data-active>
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>off plan project</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1.jpg" alt="Nature Image #1">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
    
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>for sale</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet 2.jpg" alt="Nature Image #2">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>for sale</span>
                        </div>
                    <img src="../../images/abuja.jpg" alt="Nature Image #3">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>off plan project</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet.jpg" alt="Nature Image #4">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                </ul>
              </div>
            </section>
                                    </div>
                
                <div class="details">
                   <a href="#">
                    <h5>5BEDROOM CONTEMPORARY DETACHED DUPLEX</h5>
                    <div class="asking-prices">
                        <p class="map"><i class='bx bx-map-pin'></i>  <span>Lekki Phase 1, Lagos Nigeria</span></p>
                        <div class="beds">
                            <p><i class='bx bx-bed'></i> 5 Beds</p>
                            <p><i class='bx bx-bath'></i> 5 Baths</p>
                            </div>
                        </div>
                    </a>
    
                        <div class="bottom">
                            <p class="type">Terrace Duplex</p>
                            <p class="view"><a href="#">View Details</a> <i class='bx bx-heart'></i></p>
                            </div>
                    </div>
                                    </div>
                                
                                
							<div class="content">
                                <div class="extra-img">
                                    <section aria-label="Newest Photos">
              <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-chevron-right"></i></button>
                <ul data-slides>
                  
    
                    <li class="slide" data-active>
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>off plan project</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1.jpg" alt="Nature Image #1">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
    
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>for sale</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet 2.jpg" alt="Nature Image #2">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>for sale</span>
                        </div>
                    <img src="../../images/abuja.jpg" alt="Nature Image #3">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                  <li class="slide">
                    <a href="#">
                        <div class="captions">
                        <span>featured</span>
                        <span>new listing</span>
                        <span>off plan project</span>
                        </div>
                    <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet.jpg" alt="Nature Image #4">
                    <div class="under-caption">
                        <p class="price">from <span>₦450,000,000</span></p>
                        </div>
                        </a>
                  </li>
                </ul>
              </div>
            </section>
                                    </div>
                
                <div class="details">
                   <a href="#">
                    <h5>5BEDROOM CONTEMPORARY DETACHED DUPLEX</h5>
                    <div class="asking-prices">
                        <p class="map"><i class='bx bx-map-pin'></i>  <span>Lekki Phase 1, Lagos Nigeria</span></p>
                        <div class="beds">
                            <p><i class='bx bx-bed'></i> 5 Beds</p>
                            <p><i class='bx bx-bath'></i> 5 Baths</p>
                            </div>
                        </div>
                    </a>
    
                        <div class="bottom">
                            <p class="type">Terrace Duplex</p>
                            <p class="view"><a href="#">View Details</a> <i class='bx bx-heart'></i></p>
                            </div>
                    </div>
                                    </div>
                                
                                    <div class="content">
                                        <div class="extra-img">
                                            <section aria-label="Newest Photos">
                      <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-chevron-left"></i></button>
                        <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-chevron-right"></i></button>
                        <ul data-slides>
                          
            
                            <li class="slide" data-active>
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>off plan project</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1.jpg" alt="Nature Image #1">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
            
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>for sale</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet 2.jpg" alt="Nature Image #2">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>for sale</span>
                                </div>
                            <img src="../../images/abuja.jpg" alt="Nature Image #3">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>off plan project</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet.jpg" alt="Nature Image #4">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                        </ul>
                      </div>
                    </section>
                                            </div>
                        
                        <div class="details">
                           <a href="#">
                            <h5>5BEDROOM CONTEMPORARY DETACHED DUPLEX</h5>
                            <div class="asking-prices">
                                <p class="map"><i class='bx bx-map-pin'></i>  <span>Lekki Phase 1, Lagos Nigeria</span></p>
                                <div class="beds">
                                    <p><i class='bx bx-bed'></i> 5 Beds</p>
                                    <p><i class='bx bx-bath'></i> 5 Baths</p>
                                    </div>
                                </div>
                            </a>
            
                                <div class="bottom">
                                    <p class="type">Terrace Duplex</p>
                                    <p class="view"><a href="#">View Details</a> <i class='bx bx-heart'></i></p>
                                    </div>
                            </div>
                                            </div>
                                        
                                        
                                    <div class="content">
                                        <div class="extra-img">
                                            <section aria-label="Newest Photos">
                      <div class="carousel" data-carousel>
                        <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-chevron-left"></i></button>
                        <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-chevron-right"></i></button>
                        <ul data-slides>
                          
            
                            <li class="slide" data-active>
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>off plan project</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1.jpg" alt="Nature Image #1">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
            
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>for sale</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet 2.jpg" alt="Nature Image #2">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>for sale</span>
                                </div>
                            <img src="../../images/abuja.jpg" alt="Nature Image #3">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                          <li class="slide">
                            <a href="#">
                                <div class="captions">
                                <span>featured</span>
                                <span>new listing</span>
                                <span>off plan project</span>
                                </div>
                            <img src="images/5BEDROOM CONTEMPORARY DETACHED DUPLEX lekki phase 1 closet.jpg" alt="Nature Image #4">
                            <div class="under-caption">
                                <p class="price">from <span>₦450,000,000</span></p>
                                </div>
                                </a>
                          </li>
                        </ul>
                      </div>
                    </section>
                                            </div>
                        
                        <div class="details">
                           <a href="#">
                            <h5>5BEDROOM CONTEMPORARY DETACHED DUPLEX</h5>
                            <div class="asking-prices">
                                <p class="map"><i class='bx bx-map-pin'></i>  <span>Lekki Phase 1, Lagos Nigeria</span></p>
                                <div class="beds">
                                    <p><i class='bx bx-bed'></i> 5 Beds</p>
                                    <p><i class='bx bx-bath'></i> 5 Baths</p>
                                    </div>
                                </div>
                            </a>
            
                                <div class="bottom">
                                    <p class="type">Terrace Duplex</p>
                                    <p class="view"><a href="#">View Details</a> <i class='bx bx-heart'></i></p>
                                    </div>
                            </div>
                                            </div>
							</div>

                    <div class="pagination">
                        <ul> 
                           <li class="prev"><i class='bx bx-chevrons-left'></i></li>
                           <li>1</li>
                           <li>2</li>
                           <li>3</li>
                           <li>4</li>
                           <li class="next"><i class='bx bx-chevrons-right'></i></li> 
                        </ul>
                    </div>
                    @endsection
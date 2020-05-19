@extends('layouts.main')

@section('content')

<section class="pt-1"></section>
        <section class="banner2">
            
            <div class="h6 pt-5"> Home / Apartments /  <span class="green">Houston Villa, 3 Bedroom Flat</span></div>
                  
    
            <form>
                <div class="search">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search for apartments">
                </div>
    
                <div class="select-box">
                    <div class="options-container">
                        <div class="option">
                            <input type="radio" class="radio" id="lagos" name="categoary" />
                            <label for="lagos">Lagos</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="ogun" name="categoary" />
                            <label for="ogun">Ogun</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="abuja" name="categoary" />
                            <label for="abuja">Abuja</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="kano" name="categoary" />
                            <label for="kano">Kano</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="ibadan" name="categoary" />
                            <label for="ibadan">Ibadan</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="ekiti" name="categoary" />
                            <label for="ekiti">Ekiti</label>
                        </div>
                    </div>
    
                    <div class="selected">
                       State
                    </div>
                </div>
    
                <button>Search</button>
            </form>
        </section>
        <section class="intro" style="margin-left: 40px;">
            <div class="col container1">
            <div class="float-left">
                <div class="h2"> Houston Villa, 3 Bedroom Flat </div>
                <div>
                    <i class="fa fa-map-marker"></i> <span class="place">Gbagada, Lagos</span> <span> <i class="fa fa-star"></i> 4.6</span> <span class="reviews">(23 reviews)</span>
                </div>
            </div>
        

            <button class="btn btn-success f-right pl-4 pr-4 my-2 btn-lg">N580,000</button>
        
        </div>
        </section>
        
<div class="clearfix"></div>
<div class="clearfix"></div>


<section class="intro" style="margin-left: 40px;">
    <div class="flex  bed-cont">
        <div class="p-1">
            <div class="check-btn btn btn-lg">
                Gbagada
            </div>
        </div>
        <div class="p-1">
            <div class="check-btn btn btn-lg">
                3 bedroom
            </div>
        </div>
        <div class="p-1">
            <div class="check-btn btn btn-lg">
                modern
            </div>
        </div>
                       
    </div>
    

</section>



<section class="featured-apartment">
 

    <div class="apartment">
        <div class="apartment-wrapper">
            <div class="apartment-img"></div>

            
        </div>

        <div class="apartment-wrapper">
            <div class="apartment-img ap-img2"></div>

            <div class="description-wrapper">
               
            </div>
        </div>

        <div class="apartment-wrapper ap-img3">
            <div class="apartment-img">

                
            </div>
            <div class="flex" style="margin-top: -50px !important;">
               <div class="p-1"><div class="check-btn"><i class="fa fa-tag"></i> Save</div></div>
       <div class="p-1"><div class="check-btn"> More Photos</div></div>
        </div>
            <div class="description-wrapper">
               
            </div>
        </div>

       

        </div>
    </div>

  
</section>

<section class="intro" style="margin-left: 30px;">
    <div class="col">
    <div class="float-left w500" >
    <div class="flex container">
        <div class="p-1"> 
            <div class="square btn btn-lg">
                <div class="p-3">
                    <div class="green h2">2</div>
                    <div class="h6">
                        Bedrooms
                    </div>
                </div>

        </div></div>
        <div class="p-1"> 
            <div class="square btn btn-lg">
                <div class="p-3">
                    <div class="green h2">3</div>
                    <div class="h6">
                        Bedrooms
                    </div>
                </div>

        </div></div>
        <div class="p-1"> 
            <div class="square btn btn-lg">
                <div class="p-3">
                    <div class="green h2">1</div>
                    <div class="h6">
                        Guestroom
                    </div>
                </div>

        </div></div>
    </div>
        <div class="h5 pt-2 com">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
        </div>
    </div>
    <section class="float-right">
        <div class="my-4">
            <div class="container bootstrap snippet">
                
                <div class="row">
                    <div class=""><!--left col-->
                        
            
                <div class="text-center">
                    <img src="{{ asset('uploads/images/Ellipse 15.png') }}" class="avatar img-circle" alt="avatar">
                    <div class="p-1"> Samuel Kubwa<span class="check"><i class="fa fa-check"></i></span></div>
                    <div class="join"> Agent. Joined 2020</div>
                    <div class="p-1">
                        <a href="#" class="btn-floating btn-outline-secondary btn-lg " type="button" role="button" style="border: 1px solid black;">Contact Agent</a>
                    </div>
                
                </div></hr><br>
            </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    </div>
</section>
<div></div>
<section class="clearfix"></section>


<section class="container"><hr></section>





<div class="l-c"><h5 class="pl-5 h1">Amenities</h5>
    <div class="gray pl-5">These amenities are available</div></div>


    <section class="apartment-by-features pt-2">
        <div>
            <img src="{{ asset('uploads/images/icons/image 3.png') }}" alt="Water" />
            <p>Water</p>
        </div>
        <div>
            <img src="{{ asset('uploads/images/icons/image 4.png') }}" alt="Electricity" />
            <p>Electricity</p>
        </div>
        <div>
            <img src="{{ asset('uploads/images/icons/image 5.png') }}" alt="Ensuite" />
            <p>Ensuite</p>
        </div>
        <div>
            <img src="{{ asset('uploads/images/icons/image 6.png') }}" alt="Car Park" />
            <p>Car Park</p>
        </div>
        <div>
            <img src="{{ asset('uploads/images/icons/image 7.png') }}" alt="Security" />
            <p>Security</p>
        </div>
        <div>
            <img src="{{ asset('uploads/images/icons/image 8.png') }}" alt="Tiled" />
            <p>Tiled</p>
        </div>
    </section>
            <div class="pl-5">
                <a href="#" class="green"> See all amenities</a>
            </div>
        <br>
       

        <section class="pt-4 intro" style="margin-left: 40px;">
            <div class="col container1">
                <div class="float-left">
                    <div class="h1"> Reviews</div>
                    <div>
                        </i> <span class="place">How others rated this apartment</span> 
                    </div>
                </div>
                
            
                <button class="btn btn-success f-right pl-4 pr-4 my-2 btn-lg">Add Review</button>
                
            </div>
        </section>
        <section class="clearfix"></section>
            <section class="testimony-wrapper">
               
                    
                
        
                <div class="testimony-text-wrapper carousel carousel-main" data-flickity='{"prevNextButtons": false}'>
                    <div class="carousel-cell">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis delectus aperiam enim consequuntur fuga. Eligendi sit nobis molestiae exercitationem eos ad consectetur deserunt libero, nulla id hic, dignissimos repudiandae accusamus!</p>
        
                        <h3>John Smith, Batch C '14</h3>
                    </div>
        
                    <div class="carousel-cell">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis delectus aperiam enim consequuntur fuga. Eligendi sit nobis molestiae exercitationem eos ad consectetur deserunt libero, nulla id hic, dignissimos repudiandae accusamus!</p>
        
                        <h3>Judas Smith, Batch C '14</h3>
                    </div>
        
                    <div class="carousel-cell">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis delectus aperiam enim consequuntur fuga. Eligendi sit nobis molestiae exercitationem eos ad consectetur deserunt libero, nulla id hic, dignissimos repudiandae accusamus!</p>
        
                        <h3>Samuel Smith, Batch C '14</h3>
                    </div>
        
                    <div class="carousel-cell">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis delectus aperiam enim consequuntur fuga. Eligendi sit nobis molestiae exercitationem eos ad consectetur deserunt libero, nulla id hic, dignissimos repudiandae accusamus!</p>
        
                        <h3>Elena Smith, Batch C '14</h3>
                    </div>
        
                    <div class="carousel-cell">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis delectus aperiam enim consequuntur fuga. Eligendi sit nobis molestiae exercitationem eos ad consectetur deserunt libero, nulla id hic, dignissimos repudiandae accusamus!</p>
        
                        <h3>Mary Smith, Batch C '14</h3>
                    </div>
                </div>
                  
                  <div class="testimony-img carousel carousel-nav"
                  data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false, "prevNextButtons": false}'>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                  </div>
            </section>
<!--end of testimonial carousel-->





<section  class="container pb-3 pt-3 " style="text-align: center;" >
    <iframe style="width: 80vw;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d63416.36193707503!2d3.32176615!3d6.5817631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1587166934276!5m2!1sen!2sng"  height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

@endsection

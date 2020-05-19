@extends('layouts.main')
@section('content')

    <section class="banner">
        <h1>
            Get unique and comfortable
            <span class="typewrite" data-period="2000" data-type='[ "Hostels", "Apartments"]'>
            <span class="wrap"></span>
            </span><br>
            in over 34 states.
        </h1>

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

    <section class="featured-apartment">
        <h2>Featured Apartments</h2>

        <div class="apartment">
        @forelse ($lodges as $lodge)
            <div class="apartment-wrapper">
                <div class="apartment-img">
                    <img class="apartment-img" src="uploads/lodges/{{ $lodge->image }}" alt="">
                </div>

                <div class="description-wrapper">
                    <div class="description">
                        <a href="/lodge/single">{{ $lodge->lodge_name }}</a>
                        <h3>{{ $lodge->lodge_type }}</h3>
                        <p>{{ $lodge->price }} / Mn</p>
                    </div>

                    <div class="review">
                        <h3><i class="fas fa-star"></i>4.0</h3>
                        <p>23 Reviews</p>
                    </div>
                </div>
            </div>
            @empty

            <div class="text-center">
                No Lodges Yet
            </div>
            @endforelse
        </div>

        <a href="#" class="more">More classic apartments</a>
    </section>

    <section class="city-wrapper">
        <div class="main-city">
            <p>Lagos</p>
        </div>

        <div class="sub-cities">
            <div class="city-1">
                <p>Abuja</p>
            </div>
            <div class="city-2">
                <p>Kano</p>
            </div>
            <div class="city-3">
                <p>Portharcourt</p>
            </div>
            <div class="city-4">
                <p>Ibadan</p>
            </div>
        </div>
    </section>

    <section class="other-states">
        <h2>Other States</h2>

        <div>
            <ul>
                <li><a href="#">Abia State</a></li>
                <li><a href="#">Adamawa State</a></li>
                <li><a href="#">Akwa-Ibom State</a></li>
            </ul>

            <ul>
                <li><a href="#">Bauchi State</a></li>
                <li><a href="#">Bayelsa State</a></li>
                <li><a href="#">Benue-Ibom State</a></li>
            </ul>

            <ul>
                <li><a href="#">Crossriver State</a></li>
                <li><a href="#">Delta State</a></li>
                <li><a href="#">Ebonyi State</a></li>
            </ul>

            <ul>
                <li><a href="#">Ekiti State</a></li>
                <li><a href="#">Enugu State</a></li>
                <li><a href="#">Gombe-Ibom State</a></li>
            </ul>

            <ul>
                <li><a href="#">Anambra State</a></li>
                <li><a href="#">Borno State</a></li>
                <li><a href="#">Edo State</a></li>
            </ul>

            <ul>
                <li><a href="#">Imo State</a></li>
                <li><a href="#">Ogun State</a></li>
                <li><a href="#" class="see-all">See all States</a></li>
            </ul>
        </div>
    </section>

    <section class="apartment-by-features">
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

    <section class="testimony-wrapper">
        <h2>What Corpers are saying</h2>

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
    
@endsection
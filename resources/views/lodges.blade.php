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

@endsection
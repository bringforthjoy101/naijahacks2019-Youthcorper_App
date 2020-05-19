@extends('layouts.main')

@section('content')

<section class="pt-1 text-center container">
     <div class="h1 pt-5"> Corper Profile</div>
</section>

<section class="featured-apartment flex flex-wrap">
    <section class="p-4">
        <div class="text-center">
        <!-- images/Ellipse 15.png --> 
            <img src="{{ asset('uploads/images/Ellipse 15.png') }}" class="avatar img-circle" alt="avatar">
            <div class="p-1"> {{Auth::user()->full_name}}<div>
            <div class="join">{{Auth::user()->username}}</div>
            <div class="join">{{Auth::user()->email}}</div>
            <div class="join"><b>Call-up Number:</b> {{Auth::user()->call_up}}</div>
            <div class="join"><b>State Code:</b> {{Auth::user()->state_code}}</div>
            <div class="p-1">
                
            <div class="p-1">
                <a href="#" class="btn btn-outline-secondary btn-lg green" type="button" role="button" style="border: 1px solid gray;  width: 200px; ">My Properties</a>
            </div>
            <div class="p-1">
                <a href="#" class="btn btn-lg green" type="button" role="button" style="border: 1px solid gray; width: 200px;">Get Apartment</a>
            </div>
            <div class="p-1">
                <a href="#" class="btn btn-lg green" type="button" role="button" style="border: 1px solid gray;  width: 200px;">Sell Properties</a>
        
            </div>
                
                <div class="p-1">
                    <a href="/lodge/create" class="btn  btn-lg green " type="button" role="button" style="border: 1px solid grey; width: 200px;">Add Apartment</a>
            
                </div>
            
            </div>
        
        </div>
    </section>
    <section>
        <section class="p-3 flex flex-wrap">
            <div style="width: 400px; padding-right: 40px;" class="ap-w">
                <img src="{{ asset('uploads/images/apartments/kitchen.jpg') }}" width="400px" class="ap-w" alt="">
                <div class="ap-w">
                    <hr>
                    <div><b>Type:</b> 1 bedroom flat</div>
                    <hr>
                    <div><b>Location:</b> Lagos</div>
                </div>

                
            </div>
            <div style="width: 400px;" class="pt-5 pl-2 ap-w">
                <img src="{{ asset('uploads/images/apartments/kitchen.jpg') }}" width="400px" class="ap-w" alt="">
            </div>
            
        </section>
        <div  class="green h1 pt-3 text-center">
            <div class="p-1">
                <a href="#" class="btn btn-lg green " type="button" role="button" style="border: 1px solid grey; width: 200px;">See More <i class="fa fa-angle-right"></i></a>
        
            </div>
        </div>
    </section>
</section>

@endsection

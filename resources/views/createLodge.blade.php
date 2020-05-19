@extends('layouts.main')

@section('content')

<section class="pt-1 text-center">
    <div class="h1 pt-5"> UPLOAD APARTMENT</div>
</section>

<section class="featured-apartment flex flex-wrap center">
 
    <form style="max-width: 600px;" method="POST" action="{{ route('lodges.store') }}">
        
        <!-- to error: add class "has-danger" -->
        <div class="form-group">
            <label for="lodge_name" class="h3">Lodge Name</label>
            <input type="text" name="lodge_name" class="form-control form-control-lg" id="lodge_name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="lodge_type" class="h3">Lodge Type</label>
            <input type="text" name="lodge_type" class="form-control form-control-lg" id="lodge_type" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="description" class="h3">Description</label>
            <input type="text" name="description" class="form-control form-control-lg" placeholder="Description" id="description" aria-describedby="emailHelp">
        </div>
        <label for="address" class="h3">Amenities</label>
            <input type="text" name="amenities" class="form-control form-control-lg" placeholder="Water, Electricity..." id="amenities" aria-describedby="emailHelp">
            <input type="hidden" name="agent_id"value="{{Auth::user()->id}}">
        </div>
        <div class="form-group">
            <label for="price" class="h3">Price</label>
            <input type="text" name="price" class="form-control form-control-lg" placeholder="-N-" id="price" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="state" class="h3">State</label>
            <input type="text" class="form-control form-control-lg" placeholder="State" id="state" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="local_govt" class="h3">Local Government</label>
            <input type="text" name="local_govt" class="form-control form-control-lg" placeholder="Local Government" id="local_govt" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="address" class="h3">Address</label>
            <input type="text" name="address" class="form-control form-control-lg" placeholder="Address" id="address" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
        

        <!-- <div class="form-group">
            <label for="image" class="h3">Image</label>
            
            <input type="file" class="form-control form-control-lg"  id="input">
        </div>
        <br>
        <div class="h2 bold">Description</div>
        <div class="flex flex-wrap">
            <div class="p-2 bold h3">Bathroom, toilet and kitchen</div>
            <div class="flex p-2">
                <div class="p-1"><input type="radio" name="yes1" value="yes">
                    <label for="yes" >YES</label></div>
            <div class="p-1"> 
                <input type="radio" name="yes1" value="no" >
            <label for="no" >NO</label>
            </div>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="p-2 bold h3">Bathroom and toilet only</div>
            <div class="flex p-2">
                <div class="p-1"><input type="radio" name="yes2" value="yes">
                    <label for="yes" >YES</label></div>
            <div class="p-1"> 
                <input type="radio" name="yes2" value="no" >
            <label for="no" >NO</label>
            </div>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="p-2 bold h3">Kitchen only</div>
            <div class="flex p-2">
                <div class="p-1"><input type="radio" name="yes3" value="yes">
                    <label for="yes" >YES</label></div>
            <div class="p-1"> 
                <input type="radio" name="yes3" value="no" >
            <label for="no" >NO</label>
            </div>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="p-2 bold h3">Tilled</div>
            <div class="flex p-2">
                <div class="p-1"><input type="radio" name="yes4" value="yes">
                    <label for="yes" >YES</label></div>
            <div class="p-1"> 
                <input type="radio" name="yes4" value="no" >
            <label for="no" >NO</label>
            </div>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="p-2 bold h3">Needs Painting</div>
            <div class="flex p-2">
                <div class="p-1"><input type="radio" name="yes5" value="yes">
                    <label for="yes" >YES</label></div>
            <div class="p-1"> 
                <input type="radio" name="yes5" value="no" >
            <label for="no" >NO</label>
            </div>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="p-2 bold h3">Water available</div>
            <div class="flex p-2">
                <div class="p-1"><input type="radio" name="yes6" value="no">
                    <label for="no" >NO</label></div>
            
            <div class="p-1"> 
                <input type="radio" name="yes6" value="well" >
            <label for="well" >WELL</label>
            </div>
            <div class="p-1"> 
                <input type="radio" name="yes6" value="tap" >
            <label for="tap" >TAP</label>
            </div>
        </div> -->
        
            </div>
            <br>
            <input type="checkbox"><span>I agree to the penalty of false information</span>
        </div>
       
        
        <div class="flex flex-wrap center">
            <div class="p-1">
            <input type="submit" name="signup" class="btn-floating btn-outline-secondary btn-lg gg" value="Add Apartment">
                <!-- <a href="#" class="btn-floating btn-outline-secondary btn-lg gg" type="button" role="button"><i class="fa fa-upload"></i>Upload</a> -->
            </div>
            <!-- <div class="p-1">
                <a href="#" class="btn-floating btn-outline-secondary btn-lg gg" type="button" role="button"><i class="fa fa-draft"></i>See draft</a>
            </div> -->
            <div class="p-1">
                <a href="/profile" class="btn-floating btn-outline-secondary btn-lg gg" type="button" role="button"><i class="fa fa-cancel"></i>Cancel</a>
            </div>   
        </div>
        
    </form>
   
  
</section>

@endsection

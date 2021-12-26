@extends('admin.includes.master')

@section('content')
<h3>Rooms details</h3>
<form method="POST" enctype="multipart/form-data" action="{{route("rooms.store")}}" class="d-inline-block w-50" style="margin-left: 25%;">
    @csrf
    
<div class="sparkline10-graph col-sm-9 ">
    <div class="form-group">
        <select name="category_id" class="form-control">
            <option value="none" selected="" disabled="">Select Category</option>
            @foreach ($categories as $category)
            <option value="{{$category ->id}}">{{$category ->category_name}}</option>
            @endforeach
            
           
        </select>
    </div>
     <div class="form-group">
        <select name="number_of_beds" class="form-control">
                <option value="number_of_beds" selected="" disabled="">Number Of Bed</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
    </div> 	
    <div class="form-group">
        <select name="price" class="form-control">
                <option value="price" selected="" disabled="">price</option>
                <option value="30">40</option>
                <option value="60">60</option>
                <option value="90">90</option>
                <option value="90">120</option>
            </select>
    </div> 
    <div class="form-group">
        <select name="has_balcony" class="form-control">
                <option value="has_balcony" selected="" disabled="">with Balcony</option>
                <option value="1">yes</option>
                <option value="0">No</option>
            </select>
    </div> 
    <div class="form-group">
        <select name="has_sea_view" class="form-control">
                <option value="has_sea_view" selected="" disabled="">with sea view </option>
                <option value="1">yes</option>
                <option value="0">No</option>
            </select>
    </div> 
    <div class="form-group">
        <select name="status" class="form-control">
                <option value="status" selected="" disabled="">Status</option>
                <option value="1">Available</option>
                <option value="0">Unavailable</option>
            </select>
    </div>
    <div class="form-group res-mg-t-15">
        <textarea name="room_description" placeholder="Room Description"></textarea>
    </div>
    
    <div class="form-group ">
        <label>Room Image</label>
        <input type="file" name="room_img" class="form-control">
      </div>
    <button class="btn btn-success loginbtn ml-6">Add room</button>
</div>

</form>



@endsection 

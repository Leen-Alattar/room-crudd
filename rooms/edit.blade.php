@extends('admin.includes.master')

@section('content')
<h3>Rooms details</h3>
<form method="POST" enctype="multipart/form-data" action="{{route("rooms.update" , $room->id)}}" class="d-inline-block w-50" style="margin-left: 25%;">
    @csrf
    @method("PUT")
    
<div class="sparkline10-graph col-sm-9 ">
    <div class="form-group">
        <select name="category_id" class="form-control">
            <option value="" selected="" disabled="">{{$room->category->category_name}}</option>
            @foreach ($categories as $category)
            <option value="{{$category ->id}}">{{$category ->category_name}}</option>
            @endforeach
            
           
        </select>
    </div>
     <div class="form-group">
        <select name="number_of_beds" class="form-control">
                <option value="{{$room->number_of_beds}}" selected="" disabled="">{{$room->number_of_beds}}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
    </div> 	
    <div class="form-group">
        <select name="price" class="form-control">
                <option value="{{$room->price}}" selected="" disabled="">{{$room->price}}</option>
                <option value="30">30</option>
                <option value="60">60</option>
                <option value="90">90</option>
            </select>
    </div> 
    <div class="form-group">
        <select name="has_balcony" class="form-control">
                <option value="{{$room->has_balcony}}" selected="" disabled="">{{$room->has_balcony}}</option>
                <option value="1">yes</option>
                <option value="0">No</option>
            </select>
    </div> 
    <div class="form-group">
        <select name="has_sea_view" class="form-control">
                <option value="{{$room->has_sea_view}}" selected="" disabled="">{{$room->has_sea_view}}</option>
                <option value="1">yes</option>
                <option value="0">No</option>
            </select>
    </div> 
    <div class="form-group">
        <select name="status" class="form-control">
                <option value="{{$room->status}}" selected="" disabled="">{{$room->status}}</option>
                <option value="1">Available</option>
                <option value="0">Unavailable</option>
            </select>
    </div>
    <div class="form-group res-mg-t-15">
        <textarea name="room_description" placeholder="">{{$room->room_description}}</textarea>
    </div>
    <div class="form-group ">
        <label>Room Image</label>
        <img src="{{asset("images/" . $room->room_img)}}" alt="Image">
      </div>
    <button class="btn btn-success loginbtn ml-6">edit room</button>
</div>

</form>



@endsection 

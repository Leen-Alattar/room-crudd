@extends('admin.includes.master')

@section('content')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Room List</h4>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Catergory </th>
                                <th>Number of bed </th>
                                <th>Price/night</th>
                                <th>Sea View  </th>
                                <th>with Balcony </th>      
                                <th>Status </th>
                                <th>Room description</th>
                                <th>Room Img </th>
                                <th></th>
                                <th></th>
                            </tr>
                
                            <tr>
                                @foreach ($rooms as $room)
                                <td>{{$room->category->category_name}}</td> 
                                <td>{{$room->number_of_beds}}</td>
                                <td>{{$room->price}}</td>
                                <td>{{$room->has_balcony}}</td>
                                <td>{{$room->has_sea_view}}</td>
                                <td>{{$room->status}}</td> 
                                <td>{{$room->room_description}}</td>
                                <td><img class ="w-20" src="{{asset("images/" . $room->room_img)}}" alt="Image"></td>
                                <td>
                                     <form action = "{{route("rooms.destroy" , $room->id )}} " method = "POST">
                                         @csrf
                                        @method('delete')
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form> </td>
                                <td>
                                   
                                    <a href= "{{route("rooms.edit" , $room->id )}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                   
                               </td>     
                            </tr>
                            @endforeach
                               
                        </table>
                      
                            <a href="{{route("rooms.create")}}">
                        <button type="button" class="btn btn-primary">Add </button>
                            </a>
                    </div>


@endsection 

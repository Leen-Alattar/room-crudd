<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\room;
use Illuminate\Http\Request;
use App\Http\Requests\StoreroomRequest;
use App\Http\Requests\UpdateroomRequest;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $categories = Category::all();
        $rooms = Room::all();
        return view('admin.rooms.rooms',compact('rooms','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories = Category::all();
        return view('admin.rooms.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreroomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newImageName = time() . '-' . $request->room_img->getClientOriginalName();//get the name of the file with the extention 

        $request->room_img->move(public_path('images'), $newImageName);
        $room  = new room(); // object from the model 
        $room->category_id      = $request->category_id;
        $room->number_of_beds       = $request->number_of_beds;
        $room->price                = $request->price;
        $room->has_balcony          = $request->has_balcony ;
        $room->has_sea_view        = $request->has_sea_view ;
        $room->status               = $request->status  ;
        $room->room_img             = $newImageName;
    
        //object from model / attribute name / request object from class request store the data from the form 
        $room->save();
        return redirect()->route("rooms.index");//movies here is the url 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(room $room)
    {
        $categories = Category::all();
        return view ("admin.rooms.edit" , compact('room' , 'categories'));
          
        // $categories = Category::all();
        // return view('admin.rooms.index',[
        //     "room" -> $room ,
        //     "categories" -> $categories , 

        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateroomRequest  $request
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, room $room)
    {  
        $room -> update(request()->all());
        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(room $room)
    {
        $room -> delete();
        return redirect()->route('rooms.index');
    }

    public function test(){
        $room=new room();
        $room->number_of_beds=5;
        $room->price=10;
        $room->has_balcony=true;
        $room->has_sea_view=true;
        $room->status=false;
        $room->room_img="fwdefdgokgm";
        $room->category_id=2;
        $room->save();
    }
}

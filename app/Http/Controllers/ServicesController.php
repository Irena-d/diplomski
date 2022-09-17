<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Breeder;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function breeders () {
        $breeders = Breeder::all();
        return view('breeders', ['breeders' => $breeders]);
    }
    public function vets () {
        return view('vets');
    }
    public function educators () {
        return view('educators');
    }
    public function welfare () {
        return view('welfare');
    }
    public function groomers () {
        return view('groomers');
    }
    public function walkers () {
        return view('walkers');
    }
    public function addbreeder () {
        return view('addbreeder');
    }

    public function add (Request $request) {
        $breeder=$request->input('breeder');
        $breed=$request->input('breed');
        $age=$request->input('breeder');
        $location=$request->input('location');
        $price=$request->input('price');
        $phone=$request->input('phone');
        $photo=$request->file('photo');
        $filename=date('YmdHi').$photo->getClientOriginalName();
        $photo->move(public_path('public/images'), $filename);
        $data=array("breeder"=>$breeder, "breed"=>$breed, "age"=>$age, "location"=>$location, "price"=>$price, "phone"=>$phone, "photo"=>$filename);
        DB::table('breeders')->insert($data);

        return redirect()->route('services.breeders');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

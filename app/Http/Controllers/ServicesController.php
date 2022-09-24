<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Breeder;
use App\Models\Educator;
use Illuminate\Support\Facades\DB;
use App\Models\Vet;
use App\Models\Groomer;
use App\Models\WalkersAndKeepers;

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
        $vets = Vet::all();
        return view('vets', ['vets' => $vets]);
    }
    public function educators () {
        $educators = Educator::all();
        return view('educators', ['educators' => $educators]);
    }
    public function welfare () {
        return view('welfare');
    }
    public function groomers () {
        $groomers = Groomer::all();
        return view('groomers', ['groomers' => $groomers]);
    }
    public function walkers () {
        $walkers = WalkersAndKeepers::all();
        return view('walkers', ['walkers' => $walkers]);
    }
    public function addbreeder () {
        return view('addbreeder');
    }
    public function addvet () {
        return view('addvet');
    }
    public function addgroomer () {
        return view('addgroomer');
    }
    public function addwalker () {
        return view('addwalker');
    }
    public function addeducator () {
        return view('addeducator');
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

    public function addV (Request $requesta) {
        $vet=$requesta->input('vet');
        $location=$requesta->input('location');
        $phone=$requesta->input('phone');
        $mail=$requesta->input('mail');
        $photo=$requesta->file('photo');
        $filename=date('YmdHi').$photo->getClientOriginalName();
        $photo->move(public_path('public/images'), $filename);
        $data=array("vet"=>$vet, "location"=>$location, "phone"=>$phone, "mail"=>$mail, "photo"=>$filename);
        DB::table('vets')->insert($data);

        return redirect()->route('services.vets');
    }

    public function addG (Request $request) {
        $groomer=$request->input('groomer');
        $salon=$request->input('salon');
        $location=$request->input('location');
        $phone=$request->input('phone');
        $mail=$request->input('mail');
        $photo=$request->file('photo');
        $filename=date('YmdHi').$photo->getClientOriginalName();
        $photo->move(public_path('public/images'), $filename);
        $data=array("groomer"=>$groomer, "salon"=>$salon, "location"=>$location, "phone"=>$phone, "mail"=>$mail, "photo"=>$filename);
        DB::table('groomers')->insert($data);

        return redirect()->route('services.groomers');
    }

    public function addW (Request $request) {
        $walker=$request->input('walker');
        $myservice=$request->input('myservice');
        $location=$request->input('location');
        $phone=$request->input('phone');
        $mail=$request->input('mail');
        $photo=$request->file('photo');
        $filename=date('YmdHi').$photo->getClientOriginalName();
        $photo->move(public_path('public/images'), $filename);
        $data=array("walker"=>$walker, "myservice"=>$myservice, "location"=>$location, "phone"=>$phone, "mail"=>$mail, "photo"=>$filename);
        DB::table('walkersnkeepers')->insert($data);

        return redirect()->route('services.walkers');
    }

    public function addE (Request $request) {
        $educator=$request->input('educator');
        $myservice=$request->input('myservice');
        $location=$request->input('location');
        $phone=$request->input('phone');
        $mail=$request->input('mail');
        $photo=$request->file('photo');
        $filename=date('YmdHi').$photo->getClientOriginalName();
        $photo->move(public_path('public/images'), $filename);
        $data=array("educator"=>$educator, "myservice"=>$myservice, "location"=>$location, "phone"=>$phone, "mail"=>$mail, "photo"=>$filename);
        DB::table('educators')->insert($data);

        return redirect()->route('services.educators');
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

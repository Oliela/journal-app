<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
    * Display a listing of the resource.
    */
   public function index()
   {
       $data = Profiles::with('users')->get();
       return response()->json(['success'=>true, 'data'=> $data]);
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
       //
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
       $formData = $request->all();
       $data = Profiles::create($formData);
       return response()->json(['success'=>true, 'data'=> $data]);
   }

   /**
    * Display the specified resource.
    */
   public function show($id)
   {
       $data = Profiles::with('users')->findOrFail($id);
       return response()->json(['success'=>true, 'data'=> $data]);
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(string $id)
   {
       //
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, $id)
   {
       $data = Profiles::findOrFail($id)->update($request->all());
       return $this->show($id);
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy( $id)
   {
       if (Profiles::findOrFail($id)->delete()) {
           return response()->json(['success' => true]);
       } else {
           return response()->json(['success' => false]);
       }
   }
}

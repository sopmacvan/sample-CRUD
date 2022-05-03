<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetsController extends Controller
{
    public function readPets(Request $request)
    {
        $pets = DB::table('pets')->where(
            'pet_name', 'LIKE', '%' . $request->search . '%')->get();
        return view('pet.read-pets', ['pets' => $pets]);
    }


    public function createFrom()
    {
        return view('pet.create-pet');
    }

    public function create(Request $request)
    {
        $data = array(
            'pet_name' => $request->pet_name,
            'pet_type' => $request->pet_type,
            'owner_name' => $request->owner_name,
            'owner_address' => $request->owner_address,
        );
        DB::table('pets')->insert($data);


        return redirect('read');
    }

    public function updateFrom(Request $request)
    {
        $pet = DB::table('pets')->find($request->id);
        return view('pet.update-pet', compact('pet'));
    }

    public function update(Request $request)
    {

        DB::table('pets')
            ->where('id', $request->id)
            ->update([
                'pet_name' => $request->pet_name,
                'pet_type' => $request->pet_type,
                'owner_name' => $request->owner_name,
                'owner_address' => $request->owner_address
            ]);

        return redirect('read');
    }

    public function delete(Request $request)
    {
        DB::table('pets')->where('id', '=', $request->id)->delete();
        return redirect('read');

    }

}

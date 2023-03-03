<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BandController extends Controller
{
    
public function store(Request $request)
{
  
    $validated = $request->validate([
        'id' => 'numeric',
        'name'=>'required',
    ]);
 

    return response() -> json ($request->all());

}

    public function getAll()
    {

        $bands = $this->getBands();

        return response()->json([$bands]);
    }

    // public function getBandsByGender($gender){

    //     $band = [];

    //     foreach($this->getBands() as $_band){
    //         if ($_band['gender'] == $gender)
    //         $bands[] = $_band;
    //     }
    //     return response()->json($bands);
    // }


    
    public function getById($id){

        $band = null;

        foreach($this->getBands() as $_band){
            if ($_band['id'] == $id)
            $band = $_band;
        }
        return $band? response()->json($band) : abort(404) ;
    }

    protected function getBands()
    {
        return [
            [
                'id'=>1, 'name' => 'Dream Teather', 'gender'=> 'progressivo'
            ],
            [
                'id'=>2, 'name' => 'Oficina G3', 'gender'=> 'progressivo'
            ],
            [
                'id'=>3, 'name' => 'For To Day', 'gender'=> 'metalcore'
            ],
            [
                'id'=>3, 'name' => 'P.O.D', 'gender'=> 'new metal'
            ],
        ];
    }
}

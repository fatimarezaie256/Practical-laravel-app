<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
   public function create(Request $request){
    $photo = new Photo();
    $filepath = null;
      if($request->hasFile('photo')){
            $filepath = $request->file('photo')->store('photos','public');
        }
        $photo->photo = $filepath;
        $photo->save();
        return redirect('/');
   }

}

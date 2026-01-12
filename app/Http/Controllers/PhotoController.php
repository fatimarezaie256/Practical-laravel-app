<?php

namespace App\Http\Controllers;
use App\Models\photo;
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
        $photo->url = $filepath;
        $photo->save();
        session()->flash('messege','Data inserted succesfully');
        return redirect('/');
   }
  //  public function show(){
  //   $showPhoto = Photo::all()-;

  //  }

}

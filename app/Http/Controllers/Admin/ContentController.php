<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categoryapi;
use Illuminate\Http\Request;
use App\Models\Textwebservice;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ContentController extends Controller
{
    public function index(){
   $textwebservices= Textwebservice::all();
   return view('admin.content.index' , compact(['textwebservices'  ]));

   }
   public function edit($id){
  $textwebservice= Textwebservice::find($id);
  return view('admin.content.edit' , compact(['textwebservice'  ]));

  }

  public function update(Request $request , $id){

    $request->validate([
        'title' => 'required',
        'link'  => 'required',
        'text'  => 'required',
    ]);

$textwebservice= Textwebservice::find($id);
$textwebservice->update($request->all());
Alert::info('با موفقیت ویرایش شد', 'اطلاعات با ویرایش  شد');
return back();

    }




}

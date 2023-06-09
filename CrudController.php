<?php

namespace App\Http\Controllers;
use App\Models\Crud;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function add()
    {
        return view('crud.add');
    }
    public function save(Request $request)
    {
        $input=$request->all();
        unset($input['_token']);
        $input['created_at']=date('Y-m-d H:i:s');

        if($request->hasfile('image'))
        {
        
            $imageName=rand(999,9999999).time().".".$request->image->extension();

            $request->image->move(public_path('images'),$imageName);
         
        $input['image']=$imageName;
        }

        Crud::insert($input);
        return redirect('/crud-index');
       
    }
     public function index()
    {
       $input=Crud::get();
       return view('crud.index',compact('input'));
    }
     public function edit($id)
    {
      $input=Crud::find($id);
      return view('crud.edit',compact('input'));
    }
     public function update(Request $request)
    {
        $input=$request->all();
        unset($input['_token']);
        $input['updated_at']=date('Y-m-d H:i:s');



        $crud = Crud::find($input['id']);

    // Check if the image needs to be updated
    if ($request->hasFile('image')) {
        // Delete the existing image from public/images directory
        if (file_exists(public_path('images/' . $crud->image))) {
            unlink(public_path('images/' . $crud->image));
        }

        // Upload the new image to public/images directory
        $imageName = rand(999, 9999999) . time() . "." . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $input['image'] = $imageName;
    }

    // Update the record in the database
    $crud->update($input);

    return redirect('/crud-index');
}
    public function delete($id)
    {
     Crud::where("id","=",$id)->delete();
     return redirect('/crud-index');
    }
    
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Admin\About;

class AboutController extends Controller
{

    //redirect to index with data
        public function index()
            { 
               $all_data=About::all();
               return view('admin.about.index',['all_data'=>$all_data]);
            }

    //redirect to form                            
        public function create()
            {
                return view('admin.about.create');
            }

    //add data to database                            
        public function add(Request $request)
            {
            
                $about = new About();
                $about = $request->validate([
                                            'title' => 'required',
                                            'description' => 'required',
                                            'status' => 'required'
                                        ]);

                $about=About::create($request->all());
                return redirect('admin/about')->with('success','Data Inserted Success');
            }

    //edit data 
        // public function show($id)
        //     {

        //             $about=About::find($id);
        //             return redirect('admin/about/edit/{id}',['about'=>$about]);
                    

        //     }        

    //delete data from server
        public function destroy($id)
            {

                $destroy_data=About::find($id)->delete();
                return redirect('admin/about')->with('success','Data Remove Success');

            }        

}

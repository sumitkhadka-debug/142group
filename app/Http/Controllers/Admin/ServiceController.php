<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Categories;
use App\Models\Admin\Service;

class ServiceController extends Controller
{
   

    //index route
    public function index()
    {
        
        $all_data   =  Categories::with('service')->get();
        $all_cat    =  categories::all();
        

        return view('admin.service.index',['all_data'=>$all_data,'all_cat'=>$all_cat]);
   
    }

//create service
public function create()
    {
        $all_cat = categories::all();
        return view('admin.service.create',['all_cat'=>$all_cat]);
    }

//create categories    
public function createCat()
    {
        return view('admin.service.createCat');
    }    


//add data    
public function add(Request $request)
    {
        $service = new Service();
        $service = $request->validate([
                                    'cat_id' => 'required|integer',
                                    'name' => 'required|string|unique:services',
                                    'description' => 'required|string',
                                    'status' => 'required',
        ]);
        Category::find($request->cat_id)->service()->create($service);
        // $service = Service::create($service);
        return redirect('admin/service')->with('success','Service Created Success');
    }


//delete data from server
public function destroy($id)
{
$destroy_data=Service::find($id)->delete();
return redirect('admin/service')->with('success','Data Remove Success');

}      

//add category
public function addCat(Request $request)
{
$cat = new Categories();

$cat = $request->validate([
                                    'name'=>'required|string|unique:categories',
                                    'status'=>'required',
                                ]);

$cat = Categories::create($cat);
return redirect('admin/service')->with('success','Category Added Success');

}  

//delete data from server
public function destroyCat($id)
{

$destroy_data=Categories::find($id)->delete();

return redirect('admin/service')->with('success','Category Remove Success');

}    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use JavaScript;




class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
   
        return view('admin.categories.index',compact('categories'));

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
        if($request->parent_id){
            $db = Category::findOrFail($request->parent_id)->name;
            $data = [
                'name'=>$request->name,
                'parent_id'=>$request->parent_id,
                'parent_name'=>$db,
            ];
        }else{
            $data = [
                'name'=>$request->name,
            ];
        }

        Category::create($data);
            


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
        $category = Category::findOrFail($id);
        $category->update($request->all());


        // return redirect('admin/categories');
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
        
        Category::findOrFail($id)->delete();

    }

    public function deleteSelectCategory(Request $request){
        foreach($request->ids as $id){
            Category::where('id',$id)->delete();
        }
    
        // return back();

        
    }

    public function showTest()
    {
        return view('admin.shower');
        
    
    }

    public function duplicate(Request $request){

        foreach($request->ids as $id){
           $category =  Category::where('id',$id)->first();
           $newCategory = $category->replicate();
           $newCategory->save();
        }
    }

}



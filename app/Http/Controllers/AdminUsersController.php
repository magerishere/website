<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\Photo;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;




class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::all();

        return view('admin.users.index',compact('users'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $roles = Role::pluck('name','id')->all();
        
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //

        if(trim($request->password) == ''){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);

        }


        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);            
            $input['photo_id'] = $photo->id;

        }
        User::create($input);
        Session::flash('created_user','User has been created');
        return redirect('/admin');

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
        // return view('admin.users.show');
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
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','id')->all(); 
        
        return view('admin.users.edit',compact('user','roles'));
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
        // $user = Auth::user();
        $user = User::findOrFail($request->id);

        if(trim($request->password) == ''){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            $input['password'] = bcrypt(trim($request->password));
        }



        if($file = $request->file('photo_id')){
            if($user->photo_id != 0) {
                unlink(public_path() . $user->photo->file);
            }
            
            $name = time() . $file->getClientOriginalName();

            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);

            Comment::where('email',$user->email)->update(['photo'=>'/images/' . $name]);

            $input['photo_id'] = $photo->id;
        }
        $user->update($input);

        Session::flash('updated_user','User has been updated');

        // User::findOrFail($id)->update($request->all());

        return redirect('/admin');

  
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $user = User::findOrFail($id);
        if($user->photo_id != 0){
             unlink(public_path() . $user->photo->file);
        }

        $user->delete();

        Session::flash('deleted_user','User has been deleted.');
        // return redirect('/admin');


    }

    public function active(Request $request,$id){
        $user = User::findOrFail($id);
        $user->update(['is_active'=>$request->is_active]);
     
    }



    public function deleteSelectUser(Request $request){
        foreach($request->ids as $id){
            User::where('id',$id)->delete(); 
        }
    }


    public function activeSelectUser(Request $request){
        foreach($request->ids as $id){
            User::where('id',$id)->update(['is_active'=>1]);
        }
    }

    public function profile(){
        $user = Auth::user();
        return view('admin.users.profile',compact('user'));
    }
}




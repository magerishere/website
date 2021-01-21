<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostsCreateRequest;
use App\Http\Requests\PostsEditRequest;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use App\Models\Comment;
use App\Models\CommentReply;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;





class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(isset($_GET['paginate'])){
            $paginate = $_GET['paginate'];
        }else{
            $paginate = 5;
        }
        $posts = Post::paginate($paginate);
        $total = DB::table('posts')->count();
   
        return view('admin.posts.index',compact('posts','total'));
    }

    // public function paginate($paginate){
    //     //
    //     $posts = Post::paginate($paginate);
    //     $total = DB::table('posts')->count();


    //     return view('admin.posts.index',compact('posts','total'));
 


    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $categories = Category::pluck('name','id')->all();
        $categories = Category::all();
        return view('admin.posts.create',compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request) //PostsCreateRequest
    {
        //
 
        $input = $request->all();
        $user = Auth::user();
        $categoryId = Category::where('name',$request->category_name)->firstOrFail()->id;
        $title = Str::slug($request->title,'-');
        // $body = Str::replace('<p>','',$request->body);
        //  $body = str_replace(['<p>','</p>'],'',$request->body);
         

        $input['category_id'] = $categoryId;
        $input['slug'] = $title;
        // $input['body'] = Str::replace('</p>','',$body);
        //  $input['body'] = $body;
        

        if($file = $request->file('photo_id')){
            $name = time() .  $file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;

        }

        $user->post()->create($input);
       Session::flash('created_post','مطلب ایجاد شد');
       
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $post = Post::where('slug',$slug)->firstOrFail();
        $comments = Comment::where('post_id',$post->id)->get();
        return view('admin.posts.view-post',compact('post','comments'));

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
        $post = Post::findOrFail($id);
        $categories = Category::pluck('name','id')->all();        
        return view('admin.posts.edit',compact('post','categories'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsEditRequest $request, $id)
    {
        //
        $input = $request->all();
        $title = Str::slug($request->title,'-');
        // $body = str_replace(['<p>','</p>'],'',$request->body);
        // $input['body'] = $body;
        
 
        if($file = $request->file('photo_id')){
            
            $post = Post::findOrFail($id);
            unlink(public_path() . $post->photo->file);
    
            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $input['slug'] = $title;

       Auth::user()->post()->whereId($id)->first()->update($input);
       Session::flash('updated_post','مطلب ویرایش شد');
       

       return redirect('/admin');

        // return $request->all();


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
        $post = Post::findOrFail($id);

        unlink(public_path() . $post->photo->file);

        $post->delete();

        Session::flash('deleted_post','Post has been deleted.');

        return redirect('/admin');


    }





}

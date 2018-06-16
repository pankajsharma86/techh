<?php

namespace App\Http\Controllers;

use App\Post;
use Session;
use App\User;
use App\Seo;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a is of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.post.index')->with('posts', Post::orderBy('created_at', 'desc')->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function user()
    {
        //
        return view('admin.user.index')->with('user', User::orderBy('created_at', 'desc')->paginate(10));
    }
    public function create(){
             //
        return view('admin.post.create');
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
       $this->validate($request, [
            'post_title' => 'required',
            'post_image' =>  'required|image',
            'post_description' => 'required'
           
        ]);

         
        $post_image = $request->post_image;
        $post_new_name = time().$post_image->getClientOriginalName();
         $post_image->move('admin1/uploads/blog_posts', $post_new_name);

         
        $blog_post = new Post;
        
        $blog_post->title = $request->post_title;
        $blog_post->description = $request->post_description;
        $blog_post->shortdescription = $request->post_shortdescription;
        $blog_post->image = 'admin1/uploads/blog_posts/' . $post_new_name;
        $blog_post->slug = str_slug($request->post_title);
        $blog_post->save();

        $seo = new Seo;
        $seo->title         =    $blog_post->title;
        $seo->description   =    'Techbasha shortdescription';
        $seo->keywords      =    'Techbasha';
        $seo->seoble_type   =    'Blogs';
        $seo->seoble_id     =     $blog_post->id;   

                $seo->save();
        Session::flash('success', 'You successfully created a post');
        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $post = Post::find($id);
        //dd($post->title);
          $slug = str_slug($post->title);
          $seo = Seo::where('seoble_id', $id)
                    ->where('seoble_type', 'Blogs')
                    ->first();

        return view('admin.post.edit')->with('post', $post)->with('seo', $seo)->with('slug', $slug);
    }


public function seoedit(Request $request, $id){
        $blog = Post::findOrFail($id);
        $seo = Seo::where('seoble_id', $id)
                        ->where('seoble_type', 'Blogs')
                        ->first();
        //dd($seo);
       // dd(request());

        $seo->title         =    $request->product_meta_title;


        $seo->description   =    $request->product_meta_description;
        $seo->keywords      =    $request->product_meta_keywords;
        $seo->seoble_type   =    'Blogs';
        $blogs = Post::findOrFail($id);
        $blogs = Post::findOrFail($id);
        $seo->seoble_id     =    $blog->id;
        
        $seo->save();

        Session::flash('success', 'Seo Updated.');
       return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    
         $this->validate($request, [
            'post_title' => 'required',
            'post_description' => 'required',
            'post_shortdescription' => 'required',
        ]);

         //dd($request);
         $post = Post::find($id);
        if($image = $request->hasFile('post_image')){    

            $post_image  = $request->post_image;
            $post_new_name = time().$post_image->getClientOriginalName();
            $post_new_name->move('admin1/uploads/blog_posts', $post_new_name);
            $post->image =  'admin1/uploads/blog_posts/' . $post_new_name;
        }

         

        $post->title = $request->post_title;
        $post->description = $request->post_description;
        $post->shortdescription = $request->post_shortdescription;
           $post->slug = $request->post_slug;

        $post->save();

        
        
        Session::flash('success', 'Post updated successfully');

        return redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       
    }

    public function delete($id){
        
          $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'Product deleted.');
        return redirect()->back();
    }
}

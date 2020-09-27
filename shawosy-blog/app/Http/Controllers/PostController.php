<?php

namespace App\Http\Controllers;


use App\Post;




use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::with(['user'])->paginate(10);
        

        return view('posts.index', compact('posts'));
    }

    
    public function create()
    {
        
        
        

        return view('posts.create');
    }

    

            
            
      




    public function store(Request $request)
            {
                  $this->validate($request, [
                      // 'name'=>'required|min:2',
                      
                      
                  ]);
            
                  $data = $request->all();
                

           
                $path = 'assets/post/';        
                $destinationPath    = $path;
                $image_file         =$request->file('images');
                $image = '';
                if($image_file){
                $file_size = $image_file->getSize();
                    
                    $image_name         = $image_file->getClientOriginalName();
                    $extention          = $image_file->getClientOriginalExtension();
                    $image = value(function() use ($image_file){
                    $filename = time().'.'. $image_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $image_file->move($destinationPath, $image);

                  
                
                }
            
       
                  $post = Post::create([          
                    'title'            => $data['title'],
                    'body'       => $data['body'],
                    'meta_tag'       => $data['meta_tag'],
                    'meta_description'       => $data['meta_description'],
                    'slug'       => $data['slug'],
                    'keywords'       => $data['keywords'],
                    'image'        => $image,
                    
                    'tags'    => $data['tags']
                    
                           
                   ]);
                 if(isset($post)) {
                  return redirect()->route('posts.index');
                  }else{
                      return redirect()->back();
                  }
            }
    
    public function show(Post $post)
    {
        $post = $post->load(['user']);
        $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('posts.show', compact('post'));
    }

    
    public function edit(Post $post)
    {
        if($post->user_id != auth()->user()->id && auth()->user()->is_admin == false) {
            
            return redirect('/admin/posts');
        }

        
        
        

        return view('posts.edit', compact('post'));
    }

   
    

    public function update(Request $request, $id)
    {
        
        $post = Post::findOrFail($id);

        $path = 'assets/post/';        
                $destinationPath    = $path;
                $image_file         =$request->file('images');
                $image = '';
                if($image_file){
                $file_size = $image_file->getSize();
                    
                    $image_name         = $image_file->getClientOriginalName();
                    $extention          = $image_file->getClientOriginalExtension();
                    $image = value(function() use ($image_file){
                    $filename = time().'.'. $image_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $image_file->move($destinationPath, $image);

        $post->image            = $image;
        }
        $post->title            = $request->input('title');
        $post->body            = $request->input('body');
        $post->meta_tag            = $request->input('meta_tag');
        $post->meta_description            = $request->input('meta_description');
        $post->slug            = $request->input('slug');
        $post->keywords            = $request->input('keywords');
        
        $post->tags         =$request->input('tags');
        
       
        $upate = $post->save();


        if(isset($upate)) {
            return redirect()->route('posts.index');
        }else{
            return redirect()->back();
        }
    }

   
    public function destroy($id)
    {
        $product   = Post::findOrFail($id);
        $delete     = $product->delete();
        if(isset($delete)) {
           return redirect()->route('posts.index');
        }else{
            return redirect()->back();
        }
    }


    public function publish(Post $post)
    {
        $post->is_published = !$post->is_published;
        $post->save();
        

        return redirect('admin/posts');
    }
}

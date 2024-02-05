<?php

namespace App\Http\Controllers\Api;
use App\http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\trait\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    use ApiResponse;
    
    public function index(){
     
        $data = PostResource::collection(Post::get());
        return $this->ApiResponse($data,200,"Good work");
    }

    public function show($id){
        $post = Post::find($id);
        
        if($post){

            return $this->ApiResponse(new PostResource($post),200,'Good work');
        }else{
            return $this->ApiResponse(null,null,'Not Found!');
        }
        
    }
    
    public function store(Request $request){
        

       $validate = Validator::make($request->all(),[
           'title'=>'required',
           'content'=>'required'
       ]);

        if($validate->fails()){
            return $this->ApiResponse(null,400,$validate->errors());
        }else{
            $post=Post::create([
                'title' => $request->title,
                'content' => $request->content
            ]);

            return $this->ApiResponse(new PostResource($post),201,"The Post Added Successfuly");
        }
        
        
    }
    
    public function update(Request $request, $id){

        $post = post::find($id);
        if(isset($post)){
            $validate = Validator::make($request->all(),[
                'title'=>'required',
                'content'=>'required'
            ]);
        }else{
            
            return $this->ApiResponse(null,404,'The post not found!');
        }
        
        if($validate->fails()){
            return $this->ApiResponse(null,400,$validate->errors());
        }else{
            $post->update([
                'title' => $request->title,
                'content' => $request->content
            ]);
            
            return $this->ApiResponse(new PostResource($post),201,"The Post Updated Successfuly");
        }
        
    }
    
    
    public function destroy($id){
        $post = Post::find($id);
        if($post){
            $post->delete();
            return $this->ApiResponse(null,200,"The Post Deleted Successfuly.");
        }else{
            return $this->ApiResponse(null,404,'The post not found!');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   $posts =Post::where([]);
        $posts =$posts->paginate(10);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->file('image'));

        $validatedData = $request->validate($this->rules(), $this->messages());
        //save on database
        $uploadedImage = $request->file('post_image'); //upload image
        //this solve the overwrite of new image with same name
        $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();//add time to image
        $direction = public_path('/image/');
        $uploadedImage->move($direction, $imageName);//get the image and send it to image folder with new name
        $imagePath = 'image/' . $imageName;
        //this proccess convert the image to string to get it from the  folder without upload it to server


        $posts = new Post();


        $posts->fill($request->all()); //it is equal to up thing (fill all attribute in one line )
        //we overwrite the image as string because its an object
        $request['image'] = $imagePath;
        //$result = $category->save();// save that return true or false


        // create is use to save function and return the data of it
        $posts = Post::create($request->all());
        return redirect()->back();
        //that will give created at and uploaded at a null value because we build it by hand inserting

       /* $result = DB::table('posts')->insert([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $imagePath,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);*/
    }
    private function rules($id = null)
    {
        $rules = [

            //mimes that file upload is .....

            ];
        if($id){
            $rules['title'] =  'required||min:3||unique:posts,title,'.$id;
            $rules['post_image'] ='';
        }else{
            $rules['title'] =  'required||min:3||unique:posts,title';
            $rules['post_image'] = 'required|mimes:png,jpeg';
        }

        return $rules ;
    }

    private function messages()
    {
        return [
            'title.min' => 'name is too short',
            'title.required' => 'name is required',
            'title.unique' => 'the name is already token',
            'post_image.mimes' => 'invalid image'

        ];
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
    }
}

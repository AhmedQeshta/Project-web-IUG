<?php

namespace App\Http\Controllers;

use App\Massage;
use App\Post;
use Illuminate\Http\Request;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =Post::where([]);
        $posts =$posts->paginate(16);


        return view('anime.indexHome',compact("posts"));
    }

    public function showAnime($name){
        $anime = \DB::table("posts")->where("title","=",$name)->get();

        if ($anime->isEmpty()){
            echo "page not found";
        }
        $anime = $anime->first();
        return view('anime.userPage',compact("anime"));
    }

      public function massege(Request $request){
        $massage = new Massage();
          $massage->fill($request->all());
            $massage->save();
            return redirect()->back()->with('success','the massage was sent');
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

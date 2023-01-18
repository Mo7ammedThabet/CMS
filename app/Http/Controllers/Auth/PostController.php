<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Post\CreateRequest;
use App\Models\Categorie;
use App\Models\Gallerie;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['gallery','category'])->get();
        return view('auth.posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('auth.posts.create',['categories' =>  $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {

        try
        {
            DB::beginTransaction();

          if ($request->has('file')) {
            $file = $request->file;
            $fileName = time() . $file->getClientOriginalName();
            $imagePath = public_path('images/posts');
//            dd($imagePath);
            $file->move($imagePath, $fileName);

            $gallery = Gallerie::create([
                'image' => $fileName
            ]);
            DB::commit();
        }

        Post::create([
            'category_id' => $request->category,
            'is_publish' => $request->is_publish,
            'title' => $request->title,
            'description' => $request->description,
            'gallery_id' => $gallery->id,
        ]);
    }
        catch(\Exception$ex){
            DB::rollBack();
            dd($ex->getMessage());
         }

        $request ->session()->flash('alert-success' , 'Post Created Successfully');

        return  to_route('posts.index');


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

<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;      //(1. YOL) and (2. YOL) İçin You Should Use;

use Illuminate\Http\Request;
use\App\Page;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pages = DB::select('select * from pages');   //(1. YOL) : Laravel Raw Sql Queries ile yapıldı

        //$pages = DB::table('pages')->get();   //(2. YOL) : Laravel Query Builder ile yapıldı

        $pages = Page::all();       //(3. YOL) : Laravel Eloquent
        /**
         * Page::where('id','=',1); or Page::where('id',1); karşılığı select * from pages where id = 1; 'dir.
         */

        
        //return view('deneme', compact('pages'));
        return view("deneme")->with('pages',$pages);
        //return view('deneme', compact('pages'));  //return view("deneme")->with('arr',$pages);.Eşdeğerdirler
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
        /*$pages = DB::select('insert into pages (baslik,aktif) values(?,?)',['Laravel Raw Sql Queries',1]);
               (1. YOL) : Laravel Raw Sql Queries ile yapıldı */
        
        /*$pages = DB::table('pages')->insert([
            ["baslik" => "Laravel Raw Sql Queries", "aktif" =>  1]
            ["baslik" => "laravel raw sql queries", "aktif" =>  0]
        ]);
                (2. YOL) : Laravel Query Builder ile yapıldı*/

        //(3. YOL) : Laravel Eloquent
        $page = new Page;
        $page->baslik = "Laravel Raw Sql Queries";
        $page->aktif = 1;
        $page->save();
        return "Başarılı bir şekilde insert olundu";
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
    public function update(Request $request)
    {
        /* $pages = DB::update('update pages set aktif = 2 where baslik = ?',['Laravel Raw Sql Queries']);
               (1. YOL) : Laravel Raw Sql Queries ile yapıldı */

        /* $pages = DB::table('pages')->where(['baslik',$baslik)->update('aktif' => 111]);
                (1. YOL) : (2. YOL) : (2. YOL) : Laravel Query Builder ile yapıldı*/

        //(3. YOL) : Laravel Eloquent
        $page = Page::find(2);
        $page->id=0;
        $page->baslik = "Uptatelidir.";
        $page->aktif = 0;
        $page->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($baslik)
    {
        //$pages = DB::delete('delete from pages where id = ?',[$id]);   //(1. YOL) : Laravel Raw Sql Queries ile yapıldı

        //$pages = DB::table('pages')->where('id',$id)->delete();   //(2. YOL) : Laravel Query Builder ile yapıldı

        //(3. YOL) : Laravel Eloquent
        $page = Page::find($baslik);
        $page->delete();
    }

    public function denemem(Request $request)
    {
       dd($request->all());  //to check all the datas dumped from the form
       //if your want to get single element,someName in this case
       $someName = $request->someName; 
    }
}

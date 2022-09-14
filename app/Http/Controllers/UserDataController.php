<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDataRequeste;
use App\Models\UserData;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = UserData::all();
       
        return view('pages.admin.user_data.index',[
            'items' => $items,
            
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_data = UserData::all();
        return view('pages.admin.user_data.create',[
            'user_datas' => $user_data
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserDataRequeste $request)
    {
        $date = 
        $data = $request->all();
        // $data['image'] = $request->file('image')->store(
        //     'assets/gallery', 'public'
        // );

        UserData::create($data);

        return redirect()->route('user-data.index');
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
        $item = UserData::all()->find($id);      

        return view('pages.admin.user_data.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserDataRequeste $request, $id)
    {
        $data = $request->all();
        // $data['image'] = $request->file('image')->store(
        //     'assets/gallery', 'public'
        // );

        $item = UserData::all()->find($id);

        $item->update($data);

        return redirect()->route('user-data.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = UserData::all()->find($id);
        $item->delete();

        return redirect()->route('user-data.index');

    }
}

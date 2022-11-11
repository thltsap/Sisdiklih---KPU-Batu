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
    public function index(Request $request)
    {
        // $items = UserData::all();
       
        // return view('pages.admin.user_data.index',[
        //     'items' => $items,
            
        // ]);
         //fungsi eloquent menampilkan data menggunakan pagination        
         $items =UserData::where([
            ['nik', '!=', null, 'OR', 'name', '!=', null], //ketika form search kosong, maka request akan null. Ambil semua data di database
            [function ($query) use ($request) {
                if (($keyword = $request->keyword)) {
                    $query->orWhere('nik', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('name', 'LIKE', '%' . $keyword . '%')->get(); //ketika form search terisi, request tidak null. Ambil data sesuai keyword
                }
            }]
        ])   
        ->orderBy('id', 'asc')->paginate(10);
        return view('pages.admin.user_data.index', compact('items'))->
        with('i', (request()->input('page', 1) - 1) * 5); 
        
        $paginate = UserData::orderBy('id', 'asc')->paginate(3);
        return view('pages.admin.user_data.index', ['paginate'=>$paginate]);
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

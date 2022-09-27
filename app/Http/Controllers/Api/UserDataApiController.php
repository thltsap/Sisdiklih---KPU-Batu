<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserDataRequeste;
use App\Http\Resources\UserDataResource;
use App\Models\UserData;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;

class UserDataApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use ApiResponse; 

    public function index()
    {
        $items = UserData::all();

        return $this->apiSuccess($items);

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
    public function store(UserDataRequeste $request)
    {
        $request->validated();
        $items = new UserData($request->all());
        $items->save();

        return $this->apiSuccess($items);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(UserData $items)
    {
        return $this->apiSuccess($items);
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
    public function update(UserDataRequeste $request, UserData $items)
    {
        $items->update($request->validated());

        return new UserDataResource($items);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserData $items)
    {
        $items->delete();

        return 'Data berhasil dihapus';
    }
    
}

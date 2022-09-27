<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserDataRequeste;
use App\Http\Resources\UserDataResource;
use App\Models\UserData;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\Validator;
use App\Helpers\ResponseFormatter;

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

        return response()->json([
            'status' => true,
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserDataRequeste $request)
    {
        $items = UserData::create($request->all());
        
        return response()->json([
            'status' => true,
            'message' => "User Created successfully!",
            'items' => $items
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(UserData $items)
    {
        return new UserDataResource($items);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserDataRequeste $request, $id)
    {
        $items = UserData::findOrFail($id);
        $items->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "User Updated successfully!",
            'items' => $items
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $items = UserData::findOrFail($id);
        $items->delete();

        return response()->json([
            'status' => true,
            'message' => "User Delete successfully!",
        ], 200);
    }
    
}

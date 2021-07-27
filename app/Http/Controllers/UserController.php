<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(User::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        //
        return response()->json(User::create($request->all()), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $authUser
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
//    public function show(AuthUser $authUser)
    public function show($id)
    {
        $authUser = User::findOrFail($id);
        return response()->json($authUser, 200);
    }

    //Get user addresses
    public function addresses($id){
        $authUser = User::findOrFail($id);
        return response()->json($authUser->addresses, 200);
    }

    public function signin($email, $password)
    {
        $authUser = User::where([
            ['email', '=', $email],
            ['password', '=', $password],
        ])->first();


        if ( !is_null($authUser)){
            return response()->json([
                "message" => "Successful",
                "result" => $authUser
            ], 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);

//            return response()->json([
//                "message" => "Successful",
//                "result" => $authUser
//            ], 200);

        } else {
            return response()->json([
                "message" => "User details incorrect",

            ], 400, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
//            return response()->json([
//                "message" => "User details incorrect",
//            ], 404);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
//    public function update(Request $request, AuthUser $authUser)
    public function update(Request $request, $id)
    {
        //
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $authUser
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
//    public function destroy(AuthUser $authUser)
    public function destroy($id)
    {
        return response()->json(User::destroy($id), 200);
    }
}

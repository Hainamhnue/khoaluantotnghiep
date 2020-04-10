<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\User\ScoreUserService;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ScoreUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $scoreuserService;
    public function __construct(ScoreUserService $scoreuserService)
    {
        $this->scoreuserService = $scoreuserService;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Frontend.ccvc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            $score = $this->scoreuserService->save([
                'i1' => $request->i1,
                'i2' => $request->i2,
                'ii1' => $request->ii1,
                'ii2' => $request->ii2,
                'ii3' => $request->ii3,
                'ii4' => $request->ii4,
                'ii5' => $request->ii5,
                'iii1' => $request->iii1,
                'iii2' => $request->iii2,
                'iii3' => $request->iii3,
                'iii4' => $request->iii4,
                'iva1' => $request->iva1,
                'iva2' => $request->iva2,
                'iva3' => $request->iva3,
                'ivb1' => $request->ivb1,
                'ivb2' => $request->ivb2,
                'ivb3' => $request->ivb3,
                'ivc1' => $request->ivc1,
                'ivc2' => $request->ivc2,
                'ivd1' => $request->ivd1,
                'ivd2' => $request->ivd2,
                'ivd3' => $request->ivd3,
                'ive1' => $request->ive1,
                'ive2' => $request->ive2,
                'ive3' => $request->ive3,
                'v1' => $request->v1,
                'v2' => $request->v2,
                'v3' => $request->v3,
                'v4' => $request->v4,
                'user_id' => Auth::user()->id
            ]);
            return redirect(route('diem-vi-pham.create'));
//            return response()->json([
//                'status'=>true,
//                'code'=>Response::HTTP_OK,
//                'message'=>$score
//            ]);
        }
        catch (\Exception $err){
            return response()->json([
                'status'=>false,
                'code'=>Response::HTTP_UNPROCESSABLE_ENTITY,
                'message'=>$err->getMessage()
            ]);
        }

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

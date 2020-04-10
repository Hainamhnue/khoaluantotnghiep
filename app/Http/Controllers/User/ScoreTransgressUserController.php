<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\User\ScorePersonalTransgressService;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ScoreTransgressUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $scoreTransgressuserService;
    public function __construct(ScorePersonalTransgressService $scoreTransgressuserService)
    {
        $this->scoreTransgressuserService = $scoreTransgressuserService;
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
        return view('FrontEnd.vipham');
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
            $score = $this->scoreTransgressuserService->save([
                'tras1'=>$request->tras1,
                'tras2'=>$request->tras2,
                'tras3'=>$request->tras3,
                'tras4'=>$request->tras4,
                'tras5'=>$request->tras5,
                'tras6'=>$request->tras6,
                'tras7'=>$request->tras7,
                'tras8'=>$request->tras8,
                'tras9'=>$request->tras9,
                'tras10'=>$request->tras10,
                'tras11'=>$request->tras11,
                'tras12'=>$request->tras12,
                'tras13'=>$request->tras13,
                'user_id'=>Auth::user()->id
            ]);
            return view('FrontEnd.ccvc');
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

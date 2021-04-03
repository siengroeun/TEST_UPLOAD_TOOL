<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\uploadvideo;
use Illuminate\Http\Request;

class SaveTokenContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $frm=[
            'access_facebook'=>$request->txt_access
        ];
        $user=User::where('id',auth()->user()->id)->update($frm);

        if($user==true)
        {
            $token_facebook=User::where('id',auth()->user()->id)->first();
        }

        return response()->json($token_facebook);
    }
     public function ajaxRequestStore(Request $request){
        return "true";
     }
     public function uploadvideo(Request $request){

            if($request->hasFile('file')){

                $path = $request->file('file')->store('public/video_upload');
        
                $frm=[

                    'id_user'=>auth()->user()->id,
                    'url_path'=>$path,
                    'token_facebook'=>auth()->user()->access_facebook
                ];

                $save_video=uploadvideo::create($frm);
                if($save_video)
                {
                    $url=uploadvideo::where('id_user',auth()->user()->id)->where('token_facebook',auth()->user()->access_facebook)->orderby('id','desc')->first();

                    return response()->json($url);
                }else{

                    return 0;
                }

                // $request->image->storeAs('video_upload',$filename,'public');

                // Auth()->user()->update(['image'=>$filename]);
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

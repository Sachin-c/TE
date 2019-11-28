<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use App\Post;
use App\soil;
use App\User;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create1()
    {
        return view('pages.crop');
    }
    public function create2()
    {
        return view('pages.soil');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        if($request->hasFile('image_upload')){
            
            $filenameWithExt=$request->file('image_upload')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image_upload')->getClientOriginalExtension();
            $fileNameToStore=time();//$filename.'_'.time().'_'.$extension;
            $path=$request->file('image_upload')->storeAs('public/cover_images/img',$fileNameToStore);
            //$path1=$request->file('image_upload')->storeAs('public/cover_images/temp',$fileNameToStore);
            
          
       }else{
        return redirect('/dashboard')->with('error','No image was provided');
       }
       $crop=$request->input('crop_name');
       $process=new Process("/Library/Frameworks/Python.framework/Versions/3.6/bin/python3 /Applications/XAMPP/xamppfiles/htdocs/TE_Project/public/storage/cover_images/testing.py $crop $fileNameToStore");
       $process->run();

       if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
    }
    //dd( json_decode($process->getOutput()));
    $x=json_decode($process->getOutput());

    return view('pages.preview')->with('x',$x)->with('name',$fileNameToStore);
        $post=new Post;
        $post->image_upload= $fileNameToStore;
        $post->crop_name=$request->input('crop_name');
        $post->user_id=auth()->user()->id;
      
        $post->save();
       
    //    return redirect('/dashboard')->with('success','Crop and Image added to database');
    }
    public function store2(Request $request)
    {
       
        if($request->hasFile('file')){
          
            $extension=$request->file('file')->getClientOriginalExtension();
            $filenameWithExt= $request->file('file')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $fileNameToStore=$filename.'_'.time().'_'.auth()->user()->id.'_'.$extension;
            $path=$request->file('file')->storeAs ('public/uploads/images',$fileNameToStore);
          
            
          
        }else{
            return redirect('/dashboard')->with('error','No file was provided');
        }
        
         $process=new Process("/Library/Frameworks/Python.framework/Versions/3.6/bin/python3 /Applications/XAMPP/xamppfiles/htdocs/TE_Project/public/storage/uploads/images/PDFtoText.py {$fileNameToStore}");
         $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        
        $x=(json_decode($process->getOutput(), true));
        // return($process->getOutput());
       // $x=$process->getOutput(); 
        return view('pages.result')->with('x',$x);

         $soil=new Soil;
         $soil->file_upload=$fileNameToStore;
         $soil->user_id=auth()->user()->id;        
         $soil->save();
        // return redirect('/dashboard')->with('success','Report successfully uploaded');
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

    public function qualify()
    {
        $user= User::all()->last();
        
        return view('auth.qualify')->with('user',$user);
    }
    public function qual($uid)
    {
       
        if($uid==0)
        {
            return view('choice.farmer');
        }
        elseif($uid==1)
        {
            return view('choice.researcher');
        }
        elseif($uid==2)
        {
            return view('choice.student');
        }
        $user= User::all()->last();
        
        return view('auth.qualify')->with('user',$user);
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







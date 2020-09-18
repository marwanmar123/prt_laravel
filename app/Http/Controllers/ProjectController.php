<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    public function index(){
        // $proj = Project::all();
        $project = DB::table('projects')->latest()->paginate(5);
        return view('project.index', compact('project'));    
    }



    public function create(){
        return view('project.create');
    }
    
    
    public function store(Request $request){
        
        $data = array();
        $data['name'] = $request->name;
        $data['link'] = $request->link;
        $data['description'] = $request->description;
        
        $image = $request->file('img');
        if($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' .$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            
            $data['img'] = $image_url;
            $project = DB::table('projects')->insert($data);
            return redirect()->route('project.index')->with('success', 'project created successfully');
        }
        
        
    }



    public function edit($id){
        
        $project = DB::table('projects')->where('id', $id)->first();
        return view('project.edit', compact('project'));
    }



    public function update(Request $request, $id){

        $oldimg = $request->old_img;


        $data = array();
        $data['name'] = $request->name;
        $data['link'] = $request->link;
        $data['description'] = $request->description;
        
        $image = $request->file('img');
        if($image) {
            unlink($oldimg);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' .$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            
            $data['img'] = $image_url;
            $project = DB::table('projects')->where('id',$id)->update($data);
            return redirect()->route('project.index')->with('success', 'project updated successfully');
        }
    }

    public function delete($id){
        $data = DB::table('projects')->where('id', $id)->first();
        $image = $data->img;
        unlink($image);
        $project = DB::table('projects')->where('id', $id)->delete();
        return redirect()->route('project.index')->with('success', 'project deleted successfully');
    }


}
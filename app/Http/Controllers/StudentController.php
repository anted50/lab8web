<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public $students = array(
        array("id" => "Se21d09", "name" => "Anted", "age" => "20"),
        array("id" => "Se21d10", "name" => "Anted1", "age" => "21"),
        array("id" => "Se21d11", "name" => "Anted2", "age" => "22"),
        array("id" => "Se21d12", "name" => "Anted3", "age" => "23"),
    );
    public function StudentList(){
        return view('students', ['students' => $this->students]);
    }
    public function getById($id){
        foreach($this->students as $student){
            if($student['id'] == $id){
                return view('student',['student' => $student]);
            }
        }
        return abort(404);
    }
    public function search(){
        return view('search');
    }
    public function doSearch(Request $request){
        $validate = $request->validate([
            'studentId'=>'required | alpha_num | max:8'
        ]);
        foreach($this->students as $student){
            // dd($validate['studentId']);
            if($student['id'] == $validate['studentId']){
                return view('search',['student' => $student]);
            }
        }
        return abort(404);
        // return view('search', ['']);
        // $request->studentId;
    }
}

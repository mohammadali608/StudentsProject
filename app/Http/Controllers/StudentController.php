<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{

     public function Index(){

        $student=Student::all();
        return view('Index',compact('student'));
    }

    public function Create(Request $request){

            $student=new Student();
           
            $student->name=$request->input('name');
            $student->email=$request->input('email');
            $student->fees=$request->input('fees');

            $student->save();


        return redirect("index");

    }

    public function Edit($id){

        $std=new Student();

        $student=$std->find($id);            
        return view('edit',compact('student'));
    }

    public function update(Request $request,$id){

        $std=new Student();
        $student=$std->find($id); 

        $student->name=$request->input('name');
        $student->email=$request->input('email');
        $student->fees=$request->input('fees');

        $student->update();


       // return $student;
       return redirect("index");
    }

    public function Delete($id){

        $std=new Student();

        $student=$std->find($id);      
        $student->delete();
        
        return redirect('index');
    }

    
    public function Detail($id){

        $std=new Student();

        $student=$std->find($id);            
        return view('Detail',compact('student'));
    }
   
}

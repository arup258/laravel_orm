<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController1 extends Controller
{

    //get all Studnet
    public function allStudent(){
        $alldata=Student::all();
        return response()->json([
            'status'=>200,
            'message'=>'get All student successfully',
            'data'=>$alldata
        ]);
    }
    public function store(Request $request)
    {
        $student= Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            
            
        ]);
         return response()->json([
                'status'=>201,
                'message'=>'student added successfully',
                'data'=>$student
            ]);

    }

    //edit student
    public function editStudent($id){
        $data=Student::find($id);
        return response()->json([
            'status'=>200,
            'message'=>'get edit student successfully',
            'data'=>$data
        ]);
    }

    //Update student
    public function updateStudent(Request $request, $id){
        $user = Student::whereId($id)->first();

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            
        ]);
        return response()->json([
            'status'=>200,
            'message'=>'student Update successfully',
        ]);
    }

    //delete student
    public function deleteStudent($id){
        $data=Student::whereId($id)->first()->delete();
        return response()->json([
            'status'=>200,
            'message'=>'student delete successfully',
           
        ]);
    
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Alert;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function add_student_page(){
        return view('admin.students.add');
    }

    public function add_student(Request $request){

        $user = Auth()->user();
        $user_id = $user-> id;
        $name = $user-> name;

        $student = new Student;
        $student->name = $request->name;
        $student->email =$request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;
       
        

        $image = $request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('studentimage',$imagename);
            $student->image=$imagename;
        }
        
        $student->save();
        Alert::success('Congrats','Your Student is added Successfully');

        return redirect()->back();
    }

    public function show_students(){
        $student = Student::all();

        return view('admin.students.show', compact('student'));
    }

    public function delete_student($id){
        $student = Student::find($id);
        $student->delete();
        Alert::error('Attention!',' Student Deleted Successfully');
        return redirect()->back();
    }

    public function update_student_page($id){
        $student = Student::find($id);
        return view('admin.student.update_student_page', compact('student'));
    }

    public function update_student(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;

        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('studentimage', $imagename);
            $student->image = $imagename;
        }

        $student->save();
        Alert::success('Congrats', 'The Student updated Successfully');

        return redirect()->back();
    }

}

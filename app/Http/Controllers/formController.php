<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

class formController extends Controller
{
    public function store(Request $request){
       
        $request -> validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        try {

            $record = DB::table('contact_form')
            ->where('email',$request->input('email'))
                ->where('password', $request->input('password'))
                ->first();
            
if($record){
    Session::start();
   Session::put('email',$request->input('email'));
    return redirect('index')->with('success', 'User logged-in Succcesfully !');
}else{
    return redirect()->back()->with('error', 'Please Check Email and password');
}
            
        } catch (\Exception $e) {
           
            return redirect()->back()->with('error', 'Check the data  Please try again.');
        }
    }

    public function check_user(Request $request){

       $user = DB::table('contact_form')
        ->where('email',$request->input('email'))
        ->first();

        if($user){
            return redirect()->back()->with('success','Please Check your email ! We have sent the Temporary Password.');
        }else{
            return redirect()->back()->with('error','No User Found');
        }
   
    }

    public function register(Request $request){
       try{
        DB::table('contact_form')->insert([
            'email'=>$request->input('email'),
            'password' => $request->input('password')
        ]);

        return redirect('/login')->with('success','User Registered Succesfully !');
       }
       catch(\Exception $e){
        return redirect()->back()->with('error','Error');
       }

    }
    public function logout(){
        Session::flush();
        return redirect('/login');
    }

    public function add_student_details(Request $request){

       try{

        DB::table('student')->insert([
            'name'=>$request->input('studentName'),
            'email'=>$request->input('studentEmail'),
            'dob'=>$request->input('dob')

        ]);
        return redirect()->back()->with('success', $request->input('studentEmail')  .'  Added Successfully !');
       }catch(\Exception $e){
return redirect()->back()->with('error','Error with Adding student');
       }
       
     



    }
    public function show_students(){
        $data = DB::table('student')->get();
        return view('show-students',['data'=>$data]);
        
    }
    public function get_student(Request $request){
        
        $data = DB::table('student')
        ->where('id', $request->id)
        ->first();
        return $data;
        
    }
   
    public function updateStudent(Request $request)
    {
        try {
            // Retrieve data from the form
            $studentId = $request->input('sid');
            $studentName = $request->input('sname');

            // Update the student record
            DB::table('student') // Assuming your table is named 'students', adjust if needed
                ->where('id', $studentId)
                ->update([
                    'name' => $studentName,
                    'email'=> $request->input('semail'),
                    'dob'=> $request->input('sdob')
                    
                ]);

            return response()->json(['message' => 'Student updated successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function delete_student(Request $request){
try{
    $id = $request->input('id');
    DB::table('student')
    ->where('id',$id)
    ->delete();

    return response()->json(['success' => 'Student deleted successfully'], 200);

}
catch(\Exception $e){
    return response()->json(['error' => $e->getMessage()], 500);
}
      
    }
    

}

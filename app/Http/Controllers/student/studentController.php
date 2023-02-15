<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\student\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $StudentData =  student::all();
        // dd($StudentData);
        return view('student.index',compact('StudentData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10048',
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
            
        // ]);
        // dd($request->all());

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = uniqid() . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
        }

        $student_record = new student;
        $student_record->fullname = $request->fullname;
        $student_record->fatname = $request->fatname;
        $student_record->email = $request->email;
        $student_record->rolnumber = $request->rolnumber;
        $student_record->phone = $request->phone;
        $student_record->date = $request->date;
        $student_record->address = $request->address;
        $student_record->gender = $request->gender;
        $student_record->province = $request->province;
        $student_record->city = $request->city;
        $student_record->skills = $request->skills;
        $student_record->subject = $request->subject;
        $student_record->image = $profileImage;
        $student_record->save();
        
        $msg=   "Student Record Created Successful! ";
        return redirect()->back()->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $StudentData = student::find($id);
        return view('student.edit',compact('StudentData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

            $image = $request->file('image');
            $destinationPath = 'images/';
            $profileImage = uniqid() . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);

        $student_record = student::find($id);
        $student_record->fullname = $request->fullname;
        $student_record->fatname = $request->fatname;
        $student_record->email = $request->email;
        $student_record->rolnumber = $request->rolnumber;
        $student_record->phone = $request->phone;
        $student_record->date = $request->date;
        $student_record->address = $request->address;
        $student_record->gender = $request->gender;
        $student_record->province = $request->province;
        $student_record->city = $request->city;
        $student_record->skills = $request->skills;
        $student_record->subject = $request->subject;
        $student_record->image = $profileImage;
        $msg = "Post Update Successful!";
        return redirect('post')->with('msg',$msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        student::destroy($id);
        $msg    =   "Post Delete Sucessful! ";
        return redirect('student')->with('msg',$msg);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use GrahamCampbell\ResultType\Success;

class studentController extends Controller
{
    function addData(Request $req)
    {
        $student = new Student;
        $student->name = $req->name;
        $student->email = $req->email;
        $student->address = $req->address;

        
        
        $student->save();
        return redirect('/');
    }

    function list()
    {
        $data = Student::all();
        return view('welcome', ['students' => $data]);
    }

    function delete($id)
    {
        $data = Student::find($id);
        $data->delete();
       
        //return back()->with('Success', 'Item deleted successfully!');
         return redirect('list');
    }

    function showData($id)
    {
        $data = Student::find($id);
        return view('edit', ['data' => $data]);
    }

    function update(Request $req)
    {
        $data = Student::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->save();
        return redirect('list');
    }
}
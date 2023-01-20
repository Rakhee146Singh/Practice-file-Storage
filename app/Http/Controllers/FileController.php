<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        //custom helper function for showing all data from database
        // $registerData = getData();
        // return $registerData;

        $register = File::simplepaginate(5);
        return view("file", ['registers' => $register]);
    }

    public function create(Request $request)
    {
        //Custom Helper function for data showing
        // p($request->all());
        // die;

        // $validation = $request->all();
        $this->validate(
            $request,
            [
                'name' => 'required|alpha',
                'email' => 'required|email',
                'password' => 'required|max:6',
                'password_confirmation' => 'required|same:password',
                'startdate' => 'required|date|after:yesterday',
                'enddate' => 'required|date|after:startdate',
                'filename.*' => 'required|mimes:jpg,jpeg,png,pdf',
            ]
        );
        foreach ($request->filename as $key => $value) {
            $imageName = str_replace(".", "", (string)microtime(true)) . '.' . $value->getClientOriginalExtension();
            $value->storeAs("public/pictures", $imageName);
        }
        //dd($request->all());
        $request['password'] = Hash::make($request->password);
        File::create($request->only('name', 'email', 'password', 'startdate', 'enddate') + ['filename' => $imageName]);
        return redirect('/')->with('success', 'Data Inserted Successfully !!!');
        //return ('inserted successfully');
    }

    public function edit($id)
    {
        $register = File::find($id);
        return view("edit", ['registers' => $register]);
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|alpha',
                'email' => 'required|email',
                'password' => 'required|max:6',
                'startdate' => 'required|date|after:yesterday',
                'enddate' => 'required|date|after:startdate',
                'filename' => 'required|mimes:jpg,jpeg,png,pdf',
            ]
        );
        // foreach ($request->filename as $key => $value) {
        $imageName = str_replace(".", " ", (string)microtime(true)) . '.' . $request->filename->getClientOriginalExtension();
        $request->filename->storeAs("public/pictures", $imageName);
        // }
        $register = File::findOrFail($id);
        $register->update($request->only('name', 'email', 'password', 'startdate', 'enddate') + ['filename' => $imageName]);
        return redirect('/')->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        File::findOrFail($id)->delete();
        return redirect('/')->with('success', 'Deleted Successfully');
    }

    public function download($filename)
    {
        return response()->download(storage_path('app/public/pictures/' . $filename));
    }
}

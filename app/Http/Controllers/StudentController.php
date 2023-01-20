<?php

namespace App\Http\Controllers;

use App\Http\Traits\StudentTrait;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    use StudentTrait;
    public function show()
    {
        //reading data from table
        //$students = Student::all();
        //return view('student', ['students' => $students]);

        //building Queries
        // $students = [];
        // $students = Student::where('city', 'vapi')->orderBy('name')->get();
        // return view('student', ['students' => $students]);

        //chuncking data
        // $students = [];
        // Student::chunk(2, function ($students) {
        //     echo 'Chunk of Data <br>';
        //     foreach ($students as $stu) {
        //         echo $stu->name;
        //         echo '<br>';
        //     }
        // });
        // return view('student', ['students' => $students]);

        //retrieving data for single models
        //for primary key
        //$students = Student::find(1);

        //using first for city
        //$students = Student::where('city', 'vadodara')->first();
        //or another way of first
        //$students = Student::firstWhere('city', 'vadodara');
        //return view('student', ['students' => $students]);

        //using aggregate methods
        // $students = Student::where('marks', '=', 50)->firstOr(function () {
        //     echo 'First not found so function is called';
        // });
        // return view('student', ['students' => $students]);

        //retrieving or creating models
        // $students = Student::firstOrCreate(
        //     ['name' =>  'Saloni', 'city' => 'Bharuch', 'email' => 'saloni@gmail.com', 'marks' => 60]
        // );
        // return view('student', ['students' => $students]);
        //with first or new method
        // $students = Student::firstOrNew(
        //     ['name' =>  'Jayesh', 'city' => 'Bharuch', 'email' => 'jayesh@gmail.com', 'marks' => 60]
        // );
        // $students->save();
        // return view('student', ['students' => $students]);

        //Aggregate
        //$students = Student::where('city', 'Vadodara')->count();
        //$students = Student::where('city', 'Vadodara')->min('marks');
        //dd($students);
        //return view('student', ['students' => $students]);

        //Inserting new data
        // $student = new Student;
        // $student->name = 'shreya';
        // $student->city = 'mumbai';
        // $student->email = 'shreya@gmail.com';
        // $student->marks = 80;
        // $student->save();

        //inserting new data with variables
        // $name = 'Vivek';
        // $city = 'Vapi';
        // $email = 'vivek@gmail.com';
        // $marks = 60;
        // $student = new Student;
        // $student->name = $name;
        // $student->city = $city;
        // $student->email = $email;
        // $student->marks = $marks;
        // $student->save();

        //insert new record using create method
        // $student = Student::create([
        //     'name' => 'Anu',
        //     'city' => 'Daman',
        //     'email' => 'anu12@gmail.com',
        //     'marks' => 50
        // ]);
        // return view('student', ['students' => $student]);

        //Updating data
        // $student = Student::find(8);
        // $student->name = 'Abhi';
        // $student->city = 'Pune';
        // $student->email = 'abhi@gmail.com';
        // $student->marks = 60;
        // $student->save();
        // return view('student', ['students' => $student]);
        // $students = Student::find(7);
        // $students->name = 'Ravi';
        // $students->city = 'Daman';
        // $students->email = 'ravi@gmail.com';
        // $students->marks = 70;
        // $students->save();
        // return view('student', ['students' => $students]);

        //Mass Data
        // Student::where('city', 'Bharuch')->update(['marks' => 100]);
        // return view('student', ['students' => $student]);

        //Update or create
        // Student::updateOrCreate(
        //     ['name' => 'Akash'],
        //     [
        //         'email' => 'akash@gmail.com', 'city' => 'Daman', 'marks' => 80
        //     ]
        // );

        //Deleting Data
        // $student = Student::find(14);
        // $student->delete();

        //Deleting Data using destroy method
        // $student = Student::destroy(9);
        // dd($student);

        //Deleting Data using Queries
        // $student = Student::where('city', '')->delete();
        // dd($student);

        //Student::truncate();//delete all data from table
    }
}

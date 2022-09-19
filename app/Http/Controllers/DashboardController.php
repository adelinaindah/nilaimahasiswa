<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Score;

class DashboardController extends Controller
{
    public function index()
    {
        

        $scores = Score::leftJoin('subjects', 'subjects.id', '=', 'scores.id_subject')->leftJoin('students', 'students.id', '=', 'scores.id_student')->get();
        if(request('search')) {
            $scores->where('name_student', 'like', '%' . request('search') . '%')
                    ->orWhere('name_subject', 'like', '%' . request('search') . '%');
        }
        
        return view('dashboard.index', [
            'scores' => new Score,
            'submit' => 'Create',
            'scores' => $scores->all(),
        ]);
    }

    public function store(ScoreRequest $request)
    {
        Score::create($request->all());
        return back(); //redirect() -> back()
    }

    public function edit(Score $score)
    {
        // return view('dashboard.edit', [
        //     'score' => $score,
        //     'class' => $student,
        //     'subject' => $student,
        //     'submit' => 'Update',
        // ]);
    }

    public function update(ScoreRequest $request, $id)
    {
        // Student::find($id)->update(['name_student' => $request -> name_student])
        //                     ->update(['id_class' => $request -> id_class])
        //                     ->update(['id_subject' => $request -> id_subject]);
        // return redirect('students');
    }

    public function destroy($id)
    {
        // Student::find($id)->delete();
        // return back();
    }
}

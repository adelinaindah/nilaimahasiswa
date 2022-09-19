<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Http\Requests\SubjectRequest;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::orderBy('id', 'desc');
        if(request('search')) {
            $subjects->where('name_subject', 'like', '%' . request('search') . '%')
                    ->orWhere('teacher', 'like', '%' . request('search') . '%');
        }
        
        return view('subjects.index', [
            'subjects' => new Subject,
            'submit' => 'Create',
            'subjects' => $subjects->get(),
        ]);
    }

    public function store(SubjectRequest $request)
    {
        Subject::create($request->all());
        return back(); //redirect() -> back()
    }

    public function edit(Subject $subject)
    {
        return view('subjects.edit', [
            'subject' => $subject,
            'teacher' => $subject,
            'submit' => 'Update',
        ]);
    }

    public function update(SubjectRequest $request, $id)
    {
        Subject::find($id)->update(['name_subject' => $request -> name_subject])->update(['teacher' => $request -> teacher]);
        return redirect('subjects');
    }

    public function destroy($id)
    {
        Subject::find($id)->delete();
        return back();
    }
}

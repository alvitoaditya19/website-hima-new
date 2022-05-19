<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Yajra\DataTables\Facades\DataTables;


use App\Models\User;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        // $courses = Course::get();
        if (request()->ajax()) {
            $query = Course::query();
            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                type="button" 
                                data-toggle="dropdown">
                                Aksi
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('admin.course.edit', $item->id) . '">
                                    Sunting
                                </a>
                                <form action="' . route('admin.course.destroy', $item->id) . '"method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item text-danger">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ';
                })
                ->editColumn('photos', function ($item) {
                    return '<img style="max-width: 150px;" src="'. Storage::url($item->photos) .'"/>';
                })
                ->rawColumns(['action', 'photos'])
                ->make();
        }


        return view('pages.admin.course.index');
    }
    
    public function create()
    {
        $users = User::all();

        return view('pages.admin.course.create', [
            'users' => $users,
        ]);
    }
    public function store(CourseRequest $request)
    {
        $data = $request->all();
        $data['photos'] = $request->file('photos')->store('assets/course','public');
        Course::create($data);

        return redirect()->route('admin.course.index');
    }

    public function edit($id)
    {
        
        $item = Course::findOrFail($id);

        return view('pages.admin.course.edit', [
            'item' => $item,
        ]);
    }

    public function update(CourseRequest $request, $id)
    {
        $data = $request->all();

        $data['photos'] = $request->file('photos')->store('assets/course','public');
        $item = Course::findOrFail($id);

        $item->update($data);

        return redirect()->route('admin.course.index');
    }

    public function destroy($id)
    {
        $item = Course::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.course.index');
    }
}

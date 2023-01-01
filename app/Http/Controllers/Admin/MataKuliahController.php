<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DosenRequest;
use App\Http\Requests\MataKuliahRequest;

use Illuminate\Support\Str;

use Yajra\DataTables\Facades\DataTables;

use Illuminate\Http\Request;

use App\Models\Dosen;
use App\Models\MataKuliah;
use App\Models\Semester;


use App\Models\User;
use Illuminate\Support\Facades\Storage;



class MataKuliahController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = MataKuliah::with('semester');


            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('admin.dosen.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('admin.dosen.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->editColumn('photos', function ($item) {
                    return '<img style="max-width: 150px;" src="'. Storage::url($item->photos) .'"/>';
                })
                ->rawColumns(['action', 'photos'])
                ->make();
        }

        return view('pages.admin.mata-kuliah.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semesters = Semester::all();

        
        return view('pages.admin.mata-kuliah.create',[
            'semesters' => $semesters,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MataKuliahRequest $request)
    {
        $data = $request->all();

        MataKuliah::create($data);
        return redirect()->route('admin.mata-kuliah.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Dosen::findOrFail($id);
        
        return view('pages.admin.dosen.edit',[
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DosenRequest $request, $id)
    {
        $data = $request->all();

        $item = Dosen::findOrFail($id);

        $item->update($data);

        return redirect()->route('admin.dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Dosen::findorFail($id);
        $item->delete();

        return redirect()->route('admin.dosen.index');

    }
}

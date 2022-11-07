<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\UserRequest;
use Illuminate\Support\Str;

use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request)
    {
        $product = User::find($request->id); 
        $product->status = $request->is_admin; 
        $product->save(); 
        return response()->json(['success'=>'Status change successfully.']); 
    }
    public function index()
    {
        if (request()->ajax()) {
            $query = User::query();
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
                            <a class="dropdown-item" href="' . route('admin.user.edit', $item->id) . '">
                                Sunting
                            </a>
                            <form action="' . route('admin.user.destroy', $item->id) . '"method="POST">
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
                ->editColumn('is_admin', function ($item) {
                    return 'data-id="'.$item->id.'" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"'.  $item->status ? 'checked' : '' .'';
                })
                ->rawColumns(['action', 'photo'])
                ->make();
        }
        return view('pages.admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $item = User::findOrFail($id);

        return view('pages.admin.user.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('user.index');
    }
}

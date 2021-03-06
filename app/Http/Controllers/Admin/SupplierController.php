<?php

namespace App\Http\Controllers\Admin;

use App\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\SupplierRequest;
use Illuminate\Support\Str;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Supplier::query();

            return DataTables::of($query)
            ->addColumn('action', function($item){
                return '
                <div class="btn-group">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                            type="button"
                            data-toggle="dropdown">
                            Aksi            
                    </button>
                        <div class="dropdown-menu">
                            <a href="' . route('supplier.edit', $item->id) . '" class="dropdown-item">
                                Sunting
                            </a>
                            <form action="' .route('supplier.destroy', $item->id). '" method="POST">
                                    '. method_field('delete') . csrf_field() .'
                                <button class="dropdown-item text-danger">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                ';
            })
            ->editColumn('photo', function($item){
                return $item->photo ? '<img src="'. Storage::url($item->photo) .'" style="max-height: 48px;" />' : '' ;
            })
            ->rawColumns(['action','photo'])
            ->make();
        }
         return view('pages.admin.supplier.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierRequest $request)
    {
        $data = $request->all();

        Supplier::create($data);

        return redirect()->route('supplier.index');

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
        $item = Supplier::findOrFail($id);

        return view('pages.admin.supplier.edit', [
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
    public function update(SupplierRequest $request, $id)
    {
         $data = $request->all();

        $item = Supplier::findOrFail($id);
        $item->update($data);

        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Supplier::findOrFail($id);
        $item->delete();
        return redirect()->route('supplier.index');


    }
}
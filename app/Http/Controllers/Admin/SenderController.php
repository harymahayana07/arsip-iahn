<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Sender;

use Yajra\DataTables\Facades\DataTables;

class SenderController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Sender::latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#updateModal'.$item->id.'">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                        <form action="' . route('sender.destroy', $item->id) . '" method="POST" onsubmit="return confirm('."'Anda akan menghapus item ini dari situs anda?'".')">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                            </button>
                        </form>
                    ';
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action'])
                ->make();
        }
        $sender = Sender::all();

        return view('pages.admin.sender.index',[
            'sender' => $sender
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        Sender::create($validatedData);

        return redirect()
                    ->route('sender.index')
                    ->with('success', 'Sukses! 1 Data Berhasil Disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        Sender::where('id', $id)
                ->update($validatedData);

        return redirect()
                    ->route('sender.index')
                    ->with('success', 'Sukses! 1 Data Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $item = Sender::findorFail($id);

        $item->delete();

        return redirect()
                    ->route('sender.index')
                    ->with('success', 'Sukses! 1 Data Berhasil Dihapus');
    }
}

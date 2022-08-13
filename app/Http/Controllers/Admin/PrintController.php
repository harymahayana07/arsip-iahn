<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Disposisi;
use Illuminate\Http\Request;

use App\Models\Letter;
use App\Models\Letterout;

class PrintController extends Controller
{
    public function index()
    {
        $item = Letter::with(['department','sender'])->where('letter_type', 'Surat Masuk')->latest()->get();

        return view('pages.admin.letter.print-incoming',[
            'item' => $item
        ]);
    }

    public function outgoing()
    {
        $item = Letterout::latest()->get();

        return view('pages.admin.letterout.print-outgoing',[
            'item' => $item
        ]);
    }
    public function disposisiprintall($id)
    {
        $letter = Letter::all();

        $item = Disposisi::where('letter_id', $id)->latest()->get();

        return view('pages.admin.disposisi.print-incoming', [
            'item' => $item,
            'letter' => $letter,
        ]);
        
    }
}

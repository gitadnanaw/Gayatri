<?php
namespace App\Http\Controllers;

use App\Models\forminput;
use Illuminate\Http\Request;

class forminputController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $allData = forminput::where('nama_pasien', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(2);
        } else {
            $allData = forminput::orderBy('created_at', 'desc')->paginate(3);
        }

        return view('index', ['data' => $allData]);
    }
}
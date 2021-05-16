<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Debugbar;

class ReportController extends Controller
{
    public function showPage(Request $request) {
        $data = DB::select('Exec dbo.RoughPaymentOSReport');
        Debugbar::info($data);
        return view('report',[
            'data' => $data
        ]);
    }

    public function getRoughPaymentData(Request $request) {
        $results = DB::select('Exec dbo.RoughPaymentOSReport');
        // $page = request('page', 1);
        // $pageSize = 2;
        // $offset = ($page * $pageSize) - $pageSize;
        // $data = array_slice($results, $offset, $pageSize, true);
        // $paginator = new \Illuminate\Pagination\LengthAwarePaginator($data, count($data), $pageSize, $page);
      
        return response()->json($results);
    }

    public function getPolishPaymentData(Request $request) {
        $data = DB::select('Exec dbo.PolishPaymentOSReport');
        return response()->json($data);
    }
}

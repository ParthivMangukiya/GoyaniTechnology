<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Debugbar;

class ReceiptReportController extends Controller
{
    public function showPage(Request $request) {
        return view('receiptreport');
    }

    public function getRoughReceiptData(Request $request) {
        $results = DB::connection('sqlsrv')->select('Exec dbo.RoughReceiptOSReport');
        // $page = request('page', 1);
        // $pageSize = 2;
        // $offset = ($page * $pageSize) - $pageSize;
        // $data = array_slice($results, $offset, $pageSize, true);
        // $paginator = new \Illuminate\Pagination\LengthAwarePaginator($data, count($data), $pageSize, $page);
      
        return response()->json($results);
    }

    public function getPolishReceiptData(Request $request) {
        DB::connection('sqlsrv')->statement('SET ANSI_NULLS, QUOTED_IDENTIFIER, CONCAT_NULL_YIELDS_NULL, ANSI_WARNINGS, ANSI_PADDING ON');
        $results = DB::connection('sqlsrv')->select('Exec dbo.PolishReceiptOSReport');
        return response()->json($results);
    }
}

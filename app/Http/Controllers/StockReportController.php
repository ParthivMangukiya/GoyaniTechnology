<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Debugbar;

class StockReportController extends Controller
{
    public function showPage(Request $request) {
        return view('stockreport');
    }

    public function getRoughStockData(Request $request) {
        $results = DB::connection('sqlsrv')->select('Exec dbo.GetRoughStockReports');
        // $page = request('page', 1);
        // $pageSize = 2;
        // $offset = ($page * $pageSize) - $pageSize;
        // $data = array_slice($results, $offset, $pageSize, true);
        // $paginator = new \Illuminate\Pagination\LengthAwarePaginator($data, count($data), $pageSize, $page);
      
        return response()->json($results);
    }

    public function getPolishStockData(Request $request) {
        DB::connection('sqlsrv')->statement('SET ANSI_NULLS, QUOTED_IDENTIFIER, CONCAT_NULL_YIELDS_NULL, ANSI_WARNINGS, ANSI_PADDING ON');
        $results = DB::connection('sqlsrv')->select('Exec dbo.GetPolishStockReports');
        return response()->json($results);
    }

    public function getShapeStockData(Request $request) {
        DB::connection('sqlsrv')->statement('SET ANSI_NULLS, QUOTED_IDENTIFIER, CONCAT_NULL_YIELDS_NULL, ANSI_WARNINGS, ANSI_PADDING ON');
        $results = DB::connection('sqlsrv')->select('Exec dbo.GetShapeStockReports');
        return response()->json($results);
    }

    public function getPendingKapanStockData(Request $request) {
        DB::connection('sqlsrv')->statement('SET ANSI_NULLS, QUOTED_IDENTIFIER, CONCAT_NULL_YIELDS_NULL, ANSI_WARNINGS, ANSI_PADDING ON');
        $results = DB::connection('sqlsrv')->select('Exec dbo.GetPendingKapanStockReports');
        return response()->json($results);
    }

    public function getKapanStockData(Request $request) {
        DB::connection('sqlsrv')->statement('SET ANSI_NULLS, QUOTED_IDENTIFIER, CONCAT_NULL_YIELDS_NULL, ANSI_WARNINGS, ANSI_PADDING ON');
        $results = DB::connection('sqlsrv')->select('Exec dbo.GetKapanStockReports');
        return response()->json($results);
    }
}

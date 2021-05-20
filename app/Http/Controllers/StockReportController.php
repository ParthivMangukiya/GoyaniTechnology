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
        $this->setupDB();
        $query = "Exec dbo.GetRoughStockReports
        @Branch_Id = 0, 
        @RsType = '', 
        @FromDate = '',
        @ToDate	 = '',
        @company_year_id = 0,
        @Role_Id = ''";
        $results = DB::connection('sqlsrv')->select($query);
        return response()->json($results);
    }

    public function getPolishStockData(Request $request) {
        $this->setupDB();
        $query = "Exec dbo.GetPolishStockReports
        @Branch_Id = 0, 
        @RsType = '', 
        @FromDate = '',
        @ToDate	 = '',
        @ReportType = 'Detail',
        @company_year_id = 0,
        @Role_Id = ''";
        $results = DB::connection('sqlsrv')->select($query);
        return response()->json($results);
    }

    public function getShapeStockData(Request $request) {
        $this->setupDB();
        $query = "Exec dbo.GetShapeStockReports
        @FromDate = '',
        @ToDate	 = '',
        @Role_Id = ''";
        $results = DB::connection('sqlsrv')->select($query);
        return response()->json($results);
    }

    public function getPendingKapanStockData(Request $request) {
        $this->setupDB();
        $query = "Exec dbo.GetPendingKapanStockReports";
        $results = DB::connection('sqlsrv')->select($query);
        return response()->json($results);
    }

    public function getKapanStockData(Request $request) {
        $this->setupDB();
        $query = "Exec dbo.GetKapanStockReports";
        $results = DB::connection('sqlsrv')->select($query);
        return response()->json($results);
    }
}

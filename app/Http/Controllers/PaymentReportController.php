<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Debugbar;

class PaymentReportController extends Controller
{
    public function showPage(Request $request) {
        // DB::connection('sqlsrv')->statement('SET CONCAT_NULL_YIELDS_NULL OFF');
        // DB::connection('sqlsrv')->statement('SET CONCAT_NULL_YIELDS_NULL, ANSI_WARNINGS, ANSI_PADDING ON');
        // $results = DB::connection('sqlsrv')->select('Exec dbo.PolishPaymentOSReport');
        // Debugbar::info($results);
        return view('paymentreport');
    }

    public function getRoughPaymentData(Request $request) {
        $this->setupDB();
        $query = "Exec dbo.RoughPaymentOSReport
        @Branch_Id = 0, 
        @RsType = '', 
        @Party_Id = 0,
        @Broker_Id = 0,
        @FromDate = '',
        @ToDate	 = '',
        @company_year_id = 0,
        @Role_Id = '',
        @OSFullPermission = 0,
        @DueFilter = ''";
        $results = DB::connection('sqlsrv')->select($query);
        return response()->json($results);
    }

    public function getPolishPaymentData(Request $request) {
        $this->setupDB();
        $query = "Exec dbo.PolishPaymentOSReport
        @Branch_Id = 0, 
        @RsType = '', 
        @Party_Id = 0,
        @Broker_Id = 0,
        @FromDate = '',
        @ToDate	 = '',
        @company_year_id = 0,
        @Role_Id = '',
        @OSFullPermission = 0,
        @DueFilter = ''";
        $results = DB::connection('sqlsrv')->select($query);
        return response()->json($results);
    }
}

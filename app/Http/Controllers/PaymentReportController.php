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
        DB::connection('sqlsrv')->statement('SET NOCOUNT, ANSI_NULLS, QUOTED_IDENTIFIER, CONCAT_NULL_YIELDS_NULL, ANSI_WARNINGS, ANSI_PADDING ON');
        $results = DB::connection('sqlsrv')->select('Exec dbo.RoughPaymentOSReport');
        return response()->json($results);
    }

    public function getPolishPaymentData(Request $request) {
        DB::connection('sqlsrv')->statement('SET NOCOUNT, ANSI_NULLS, QUOTED_IDENTIFIER, CONCAT_NULL_YIELDS_NULL, ANSI_WARNINGS, ANSI_PADDING ON');
        $results = DB::connection('sqlsrv')->select('Exec dbo.PolishPaymentOSReport');
        return response()->json($results);
    }
}

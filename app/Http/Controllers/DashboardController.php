<?php

namespace App\Http\Controllers;
use App\Models\Evacuee;
use App\Models\Barangay;
use App\Models\Ecenter;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEvacuees = Evacuee::count();
        $totalBarangays = Barangay::count();
        $totalEcenters = Ecenter::count();

        return view('admin.index', compact('totalEvacuees','totalBarangays', 'totalEcenters'));
    }
}

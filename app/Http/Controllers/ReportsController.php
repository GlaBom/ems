<?php

namespace App\Http\Controllers;

use App\Models\Evacuee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{

    public function barangay()
    {
        $barangays = Evacuee::join('barangays', 'barangays.id', '=', 'evacuees.barangay_id')
            ->select('barangays.barangay_name', DB::raw('count(*) as total'))
            ->groupBy('evacuees.barangay_id', 'barangays.barangay_name')
            ->get();

        $genders = Evacuee::select('evacuees.gender', DB::raw('count(*) as total'))
            ->groupBy('evacuees.gender')
            ->get();

        return view('reports.barangay', compact('barangays', 'genders'));
    }
}

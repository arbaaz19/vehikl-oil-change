<?php

namespace App\Http\Controllers;

use App\Models\OilCheck;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OilCheckController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'current_odometer' => 'required|integer',
            'previous_odometer' => 'required|integer|lte:current_odometer',
            'previous_oil_change_date' => 'required|date|before:today',
        ]);

        $oilCheck = OilCheck::create($validated);

        return redirect('/result/' . $oilCheck->id);
    }

    public function show($id)
    {
        $oilCheck = OilCheck::findOrFail($id);

        $kmDiff = $oilCheck->current_odometer - $oilCheck->previous_odometer;
        $monthsDiff = Carbon::parse($oilCheck->previous_oil_change_date)
            ->diffInMonths(now());

        $needsOilChange = $kmDiff > 5000 || $monthsDiff > 6;

        return view('result', compact(
            'oilCheck',
            'kmDiff',
            'monthsDiff',
            'needsOilChange'
        ));
    }
}

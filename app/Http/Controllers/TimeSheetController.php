<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timesheet;

class TimesheetController extends Controller
{
    function addData(Request $req)
    {
        $timesheet = new TimeSheet;
        $timesheet->day = $req->day;
        $timesheet->clock_in = $req->clock_in;
        $timesheet->clock_out = $req->clock_out;
        $timesheet->comment = $req->comment;
        $timesheet->save();

        return redirect('add');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('login');
    }

    public function index()
    {
        return view('system.index',[
            'title' => 'IT Systems Report',
            'system' => true
        ]);
    }


    public function backup()
    {
        return view('system.backup',[
            'title' => 'System Backup Monitoring',
            'backup' => true
        ]);
    }

    public function maintenance()
    {
        return view('system.maintenance',[
            'title' => 'System Maintenance Monitoring',
            'maintenance' => true
        ]);
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Dashboard\DashboardInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    private DashboardInterface $interface;

    public function __construct(DashboardInterface $interface) {
        $this->interface = $interface;
    }

    //
    public function index() {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            $data = $this->interface->getAdminDashboardDetails();
            return view('admin.index', $data);
        }
        return view('officer.index');
    }
}

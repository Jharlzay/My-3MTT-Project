<?php

namespace App\Http\Controllers\Officer;

use App\Contracts\Officer\OfficerInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\OfficerRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficerController extends Controller
{
    //
    private OfficerInterface $interface;
    public function __construct(OfficerInterface $interface) {
        $this->interface = $interface;
    }

    public function index() {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            $data['officers'] = $this->interface->getAllOfficers();
            return view('admin.officers.index', $data);
        }
    }

    public function create() {
        return view('admin.officers.create');
    }

    public function store(OfficerRequest $request): RedirectResponse {
        $response = $this->interface->create($request->validated());
        return redirect()->route('admin.officers');

    }
}

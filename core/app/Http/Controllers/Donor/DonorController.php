<?php

namespace App\Http\Controllers\Donor;

use App\Http\Controllers\Controller;
use App\Models\AdminNotification;
use App\Models\Advertisement;
use App\Models\Blood;
use App\Models\City;
use App\Models\Donor;
use App\Models\Location;
use App\Rules\FileTypeValidate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class DonorController extends Controller
{
    public function dashboard()
    {
        $pageTitle = 'Dashboard';
        $blood = Blood::count();
        $city = City::count();
        $locations = Location::count();
        $ads = Advertisement::count();
        $don['all'] = Donor::count();
        $don['pending'] = Donor::where('status', 0)->count();
        $don['approved'] = Donor::where('status', 1)->count();
        $don['banned'] = Donor::where('status', 0)->count();
        $donors = Donor::orderBy('id', 'DESC')->with('blood', 'location')->limit(8)->get();
        return view('admin.donor_dashboard', compact('pageTitle', 'don', 'blood', 'city', 'locations', 'ads', 'donors'));
    }
}

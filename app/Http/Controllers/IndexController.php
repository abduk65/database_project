<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\CompanyInfo;
use App\Models\Package;
use App\Models\Subscriber;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $categories = Business::all();
        $packages = Package::all();
        $sampleData = CompanyInfo::limit(10)->get();
        return view('index', compact('categories', 'packages', 'sampleData'));
    }

    public function packages(Request $request)
    {
        $packages = Package::all();
        return view('packages', compact('packages'));
    }

    public function search(Request $request)
    {
        $searchQuery = $request->search_term;
        $user = Auth::id();
        $sub = Subscriber::where('user_id', $user)->first();
        $package = $sub->package;
        $result = CompanyInfo::where('Prefix', 'like', '%' . $searchQuery . '%')
            ->orWhere('Person_Name', 'like', '%' . $searchQuery . '%')
            ->orWhere('Job_Title', 'like', '%' . $searchQuery . '%')
            ->orWhere('Email', 'like', '%' . $searchQuery . '%')
            ->orWhere('Website', 'like', '%' . $searchQuery . '%')
            ->orWhere('Company_Name', 'like', '%' . $searchQuery . '%')
            ->orWhere('Phone_Number', 'like', '%' . $searchQuery . '%')->get();

        return view('search-result', compact('result', 'package'));
    }
}

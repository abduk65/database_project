<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\CompanyInfo;
use App\Models\Package;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $categories = Business::all();
        $packages = Package::all();
        return view('index', compact('categories', 'packages'));
    }

    public function packages(Request $request)
    {
        $packages = Package::all();
        return view('packages', compact('packages'));
    }

    public function search(Request $request)
    {
        $searchQuery = $request->search_term;

        $result = CompanyInfo::where('Prefix', 'like', '%' . $searchQuery . '%')
            ->orWhere('Person_Name', 'like', '%' . $searchQuery . '%')
            ->orWhere('Job_Title', 'like', '%' . $searchQuery . '%')
            ->orWhere('Email', 'like', '%' . $searchQuery . '%')
            ->orWhere('Website', 'like', '%' . $searchQuery . '%')
            ->orWhere('Company_Name', 'like', '%' . $searchQuery . '%')
            ->orWhere('Phone_Number', 'like', '%' . $searchQuery . '%')->get();
        $count = $result->count();
        return compact('result', 'count');
    }
}

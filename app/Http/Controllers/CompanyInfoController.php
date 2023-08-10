<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use App\Http\Requests\StoreCompanyInfoRequest;
use App\Http\Requests\UpdateCompanyInfoRequest;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CompanyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function table(Request $request)
    {
        $package = $request->attributes->get('package');
        if ($package->id == 1) {
            $records = CompanyInfo::all();
        } else {
            $count = $package->allowed_count;
            $records = CompanyInfo::limit($count)->get();
        }
        return view('table', compact('records', 'package'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyInfo $companyInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyInfo $companyInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyInfoRequest $request, CompanyInfo $companyInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyInfo $companyInfo)
    {
        //
    }
}

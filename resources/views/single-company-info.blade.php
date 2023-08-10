@extends('layouts.app')


@section('content')
    <div class="container">
        <div>
            <p>{{ $singleCompanyInfo->Prefix }}</p>
            <p>{{ $singleCompanyInfo->Person_Name }}</p>
            <p>{{ $singleCompanyInfo->Job_Title }}</p>
            <p>{{ $singleCompanyInfo->Email }}</p>
            <p>{{ $singleCompanyInfo->Website }}</p>
            <p>{{ $singleCompanyInfo->Company_Name }}</p>
            <p>{{ $singleCompanyInfo->Phone_Number }}</p>
            <p>{{ $singleCompanyInfo->Fax_Number }}</p>
        </div>
    </div>
@endsection

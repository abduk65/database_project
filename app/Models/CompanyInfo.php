<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    use HasFactory;

    protected $table = 'companyinfo';
    protected $guarded = [];
    public $timestamps = false;

    public static function import(array $row)
    {
        $companyInfo = new CompanyInfo();
        $companyInfo->Prefix = $row['Prefix'];
        $companyInfo->Person_Name = $row['Person_Name'];
        $companyInfo->Job_Title = $row['Job_Title'];
        $companyInfo->Email = $row['Email'];
        $companyInfo->Website = $row['Website'];
        $companyInfo->Company_Name = $row['Company_Name'];
        $companyInfo->Phone_Number = $row['Phone_Number'];
        $companyInfo->Fax_Number = $row['Fax_Number'];
        $companyInfo->Address = $row['Address'];
        $companyInfo->City = $row['City'];
        $companyInfo->PostCode = $row['PostCode'];
        $companyInfo->Mobile = $row['Mobile'];
        $companyInfo->Bussiness_Type = $row['Bussiness_Type'];
        $companyInfo->save();
    }
}

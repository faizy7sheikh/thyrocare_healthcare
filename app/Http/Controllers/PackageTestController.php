<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageTestController extends Controller
{

   
    public function storePackageTests()
    {
        // Retrieve packages and their associated tests using a single query
        $packages = DB::table('package')
            ->join('package_test', 'package.id', '=', 'package_test.package_id')
            ->join('test', 'package_test.test_id', '=', 'test.id')
            ->select('package.id as package_id', 'test.name as test_name')
            ->get();
}
}

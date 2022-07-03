<?php

namespace App\Http\Controllers;

use App\Services\ProductDataServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProductListingController extends Controller
{
    public function showListingPage()
    {
        $serviceResponse = ProductDataServices::getProducts(1, config('constants.per_page_limit'));
        $dataCollection = $serviceResponse['products'];
        $mainCategories = ProductDataServices::getAllMainCategories();

        return view('list', compact('mainCategories', 'dataCollection'));
    }

    public function loadMoreProducts(Request $request){
        $page = $request->page;
        $serviceResponse = ProductDataServices::getProducts($page, config('constants.per_page_limit'));
        $dataCollection = $serviceResponse['products'];
        return view('list_ajax', compact('dataCollection'));
    }
}

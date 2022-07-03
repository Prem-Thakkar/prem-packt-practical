<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ProductDataServices
{
    public static function getAllMainCategories()
    {
        $response = Http::get(config('constants.api_url'), [
            'token' => config('constants.api_token'),
        ]);

        $json = $response->json();
        $dataCollection = collect($json['products']);

        $allCategories = $dataCollection->pluck('categories');
        $mainCategories = [];
        foreach ($allCategories as $category) {
            $mainCategories[] = $category[2];
        }
        return array_unique($mainCategories);
    }

    public static function getProducts($page, $limit)
    {
        $response = Http::get(config('constants.api_url'), [
            'token' => config('constants.api_token'),
            'page' => $page,
            'limit' => $limit,
        ]);

        $json = $response->json();

        $productCollection = collect($json['products']);

        $productCollection = $productCollection->map(function ($product) {
            $product['image'] = config('constants.api_url') . '/' . $product['id'] . '/cover/small?token=' . config('constants.api_token');
            return $product;
        });

        return ['products' => $productCollection];
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class SearchFarmersController extends Controller
{
    function searchFarmers(Request $request)
    {
        $lat = $request->lat;
        $lng = $request->lng;

        $farmers = Member::whereBetween('lat', [$lat - 0.1, $lat + 0.1])->whereBetween('lng', [$lng - 0.1, $lng + 0.1])->get();

        return $farmers;

    }
}

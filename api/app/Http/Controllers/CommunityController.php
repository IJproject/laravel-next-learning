<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;

class CommunityController extends Controller
{
    public function index()
    {
        $communities = Community::get();

        return response()->json([
            'communities' => $communities
        ]);
    }

    public function store(Request $request)
    {
        $community = new Community();
        $community->fill($request->all());
        $community->save();

        return response()->json([
            'community' => $community
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();
        return response()->json($vendors);
    }

    public function store(Request $request)
    {
        $vendor = Vendor::create($request->all());
        return response()->json($vendor, 201);
    }

    public function show($id)
    {
        $vendor = Vendor::find($id);
        if ($vendor) {
            return response()->json($vendor);
        } else {
            return response()->json(['message' => 'Vendor not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $vendor = Vendor::find($id);
        if ($vendor) {
            $vendor->update($request->all());
            return response()->json($vendor);
        } else {
            return response()->json(['message' => 'Vendor not found'], 404);
        }
    }

    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        if ($vendor) {
            $vendor->delete();
            return response()->json(['message' => 'Vendor deleted']);
        } else {
            return response()->json(['message' => 'Vendor not found'], 404);
        }
    }
}

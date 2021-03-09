<?php

namespace App\Http\Controllers;

use App\grup;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class grupController extends Controller
{
    //
    public function grup($lokasi)
    {
        $lokasi = DB::table('locations')
            ->join('users', 'users.id', '=', 'locations.user_id')
            ->select('users.username', 'locations.location_name', 'locations.id')
            ->where('locations.location_name', 'like', '%' . $lokasi . '%')
            ->get();

        return view('grup', compact('lokasi'));
    }

    public function link($id)
    {
        $locations = DB::table('locations')
            ->join('groups', 'groups.locationId', 'locations.id')
            ->join('users', 'users.id', 'groups.user_id')
            ->select('users.username', 'locations.location_name', 'users.img', 'locations.link_wa','users.phone_number')
            ->where('locations.id', $id)
            ->get();
        return view('list_wa', compact('locations'));
    }
}

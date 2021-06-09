<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function rate(Request $request)
    {
        DB::table('ratings')->insert([
            'post_id' => $request->post_id,
            'stars' => $request->rating
        ]);

        return redirect('/posts/' . $request->post_slug)->with('notification', 'Post rating added!');
    }
}

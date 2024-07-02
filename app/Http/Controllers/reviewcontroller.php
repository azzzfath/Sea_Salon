<?php


namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;


class reviewcontroller extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'star' => 'required',
            'comment' => 'required',
        ]);

        review::create($request->except(['_token']));
        return redirect('/');
    }
}

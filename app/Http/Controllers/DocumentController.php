<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Spatie\Dropbox\Client;

class DocumentController extends Controller
{
    public function index()
    {
        $authorizationCode = session()->get('user.token.0');

        $client = new Client($authorizationCode);

        $folder = \request()->input('folder', '/');

        $lists = $client->listFolder($folder);
        $lists = Arr::get($lists, 'entries', []);

        return view('welcome', compact('lists'));

    }
}

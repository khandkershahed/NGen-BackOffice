<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rfq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class RfqController extends Controller
{
    public function index()
    {
        $rfqsResponse = Http::withOptions(['verify' => false])->get('https://www.ngenitltd.com/api/resource/rfqs');
        dd($rfqsResponse['rfqs']);
        $data = [
            'rfqs'     => $rfqs,
        ];
        return view('admin.pages.rfq.index', $data);
    }

}

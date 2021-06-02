<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\CrawlHelper;
use App\Jobs\CrawlSite;
use Illuminate\Http\Request;

class CrawlController extends Controller
{

    public function crawl(Request $request)
    {
       CrawlSite::dispatch($request->url);
    }
}
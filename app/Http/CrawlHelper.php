<?php
declare(strict_types=1);

namespace App\Http;

use Illuminate\Support\Facades\Log;

class CrawlHelper
{
    public static function getHtml(string $url)
    {
        $content = file_get_contents($url);

        Log::info('Fetched content', ['url' => $url, 'content' => $content]);
    }
}
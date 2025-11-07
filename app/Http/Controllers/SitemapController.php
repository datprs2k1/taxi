<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function index()
    {
        $baseUrl = url('/');
        $posts = Post::where('published_date', '<=', now())
            ->orderBy('published_date', 'desc')
            ->get();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // Homepage
        $xml .= $this->urlElement($baseUrl, '1.0', 'daily', now()->toIso8601String());

        // Static pages
        $staticPages = [
            ['url' => route('about'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('contact'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('posts.index'), 'priority' => '0.9', 'changefreq' => 'daily'],
            ['url' => route('promotions.index'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => route('news.index'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => route('policy.transport'), 'priority' => '0.6', 'changefreq' => 'yearly'],
            ['url' => route('policy.privacy'), 'priority' => '0.6', 'changefreq' => 'yearly'],
            ['url' => route('policy.terms'), 'priority' => '0.6', 'changefreq' => 'yearly'],
        ];

        foreach ($staticPages as $page) {
            $xml .= $this->urlElement($page['url'], $page['priority'], $page['changefreq'], now()->toIso8601String());
        }

        // Posts
        foreach ($posts as $post) {
            $url = route('posts.show', $post->slug ?? $post->id);
            $lastmod = $post->updated_at ? $post->updated_at->toIso8601String() : now()->toIso8601String();
            $priority = $post->featured ? '0.9' : '0.7';
            $changefreq = $post->published_date && $post->published_date->gt(now()->subMonth()) ? 'weekly' : 'monthly';
            
            $xml .= $this->urlElement($url, $priority, $changefreq, $lastmod);
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=utf-8');
    }

    private function urlElement($url, $priority, $changefreq, $lastmod)
    {
        return "  <url>\n" .
               "    <loc>" . htmlspecialchars($url, ENT_XML1, 'UTF-8') . "</loc>\n" .
               "    <lastmod>" . $lastmod . "</lastmod>\n" .
               "    <changefreq>" . $changefreq . "</changefreq>\n" .
               "    <priority>" . $priority . "</priority>\n" .
               "  </url>\n";
    }
}


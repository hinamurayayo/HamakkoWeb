<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index(Request $request)
    {
        $ua = $request->header('User-Agent');
        $ip = $request->ip();

        //Browser
        if (preg_match('/Edge/i', $ua)) {

            $browser_name = 'Edge';

            if (preg_match('/Edge\/([0-9.]*/', $ua, $match)) {

                $browser_version = $match[1];
            }
        } elseif (preg_match('/(MSIE|Trident)/i', $ua)) {

            $browser_name = 'IE';

            if (preg_match('/MSIE\s([0-9.]*)/', $ua, $match)) {

                $browser_version = $match[1];
            } elseif (preg_match('/Trident\/7/', $ua, $match)) {

                $browser_version = 11;
            }
        } elseif (preg_match('/Presto|OPR|OPiOS/i', $ua)) {

            $browser_name = 'Opera';

            if (preg_match('/(Opera|OPR|OPiOS)\/([0-9.]*)/', $ua, $match)) $browser_version = $match[2];
        } elseif (preg_match('/Firefox/i', $ua)) {

            $browser_name = 'Firefox';

            if (preg_match('/Firefox\/([0-9.]*)/', $ua, $match)) $browser_version = $match[1];
        } elseif (preg_match('/Chrome|CriOS/i', $ua)) {

            $browser_name = 'Chrome';

            if (preg_match('/(Chrome|CriOS)\/([0-9.]*)/', $ua, $match)) $browser_version = $match[2];
        } elseif (preg_match('/Safari/i', $ua)) {

            $browser_name = 'Safari';

            if (preg_match('/Version\/([0-9.]*)/', $ua, $match)) $browser_version = $match[1];
        }

        //Platform
        if (preg_match('/ipod/i', $ua)) {

            $platform = 'iPod';
        } elseif (preg_match('/iphone/i', $ua)) {

            $platform = 'iPhone';
        } elseif (preg_match('/ipad/i', $ua)) {

            $platform = 'iPad';
        } elseif (preg_match('/android/i', $ua)) {

            $platform = 'Android';
        } elseif (preg_match('/windows phone/i', $ua)) {

            $platform = 'Windows Phone';
        } elseif (preg_match('/linux/i', $ua)) {

            $platform = 'Linux';
        } elseif (preg_match('/macintosh|mac os/i', $ua)) {

            $platform = 'Mac';
        } elseif (preg_match('/windows/i', $ua)) {

            $platform = 'Windows';
        }


        return view('seo.index', compact('browser_name', 'ip','platform'));
    }
}

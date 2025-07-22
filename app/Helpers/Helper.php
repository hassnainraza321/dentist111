<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SoapClient;
use GuzzleHttp\Pool;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use GuzzleHttp\Psr7\MultipartStream;
use URL;
use Artisan;
use Image;
use Mail;
use \Carbon\Carbon;
use DB;
use Storage;
use App\Models\User;

class Helper
{
    public static $version = '0.0.0';
    public static $css_asset_version = '0.0.0';
    public static $js_asset_version = '0.0.0';
    public static $images_asset_version = '0.0.0';

    public static function getSiteTitle($title = null, $with_title = true, $seaprator = ' - ')
    {
        $app_name = config('app.name');

        if (empty($app_name))
        {
            return $title;
        }

        if ($title)
        {
            return $with_title ? $title . $seaprator . $app_name : $title;
        }
        
        return $app_name;
    }

    public static function sendEmail($view, $data = [], $to, $subject, $attachments = array(), $from = null, $email_title_name = null)
    {
        try
        {
            Mail::send($view, $data, function($message) use ($to, $subject, $attachments, $from, $email_title_name) {

                if (!empty($attachments))
                {
                    foreach ($attachments as $key => $attachment)
                    {
                        $file = $attachment['file'];

                        $name = null;
                        $ext = null;

                        if (isset($attachment['name']) && $attachment['ext'])
                        {
                            $name = $attachment['name'] . '.' . $attachment['ext'];
                            $ext = $attachment['ext'];
                        }

                        if (!empty($name))
                        {
                            $message->attach($file, array(
                                    'as' => $name,
                                    'mime' => $ext
                                )
                            );
                        }
                        else
                        {
                            $message->attach($file);
                        }
                    }
                }

                if (empty($from))
                {
                    $from = config('mail.from.address');
                }

                if (empty($email_title_name))
                {
                    $email_title_name = config('mail.from.name');
                }

                if (!empty($from) && !empty($email_title_name))
                {
                    $message->from($from, $email_title_name);
                }

                $message->to($to);
                $message->subject($subject);
            });
        }
        catch(\Exception $e)
        {
            report($e);
        }
    }

    public static function getRandomKey($length = 30)
    {
        return bin2hex(openssl_random_pseudo_bytes($length));
    }

    public static function getSlug($name, $table= null, $id= null)
    {
        $slug = Str::slug($name);
        
        if (isset($table) && !empty($table))
        {
            $data = DB::table($table)->where('slug', $slug)->where('id', '!=', $id)->first();
        }

        if (isset($data) && !empty($data))
        {
            return $slug . '-' . $id;
        }

        return $slug;
    }

    public static function getIp()
    {
        $ip = null;

        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key)
        {
            if (array_key_exists($key, $_SERVER) === true)
            {
                foreach (explode(',', $_SERVER[$key]) as $ip)
                {
                    $ip = trim($ip);

                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false)
                    {
                        if (empty($ip))
                        {
                            $ip = '127.0.0.1';
                        }
                    }
                }
            }
        }

        return $ip;
    }
}
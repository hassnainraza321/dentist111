<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cache;

class ServiceController extends Controller
{
    public function ourServices(Request $request)
    {
        return Cache::rememberForever('services', function() {

            return view('services.index')->render();
        });
    }

    public function emergencyDentist(Request $request, $county_city_town = null)
    {
        $location = null;
        $is_from_leicestershire = $town = null;

        if (!empty($county_city_town))
        {
            $county = DB::table('counties')->where('slug', $county_city_town)->where('is_active', 1)->first();

            if (!empty($county) && $county->slug === 'leicestershire') 
            {
                $is_from_leicestershire = true;
            }

            if (empty($county))
            {
                $city = DB::table('cities')->where('slug', $county_city_town)->where('is_active', 1)->first();

                if (!empty($city) && $city->county_id === 1) 
                {
                    $is_from_leicestershire = true;
                }

                if (empty($city))
                {
                    $town = DB::table('towns')
                                ->leftJoin('cities', 'cities.id', '=', 'towns.city_id')
                                ->where('towns.slug', $county_city_town)
                                ->where('towns.is_active', 1)
                                ->select('towns.*', 'cities.county_id')
                                ->first();

                    if (!empty($town) && $town->county_id === 1) 
                    {
                        $is_from_leicestershire = true;
                    }

                    if (empty($town))

                    {
                        abort(404);
                    }

                    if ($town->town == 'Wood Hill')
                    {
                        $location .= 'in Woodhill';
                    }
                    else
                    {
                        $location .= 'in ' . $town->town;
                    }
                }
                else
                {
                    $location = 'in ' . $city->city;
                }

                if (!empty($city) && !empty($town) && $city->slug == $town->slug)
                {
                    return redirect()->to('/emergency-dentist/' . $city->slug, 301); 
                }
            }
            else
            {
                $location = 'in ' . $county->county;
            }

            if(view()->exists('emergency-dentist.' . $county_city_town))
            {
                return view('emergency-dentist.' . $county_city_town)->with(compact('location', 'is_from_leicestershire'));
            }
        }

        return view('emergency-dentist')->with(compact('location', 'is_from_leicestershire'));
    }

    public function emergencyDentistCity(Request $request, $city = null, $town = null)
    {

        $location = null;
        $is_from_leicestershire = null;

        if (!empty($city))
        {
            $city = DB::table('cities')->where('slug', $city)->where('is_active', 1)->first();

            if (!empty($city) && $city->county_id === 1) 
            {
                $is_from_leicestershire = true;
            }

            if (empty($city))

            {
                abort(404);
            }

            $location = 'in ' . $city->city;
        }

        if (!empty($town))
        {
            $town = DB::table('towns')->leftJoin('cities', 'cities.id', '=', 'towns.city_id')->where('towns.slug', $town)->where('towns.is_active', 1)->select('towns.*', 'cities.county_id')->first();

            if (!empty($town) && $town->county_id === 1) 

            {
                $is_from_leicestershire = true;
            }

            if (empty($town))

            {
                abort(404);
            }

            $location = 'in ' . $town->town . ' ' . $city->city;
        }

        if (!empty($city) && !empty($town) && $city->slug == $town->slug)

        {
            return redirect()->to('/emergency-dentist/' . $city->slug, 301); 
        }

        return view('emergency-dentist')->with(compact('location', 'is_from_leicestershire'));
    }

    public function dentalAbscess(Request $request)
    {
        return Cache::rememberForever('dental-abscess', function() {

            return view('services.dental-abscess')->render();

        });
    }

    public function lostFilling(Request $request)
    {
        return Cache::rememberForever('lost-filling', function() {

            return view('services.lost-filling')->render();

        });
    }

    public function extraction(Request $request)
    {
        return Cache::rememberForever('extraction', function() {

            return view('services.extraction')->render();

        });
    }

    public function dentalImplants(Request $request)
    {
        return Cache::rememberForever('dental-implants', function() {

            $location = null;

            return view('services.dental-implants')->with(compact('location'))->render();

        });
    }
}


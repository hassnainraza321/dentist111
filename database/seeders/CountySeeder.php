<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Helper;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = 0;
        
        if (($handle = fopen(storage_path('app/files/cities.csv'), "r")) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
            {
                if ($row > 0)
                {
                    $county_name = null;

                    if (isset($data[7]) && !empty($data[7]))
                    {
                        $county_name = $data[7];
                    }
                    elseif (isset($data[5]) && !empty($data[5]))
                    {
                        $county_name = $data[5];
                    }
                    if (!empty($county_name))
                    {
                        if (strtolower(trim($county_name)) == 'nottinghamshire' || strtolower(trim($county_name)) == 'leicestershire' || strtolower(trim($county_name)) == 'derbyshire')
                        {
                            $county = DB::table('counties')->where('slug', Helper::getSlug(trim($county_name)))->first();

                            if (empty($county))
                            {
                                $county_id = DB::table('counties')->insertGetId( ['county' => trim($county_name), 'slug' => Helper::getSlug(trim($county_name)), 'created_at' => now(), 'updated_at' => now()] );
                            }
                            else
                            {
                                $county_id = $county->id;
                            }

                            if (!empty(trim($data[8])))
                            {
                                $city_name = trim($data[8]);

                                $city = DB::table('cities')->where('slug', Helper::getSlug($city_name))->first();

                                if (empty($city))
                                {
                                    $city_id = DB::table('cities')->insertGetId( ['city' => $city_name, 'slug' => Helper::getSlug($city_name), 'county_id' => $county_id, 'created_at' => now(), 'updated_at' => now()] );
                                }
                                else
                                {
                                    $city_id = $city->id;
                                }

                                $town = DB::table('towns')->where('slug', Helper::getSlug(trim($data[1])))->first();

                                if (empty($town))
                                {
                                    $town_id = DB::table('towns')->insertGetId( ['town' => trim($data[1]), 'slug' => Helper::getSlug(trim($data[1])), 'city_id' => $city_id, 'created_at' => now(), 'updated_at' => now()] );
                                }
                            }

                            if (!empty(trim($data[9])))
                            {
                                $city_name = trim($data[9]);

                                $city = DB::table('cities')->where('slug', Helper::getSlug($city_name))->first();

                                if (empty($city))
                                {
                                    $city_id = DB::table('cities')->insertGetId( ['city' => $city_name, 'slug' => Helper::getSlug($city_name), 'county_id' => $county_id, 'created_at' => now(), 'updated_at' => now()] );
                                }
                                else
                                {
                                    $city_id = $city->id;
                                }

                                $town = DB::table('towns')->where('slug', Helper::getSlug(trim($data[1])))->first();

                                if (empty($town))
                                {
                                    $town_id = DB::table('towns')->insertGetId( ['town' => trim($data[1]), 'slug' => Helper::getSlug(trim($data[1])), 'city_id' => $city_id, 'created_at' => now(), 'updated_at' => now()] );
                                }
                            }
                        }
                    }   
                }

                $row++;
            }

            fclose($handle);
        }
    }
}

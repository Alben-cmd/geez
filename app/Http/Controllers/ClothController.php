<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use App\cloth; 

class ClothController extends Controller
{
     public function __construct(Database $database)
    {
        $this->database = $database;
        // $this->tablename = 'UploadsMaster';

    }

    public function men_cloth()
    {


        // Men Top
        // men jacket
        $men_jackets = $this->database->getReference('WhatUsersSee/1631530711104!@ETR27R2893@!&Men/1631530802649@!2626hwegdr2376e!@Mens Tops/1631533154809@!2626hwegdr2376e!@Jackets and coats')->getValue();
        //men_shirts

        $men_shirts = $this->database->getReference('WhatUsersSee/1631530711104!@ETR27R2893@!&Men/1631530802649@!2626hwegdr2376e!@Mens Tops/1631533196530@!2626hwegdr2376e!@Shirts')->getValue();
        //men_Sweaters
         $men_sweaters = $this->database->getReference('WhatUsersSee/1631530711104!@ETR27R2893@!&Men/1631530802649@!2626hwegdr2376e!@Mens Tops/1631533229638@!2626hwegdr2376e!@Sweaters')->getValue();
        //mens_ashebi
         $mens_ashebi = $this->database->getReference('WhatUsersSee/1631530711104!@ETR27R2893@!&Men/1631530802649@!2626hwegdr2376e!@Mens Tops/1631533253616@!2626hwegdr2376e!@Mens Ashebi')->getValue();
         //men_native
         $men_native = $this->database->getReference('WhatUsersSee/1631530711104!@ETR27R2893@!&Men/1631530802649@!2626hwegdr2376e!@Mens Tops/1631533294800@!2626hwegdr2376e!@Native Tops')->getValue();
         //long_sleeves
         $men_sleeves = $this->database->getReference('WhatUsersSee/1631530711104!@ETR27R2893@!&Men/1631530802649@!2626hwegdr2376e!@Mens Tops/1631533341034@!2626hwegdr2376e!@Long sleeves')->getValue();
         $jacket_array = [];
         $shirt_array = [];
         $sweater_array = [];
         $ashebi_array = [];
         $native_array = [];
         $sleeve_array = [];
        if ($men_jackets != null) 
        {
            $men_jackets = array_values($men_jackets);
            
            foreach ($men_jackets as $key => $links) 
            {
            $main_jackets = $this->database->getReference($links)->getValue();
            array_push($jacket_array, $main_jackets);
            }
        }
        if ($men_shirts != null) 
        {
            $men_shirts = array_values($men_shirts);
            
            foreach ($men_shirts as $key => $links) 
            {
            $main_shirts = $this->database->getReference($links)->getValue();
            array_push($shirt_array, $main_shirts);
            }
        }
        if ($men_sweaters != null) {
            $men_sweaters = array_values($men_sweaters);
            
            foreach ($men_sweaters as $key => $links) 
            {
            $main_sweaters = $this->database->getReference($links)->getValue();
            array_push($sweater_array, $main_sweaters);
            }
        }
        if ($mens_ashebi !=null) {
            $mens_ashebi = array_values($mens_ashebi);
            
            foreach ($mens_ashebi as $key => $links) 
            {
            $main_ashebis = $this->database->getReference($links)->getValue();
            array_push($ashebi_array, $main_ashebis);
            }
        }
        if ($men_native != null) {
            $men_native = array_values($men_native);
            
            foreach ($men_native as $key => $links) 
            {
            $main_natives = $this->database->getReference($links)->getValue();
            array_push($native_array, $main_natives);
            }
        }
        if ($men_sleeves != null) {
            $men_sleeves = array_values($men_sleeves);
            
            foreach ($men_sleeves as $key => $links) 
            {
            $main_sleeves = $this->database->getReference($links)->getValue();
            array_push($sleeve_array, $main_sleeves);
            }
        }


        // Men Bottoms
        // men tpye 1
        $men_type_1 = $this->database->getReference('WhatUsersSee/1631530711104!@ETR27R2893@!&Men/1631530814402@!2626hwegdr2376e!@Mens Bottoms/1631533368898@!2626hwegdr2376e!@Type 1')->getValue();
        //men_type_2
        $men_type_2 = $this->database->getReference('WhatUsersSee/1631530711104!@ETR27R2893@!&Men/1631530814402@!2626hwegdr2376e!@Mens Bottoms/1631533397250@!2626hwegdr2376e!@Type 2')->getValue();
        //men_type_3
         $men_type_3 = $this->database->getReference('WhatUsersSee/1631530711104!@ETR27R2893@!&Men/1631530814402@!2626hwegdr2376e!@Mens Bottoms/1631533432319@!2626hwegdr2376e!@Type 3')->getValue();
        //men_type_4
         $men_type_4 = $this->database->getReference('WhatUsersSee/1631530711104!@ETR27R2893@!&Men/1631530814402@!2626hwegdr2376e!@Mens Bottoms/1631533571515@!2626hwegdr2376e!@Type 4')->getValue();
         //men_type_5
         $men_type_5 = $this->database->getReference('WhatUsersSee/1631530711104!@ETR27R2893@!&Men/1631530814402@!2626hwegdr2376e!@Mens Bottoms/1631533593583@!2626hwegdr2376e!@Type 5')->getValue();
         
         $type1_array = [];
         $type2_array = [];
         $type3_array = [];
         $type4_array = [];
         $type5_array = [];
         $type5_array = [];
        if ($men_type_1 != null) 
        {
            $men_type_1 = array_values($men_type_1);
            
            foreach ($men_type_1 as $key => $links) 
            {
            $main_type_1 = $this->database->getReference($links)->getValue();
            array_push($type1_array, $main_type_1);
            }
        }
        if ($men_type_2 != null) 
        {
            $men_type_2 = array_values($men_type_2);
            
            foreach ($men_type_2 as $key => $links) 
            {
            $main_type_2 = $this->database->getReference($links)->getValue();
            array_push($type2_array, $main_type_2);
            }
        }
        if ($men_type_3 != null) {
            $men_type_3 = array_values($men_type_3);
            
            foreach ($men_type_3 as $key => $links) 
            {
            $main_type_3 = $this->database->getReference($links)->getValue();
            array_push($type3_array, $main_type_3);
            }
        }
        if ($men_type_4 !=null) {
            $men_type_4 = array_values($men_type_4);
            
            foreach ($men_type_4 as $key => $links) 
            {
            $main_type_4 = $this->database->getReference($links)->getValue();
            array_push($type4_array, $main_type_4);
            }
        }
        if ($men_type_5 != null) {
            $men_type_5 = array_values($men_type_5);
            
            foreach ($men_type_5 as $key => $links) 
            {
            $main_type_5 = $this->database->getReference($links)->getValue();
            array_push($type5_array, $main_type_5);
            }
        }

        // dd($jacket_array);
        
        return view('front.clothes.clothes', compact('jacket_array','shirt_array','sweater_array','ashebi_array','native_array','sleeve_array','type1_array','type2_array','type3_array','type4_array','type5_array'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($id, $reference)
    {
        $cloth = $this->database->getReference('reference')->getValue();

        return view ('front.single-cloth', compact('cloth'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

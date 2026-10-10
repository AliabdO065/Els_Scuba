<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * sections_contact rows are read by hardcoded id (1=contact info,
     * 2=messages, 3=feedback) but were never seeded, only created ad-hoc
     * from the dashboard. A missing row crashes the page that reads it
     * (id 3 was missing in production, breaking /contact). insertOrIgnore
     * so this never overwrites real content that already exists.
     */
    public function run()
    {
        DB::table('sections_contact')->insertOrIgnore([
            ['id' => 1, 'name' => 'contact', 'content' => ''],
            ['id' => 2, 'name' => 'message', 'content' => ''],
            ['id' => 3, 'name' => 'feedback', 'content' => ''],
        ]);
    }
}

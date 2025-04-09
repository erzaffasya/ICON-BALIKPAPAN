<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaftarPembayaran extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create(
            ['name' => 'Mandiri Virtual Account', 'is_published' => true]
        );
        Payment::create(
            ['name' => 'BRI Virtual Account', 'is_published' => true]
        );
        Payment::create(
            ['name' => 'BNI Virtual Account', 'is_published' => true]
        );
        Payment::create(
            ['name' => 'BCA Virtual Account', 'is_published' => true]
        );
        Payment::create(
            ['name' => 'Alfamart', 'is_published' => true]
        );
        Payment::create(
            ['name' => 'Indomaret', 'is_published' => true]
        );
        Payment::create(
            ['name' => 'LinkAja', 'is_published' => true]
        );
        Payment::create(
            ['name' => 'OVO', 'is_published' => true]
        );
        Payment::create(
            ['name' => 'Gopay', 'is_published' => true]
        );
    }
}

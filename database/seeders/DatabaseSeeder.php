<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('item')->insert([
            ['id' => 1, 'namaBarang' => 'Product1', 'jenisBarang' => 'Type1', 'jumlahBarang' => 10, 'tanggalMasukBarang' => '2024-02-27', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'namaBarang' => 'Product2', 'jenisBarang' => 'Type2', 'jumlahBarang' => 5, 'tanggalMasukBarang' => '2024-02-28' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'namaBarang' => 'Product3', 'jenisBarang' => 'Type1', 'jumlahBarang' => 8, 'tanggalMasukBarang' => '2024-02-28' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'namaBarang' => 'Product4', 'jenisBarang' => 'Type3', 'jumlahBarang' => 15, 'tanggalMasukBarang' => '2024-03-01' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'namaBarang' => 'Product5', 'jenisBarang' => 'Type2', 'jumlahBarang' => 20, 'tanggalMasukBarang' => '2024-03-02' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'namaBarang' => 'Product6', 'jenisBarang' => 'Type3', 'jumlahBarang' => 12, 'tanggalMasukBarang' => '2024-03-03' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'namaBarang' => 'Product7', 'jenisBarang' => 'Type1', 'jumlahBarang' => 18, 'tanggalMasukBarang' => '2024-03-04' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'namaBarang' => 'Product8', 'jenisBarang' => 'Type2', 'jumlahBarang' => 25, 'tanggalMasukBarang' => '2024-03-05' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'namaBarang' => 'Product9', 'jenisBarang' => 'Type3', 'jumlahBarang' => 10, 'tanggalMasukBarang' => '2024-03-06' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'namaBarang' => 'Product10', 'jenisBarang' => 'Type1', 'jumlahBarang' => 5, 'tanggalMasukBarang' => '2024-03-07' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'namaBarang' => 'Product11', 'jenisBarang' => 'Type2', 'jumlahBarang' => 30, 'tanggalMasukBarang' => '2024-03-08' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'namaBarang' => 'Product12', 'jenisBarang' => 'Type3', 'jumlahBarang' => 22, 'tanggalMasukBarang' => '2024-03-09' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'namaBarang' => 'Product13', 'jenisBarang' => 'Type1', 'jumlahBarang' => 15, 'tanggalMasukBarang' => '2024-03-10' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'namaBarang' => 'Product14', 'jenisBarang' => 'Type2', 'jumlahBarang' => 8, 'tanggalMasukBarang' => '2024-03-11' ,'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'namaBarang' => 'Product15', 'jenisBarang' => 'Type3', 'jumlahBarang' => 17, 'tanggalMasukBarang' => '2024-03-12' ,'created_at' => now(), 'updated_at' => now()]
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

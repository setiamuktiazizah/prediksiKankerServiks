<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTabelDataGejala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_data_gejala', function (Blueprint $table) {
            $table->id('id_gejala');
            $table->string('kode_gejala')->unique();
            $table->string('gejala');
            $table->timestamps();
        });

        $insertedData = [
            [
                'kode_gejala' => 'G01',
                'gejala' => 'Umur <= 12',
                // 'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G02',
                'gejala' => 'Umur 13-17',
                // 'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G03',
                'gejala' => 'Umur 18-44',
                // 'nilai_densitas' => 0.4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G04',
                'gejala' => 'Umur 45-55',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G05',
                'gejala' => 'Umur 56-64',
                // 'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G06',
                'gejala' => 'Umur >= 65',
                // 'nilai_densitas' => 0.3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G07',
                'gejala' => 'Jumlah Partner Sex <= 2',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G08',
                'gejala' => 'Jumlah partner sex 3',
                // 'nilai_densitas' => 0.3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G09',
                'gejala' => 'Jumlah partner sex > 3',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G10',
                'gejala' => 'Usia pertama kali berhubungan seksual <= 15',
                // 'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G11',
                'gejala' => 'Usia pertama kali berhubungan seksual 16-18',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G12',
                'gejala' => 'Usia pertama kali berhubungan seksual > 18',
                // 'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G13',
                'gejala' => 'Jumlah kehamilan 0-1',
                // 'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G14',
                'gejala' => 'Jumlah kehamilan 2-3',
                // 'nilai_densitas' => 0.3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G15',
                'gejala' => 'Jumlah kehamilan > 3',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G16',
                'gejala' => 'Lama merokok (tahun) 0-1',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G17',
                'gejala' => 'Lama merokok (tahun) > 1',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G18',
                'gejala' => 'Jumlah rokok yang dihabiskan per tahun (pack) 0-1',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G19',
                'gejala' => 'Jumlah rokok yang dihabiskan per tahun (pack) > 1',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G20',
                'gejala' => 'Penggunaan Hormonal Contraceptive (per tahun) 0-1',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G21',
                'gejala' => 'Penggunaan Hormonal Contraceptive (per tahun) 2-3',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G22',
                'gejala' => 'Penggunaan Hormonal Contraceptive (per tahun) > 3',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G23',
                'gejala' => 'Penggunaan IUD (per tahun) 0-2',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G24',
                'gejala' => 'Penggunaan IUD (per tahun) > 2',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G25',
                'gejala' => 'STDs number 0-1',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G26',
                'gejala' => 'STDs number > 1',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G27',
                'gejala' => 'Merokok',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G28',
                'gejala' => 'Pernah berhubungan seksual',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G29',
                'gejala' => 'Menggunakan konstraseptif hormonal',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G30',
                'gejala' => 'Menggunakan IUD',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G31',
                'gejala' => 'Pernah mengalami penyakit menular seksual (PMS)',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G32',
                'gejala' => 'Pernah mengalami Condylomatosis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G33',
                'gejala' => 'Pernah mengalami Vaginal Condylomatosis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G34',
                'gejala' => 'Pernah mengalami Vulvo Perineal Condylomatosis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G35',
                'gejala' => 'Pernah mengalami Syphilis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G36',
                'gejala' => 'Pernah mengalami penyakit radang panggul (Pelvic Inflammatory Disease)',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G37',
                'gejala' => 'Pernah mengalami herpes genital',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G38',
                'gejala' => 'Pernah mengalami Moluskum Kontagiosum (Molluscum Contagiosum)',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G39',
                'gejala' => 'Pernah mengalami HIV',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G40',
                'gejala' => 'Pernah mengalami Hepatitis B',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G41',
                'gejala' => 'Pernah mengalami HPV',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('tabel_data_gejala')->insert($insertedData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_data_gejala');
    }
}

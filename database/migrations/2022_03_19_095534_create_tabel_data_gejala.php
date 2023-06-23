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
                'gejala' => 'Usia kurang dari sama dengan 12 tahun',
                // 'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G02',
                'gejala' => 'Usia 13 sampai dengan 17 tahun',
                // 'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G03',
                'gejala' => 'Usia 18 sampai dengan 44 tahun',
                // 'nilai_densitas' => 0.4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G04',
                'gejala' => 'Usia 45 sampai dengan 55 tahun',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G05',
                'gejala' => 'Usia 56 sampai dengan 64 tahun',
                // 'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G06',
                'gejala' => 'Usia lebih dari sama dengan 65 tahun',
                // 'nilai_densitas' => 0.3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G07',
                'gejala' => 'Merokok',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G08',
                'gejala' => 'Tidak merokok',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G09',
                'gejala' => 'Lama merokok 0 sampai dengan 1 tahun',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G10',
                'gejala' => 'Lama merokok lebih dari 1 tahun',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G11',
                'gejala' => 'Jumlah rokok yang dihabiskan per tahun 0 sampai dengan 1 pack',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G12',
                'gejala' => 'Jumlah rokok yang dihabiskan per tahun lebih dari 1 pack',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G13',
                'gejala' => 'Pernah berhubungan seksual',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G14',
                'gejala' => 'Tidak pernah berhubungan seksual',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G15',
                'gejala' => 'Usia pertama kali berhubungan seksual kurang dari sama dengan 15 tahun',
                // 'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G16',
                'gejala' => 'Usia pertama kali berhubungan seksual 16 samapi dengan 18 tahun',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G17',
                'gejala' => 'Usia pertama kali berhubungan seksual lebih dari 18 tahun',
                // 'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G18',
                'gejala' => 'Jumlah Partner Sex kurang dari sama dengan 2',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G19',
                'gejala' => 'Jumlah partner sex ada 3',
                // 'nilai_densitas' => 0.3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G20',
                'gejala' => 'Jumlah partner sex lebih dari 3',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G21',
                'gejala' => 'Menggunakan konstraseptif hormonal',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G22',
                'gejala' => 'Tidak menggunakan konstraseptif hormonal',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G23',
                'gejala' => 'Penggunaan Hormonal Contraceptive 0 sampai dengan 1 kali per tahun',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G24',
                'gejala' => 'Penggunaan Hormonal Contraceptive 2 sampai dengan 3 kali per tahun',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G25',
                'gejala' => 'Penggunaan Hormonal Contraceptive lebih dari 3 kali per tahun',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G26',
                'gejala' => 'Jumlah kehamilan 0 sampai 1 kali',
                // 'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G27',
                'gejala' => 'Jumlah kehamilan 2 sampai 3 kali',
                // 'nilai_densitas' => 0.3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G28',
                'gejala' => 'Jumlah kehamilan lebih dari 3 kali',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G29',
                'gejala' => 'Menggunakan IUD',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G30',
                'gejala' => 'Tidak menggunakan IUD',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G31',
                'gejala' => 'Penggunaan IUD 0 sampai dengan 2 kali per tahun',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G32',
                'gejala' => 'Penggunaan IUD lebih dari 2 kali per tahun',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G33',
                'gejala' => 'Terinfeksi STDs sebanyak 0 sampai dengan 1 kali',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G34',
                'gejala' => 'Terinfeksi STDs sebanyak lebih dari 1 kali',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G35',
                'gejala' => 'Pernah mengalami penyakit menular seksual (PMS)',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G36',
                'gejala' => 'Tidak pernah mengalami penyakit menular seksual (PMS)',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G37',
                'gejala' => 'Pernah mengalami Condylomatosis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G38',
                'gejala' => 'Tidak pernah mengalami Condylomatosis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G39',
                'gejala' => 'Pernah mengalami Vaginal Condylomatosis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G40',
                'gejala' => 'Tidak pernah mengalami Vaginal Condylomatosis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G41',
                'gejala' => 'Pernah mengalami Vulvo Perineal Condylomatosis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G42',
                'gejala' => 'Tidak pernah mengalami Vulvo Perineal Condylomatosis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G43',
                'gejala' => 'Pernah mengalami Syphilis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G44',
                'gejala' => 'Tidak pernah mengalami Syphilis',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G45',
                'gejala' => 'Pernah mengalami penyakit radang panggul (Pelvic Inflammatory Disease)',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G46',
                'gejala' => 'Tidak pernah mengalami penyakit radang panggul (Pelvic Inflammatory Disease)',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G47',
                'gejala' => 'Pernah mengalami herpes genital',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G48',
                'gejala' => 'Tidak pernah mengalami herpes genital',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G49',
                'gejala' => 'Pernah mengalami Moluskum Kontagiosum (Molluscum Contagiosum)',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G50',
                'gejala' => 'Tidak pernah mengalami Moluskum Kontagiosum (Molluscum Contagiosum)',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G51',
                'gejala' => 'Pernah mengalami HIV',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G52',
                'gejala' => 'Tidak pernah mengalami HIV',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G53',
                'gejala' => 'Pernah mengalami Hepatitis B',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G54',
                'gejala' => 'Tidak pernah mengalami Hepatitis B',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G55',
                'gejala' => 'Pernah mengalami HPV',
                // 'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_gejala' => 'G56',
                'gejala' => 'Tidak pernah mengalami HPV',
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

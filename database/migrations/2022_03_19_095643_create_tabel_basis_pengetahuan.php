<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTabelBasisPengetahuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_basis_pengetahuan', function (Blueprint $table) {
            $table->id('id_basis_pengetahuan');
            $table->string('kode_penyakit');
            $table->string('kode_gejala');
            $table->double('nilai_densitas');
            $table->string('gejala');
            $table->timestamps();
        });

        $insertedData = [
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G01',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G02',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G03',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Usia 18 sampai dengan 44 tahun'
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G04',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ], 
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G05',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G06',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G07',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G19',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Jumlah partner sex ada 3'
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G20',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Jumlah partner sex lebih dari 3'
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G10',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G11',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G12',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G13',
            //     'nilai_densitas' => 0,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G14',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G15',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G16',
            //     'nilai_densitas' => 0.1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G17',
            //     'nilai_densitas' => 0.4,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G18',
            //     'nilai_densitas' => 0.1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G19',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G20',
            //     'nilai_densitas' => 0.1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G21',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G22',
            //     'nilai_densitas' => 0.4,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G23',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G24',
            //     'nilai_densitas' => 0.4,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G33',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Terinfeksi STDs sebanyak 0 sampai dengan 1 kali'
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G34',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Terinfeksi STDs sebanyak lebih dari 1 kali'
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G07',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Merokok'
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G28',
            //     'nilai_densitas' => 0,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G13',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah berhubungan seksual'
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G30',
            //     'nilai_densitas' => 0,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G31',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G22',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak menggunakan konstraseptif hormonal'            
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G33',
            //     'nilai_densitas' => 0.4,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G30',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak menggunakan IUD'            
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G35',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami penyakit menular seksual (PMS)'            
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G36',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G37',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami Condylomatosis'            
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G38',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G39',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami Vaginal Condylomatosis'            
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G40',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G41',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami Vulvo Perineal Condylomatosis'            
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G42',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G43',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami Syphilis'            
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G44',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G45',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami penyakit radang panggul (Pelvic Inflammatory Disease)'            
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G46',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G47',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami herpes genital'            
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G48',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G49',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami Moluskum Kontagiosum (Molluscum Contagiosum)'            
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G50',
            //     'nilai_densitas' => 0.4,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G51',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami HIV'            
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G52',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G53',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami Hepatitis B'
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G54',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami Hepatitis B'
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G55',
                'nilai_densitas' => 0.95,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami HPV'
            ],
            // [
            //     'kode_penyakit' => 'P01',
            //     'kode_gejala' => 'G56',
            //     'nilai_densitas' => 0,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G01',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Usia kurang dari sama dengan 12 tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G02',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Usia 13 sampai dengan 17 tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G03',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Usia 18 sampai dengan 44 tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G04',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Usia 45 sampai dengan 55 tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G05',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Usia 56 sampai dengan 64 tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G06',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Usia lebih dari sama dengan 65 tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G18',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Jumlah Partner Sex kurang dari sama dengan 2'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G19',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Jumlah partner sex ada 3'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G09',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G15',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Usia pertama kali berhubungan seksual kurang dari sama dengan 15 tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G16',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Usia pertama kali berhubungan seksual 16 samapi dengan 18 tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G17',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Usia pertama kali berhubungan seksual lebih dari 18 tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G26',
                'nilai_densitas' => 0.2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Jumlah kehamilan 0 sampai 1 kali'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G27',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Jumlah kehamilan 2 sampai 3 kali'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G28',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Jumlah kehamilan lebih dari 3 kali'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G09',
                'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Lama merokok 0 sampai dengan 1 tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G10',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Lama merokok lebih dari 1 tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G11',
                'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Jumlah rokok yang dihabiskan per tahun 0 sampai dengan 1 pack'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G12',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Jumlah rokok yang dihabiskan per tahun lebih dari 1 pack'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G23',
                'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Penggunaan Hormonal Contraceptive 0 sampai dengan 1 kali per tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G24',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Penggunaan Hormonal Contraceptive 2 sampai dengan 3 kali per tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G25',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Penggunaan Hormonal Contraceptive lebih dari 3 kali per tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G31',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Penggunaan IUD 0 sampai dengan 2 kali per tahun'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G32',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Penggunaan IUD lebih dari 2 kali per tahun'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G25',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G26',
            //     'nilai_densitas' => 0,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G27',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G08',
                'nilai_densitas' => 0.2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak merokok',
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G29',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G14',
                'nilai_densitas' => 0.2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah berhubungan seksual'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G21',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Menggunakan konstraseptif hormonal'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G32',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G29',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Menggunakan IUD'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G34',
            //     'nilai_densitas' => 0.4,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G35',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G36',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami penyakit menular seksual (PMS)'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G37',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G38',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami Condylomatosis'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G39',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G40',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami Vaginal Condylomatosis'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G41',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G42',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami Vulvo Perineal Condylomatosis'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G43',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G44',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami Syphilis'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G45',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G46',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami penyakit radang panggul (Pelvic Inflammatory Disease)'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G47',
            //     'nilai_densitas' => 0.3,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G48',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami herpes genital'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G49',
            //     'nilai_densitas' => 0.4,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G50',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami Moluskum Kontagiosum (Molluscum Contagiosum)'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G51',
            //     'nilai_densitas' => 0.2,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G52',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami HIV'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G53',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Pernah mengalami Hepatitis B'
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G54',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami Hepatitis B'
            ],
            // [
            //     'kode_penyakit' => 'P02',
            //     'kode_gejala' => 'G55',
            //     'nilai_densitas' => 0,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G56',
                'nilai_densitas' => 0.2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'gejala' => 'Tidak pernah mengalami HPV'
            ],
        ];

        DB::table('tabel_basis_pengetahuan')->insert($insertedData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_basis_pengetahuan');
    }
}

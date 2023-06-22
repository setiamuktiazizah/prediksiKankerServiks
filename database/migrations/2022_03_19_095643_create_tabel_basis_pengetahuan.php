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
                'updated_at' => Carbon::now()
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
                'kode_gejala' => 'G08',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G09',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'kode_gejala' => 'G25',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G26',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G27',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'kode_gejala' => 'G29',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'kode_gejala' => 'G32',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'kode_gejala' => 'G34',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G35',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G54',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P01',
                'kode_gejala' => 'G55',
                'nilai_densitas' => 0.95,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G02',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G03',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G04',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G05',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G06',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G07',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G08',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'kode_gejala' => 'G10',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G11',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G12',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G13',
                'nilai_densitas' => 0.2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G14',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G15',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G16',
                'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G17',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G18',
                'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G19',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G20',
                'nilai_densitas' => 0.9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G21',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G22',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G23',
                'nilai_densitas' => 0.7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G24',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'kode_gejala' => 'G28',
                'nilai_densitas' => 0.2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'kode_gejala' => 'G30',
                'nilai_densitas' => 0.2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G31',
                'nilai_densitas' => 0.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'kode_gejala' => 'G33',
                'nilai_densitas' => 0.6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G53',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'kode_gejala' => 'G54',
                'nilai_densitas' => 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
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
                'updated_at' => Carbon::now()
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

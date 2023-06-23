<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTabelDataPenyakit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_data_penyakit', function (Blueprint $table) {
            $table->id('id_penyakit');
            $table->string('kode_penyakit')->unique();
            $table->string('nama_penyakit');
            $table->longText('solusi');
            $table->timestamps();
        });

        $insertedData = [
            [
                'kode_penyakit' => 'P01',
                'nama_penyakit' => 'Terprediksi',
                'solusi' => json_encode([
                    '- Segera periksa ke dokter;',
                    '- Menerapkan gaya hidup sehat, seperti menjaga berat badan yang sehat, mengonsumsi makanan bergizi, dan berolahraga secara teratur;',
                    '- Pemeriksaan HPV DNA;',
                    '- Menggunakan pengaman saat melakukan seks;',
                    '- Hentikan merokok'
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P02',
                'nama_penyakit' => 'Tidak Terprediksi',
                'solusi' => json_encode([
                    '- Menerapkan gaya hidup sehat, seperti menjaga berat badan yang sehat, mengonsumsi makanan bergizi, dan berolahraga secara teratur;',
                    '- Vaksinasi HPV;',
                    '- Pemeriksaan Pap smear secara berkala;',
                    '- Hentikan kebiasaan merokok.'
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('tabel_data_penyakit')->insert($insertedData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_data_penyakit');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayathidupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayathidups', function (Blueprint $table) {
            $table->bigIncrements('id_pendaftar');
            $table->string('nama_lengkap');
            $table->string('foto_profile');
            $table->string('impian_posisi');
            $table->text('tentang_saya');
            $table->string('tempat');
            $table->date('tgl_lahir');
            $table->enum('jk', ['Laki-laki','Perempuan']);
            $table->enum('agama', ['Islam','Kristen','Hindu','Budha','Konghuchu']);
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('email');
            $table->text('alamat');
            $table->string('domisili');
            $table->enum('media_sosial', ['Linkedin','Github','Website','Instagram','Facebook','Twitter']);
            $table->string('akun_media_sosial');
            $table->string('softskill');
            $table->string('nama_tempat_seminar');
            $table->string('hari');
            $table->date('tgl_seminar');
            $table->string('judul_seminar');
            $table->string('sebagai');
            $table->string('pengalaman_kerja');
            $table->string('nama_perusahaan');
            $table->string('posisi_kerja');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->text('deskripsi_pekerjaan');
            $table->text('prestasi_pekerjaan');       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayathidups');
    }
}

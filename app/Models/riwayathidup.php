<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayathidup extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pendaftar';

    protected $fillable = [
    
    'id_pendaftar',
    'nama_lengkap', 
    'foto_profile',
    'impian_posisi',
    'tentang_saya',
    'tempat',
    'tgl_lahir',
    'jk',
    'agama',        
    'tinggi_badan',
    'berat_badan',
    'email',
    'alamat',
    'domisili',
    'media_sosial',
    'akun_media_sosial',
    'softskill',
    'nama_tempat_seminar',
    'hari',
    'tgl_seminar',
    'judul_seminar',
    'sebagai',
    'pengalaman_kerja',
    'nama_perusahaan',
    'posisi_kerja',
    'tgl_mulai',
    'tgl_selesai',
    'deskripsi_pekerjaan',
    'prestasi_pekerjaan'

    ];
}
        
        
        
        
        
        

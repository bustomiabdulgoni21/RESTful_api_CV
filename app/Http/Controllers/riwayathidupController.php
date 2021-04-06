<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\riwayathidup;
use Symfony\Component\HttpFoundation\Response; //Wajib di Import
use Illuminate\Support\Facades\Validator;

class riwayathidupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampildata = riwayathidup::orderBy('id_pendaftar', 'DESC')->get();
        $response = [
            'message' => 'List Data Riwayat Hidup',
            'data' => $tampildata
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'id_pendaftar'  => ['required'],
            'nama_lengkap' => ['required'], 
            'foto_profile' => ['required'],
            'impian_posisi' => ['required'],
            'tentang_saya' => ['required'],
            'tempat' => ['required'],
            'tgl_lahir' => ['required'],
            'jk' => ['required', 'in:Laki-laki,Perempuan'],
            'agama'=> ['required', 'in:Islam,Kristen,Hindu,Budha,Konghuchu'],
            'tinggi_badan' => ['required'],
            'berat_badan' => ['required'],
            'email' => ['required'],
            'alamat' => ['required'],
            'domisili' => ['required'],
            'media_sosial' => ['required', 'in:Linkedin,Github,Website,Instagram,Facebook,Twitter'],
            'akun_media_sosial' => ['required'],
            'softskill' => ['required'],
            'nama_tempat_seminar' => ['required'],
            'hari' => ['required'],
            'tgl_seminar' => ['required'],
            'judul_seminar' => ['required'],
            'sebagai' => ['required'],
            'pengalaman_kerja' => ['required'],
            'nama_perusahaan' => ['required'],
            'posisi_kerja' => ['required'],
            'tgl_mulai' => ['required', 'date'],
            'tgl_selesai' => ['required', 'date'],
            'deskripsi_pekerjaan' => ['required'],
            'prestasi_pekerjaan' => ['required'] 

        ]);
        if($validator->fails()) {
            return response()->json($validator->error(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $tampildata = riwayathidup::create($request->all());
            $response = [
                'message' => 'Data Riwayat Hidup created',
                'data' => $tampildata
            ];

            return response()->json($response, Response::HTTP_CREATED);

        } catch(QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pendafar)
    {
        $tampildata = riwayathidup::findOrFail($id_pendafar);
        $response = [
            'message' => 'Detail of Guru resource',
            'data' => $tampildata
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pendafar)
    {
        $tampildata = riwayathidup::findOrFail($id_pendafar);

        $validator = Validator::make($request->all(), [

            'id_pendaftar'  => ['required'],
            'nama_lengkap' => ['required'], 
            'foto_profile' => ['required'],
            'impian_posisi' => ['required'],
            'tentang_saya' => ['required'],
            'tempat' => ['required'],
            'tgl_lahir' => ['required'],
            'jk' => ['required', 'in:Laki-laki,Perempuan'],
            'agama'=> ['required', 'in:Islam,Kristen,Hindu,Budha,Konghuchu'],
            'tinggi_badan' => ['required'],
            'berat_badan' => ['required'],
            'email' => ['required'],
            'alamat' => ['required'],
            'domisili' => ['required'],
            'media_sosial' => ['required', 'in:Linkedin,Github,Website,Instagram,Facebook,Twitter'],
            'akun_media_sosial' => ['required'],
            'softskill' => ['required'],
            'nama_tempat_seminar' => ['required'],
            'hari' => ['required'],
            'tgl_seminar' => ['required'],
            'judul_seminar' => ['required'],
            'sebagai' => ['required'],
            'pengalaman_kerja' => ['required'],
            'nama_perusahaan' => ['required'],
            'posisi_kerja' => ['required'],
            'tgl_mulai' => ['required', 'date'],
            'tgl_selesai' => ['required', 'date'],
            'deskripsi_pekerjaan' => ['required'],
            'prestasi_pekerjaan' => ['required']

        ]);

        if($validator->fails()) {
            return response()->json($validator->error(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $tampildata->update($request->all());
            $response = [
                'message' => 'Data Riwayat Hidup Update',
                'data' => $tampildata

            ];

            return response()->json($response, Response::HTTP_OK);

        } catch(QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pendafar)
    {
        $tampildata = riwayathidup::findOrFail($id_pendafar);

        try {
            if ($tampildata->delete()) {
                $response = [
                'message' => 'Data Riwayat Hidup Deleted',
            ];
            }
            return response()->json($response, Response::HTTP_OK);

        } catch(QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }   
    }
}

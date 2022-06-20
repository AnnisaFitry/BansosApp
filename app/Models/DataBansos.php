<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JenisBansos;
use App\Models\ValidasiData;
use App\Models\User;

class DataBansos extends Model
{
    use HasFactory;
    protected $table = 'databansos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nik',
        'no_kk',
        'nama_lengkap',
        'tempat_lahir', 
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat', 
        'rt',
        'rw',
        'kelurahan', 
        'kecamatan', 
        'kabupaten', 
        'provinsi', 
        'no_hp', 
        'pekerjaan', 
        'penghasilan',
        'foto_ktp',
        'swafoto_ktp',
        'bukti_sktm',
    ];

    public function jenisbansos(){
        return $this->belongsTo(JenisBansos::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
    public function validasidata(){
        return $this->hasMany(ValidasiData::class);
    }
}

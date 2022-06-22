@extends('layouts.master-admin')

@section('container')
<div class="container">
    <br>
    <div class="row">
        <br>
        <div class="col-md-6 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Diri User</h4>
                    <p class="card-description">Berikut data diri lengkap User :</p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>No. KK</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>Tempat & Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>Test / Test TGL</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>No. HP</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Alamat User</h4>
                    <p class="card-description">Berikut data alamat lengkap User :</p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Alamat Lengkap</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>Kabupaten/Kota</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>Keluarahan/Desa</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                                <tr>
                                    <td>RT/RW</td>
                                    <td>:</td>
                                    <td>TestRT / TestRW</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Informasi Bansos</h4>
                    <p class="card-description">Berikut data informasi pengajuan bantuan sosial yang dilakukan oleh User
                        :</p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Jenis Bansos</td>
                                    <td>:</td>
                                    <td>Test</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card" style="display: flex;">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Foto KTP</h4>
                                    <p class="card-description">Berikut data informasi pengajuan bantuan sosial yang
                                        dilakukan oleh User
                                        :
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card" style="display: flex;">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Swafoto KTP</h4>
                                    <p class="card-description">Berikut data informasi pengajuan bantuan sosial yang
                                        dilakukan oleh User
                                        :
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card" style="display: flex;">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Keterangan Tidak Mampu</h4>
                                    <p class="card-description">Berikut data informasi pengajuan bantuan sosial yang
                                        dilakukan oleh User
                                        :
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

@endsection
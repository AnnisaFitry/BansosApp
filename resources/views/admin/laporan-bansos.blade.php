@extends('layouts.master-admin')

@section('container')
<div class="container">
    <br>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Laporan Bantuan Sosial</h4>
                <p class="card-description">
                    Berikut data Bantuan Sosial yang telah dilaksanakan oleh BansosApp :
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="font-weight: bolder;">NIK</th>
                                <th style="font-weight: bolder;">Nama</th>
                                <th style="font-weight: bolder;">Jenis Bansos</th>
                                <th style="font-weight: bolder;">Status Bansos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>760123456789</td>
                                <td>Test Nama</td>
                                <td>Test Jenis Bansos</td>
                                <td>Test Status Bansos</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <a href="{{ route('cetakbansos') }}">
                    <button type="button" class="btn btn-info btn-icon-text">
                        Print
                        <i class="mdi mdi-printer btn-icon-append"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
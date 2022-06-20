@extends('layouts.master-admin')

@section('container')
<div class="container">
    <br>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <h4 class="card-title">Pengajuan Bantuan Sosial</h4>
                <p class="card-description">
                    Berikut data Bantuan Sosial yang harus ditanggapi oleh admin :
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="font-weight: bolder;">NIK</th>
                                <th style="font-weight: bolder;">Nama</th>
                                <th style="font-weight: bolder;">Jenis Bansos</th>
                                <th style="font-weight: bolder;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>760123456789</td>
                                <td>Test Nama</td>
                                <td>Test Jenis Bansos</td>
                                <td>
                                    <a href="{{ route('detailData') }}" style="text-decoration:none">
                                        <button type="button" class="btn btn-info btn-rounded btn-fw">Show</button>
                                    </a>
                                    <a href="#" style="text-decoration:none">
                                        <button type="button"
                                            class="btn btn-success btn-rounded btn-fw">Validate</button>
                                    </a>
                                    <a href="#" style="text-decoration:none">
                                        <button type="button" class="btn btn-danger btn-rounded btn-fw">Reject</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master-admin')

@section('container')
<div class="container">
    <br>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User</h4>
                <p class="card-description">
                    Berikut data User yang memiliki akun dalam BansosApp :
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="font-weight: bolder;">Nama</th>
                                <th style="font-weight: bolder;">Email</th>
                                <th style="font-weight: bolder;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Test Nama</td>
                                <td>Test Email</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-rounded btn-fw">Delete This User</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
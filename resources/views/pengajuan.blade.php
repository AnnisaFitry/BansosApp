@extends('layouts.master')

@section('container')
<main id="main">
    <section class="inner-page" style="padding: 120px 0;">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Pengajuan</h2>
                <p>Ajukan Permohonan Bantuan Sosial</p>
            </div>
            <p data-aos="fade-up">
                Pendaftaran hanya bisa dilakukan sekali saja, Oleh karena itu pastikan anda mengisi data dengan
                jujur dan benar!
            </p>
            <hr>
            <form data-aos="fade-up">
                <h5>Input Data Diri</h5>
                <div class="form-row" style="display: flex; padding-bottom: 20px">
                    <div class="form-group col-md-6" style="padding-right: 10px">
                        <label for="contoh1">Nama</label>
                        <input type="text" class="form-control" id="contoh1" placeholder="Nama">
                    </div>
                    <div class="form-group col-md-6" style="padding-right: 10px">
                        <label for="contoh2">Username</label>
                        <input type="text" class="form-control" id="contoh2" placeholder="Username">
                    </div>
                </div>

                <div class="form-row" style="display: flex; padding-bottom: 20px">
                    <div class="form-group col-md-4" style="padding-right: 10px">
                        <label for="contoh1">Nama Ayah</label>
                        <input type="text" class="form-control" id="contoh1" placeholder="Nama Ayah">
                    </div>
                    <div class="form-group col-md-4" style="padding-right: 10px">
                        <label for="contoh2">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="contoh2" placeholder="Pekerjaan Ayah">
                    </div>
                    <div class="form-group col-md-4" style="padding-right: 10px">
                        <label for="contoh2">Alamat Ayah</label>
                        <input type="text" class="form-control" id="contoh2" placeholder="Alamat Ayah">
                    </div>
                </div>

                <hr>

                <h5>Unggah File</h5>
                <div class="form-group" style="padding-bottom: 20px">
                    <label for="contohupload1">Pilih file yang ingin diupload</label>
                    <input type="file" class="form-control-file" id="contohupload1">
                </div>

                <hr>

                <h5>Contoh Radio</h5>
                <div class="form-group" style="padding-bottom: 20px">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="ContohRadio1" name="ContohRadio" class="custom-control-input">
                        <label class="custom-control-label" for="ContohRadio1">Pilihan 1</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="ContohRadio2" name="ContohRadio" class="custom-control-input">
                        <label class="custom-control-label" for="ContohRadio2">Pilihan 2</label>
                    </div>
                </div>

                <hr>

                <h5>Contoh Checkbox Inline</h5>
                <div class="form-group" style="padding-bottom: 20px">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="inline1">
                        <label class="custom-control-label" for="inline1">Pilihan 1</label>
                    </div>

                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="inline2">
                        <label class="custom-control-label" for="inline2">Pilihan 2</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tombol</button>
            </form>
        </div>
    </section>
</main>
@endsection
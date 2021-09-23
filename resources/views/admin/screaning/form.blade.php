@extends('layouts.admin')

@section('title','Screaning Covid-19')

@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/screaning') }}">Screaning Covid-19</a></li>
    <li class="breadcrumb-item active">New</li>
</ol>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card rounded-0">
                <div class="card-header">{{ __('Screaning Covid-19') }}</div>
                <div class="card-body">
                    <form action="{{ route('screaning.save') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $pasien->id ?? 0 }}">
                        <div class="form-group form-row">
                            <label for="nama" class="col-md-3">Nama Lengkap</label>
                            <input type="text" id="nama" class="form-control col rounded-0" placeholder="[Nama Lengkap]" name="nama_lengkap" required>
                        </div>
                        <div class="form-group form-row">
                            <label for="nik" class="col-md-3">NIK</label>
                            <input type="text" id="nik" class="form-control col rounded-0" placeholder="[Nomor Induk Kependudukan]" name="nik" >
                        </div>
                        <div class="form-group form-row">
                            <label for="alamat" class="col-md-3">Alamat Domisili</label>
                            <textarea id="alamat" class="form-control col rounded-0" placeholder="[Alamat Domisili]" name="alamat_domisili" required></textarea>
                        </div>
                        <div class="form-group form-row">
                            <label for="jenis_kelamin" class="col-md-3">Jenis Kelamin</label>
                            <div class="col">
                                <input type="radio" class="" placeholder="[Nomor Induk Kependudukan]" name="jenis_kelamin" value="l" required>
                                <span>Laki-laki</span>
                                <input type="radio" class=" ml-3" placeholder="[Nomor Induk Kependudukan]" name="jenis_kelamin" value="p" required>
                                <span>Perempuan</span>
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label for="no_hp" class="col-md-3">No HP</label>
                            <input type="tel" id="no_hp" class="form-control col rounded-0" placeholder="[No HP]" name="no_hp">
                        </div>
                        <div class="form-group form-row">
                            <label for="hasil" class="col-md-3">Hasil</label>
                            <select id="hasil" class="form-control col rounded-0" name="hasil" required>
                                <option value="">[Pilih Hasil]</option>
                                <option value="0">NEGATIF</option>
                                <option value="1">POSITIF</option>
                            </select>
                        </div>
                        <div class="text-right">
                            <button type="reset" class="btn btn-danger rounded-0"><i class="fa fa-times"></i> RESET</button>
                            <button type="submit" class="btn btn-primary rounded-0"><i class="fa fa-save"></i> SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('style')
    {{-- datatable --}}
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('title','Screaning Covid-19')

@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item active">Screaning Covid-19</li>
</ol>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card rounded-0">
                <div class="card-header">{{ __('Screaning Covid-19') }}</div>
                <div class="card-body">
                    <div class="text-right">
                        <a href="{{ route('screaning.new') }}" class="btn btn-danger btn-sm rounded-0">
                            <i class="fa fa-virus"></i>
                            Screaning
                        </a>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIK</th>
                                    <th>Alamat Domisili</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor HP</th>
                                    <th>Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pasien as $key => $item)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->alamat_domisili }}</td>
                                    <td>{{ $item->jenis_kelamin == 'p' ? 'Perempuan' : 'Laki-laki' }}</td>
                                    <td>{{ $item->nomor_hp }}</td>
                                    <td><span class="badge badge-{{ $item->screaning->hasil == 1 ? 'success' : 'danger' }}">{{ $item->screaning->hasil == 1 ? 'POSITIF' : 'NEGATIF' }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $('.table').DataTable();    
</script>
@endsection
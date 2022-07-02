@extends('layouts.app')

@section('custom_css')

@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h4 class="card-title"> TABEL MASTER TIPE</h4>
            </div>
            <div class="col-6">
                <button data-toggle="modal" data-target="#modal-create" class="btn btn-md btn-primary float-right"><i class="fa fa-plus"></i>
                    Tambah</button>
            </div>
        </div>

        <hr>
    </div>
    <div class="card-body">
        <div class="ml-md-auto">
            <a href="{{ route('pdf.type') }}" target="_blank" title="Unduh Dokumen (PDF)"
                class="btn btn-md btn-success mb-3"><i class="fa fa-print"></i> Cetak</a>
        </div>
        <div class="table-responsive">
            <table class="table" id="table">
                <thead class=" text-primary">
                    <th>
                        No
                    </th>
                    <th>
                        Type
                    </th>
                    <th>
                        Jenis
                    </th>
                    <th>
                        Biaya Pendaftaran
                    </th>
                    <th>
                        Aksi
                    </th>

                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.master.type.form')
@endsection

@section('custom_js')
<script >
    $(document).ready(function() {
        $('#table').DataTable({
        });
    });
</script>
<script src="{{asset('js/master/type/main.js')}}"></script>
@endsection

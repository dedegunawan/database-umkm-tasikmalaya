@extends('admin.layout')

@section('content')
<!--banner-->
<div class="banner">

        <h2>
        <a href="<?=route('admin.dashboard');?>">Home</a>
        <i class="fa fa-angle-right"></i>
        <a href="<?=route('admin.desa.index');?>">Desa</a>
        <i class="fa fa-angle-right"></i>
        <span>Daftar Desa</span>

        </h2>
</div>
<!--//banner-->
<!--content-->
<div class="" style="min-height:500px">
    <div class="col-md-12 graph-box1 clearfix">
        <div class="grid-1">
            <a href="<?=route('admin.desa.tambah');?>" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> Tambah Desa Baru</a>
            <table class="table table-hover table-bordered datatable">
                <thead>
                    <tr class="table-row">
                        <td class="table-text">
                            <h6>#</h6>
                        </td>
                        <td class="table-text">
                            <h6>Logo Desa</h6>
                        </td>
                        <td class="table-text">
                            <h6>Kode Login</h6>
                        </td>
                        <td class="table-text">
                            <h6>Nama Desa</h6>
                        </td>
                        <td class="table-text">
                            <h6>Nama Kepala Desa</h6>
                        </td>
                        <td class="table-text">
                            <h6>Google Maps</h6>
                        </td>
                        <td class="table-text">
                            <h6>Opsi</h6>
                        </td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('head_after')
<script src="<?=url('datatables/jquery.dataTables.min.css');?>"></script>
<script src="<?=url('datatables/dataTables.bootstrap.min.css');?>"></script>
@stop

@section('body_after')
<script src="<?=url('datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?=url('datatables/dataTables.bootstrap.min.js');?>"></script>
<script>
$(function() {
    $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('admin.desa.data') !!}',
        columns: [
            {
                "orderable":      false,
                "searchable":     false,
                "data":           null,
                "defaultContent": '#'
            },
            {
                "orderable":      false,
                "searchable":     false,
                data: null,
                render :function(data, type, full) {
                    return "<img src='"+data['logo_desa']+"' style='max-height:100px;max-width:100px;' />";
                },
            },
            { data: 'kode_login', name: 'kode_login' },
            { data: 'nama_desa', name: 'nama_desa' },
            { data: 'nama_kepala_desa', name: 'nama_kepala_desa' },
            {
                "orderable":      false,
                "searchable":     false,
                data: null,
                render :function(data, type, full) {
                    return "<a><i class='fa fa-map-marker fa-2x'></i> <small>("+data['latitude']+", "+data['longitude']+")</small></a>";
                },
            },
            { data: 'latitude', name: 'latitude' },
        ],
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.15/i18n/Indonesian.json"
        }
    });
});
</script>
@stop

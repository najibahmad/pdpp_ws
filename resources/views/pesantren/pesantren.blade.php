@extends('admin.layout')

@section('css')
    <!-- DataTables CSS -->
    <link href="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

@endsection

@section('content')

<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
				<h2 class="page-header top15">Daftar Pondok Pesantren</h2>
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default">
<!-- 						<div class="panel-heading">
								Kode dan Nama Provinsi

						</div>
 -->						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-5 col-sm-offset-3 col-xs-offset-1 bottom10">
								<a class="btn btn-success" href="{!! URL::to('admin/pesantren/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Pesantren</a>
							</div>
								<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>No</th>
													<th>NSPP</th>
                          <th>Nama Pesantren</th>
                          <th>Alamat</th>
                          <th>Nama Pengasuh</th>
                          <th>Jumlah Santri</th>
                          <!--
                          <th>Jumlah Santri Mukim</th>
                          <th>No Telepon</th>
                          <th>Website</th>
                          -->
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($pesantren as $pes)
												<tr>
													<td class="center col-xs-1">
														{{ $pes->id_pesantren }}
												  </td>
                          <td class="center col-xs-1">
														{{ $pes->NSPP }}
												  </td>
													<td class="center col-md-1">
														{{ $pes->nama_pesantren }}
												  </td>
                          <td class="center col-md-1">
														{{ $pes->kabupaten->provinsi->nama_provinsi }}
												  </td>
                          <td class="center col-md-1">
														{{ $pes->nama_pengasuh }}
												  </td>
                          <td class="center col-md-1">
														{{ $pes->jumlah_santri }}
												  </td>
                          <!--
                          <td class="center col-md-1">
														{{ $pes->jumlah_santri_mukim }}
												  </td>
                          <td class="center col-md-1">
														{{ $pes->no_telepon }}
												  </td>
                          <td class="center col-md-1">
														{{ $pes->website }}
												  </td>
                          -->
													<td class="center col-xs-2">
															<a class="btn btn-xs btn-success" href="{{ URL::to('admin/pesantren/'.$pes->id_pesantren.'/edit') }}"><i class="fa fa-edit fa-fw"></i> Edit</a>
															&nbsp;&nbsp;
															<a class="btn btn-xs btn-danger" href="{{ URL::to('admin/pesantren/delete/'.$pes->id_pesantren) }}" data-token="{!! csrf_token() !!} " data-method="delete" data-confirm="Anda yakin menghapus data Pesantren?"><i class="fa fa-remove fa-fw"></i> Hapus</a>
													</td>
												</tr>
												@endforeach
											</tbody>
								   </table>
						 </div>
					 </div>
 					<!-- /.panel-body -->
 			</div>
 			<!-- /.panel -->
 	</div>
 	<!-- /.col-lg-12 -->
</div>
 <!-- /.row -->

@endsection

@section('script')
	<!-- DataTables JavaScript -->
  <script src="/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
	$(document).ready(function() {
			$('#tabel-provinsi').DataTable({
					responsive: true,
          language: {
            "sProcessing":   "Sedang memproses...",
            "sLengthMenu":   "Tampilkan _MENU_ entri",
            "sZeroRecords":  "Tidak ditemukan data yang sesuai",
            "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
            "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
            "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
            "sInfoPostFix":  "",
            "sSearch":       "Cari:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Pertama",
                "sPrevious": "Sebelumnya",
                "sNext":     "Selanjutnya",
                "sLast":     "Terakhir"
            }
          }
			});
	});
	</script>

	<!-- Delete Data JavaScript - Jeffry Wayy -->
  <script src="/js/laravel.js" type="text/javascript"></script>

@endsection

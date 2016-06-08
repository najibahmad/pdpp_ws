@extends('layouts.app')

@section('css')
    <!-- DataTables CSS -->
    <link href="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

@endsection

@section('content')

<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Daftar Provinsi</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
<!-- 						<div class="panel-heading">
								Kode dan Nama Provinsi

						</div>
 -->						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="col-md-2 col-md-offset-5">
								<a class="btn btn-success" href="{!! URL::to('admin/provinsi/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Provinsi</a>
							</div>
								<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Provinsi</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($prov as $provinsi)
												<tr>
													<td class="center col-xs-1">
														{{ $provinsi->id_provinsi }}
												  </td>
													<td class="center col-md-1">
														{{ $provinsi->nama_provinsi }}
												  </td>
													<td class="center col-md-1">
															<a class="btn btn-xs btn-success" href="{{ URL::to('admin/provinsi/'.$provinsi->id_provinsi.'/edit') }}"><i class="fa fa-edit fa-fw"></i> Edit</a>
															&nbsp;&nbsp;
															<a class="btn btn-xs btn-danger" href="{{ URL::to('admin/provinsi/delete/'.$provinsi->id_provinsi) }}" data-token="{{csrf_token()}}" data-method="delete" data-confirm="Anda yakin menghapus data Provinsi?"><i class="fa fa-remove fa-fw"></i> Hapus</a>
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
							responsive: true
			});
	});
	</script>

	<!-- Delete Data JavaScript - Jeffry Wayy -->
  <script src="/js/laravel.js" type="text/javascript"></script>

@endsection

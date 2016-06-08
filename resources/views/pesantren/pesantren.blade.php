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
				<h1 class="page-header">Daftar Pondok Pesantren</h1>
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
								<a class="btn btn-success" href="{!! URL::to('admin/pesantren/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Pesantren</a>
							</div>
								<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>No</th>
													<th>NSPP</th>
                          <th>Nama Pesantren</th>
                          <th>Jumlah Santri</th>
                          <th>Nama Pengasuh</th>
                          <th>Lokasi Kabupaten</th>
                          <th>Lokasi Provinsi</th>
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
														{{ $pes->jumlah_santri }}
												  </td>
                          <td class="center col-md-1">
														{{ $pes->pengasuh->nama_pengasuh }}
												  </td>
                          <td class="center col-md-1">
														{{ $pes->kabupaten->nama_kabupaten }}
												  </td>
                          <td class="center col-md-1">
														{{ $pes->kabupaten->provinsi->nama_provinsi }}
												  </td>
													<td class="center col-md-1">
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
							responsive: true
			});
	});
	</script>

	<!-- Delete Data JavaScript - Jeffry Wayy -->
  <script src="/js/laravel.js" type="text/javascript"></script>

@endsection

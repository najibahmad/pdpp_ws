@extends('admin.layout')

@section('css')
	<!-- DataTables CSS -->
	<link href="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
	<!-- DataTables Responsive CSS -->
	<link href="{{ asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet"> -->
@endsection

@section('content')
<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
				<h2 class="page-header top15">Daftar Pengguna</h2>
		</div>
		<!-- /.col-lg-12 -->
</div>
<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-5 col-sm-offset-3 col-xs-offset-1 bottom10">
					<a class="btn btn-success" href="{!! URL::to('admin/pengguna/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Pengguna</a><br>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12" >
					<hr />
				</div>
				<div class="row bottom10">
					<p>
						<a class="btn btn-primary left15" href="{{ url('/admin/exsportpenggunapdf/') }}"><i class="fa fa-file-pdf-o"></i>  Export PDF</a>
						<a class="btn btn-primary left15" href="{{ url('/admin/exsportpenggunaxls/') }}"><i class="fa fa-file-excel-o"></i>  Export Excel </a>
					</p>
				</div>
				<div class="dataTable_wrapper">
						<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Pengguna</th>
									<th>Alamat E-Mail</th>
									<th>Hak Akses</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $user)
								<tr>
									<td class="center col-md-1">
										{{ $counter = $counter+1, ['size' => 1] }}
									</td>
									<td class="center col-md-2">
										{{ $user->nama_pengguna, ['size' => 3] }}
								    </td>
									<td class="center col-md-3">
										{{ $user->email_pengguna, ['size' => 4] }}
									</td>
									<td class="center col-md-2">
										{{ $user->hak_akses, ['size' => 1] }}
									</td>
									<td class="center col-md-3">
                      <a class="btn btn-xs btn-success" href="{!! URL::to('admin/changepassworduser/'.$user->id_pengguna) !!}"><i class="fa fa-repeat fa-fw"></i> Reset</a>
                      &nbsp;&nbsp;
                      <a class="btn btn-xs btn-info" href="{!! URL::to('admin/pengguna/'.$user->id_pengguna.'/edit') !!}"><i class="fa fa-edit fa-fw"></i> Edit</a>
											&nbsp;&nbsp;
											<a class="btn btn-xs btn-danger" href="{!! URL::to('admin/pengguna/delete/'.$user->id_pengguna) !!}" data-token="{{csrf_token()}}" data-method="delete" data-confirm="Anda yakin menghapus pengguna ini?"><i class="fa fa-remove fa-fw"></i> Hapus</a>
								   </td>
								</tr>
								@endforeach
							</tbody>
				   </table>
		 		</div>
		 	</div>
@endsection

@section('script')
	<!-- DataTables JavaScript -->
  <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>

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
              }//,
              // "columnDefs": [
              //   { "orderable": false, "targets": 0 }
              // ],
              // dom: 'Bfrtip',
              // buttons: [
              //   {
              //       extend: 'excel',
              //       text: 'Simpan Excel',
              //   },
              //   {
              //       extend: 'pdf',
              //       text: 'Simpan PDF',
              //   },
              //   {
              //       extend: 'print',
              //       text: 'Cetak Data',
              //   }
              // ]
			});
	});
	</script>

	<!-- Delete Data JavaScript - Jeffry Wayy -->
  <script src="{{ asset('js/laravel.js') }}"></script>

  <!-- <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('js/jszip.min.js') }}"></script>
  <script src="{{ asset('js/pdfmake.min.js') }}"></script>
  <script src="{{ asset('js/vfs_fonts.js') }}"></script>
  <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('js/buttons.print.min.js ') }}"></script> -->

@endsection

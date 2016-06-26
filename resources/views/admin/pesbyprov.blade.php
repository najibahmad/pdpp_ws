@extends('admin.layout')

@section('css')
    <!-- DataTables CSS -->
    <link href="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('css/selectize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet"> -->
@endsection

@section('content')

<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
				<h2 class="page-header top15">Daftar Pesantren Berdasarkan Provinsi</h2>
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
							<div class="row bottom10">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/pesbyprov') }}">
                        {{ csrf_field() }}
                        <div class="col-md-4 col-md-offset-4">
                            {!! Form::select('provinsi_id_provinsi', $provinsi, null,['class' => 'provinsi form-control', 'placeholder' => 'Pilih/Tulis Nama Provinsi' ]) !!}
                        </div>
                        <div class="col-md-6 col-md-offset-5 bottom10">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-building"></i> Tampilkan
                            </button>
                        </div>
                </form>
              </div>
              <div>
                <p class="text-center" style="font-size:14px"><b>Daftar Pesantren Pada Provinsi : {{ $prov[0] }}</b></p>
              </div>
              <div class="row bottom10">
                <p>
                  <a class="btn btn-primary left7" href="{{ url('/admin/exsportpes0pdf/'.$id_provinsi) }}"><i class="fa fa-file-pdf-o"></i>  Export PDF</a>
                  <a class="btn btn-primary left7" href="{{ url('/admin/exsportpes0xls/'.$id_provinsi) }}"><i class="fa fa-file-excel-o"></i>  Export Excel </a>
                </p>
              </div>
								<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Pesantren</th>
                          <th>Nama Pengasuh</th>
                          <th>Jumlah Santri</th>
                          <th>Kabupaten</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($pesantren as $pes)
												<tr>
													<td class="col-xs-1">
														{{ $counter = $counter+1 }}
												  </td>
													<td class="col-md-3">
														{{ $pes->nama_pesantren }}
												  </td>
                          <td class="col-md-3">
														{{ $pes->nama_pengasuh }}
												  </td>
                          <td class="col-md-1">
														{{ $pes->jumlah_santri }}
												  </td>
                          <td class="col-md-4">
														{{ $pes->nama_kabupaten }}
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
              },
              "columnDefs": [
                { "orderable": false, "targets": -1 }
              ]//,
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

  <script src="{{ asset('js/selectize.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      $('.provinsi').selectize({
        //create: true,
        sortField: {
            field: 'id_provinsi',
            direction: 'asc'
        },
        dropdownParent: 'body'
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

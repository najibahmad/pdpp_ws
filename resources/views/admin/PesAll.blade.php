@extends('admin.layout')

@section('css')
    <!-- DataTables CSS -->
    <link href="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('css/selectize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
				<h2 class="page-header top15">Daftar Seluruh Pesantren</h2>
		</div>
		<!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
              <div class="row bottom10">
                
                <div class="col-md-6 col-md-offset-5">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-building"></i> Export Excel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-building"></i> Export PDF
                            </button>
                        </div>
                <br>
                 <p class="navbar-text" align="center" style="font-size:14px"><b>Daftar Pesantren : {!! 554 !!}</b></p>
                 <br>

							</div>
								<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
                      <thead>
												<tr>
													<th>No</th>
                          <th>NSPP</th>
													<th>Nama Pesantren</th>
                          <th>Nama Pengasuh</th>
                          <th>Detil</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($pesantren as $pes)
												<tr>
													<td class="col-xs-1">
														{{ $counter = $counter+1 }}
												  </td>
													<td class="col-md-3">
                            {{ $pes->NSPP }}
                          </td>                          
                          <td class="col-md-3">
														{{ $pes->nama_pesantren }}
												  </td>
                          <td class="col-md-3">
														{{ $pes->nama_pengasuh }}
												  </td>
                          <td class="col-md-4">
														{{ 'Detil' }}
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
              }
			});
	});
	</script>

  <script src="{{ asset('js/selectize.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      $('.kabupaten').selectize({
        //create: true,
        sortField: {
            field: 'text',
            direction: 'asc'
        },
        dropdownParent: 'body'
      });
    });
  </script>

	<!-- Delete Data JavaScript - Jeffry Wayy -->
  <script src="{{ asset('js/laravel.js') }}"></script>

@endsection

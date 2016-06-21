@extends('public.layout')

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
				<h2 class="page-header top15">Daftar Pondok Pesantren Se-Indonesia</h2>
		</div>
		<!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">



            <div class="panel-body">          
              <div class="row bottom10">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/pesantren/cari') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('provinsi_id_provinsi') ? ' has-error' : '' }}">
                            <label for="provinsi_id_provinsi" class="col-md-4 control-label">Pilih Provinsi</label>
                            <div class="col-md-4">
                              {!! Form::select('provinsi_id_provinsi', $provinsi, null,['class' => 'provinsi form-control', 'placeholder' => 'Pilih/Tulis Nama Provinsi' ]) !!}
                              @if ($errors->has('provinsi_id_provinsi'))
                                  <span class="help-block">
                                      {{ $errors->first('provinsi_id_provinsi') }}
                                  </span>
                              @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('kabupaten_id_kabupaten') ? ' has-error' : '' }}">
                            <label for="kabupaten_id_kabupaten" class="col-md-4 control-label">Pilih Kabupaten</label>
                            <div class="col-md-4">
                                {!! Form::select('kabupaten_id_kabupaten', ['0' => 'Semua Kabupaten'], 0,['class' => 'kabupaten form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cari') ? ' has-error' : '' }}">
                            <label for="cari" class="col-md-4 control-label">Ketik Nama Pesantren</label>

                            <div class="col-md-6">
                                <input id="cari" type="text" class="form-control" name="cari" value="{{ old('cari') }}">

                                @if ($errors->has('cari'))
                                    <span class="help-block">
                                        {{ $errors->first('cari') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-5 bottom10">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-building"></i> Cari Pesantren
                            </button>
                        </div>
                </form>
              </div>


                 <br>
                  <a class="btn btn-primary left7" href="{{ url('/public/exportpesantrenbyPDF') }}"><i class="fa fa-file-pdf-o"></i>  Export PDF</a>
                  <a class="btn btn-primary left7" href="{{ url('/public/exportpesantrenbyExcel') }}"><i class="fa fa-file-excel-o"></i>  Export Excel </a>
                </p>
                <br>
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
                          <th>Detil</th>
												</tr>
											</thead>
                      <tbody>
												@foreach ($pesantren as $pes)
												<tr>
                        <td class="center col-xs-1">
                          {{ $pes->id_pesantren }}
                        </td>
                        <td class="center col-xs-2">
                          {{ $pes->NSPP }}
                        </td>
                        <td class="center col-md-4">
                          {{ $pes->nama_pesantren }}
                        </td>
                        <td class="center col-md-4">
                          {{ $pes->alamat_pesantren }}
                        </td>
                        <td class="center col-md-3">
                          {{ $pes->nama_pengasuh }}
                        </td>
                        <td class="center col-md-1">
                          {{ $pes->jumlah_santri }}
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

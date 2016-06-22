@extends('admin.layout')

@section('css')
      <!-- DataTables CSS -->
      <link href="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
      <!-- DataTables Responsive CSS -->
      <link href="{{ asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
      <!-- <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet"> -->

      <link href="{{ asset('css/selectize.css') }}" rel="stylesheet">
      <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
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
              <div class="row bottom10">
                <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-5 col-sm-offset-3 col-xs-offset-1 bottom10">
  								<a class="btn btn-success" href="{!! URL::to('admin/pesantren/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Pesantren</a>

                </div>
                <div class="col-md-12 col-sm-12 col-xs-12" >
                  <hr />
                </div>
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
              <!-- @if(!$pesantren == ""){ -->
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
												<td class="center">
													{{ $pes->id_pesantren }}
											  </td>
                        <td class="center">
													{{ $pes->NSPP }}
											  </td>
												<td class="center">
													{{ $pes->nama_pesantren }}
											  </td>
                        <td class="center">
                          {{ $pes->alamat_pesantren }}

                          <!-- {{ $pes->nama_provinsi }} -->
											  </td>
                        <td class="center">
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
												<td class="col-md-3">
                            <a class="btn btn-xs btn-success" href="{{ URL::to('admin/pesantren/'.$pes->id_pesantren) }}"><i class="fa fa-building fa-fw"></i> Detil</a>
                            &nbsp;&nbsp;
														<a class="btn btn-xs btn-success" href="{{ URL::to('admin/pesantren/'.$pes->id_pesantren.'/edit') }}"><i class="fa fa-edit fa-fw"></i> Edit</a>
														&nbsp;&nbsp;
														<a class="btn btn-xs btn-danger" href="{{ URL::to('admin/pesantren/delete/'.$pes->id_pesantren) }}" data-token="{!! csrf_token() !!} " data-method="delete" data-confirm="Anda yakin menghapus data Pesantren?"><i class="fa fa-remove fa-fw"></i> Hapus</a>
												</td>
											</tr>
											@endforeach
										</tbody>
							   </table>
					    </div>
            <!-- @endif -->
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
                { "orderable": false, "targets": 0 }
              ],
              dom: 'Bfrtip',
              buttons: [
                {
                    extend: 'excel',
                    text: 'Simpan Excel',
                },
                {
                    extend: 'pdf',
                    text: 'Simpan PDF',
                },
                {
                    extend: 'print',
                    text: 'Cetak Data',
                }
              ]
			});
	});
	</script>
  <script type="text/javascript">
    $(document).ready(function() {
        $(".provinsi").change(function() {
            $.getJSON("/admin/pesantren/kabupatens/" + $(".provinsi").val(), function(data) {
                var $stations = $(".kabupaten");
                $stations.empty();
                $.each(data, function(index, value) {
                    $stations.append('<option value="' + index +'">' + value + '</option>');
                });
            $(".kabupaten").trigger("change"); /* trigger next drop down list not in the example */
            });
        });
    });
  </script>
  <script src="{{ asset('js/selectize.min.js') }}"></script>
  <script>
    // var xhr;
    // var pilih_prov, $pilih_prov;
    // var pilih_kab, $pilih_kab;

    $pilih_prov = $(document).ready(function () {
      $('.provinsi').selectize({
        create: false,
        sortField: {
            field: 'id_provinsi',
            direction: 'asc'
        },
        dropdownParent: 'body',
        // onChange: function(value) {
        //     if (!value.length) return;
        //     pilih_kab.disable();
        //     pilih_kab.clearOptions();
        //     pilih_kab.load(function(callback) {
        //         //xhr && xhr.abort();
        //         xhr = $.ajax({
        //             //url: 'http://103.7.12.157/pdpp/api/v1/10adcba89b4a410c889b66fa3a87b6a0/list/kabupaten/' + value,
        //             url: 'http://localhost:8000/api/v1/10adcba89b4a410c889b66fa3a87b6a0/list/kabupaten/' + value,
        //             success: function(results) {
        //                 pilih_kab.enable();
        //                 callback(results);
        //             },
        //             error: function() {
        //                 callback();
        //             }
        //         })
        //     });
        // }
      });
    });

    // $pilih_kab = $('.kabupaten').selectize({
    //         valueField: 'name',
    //         labelField: 'name',
    //         searchField: ['name']
    // });
    //
    // pilih_kab  = $pilih_kab[0].selectize;
    // pilih_prov = $pilih_prov[0].selectize;
    //
    // pilih_kab.disable();
  </script>
  <!-- <script>
    $(document).ready(function () {
      $('.kabupaten').selectize({
        create: false,
        sortField: {
            field: 'text',
            direction: 'asc'
        },
        dropdownParent: 'body',

      });
    });
  </script> -->

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

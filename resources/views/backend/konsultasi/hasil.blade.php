@extends('backend.base.template')
@section('content')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Hasil Konsultasi</h1>
           <?php if (session()->has('message')) echo session('message'); ?>

         <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/konsultasi/submit') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label class="control-label col-xs-2">Nama Ikan</label>
                <div class="col-xs-10">
                    <input value="{{ $fish }}" name="name" type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-2">Type</label>
                <div class="col-xs-10">
                    <input value="{{ $umur }}" name="umur" type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-2">Kebutuhan Gizi Ikan</label>
                <div class="col-xs-10">
                    <input value="Protein {{ $gizi->protein }}% Karbohidrat {{ $gizi->karbohidrat }}% Lemak {{ $gizi->lemak }}% Air dan Zat Adiktif {{ $gizi->air_zat_adiktif }}%" name="gizi" type="email" class="form-control" disabled>
                </div>
            </div>

        </form>

        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Pilih Bahan Pakan</h1>

         <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/konsultasi/submit') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="col-xs-4">
                  <select id="pilihanpakan" name="pakan" class="form-control">
                      @foreach($pakan as $f)
                        <option value="{{ $f->id }}">{{ $f->name }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="col-xs-3">
                    <a id="addpakan" href="#" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            
        </form>

        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Bahan Pakan yang Dipilih</h1>
            
            <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/konsultasi/kesimpulan') }}" enctype="multipart/form-data">
            <label>Jumlah pakan yang ingin dibuat (gram)</label>
                <div class="form-group">
                    <div class="col-xs-4">
                        <input name="jumlah" type="text" class="form-control">
                    </div>
                </div>
                <hr>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input value="{{ $fish }}" name="fish" type="hidden">
                <input value="{{ $fish_id }}" name="fish_id" type="hidden">
                <input value="{{ $umur }}" name="umur" type="hidden">
                <input value="{{ $gizi->id }}" name="gizi" type="hidden">
                <div id="pakan">
                    
                     <div class="form-group">
                        <label class=" col-xs-4">Nama Bahan Pakan</label>
                        <label class=" col-xs-2">Pilihan</label>
                    </div>
                     
                </div>
                <div class="form-group">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary">Hitung Formulasi</button>
                    </div>
                </div>
            </form>
        </div>
       
        <script src="{{ URL::to('js/jquery-2.2.0.min.js') }}"></script>
       
       <script>
           $(document).ready(function() {
                var wrapper         = $("#pakan");      //Fields wrapper
                var add_button      = $("#addpakan");   //Add button ID
                
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    $(wrapper).append('<div class="form-group">' +
                            '<div class="col-xs-4">' +
                                '<input value="' + $( "#pilihanpakan" ).val() + '" name="pakan_id[]" type="hidden" class="form-control">' +
                                '<input value="' + $( "#pilihanpakan option:selected" ).text() + '" name="pakan[]" type="text" class="form-control">' +
                            '</div>' +
                            '<div class="col-xs-2">' +
                                '<button id="remove_field" type="button" class="btn btn-default" aria-label="Left Align">' +
                                  '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>' +
                                '</button>' +
                            '</div>' +
                        '</div>'); //add input box
                    
                });
                
                $(wrapper).on("click","#remove_field", function(e){ //user click on remove text
                    e.preventDefault(); $(this).parent('div').parent('div').remove();
                })
});
        </script>

    @endsection
@extends('backend.base.template')
@section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
          <h1 class="page-header">Tambah Pakan Komersil</h1>

          <form class="form" role="form" method="POST" action="{{ url('admin/pakankomersil/store') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label>Nama Pakan</label>
              <input name="name" type="text" class="form-control">
            </div>

            <div class="form-group">
              <label>Jenis Ikan</label>
              <select name="fish[]" class="form-control chosen-select" data-placeholder="Pilih Ikan" multiple tabindex="8">
                 <option value="0">All</option>
                  @foreach($fish as $f)
                    <option value="{{ $f->id }}">{{ $f->name }}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Berat (gram)</label>
              <input name="berat" type="text" class="form-control">
            </div>
             <div class="form-group">
              <label>Harga</label>
              <input name="harga" type="text" class="form-control">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>

    <link rel="stylesheet" href="{{ URL::to('css/bootstrap-choosen.css') }}" />
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script src="http://harvesthq.github.io/chosen/chosen.jquery.js"></script>
      <script>
        $(function() {
          $('.chosen-select').chosen();
          $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
        });
      </script>
        

    @endsection
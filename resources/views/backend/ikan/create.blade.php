@extends('backend.base.template')
@section('content')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
          <h1 class="page-header">Tambah Ikan</h1>

          <form class="form" role="form" method="POST" action="{{ url('admin/ikan/store') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label>Nama Ikan</label>
              <input name="name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Latin</label>
                <input name="latin_name" type="text" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>

        

    @endsection
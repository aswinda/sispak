@extends('backend.base.template')
@section('content')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
          <h1 class="page-header">Edit Pakan Komersil</h1>

          <form class="form" role="form" method="POST" action="{{ url('admin/pakankomersil/update/'.$pakan->id) }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label>Nama Pakan</label>
              <input value="{{ $pakan->name }}" name="name" type="text" class="form-control">
            </div>
            
             <div class="form-group">
              <label>Harga</label>
              <input value="{{ $pakan->harga }}" name="harga" type="text" class="form-control">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>

        

    @endsection
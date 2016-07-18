@extends('backend.base.template')
@section('content')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
          <h1 class="page-header">Tambah Pakan</h1>

          <form class="form" role="form" method="POST" action="{{ url('admin/pakan/store') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label>Nama Pakan</label>
              <input name="name" type="text" class="form-control">
            </div>
             <div class="form-group">
              <label>Karbohidrat</label>
              <input name="karbohidrat" type="text" class="form-control">
            </div>
             <div class="form-group">
              <label>Protein</label>
              <input name="protein" type="text" class="form-control">
            </div>
             <div class="form-group">
              <label>Lemak</label>
              <input name="lemak" type="text" class="form-control">
            </div>
             <div class="form-group">
              <label>Air dan Zat Adiktif</label>
              <input name="air_zat_adiktif" type="text" class="form-control">
            </div>
             <div class="form-group">
              <label>Harga</label>
              <input name="harga" type="text" class="form-control">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>

        

    @endsection
@extends('backend.base.template')
@section('content')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
          <h1 class="page-header">Edit rules</h1>

          <form class="form" role="form" method="POST" action="{{ url('admin/rules/update/'.$rules->id) }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label>Nama Rules</label>
              <input value="{{ $rules->name }}" name="name" type="text" class="form-control">
            </div>
             <div class="form-group">
              <label>Karbohidrat</label>
              <input value="{{ $rules->karbohidrat }}" name="karbohidrat" type="text" class="form-control">
            </div>
             <div class="form-group">
              <label>Protein</label>
              <input value="{{ $rules->protein }}" name="protein" type="text" class="form-control">
            </div>
             <div class="form-group">
              <label>Lemak</label>
              <input value="{{ $rules->lemak }}" name="lemak" type="text" class="form-control">
            </div>
             <div class="form-group">
              <label>Air dan Zat Adiktif</label>
              <input value="{{ $rules->air_zat_adiktif }}" name="air_zat_adiktif" type="text" class="form-control">
            </div>
         
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>

        

    @endsection
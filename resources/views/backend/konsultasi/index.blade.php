@extends('backend.base.template')
@section('content')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Konsultasi</h1>
          <?php if (session()->has('message')) echo session('message'); ?>
          
          <form class="form" role="form" method="POST" action="{{ url('admin/konsultasi/submit') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label>Jenis Ikan</label>
              <select name="fish" class="form-control">
                  @foreach($fish as $f)
                    <option value="{{ $f->id }}">{{ $f->name }}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
                <label>Umur (Bulan)</label>
                <input name="umur" type="text" class="form-control" >
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>

        

    @endsection
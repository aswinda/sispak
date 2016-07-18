@extends('backend.base.template')
@section('content')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
          <h1 class="page-header">Tambah Pakan</h1>

          <form class="form" role="form" method="POST" action="{{ url('admin/rulesfish/update/'.$rulesFish->id) }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label>Jenis Ikan</label>
              <select name="fish_id" class="form-control">
                  @foreach($fish as $f)
                    <option <?php if($f->id == $rulesFish->fish_id) echo 'selected'; ?> value="{{ $f->id }}">{{ $f->name }}</option>
                  @endforeach
              </select>
            </div>
             <div class="form-group">
              <label>Umur</label>
              <select name="umur" class="form-control">
                  <option <?php if($rulesFish->umur == "Larva") echo 'selected'; ?> value="1">Larva (0-1 Bulan)</option>
                  <option <?php if($rulesFish->umur == "Juvenil") echo 'selected'; ?>value="2">Juvenil (2-12 Bulan)</option>
                  <option <?php if($rulesFish->umur == "Induk") echo 'selected'; ?>value="3">Induk (12 Bulan Keatas)</option>
              </select>
            </div>
            <div class="form-group">
              <label>Rules</label>
              <select name="rules_id" class="form-control">
                  @foreach($rules as $f)
                    <option <?php if($f->id == $rulesFish->rules_id) echo 'selected'; ?> value="{{ $f->id }}">{{ $f->name }}</option>
                  @endforeach
              </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>

        

    @endsection
@extends('backend.base.template')
@section('content')

<!-- Main content -->
<div class="panel col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Rules Ikan</h1>
      <?php if (session()->has('message')) echo session('message'); ?>
      
      <a href="{{ URL::to('admin/rulesfish/create') }}" style="margin-bottom : 10px;" type="button" class="col-sm-offset-11 btn btn-primary push-right">Tambah</a>
      
      <table id="example1" class="table table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Ikan</th>
            <th>Umur</th>
            <th>Nama Rules</th>
            <th></th>
          </tr>
        </thead>
        
         <tbody>
          <?php $tmp = 0; ?>
            @foreach($rulesFish as $key => $rulesfish)      
            <tr> 
              <td>
                <?php echo ++$tmp; ?>

            <td>
                 {{ $rulesfish->fish_name }}
            </td>
            <td>
                 {{ $rulesfish->umur }}
            </td>
            <td>
                 {{ $rulesfish->rules_name }}
            </td>
   
              <td class="text-center">

              <form class="form-inline" role="form" method="POST" action="{{ url('admin/rulesfish/delete/'.$rulesfish->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <a class="btn btn-warning" href="{{ URL::To('admin/rulesfish/edit/'.$rulesfish->id) }}">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      
 
</div>
      

     <link rel="stylesheet" href="{{ URL::To('js/datatables/dataTables.css') }}" type="text/css"/>
    <style>
      .linkButton { 
       background: none;
       border: none;
       cursor: pointer; 
       margin-top:-35px;
      }
    </style>

      
          <!-- jQuery 2.1.4 -->
    <script src="{{ URL::to('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="{{ URL::to('plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
 
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

        

    @endsection
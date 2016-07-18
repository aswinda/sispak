@extends('backend.base.template')
@section('content')

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Hasil Konsultasi</h1>

         <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/konsultasi/submit') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label class="control-label col-xs-2">Nama Ikan</label>
                <div class="col-xs-10">
                    <input value="{{ $fish }}" name="name" type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-2">Umur</label>
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
          <h1 class="page-header">Formulasi Bahan Pakan yang Diperlukan</h1>

        <table id="example1" class="table table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Bahan Pakan</th>
            <th>Banyaknya Bahan Pakan yg Diperlukan (Gram)</th>
            <th>Harga</th>
          </tr>
        </thead>
        
         <tbody>
          <?php $tmp = 0; $total_harga = 0; ?>
            <?php foreach($ids as $id) { ?>   
                <tr> 
                  <td>
                    <?php echo ++$tmp; ?>
                  </td>
                  <td>
                        <?php foreach($pakans as $pakan)
                          if($pakan->id == $id) echo $pakan->name; ?> 
                    
                    </td>
                    <td>
                         {{ $hasil[$id] }}
                    </td>

                    <td>
                          <?php foreach($pakans as $pakan)
                             if($pakan->id == $id){ echo ($pakan->harga/100.0 * $hasil[$id]); $total_harga += ($pakan->harga/100.0 * $hasil[$id]); } ?>
                    </td>
                </tr>
            <?php } ?>
            <tr> 
                  <td>
                    <b>Total</b>
                  </td>
                  <td>
                    </td>
                    <td>
                    </td>
                    <td>
                          <?php echo $total_harga; ?>
                    </td>
                </tr>
        </tbody>
      </table>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Pakan Komersil Terkait</h1>

        <table id="example1" class="table table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Berat (gram) </th>
            <th>Harga</th>

            <th>Harga Per Gram Dibutuhkan</th>
          </tr>
        </thead>
        
         <tbody>
          <?php $tmp = 0; ?>
            <?php foreach($komersil as $pakan) { ?>   
                <tr> 
                   <td>
                        <?php echo ++$tmp; ?>
                    </td>
                    <td>
                        {{ $pakan->name }}
                    </td>
                    <td>
                         {{ $pakan->berat }}
                    </td>

                    <td>
                          {{ $pakan->harga }}
                    </td>
                    <td>
                          <?php echo $pakan->harga * $jumlah/$pakan->berat; ?>
                    </td>
                </tr>
            <?php } ?>
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
 
    


    @endsection
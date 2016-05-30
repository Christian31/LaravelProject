@extends('layoutAdmin.baseAdmin')
@section('main')
<br>
<br>
<div class="row">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
          <div class="col-xs-2"></div>
          <div class="col-xs-8">

           <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="
           display:none">
           <strong>Lugar turistico eliminado correctamente.</strong>
         </div>

         <div class="box">
          <div  align="center" class="box-header">
                <h2>Lugares Turísticos</h2>
              </div><!-- /.box-header -->
              
          <div class="box-body">
            <table id="tabla_lugares" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th class="sorting_asc_disabled">Editar</th>
                  <th class="sorting_asc_disabled">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody id ="datos">
                  </tbody>
                  
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
          <div class="col-xs-2"></div>
        </div><!-- /.row -->
@endsection

 @section('scripts')
 {!!Html::script('admin/plugins/datatables/jquery.dataTables.min.js')!!}
    {!!Html::script('admin/plugins/datatables/dataTables.bootstrap.min.js')!!}
 {!!Html::script('admin/js/RutaTuristica/rutaTuCRUD.js')!!}
 <script>
    window.onload = listarLugares;
   </script>
 @endsection
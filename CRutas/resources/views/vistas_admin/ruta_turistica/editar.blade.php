@extends('layoutAdmin.baseAdmin')
@section('main')
		<center>
			 <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="
                    display:none">
                  <strong id="msj-su"></strong>
               </div>
              <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="
                  display:none">
              <strong id="msj">Ocurrio un error</strong>
          </div>
                <div class="box-header">
                  <h3 class="box-title">Editar Ruta Turística</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form  id="insertR" name="insertR" method="POST" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="form-group">
                      <label for="id">Id</label>
                      <input type="text" class="form-control" id="id" name="id" placeholder="Nombre" value="{{$lugar1->id}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$lugar1->nombre}}">
                    </div>
                    <div class="form-group">
                      <label for="descripcion">Descripción</label>
                      <textarea id="descripcion" name="descripcion"  class="form-control" placeholder="Descripción">{{$lugar1->descripcion}}</textarea>
                    </div>
                     <div class="form-group">
                      <label for="duracionL">Duración en el lugar</label>
                      <input type="text" class="form-control" id="duracionL" name="duracionL" placeholder="Duración en el lugar" value="{{$lugar1->duracionL}}">
                    </div>
                    <div class="form-group">
                      <label for="tiempoU">Tiempo de llegada desde la ubicación</label>
                      <input type="text" class="form-control" id="tiempoU" name="tiempoU" placeholder="Tiempo de llegada desde la ubicación" value="{{$lugar1->tiempoU}}">
                    </div>

                    <div class="form-group">
                      <label for="distanciaU">Distancia desde la ubicación</label>
                      <input type="text" class="form-control" id="distanciaU" name="distanciaU" placeholder="Distancia desde la ubicación" value="{{$lugar1->distanciaU}}">
                    </div>

                      <div class="form-group">
                      <label for="ubicacion">Ubicación</label>
                     	<select id="selectError" data-rel="chosen" name="ubicación">
                             @foreach ($ubicaciones as $ubicacion)
                             
                            <option value="{{ $ubicacion->id }}">{{ $ubicacion->nombre }}</option>
                           
                             @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                      <label for="imagen">Seleccionar las imagenes</label>
                      <input required type="file" id="imagen" name="imagen" multiple accept="image/*">
                      
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" onclick="editarLugar();" class="btn btn-primary" >Editar</button>
                  </div>
                </form>
              </div><!-- /.box -->
  </div>

</div>
</center>
@endsection
 @section('scripts')
 
 {!!Html::script('admin/js/RutaTuristica/rutaTuCRUD.js')!!}
 @endsection

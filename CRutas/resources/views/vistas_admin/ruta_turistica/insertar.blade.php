@extends('layoutAdmin.baseAdmin')
@section('main')
		<center>
    <br>
    <br>
			 <div class="row">
            <!-- left column -->
            {{-- <div class="col-md-6" style="margin-left:25%" style="margin-rigth:25%"> --}}
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                
                <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="
                    display:none">
                  <strong id="msj-su"></strong>
               </div>
              <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="
                  display:none">
              <strong id="msj">Ocurrio un error</strong>
          </div>
                <div class="box-header">
                  <h3 class="box-title">Insertar Ruta Turística</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  {{-- {!!Form::open()!!} --}}
                  {{-- <input type="hidden" name="_token" value={{ csrf_token()}} id="token"> --}}
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <label for="descripcion">Descripción</label>
                      <textarea id="descripcion" name="descripcion"  class="form-control" placeholder="Descripción"></textarea>
                    </div>
                    <div class="form-group">
                     <label for="duracionL">Duración en el lugar</label>
                    <div class="input-group">
                       
                      <input type="text" class="form-control" id="duracionL" name="duracionL" placeholder="Duración en el lugar">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-time"> Horas</i></span>
                    
                  </div>
                  </div>
                    <div class="form-group">
                      <label for="tiempoU">Tiempo de llegada desde la ubicación</label>
                      <div class="input-group">
                      <input type="text" class="form-control" id="tiempoU" name="tiempoU" placeholder="Tiempo de llegada desde la ubicación">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-time"> Horas</i></span>
                    </div>
                    </div>

                    <div class="form-group">
                      <label for="distanciaU">Distancia desde la ubicación</label>
                      <div class="input-group">
                      <input type="text" class="form-control" id="distanciaU" name="distanciaU" placeholder="Distancia desde la ubicación">
                      
                      <span class="input-group-addon"><i class=""> KM</i></span>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="latitud">Latitud</label>
                      <input type="text" class="form-control" id="latitud" name="latitud" placeholder="Latitud">
                    </div>
                     <div class="form-group">
                      <label for="longitud">Longitud</label>
                      <input type="text" class="form-control" id="longitud" name="longitud" placeholder="Longitud">
                    </div>
                   

                      <div class="form-group">
                      <label for="ubicacion">Ubicación</label>
                     	<select id="ubicacion" data-rel="chosen" name="ubicacion">
                             @foreach ($ubicaciones as $ubicacion)
                             
                            <option value="{{ $ubicacion->id_ubicacion }}">{{ $ubicacion->nombre_ubicacion }}</option>
                           
                             @endforeach
                        </select>
                    </div>
                       <div class="form-group">
                      <label for="precio">Precio</label>
                      <select id="precio" data-rel="chosen" name="precio">
                             
                            <option value="1">De $0 a $50</option>
                           <option value="2">De $50 a $100</option>
                           <option value="3">De $100 a más</option>
                            
                        </select>
                    </div>
                      <div class="form-group">
                      <label for="tipo">Tipo Atractivo</label>
                      <select id="tipo" data-rel="chosen" name="precio">
                             
                            <option value="1">Aventura</option>
                           <option value="2">Playa</option>
                           <option value="3">Cultural</option>
                           <option value="4">Ecológico</option>
                            
                        </select>
                    </div>

                    
                     <div class="form-group">
                      <label for="clase">Clase</label>
                      <select id="clase" data-rel="chosen" name="clase">
                             
                            <option value="1">1</option>
                           <option value="2">2</option>
                         
                            
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="imagen">Seleccionar las imagenes</label>
                      <input required type="file" id="imagen" name="imagen[]" multiple accept="image/*">
                      
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" onclick="insertarRuta();" class="btn btn-primary">Insertar</button>
                  </div>
                {{ Form::close()}}
              </div><!-- /.box -->
              </div><!--/.col (left) -->
              <div class="col-md-3"></div>
  </div>

</div>
</center>
@endsection
 @section('scripts')
 {!!Html::script('admin/js/validarRuta.js')!!}
 {!!Html::script('admin/js/RutaTuristica/rutaTuCRUD.js')!!}
 @endsection

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin |</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
     {!!Html::style('admin/bootstrap/css/bootstrap.min.css')!!}
       
         <!-- Font Awesome -->
        {!!Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')!!}
         <!-- Ionicons -->
        {!!Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')!!}
        <!-- Theme style -->
      <!--  {!!Html::style('css/AdminLTE.min.css')!!}-->
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
      

       {!!Html::style('admin/dist/css/AdminLTE.min.css')!!}

       {!!Html::style('admin/dist/css/skins/_all-skins.min.css')!!}
          <!-- iCheck -->
        {!!Html::style('admin/plugins/iCheck/flat/blue.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
         <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <a href=""><b>CRutas</b>Administrador</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Inicie Sesión</p>
      
          {!!Form::open(['url'=>'iniciarSesion', 'method'=>'POST'])!!}
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="nombreU" placeholder="Nombre Usuario"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control"name="contrasena" placeholder="Contraseña"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary ">Iniciar Sesión</button>
            </div><!-- /.col -->
          </div>
         {!!Form::close()!!}

        

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    
  </body>
</html>
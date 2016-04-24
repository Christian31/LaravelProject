<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CRutas | Administrador</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      
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
        <!-- Morris chart -->
        {!!Html::style('admin/plugins/morris/morris.css')!!}
         <!-- jvectormap -->
        {!!Html::style('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}
         <!-- Date Picker -->
        {!!Html::style('admin/plugins/datepicker/datepicker3.css')!!}
         <!-- Daterange picker -->
        {!!Html::style('admin/plugins/daterangepicker/daterangepicker-bs3.css')!!}
        <!-- bootstrap wysihtml5 - text editor -->
        {!!Html::style('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}

         {!!Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')!!}
        <!-- DataTables -->
        {!!Html::style('admin/plugins/datatables/dataTables.bootstrap.css')!!}
        <!-- Theme style -->
    
      
        <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
       

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>CRutas</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 
                  <span class="hidden-xs">Nombre Administrador</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar Sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              
            </div>
           
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu Principal</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-leaf"></i>
                <span>Lugar Turístico</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{!!URL::to('/rutaT')!!}"><i class="fa fa-circle-o"></i>Insertar</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Mantener</a></li>
                
              </ul>
            </li>
           
            
           
            
            
            
            
          
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
          @yield('main')
        <!-- Main content -->
        <section class="content">
          

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
   {!!Html::script('admin/plugins/jQuery/jQuery-2.1.3.min.js')!!}
    <!-- jQuery UI 1.11.2 -->
   {!!Html::script('http://code.jquery.com/ui/1.11.2/jquery-ui.min.js')!!}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    {!!Html::script('admin/bootstrap/js/bootstrap.min.js')!!}    
    <!-- Morris.js charts -->
   {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')!!}
    {!!Html::script('admin/plugins/morris/morris.min.js')!!}    <!-- Sparkline -->
   {!!Html::script('admin/plugins/sparkline/jquery.sparkline.min.js')!!}
    <!-- jvectormap -->
   {!!Html::script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
    {!!Html::script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
    <!-- jQuery Knob Chart -->
    {!!Html::script('admin/plugins/knob/jquery.knob.js')!!}
    <!-- daterangepicker -->
    {!!Html::script('admin/plugins/daterangepicker/daterangepicker.js')!!}
    <!-- datepicker -->
    {!!Html::script('admin/plugins/datepicker/bootstrap-datepicker.js')!!}
    <!-- Bootstrap WYSIHTML5 -->
    {!!Html::script('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}
    <!-- iCheck -->
   {!!Html::script('admin/plugins/iCheck/icheck.min.js')!!}
    <!-- Slimscroll -->
    {!!Html::script('admin/plugins/slimScroll/jquery.slimscroll.min.js')!!}
    <!-- FastClick -->
    {!!Html::script('admin/plugins/fastclick/fastclick.min.js')!!}
    <!-- AdminLTE App -->
    {!!Html::script('admin/dist/js/app.min.js')!!}

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {!!Html::script('admin/dist/js/pages/dashboard.js')!!}

    <!-- AdminLTE for demo purposes -->
    {!!Html::script('admin/dist/js/demo.js')!!}

    {!!Html::script('admin/js/jquery.validate.js')!!}

    @yield('scripts')
  </body>
</html>
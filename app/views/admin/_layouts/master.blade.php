<!DOCTYPE html>
<html>
    <head>
        {{$meta}}
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            {{$header}}
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    {{$sidebar}}
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    @yield('content-header')
                </section>
                
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section><!-- /.content -->
                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        {{$footer}}

    </body>
</html>
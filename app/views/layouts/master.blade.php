<!DOCTYPE html>
<html>
  <head>
    <title>University App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/bower_components/bootstrap2.3.2/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>

    <div class="container">

        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="#">Title</a>
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Majors <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>{{ link_to_route('majors.index', 'View', $parameters = array(), $attributes = array()); }}</li>
                            <li>{{ link_to_route('majors.create', 'Create', $parameters = array(), $attributes = array()); }}</li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>{{ link_to_route('students.index', 'View', $parameters = array(), $attributes = array()); }}</li>
                            <li>{{ link_to_route('students.create', 'Create', $parameters = array(), $attributes = array()); }}</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        @yield('content')
    </div>
    <script src="/bower_components/jquery/jquery.js"></script>
    <script src="/bower_components/bootstrap2.3.2/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
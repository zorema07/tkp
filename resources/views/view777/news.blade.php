                         <!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Thalai Kristian Pawl | Chanmari Unit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="shortcut icon" href="{{ asset('/img/tkp.png') }}">

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/js/rs-plugin/css/settings.css') }}">

    <script type="text/javascript" src="{{ asset('/js/modernizr.custom.32033.js') }}"></script>
    
    <link rel="stylesheet" href="{{ asset('/css/eco.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

    <div class="pre-loader">
        <div class="load-con">
            <img src="{{ asset('/img/eco/logo.png') }}" class="animated fadeInDown" alt="">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>
   
    <header>
        
        <nav class="navbar navbar-default " role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('/img/eco/logo.png') }}" alt="" class="logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/#news">news</a>
                            </li>
                            <li><a href="/#article">article</a>
                            </li>
                            <li><a href="/#program">program</a>
                            </li>
                            <li><a href="/#hruaitute">hruaitute</a>
                            </li>
                            <li><a href="{{route('gallery.index')}}">gallery</a>
                            </li>  
                             <li><a href="{{route('group.index')}}">Group</a>
                            </li>  
                             <li><a href="#">Thalaikantu</a>
                            </li>
                         
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>

           <section id="features">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>News</h1>
                    <div class="divider"></div>
                </div>
                   <div class="container">
                    <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading">List News</div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th height="38" align="center" class="col-md-1 text-center">#</th>
                                        <th height="38" align="left" class="col-md-5">Name</th>
                                        <th height="38" align="left" class="col-md-3">Month</th>
                                        <th height="38" align="left" class="col-md-3">Year</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                    @foreach($postAll as $post)
                                        <tr bgcolor="">
                                        <td height="25" align="center" class="col-md-1 text-center">{{ $index++ }}</td>
                                        <td height="25" align="left" class="col-md-5"><a  href="{{route('view.show', array($post->id))}}">{{$post->title}}&nbsp;</a></td>
                                        <td height="25" align="left" class="col-md-3">{{ date('M',strtotime($post->created_at)) }}</td>
                                        <td height="25" align="left" class="col-md-3">{{ date('Y',strtotime($post->created_at)) }}</td>
                                    @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            {!! $postAll !!}
                        </div>
                    </div>
                </div>
        </section>


<footer>
            <div class="container">
                <a href="#" class="scrollpoint sp-effect3">
                    <img src="img/eco/logo.png" alt="" class="logo">
                </a>
                <div class="social">
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
                </div>
                <div class="rights">
                    <p>Copyright &copy; 2014</p>
                    <p>Template by <a href="" target="_blank">TKP Chanmari</a></p>
                </div>
            </div>
        </footer>

    </div>
    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/slick.min.js') }}"></script>
    <script src="{{ asset('/js/placeholdem.min.js') }}"></script>
    <script src="{{ asset('/js/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
    <script src="{{ asset('/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/js/scripts.js') }}"></script>
    <script>
        $(document).ready(function() {
            appMaster.preLoader();
        });
    </script>
</body>

</html>
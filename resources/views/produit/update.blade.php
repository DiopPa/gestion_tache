<!doctype html>
<html lang="en">

<head>
<title>:: Iproduit ::</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/vendor/charts-c3/plugin.css"/>
<style>
    .annual_report .c3-axis.c3-axis-y{ display: none;}
    .annual_report .c3-axis.c3-axis-x{ display: none;}
    
</style>
<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
</head>

<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    

    <!-- Top navbar div start -->
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-brand">
                
                <a href="index8.html">Iproduit</a> 
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Rechercher un operation" type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>                

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="page-login.html" class="icon-menu"><i class="fa fa-power-off"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    

    <!-- rightbar icon div -->
    

    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
           
            
            <div class="row clearfix">
                <div class="col-sm-4 bg-blue mb-4">
                    <a href="/ajouter" class="btn btn-primary">ajouter</a>
                    <a href="/produit" class="btn btn-primary">accueil</a>

                    


                </div>
                <div class="col-sm-4 col-md-8 col-lg-10">
                    <div class="card">
                        <div class="header">
                            <h2>Modifier un produit</h2>
                            <ul class="header-dropdown">
                            </ul>
                        </div>
                        <div class="body">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status')}}
                            </div>

                            @endif

                            <ul>
                                
                                @foreach ($errors->all() as $error)
                                <li class="alert alert-danger">{{$error}}</li>
                                @endforeach
                            </ul>
                            <div class="container">
                                
                                <div class="row">
                                  <form action="/update/traitement" method="post">
                                  {{ csrf_field() }}

                                  <input type="text" name="id" style="display:none;" value="{{$produits->id}}">
                                  <div class="col-md-10">
                                    <div class="form-group">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" class="form-control" name="designation" value="{{$produits->designation}}">
                                </div>
                                <div class="form-group">
                                    <label for="quantite" class="form-label">Quantite</label>
                                    <input type="number" class="form-control" name="quantite" value="{{$produits->quantite}}">
                                </div>
                                <div class="form-group">
                                    <label for="prix" class="form-label">prix</label>
                                    <input type="number" class="form-control" name="prix" value="{{$produits->prix}}">
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Modifier</button>
                                <br>
                                <a href="/produit" class="btn btn-danger mt-3">Revenir a la liste</a>

                                    </div>
                                  </form>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>


<!-- page js file -->
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="../js/index8.js"></script>
</body>
</html>

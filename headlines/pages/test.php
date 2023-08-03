<!doctype html>
<html lang="en">
<title> EMC Verification </title>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


	
	<!-- Google font -->	
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	
	<!--<link rel="stylesheet" href="emc.css" media="all">-->
	<link rel="stylesheet" href="../../emc-footer.css" media="all">
	<link rel="stylesheet" href="./verif_update_test.css" media="all">
</head>

<body>
<!-- <div class="wrapper"> -->
<header >
<nav class="navbar navbar-expand-lg header">
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="74px" height="20px" viewBox="137.024 137.006 74 74" enable-background="new 137.024 137.006 74 74" xml:space="preserve">
        </svg>
  </a>
</nav>

</header>

<section id ="content">
<div class="container-fluid">

<div class="row justify-content-md-center">
        <div class="col-md-auto col-overlay-img">
                <a class="img" href="regional/">
                  <div class="img__overlay">NAM<br/>NAM Nest<br>Hi-Res Windows<br>RAP HRRR<br>HREF SREF</div>
                  <img src="../icons/regional_hires.png"/>
                </a>
                <div class="img-label"><a class="img-model-icon-lnks" href="regional/">Short-Range Weather (SRW)</a></div>
        </div>
    <div class="col-md-auto col-overlay-img">
                <a class="img" href="../mrw" target="_top">
                  <div class="img__overlay">GFS<br/>GEFS<br/>NAEFS</div>
                  <img src="../icons/global.png"/>
                </a>
                <div class="img-label"><a class="img-model-icon-lnks" href="../mrw"  target="_top">Medium-Range Weather (MRW)</a></div>
        </div>
    <div class="col-md-auto col-overlay-img">
                <a class="img" href="headlines/">
                  <div class="img__overlay">GEFS<br/>CFS</div>
                  <img src="https://emc.ncep.noaa.gov/users/verification/global/gfs/ops/grid2grid_all_models/images/acc_valid00Z_HGT_P500_fhr120_G002NHX.png"/>
                </a>
                <div class="img-label"><a class="img-model-icon-lnks" href="headlines/">Subseasonal</a></div>
        </div>
    <div class="col-md-auto col-overlay-img">
                <a class="img" href="global/">
                  <div class="img__overlay">CFS</div>
                  <img src="../icons/seasonal.png"/>
                </a>
                <div class="img-label"><a class="img-model-icon-lnks" href="global/">Seasonal</a></div>
        </div>
        <div class="col-md-auto col-overlay-img">
                <a class="img" href="cyclones/">
                  <div class="img__overlay">HWRF<br>HMON<br>Tropical Cyclones</div>
                  <img src="../icons/cyclones.png"/>
                </a>
                <div class="img-label"><a class="img-model-icon-lnks" href="cyclones/">Hurricane</a></div>
        </div>
        <div class="col-md-auto col-overlay-img">
                <a class="img" href="ocean_wave/">
                  <div class="img__overlay">RTOFS<br>WAVEWATCH III</div>
                  <img src="../icons/ocean_wave.png"/>
                </a>
                <div class="img-label"><a class="img-model-icon-lnks" href="ocean_wave/">Marine/Cryosphere</a></div>
        </div>
        <div class="col-md-auto col-overlay-img">
                <a class="img" href="air_quality/">
                  <div class="img__overlay">CMAQ<br/>HYSPLIT<br/>NGAC</div>
                  <img src="../icons/air_quality.png"/>
                </a>
                <div class="img-label"><a class="img-model-icon-lnks" href="air_quality/">Air Quality</a></div>
        </div>
        <div class="col-md-auto col-overlay-img">
                <a class="img" href="precip/">
                  <div class="img__overlay">Coastal</div>
                  <img src="../icons/precip_clouds.png"/>
                </a>
                <div class="img-label"><a class="img-model-icon-lnks" href="precip/">Coastal</a></div>
        </div>
        <div class="col-md-auto col-overlay-img">
                <a class="img" href="regional/">
                  <div class="img__overlay">GLW</div>
                  <img src="../icons/great_lakes.png"/>
                </a>
                <div class="img-label"><a class="img-model-icon-lnks" href="regional/">Lakes</a></div>
        </div>
        <div class="col-md-auto col-overlay-img">
                <a class="img" href="regional/">
                  <div class="img__overlay">URMA</div>
                  <img src="../icons/realtime_anl.png"/>
                </a>
                <div class="img-label"><a class="img-model-icon-lnks" href="regional/">Real-time Analyses</a></div>
        </div>
</div>

</div> <!-- Closes Container-Fluid div-->
</section><!-- Closes Content section-->

<!-- 	</div> --><!-- Close wrapper -->	
	<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

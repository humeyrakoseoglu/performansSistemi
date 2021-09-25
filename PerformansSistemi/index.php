<!--HÜMEYRA KÖSEOĞLU-->

<?php include("sistem/ayar.php");?>
<?php include("sistem/fonksiyon.php");?>
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>MAGNA - Personel Raporlama Sistemi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="assets/css/style.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" type="image/x-icon" href="https://suggest.magna.com/oneri/img/favicon.ico">	
		<link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		
	    <style>
	    .dataTables_filter {
        display: none;
         }
		 #veriTablosu th,
		 #veriTablosu td{
	    	padding:7px; 
	    	text-align:center;
	    }

	    #veriTablosu input{
	    	border:none !important;
	    	text-align:center;
	    	width: 100%;	
	    }
		.center {
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 50%;
		}
	    </style>	
		

	</head>
	
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" >


							<!--begin::Container-->
							<div class="container">

										<div class="col-xl-12 ">
										<img src="images\logo-text.png" class="center" alt="Magna Seating" width="100" height="80">

										<div class="card ">

										<div class="card-body ">

    <button  type="button" class="btn btn-light-secondary font-weight-bold mr-2"><a href="?do=toplu">Toplam Rapor</a></button>
    <button type="button" class="btn btn-light-secondary font-weight-bold mr-2"><a href="raporlama.php">Detaylı Raporlama</a></button>


</div>										
</div>										
</div>	

<?php
$do = @$_GET["do"];
switch ($do) {

case "profil":
include("profil.php");
break;

case "toplu":
	include("topluRapor.php");
	break;

default :
include("anasayfa.php");
break;
}

?>
		<!-- Do Bitiş-->		

		<!--alt baslangıç-->
		<!--bitiş baslangıç-->		

	
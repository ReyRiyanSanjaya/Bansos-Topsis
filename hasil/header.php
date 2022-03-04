<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>SPK TOPSIS</title>
    <!-- Bootstrap Core CSS -->
    
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <script src="js/jquery.min.js"></script>
    
    <script src="js/dataTables.bootstrap4.min.js"></script>
    
    <script src="js/jquery.dataTables.min.js"></script>    
    
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">

	<style>
	#main-wrapper > div > div > div.row.page-titles {
		background-color: #f3f6fd !important;
		box-shadow: none !important;
	}

	.card {
		border-radius: 4% !important;
	}
	</style>

</head>
<script language="JavaScript" type="text/JavaScript">
    var newwindow;

    function KonfirmasiHapus(submodule,id) {
        var jawaban;
        jawaban=confirm("Anda Yakin record ini akan dihapus?");
        if(jawaban) 
        {
            location.href=""+submodule+"="+id;
        }
    }
</script>
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
     
        
        
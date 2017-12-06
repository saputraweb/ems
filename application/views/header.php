<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EMS</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>dist/css/flatly-bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>dist/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
	body{
	/*	margin-top:70px; */
	}
  .logo{
    margin:10px 0px;
  }
  .logo img{
    width:100px;
  }
  #menu-custom{
    margin:10px 0px;
  }
  #menu-custom ul{
    margin:0px;
    padding:0px;
    float:right;
  }
  #menu-custom li {
    list-style:none;
    float:left;
  }
  #menu-custom a{
    display:block;
    padding:10px 10px 10px 20px;
    font-size:1.2em;
    color:#727272;
    font-weight:bold;
  }
  #menu-custom a.active{
    
    color:#ffdb0d;
  }
  a{
    color:#ffdb0d;
  }
  .breadcrumb{
    background-color:#727272;
    
  }
  .breadcrumb li.active{
    color:#ffffff;
  }
  .breadcrumb>li+li:before{
    color:#ffffff;
  }
  .breadcrumb a{
    color:#ffdb0d;
    font-style:underline;
  }
	</style>
  </head>
  <body>
  
    <div class="container">
      <div class="logo">
      <img src="<?php echo base_url();?>dist/images/makara-ui.png" alt="" >
      </div>
      <div id="menu-custom">
      <ul class="">
            <li ><a href="/ems" class="active">Home</a></li>
            <li><a href="<?php  echo site_url('form');?>">Form</a></li>
            <li><a href="<?php  echo site_url('histori');?>">Histori</a></li>	
            
          </ul>
      </div>
    </div>
    <!--
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/ems">EMS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/ems">Home</a></li>
            <li><a href="<?php // echo site_url('form');?>">Form</a></li>
            <li><a href="<?php // echo site_url('histori');?>">Histori</a></li>	
            
          </ul>
        </div>
      </div>
    </nav>
	<div class="container">
-->
<div class="container">
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CodeNow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This shit is awesome">
    <meta name="author" content="Stephen Chiang, Vaibhav Gupta">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap-responsive.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url();?>/css/cosmo.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url();?>/css/jquery-ui-1.9.2.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url();?>/css/prettify/prettify.css" type="text/css" media="screen" />
    <script src="<?php echo base_url() ?>/js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/js/jquery-ui-1.9.2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>/css/prettify/prettify.js" type="text/javascript"></script>
	<style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
</head>
<body onload="prettyPrint()">

<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="http://www.vaibhav-gupta.com">Vaibhav Gupta</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?= base_url() ?>">CodeNow</a></li>
            </ul>
          </div><!--/.nav-collapse -->          
          <div class="nav-collapse collapse pull-right">
            <ul class="nav">
              <li class="disabled"><a>Links will be lost in: <font id="time_span"><? $timer = 60-date('i'); if( $timer < 10) { echo "0".$timer; } else { echo $timer; } ?> minutes</font></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


<div id="wrap">
<div class="container">
	<div class="container row-fluid staystrong">


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

  <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css" type="text/css" media="screen" >
  <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap-responsive.min.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url();?>/css/cosmo.min.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url();?>/css/jquery-ui-1.9.2.min.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url();?>/css/prettify/prettify.css" type="text/css" media="screen" />
  <script src="<?php echo base_url() ?>/js/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>/js/jquery-ui-1.9.2.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>/css/prettify/prettify.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>/css/prettify/prettify.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>/css/codemirror.css">
    <script src="<?php echo base_url();?>/js/codemirror.js"></script>
    <script src="<?php echo base_url();?>/mode/clike/clike.js"></script>
    <script src="<?php echo base_url();?>/addon/edit/closebrackets.js"></script>
    <script src="<?php echo base_url();?>/addon/runmode/runmode.js"></script>
    <script src="<?php echo base_url();?>/addon/dialog/dialog.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>/addon/dialog/dialog.css">
    <script src="<?php echo base_url();?>/addon/search/searchcursor.js"></script>
    <script src="<?php echo base_url();?>/addon/search/search.js"></script>
	<style type="text/css">
      body {
      }

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 91%;
        height: auto !important;
        height: 91%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
        padding-top: 60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }

    .CodeMirror {border: 2px inset #dee;}
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
</head>
<body onload="prettyPrint()">

<div id="wrap">
<div class="container">
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


<div class="container">
	<div class="container row-fluid staystrong">


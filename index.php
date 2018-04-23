<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal Website">
    <meta name="author" content="Aukiha">

    <title>Aukiha</title>

    <!-- Core CSS -->
    <link href="css/stylesheet<?php echo rand(1,4); ?>.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="icon.png">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

</head>

<!-- Body Padding -->
<style>
body {
    padding-top: 15em;
}
</style>

<!--[if !(lt IE 8)]><!-->
<script type="text/javascript">
  (function(){
    var e = document.createElement('script'); e.type='text/javascript'; e.async = true;
    e.src = 'https://www.eff.org/ngw/widget.min.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s);
  })();
</script>
<!--<![endif]-->

<script type="text/javascript">
$(function () {                      // on document ready
    var div = $('#showOrHideDiv');   // cache <div>
    $('#action').click(function () { // on click on the `<a>`
        div.fadeToggle(1000);        // toggle div visibility over 1 second
    });
});
</script>

<!-- Website Content -->
<div class="top">
  <h1>Aukiha</h1>
</div>

<div class="links">
  <a href="https://twitter.com/Aukiha/" target="_blank">
    <div class="link a">
        <i class="box fa fa-twitter fa-2x"></i>
    </div>
  </a>
  <a href="mailto:aukihat@gmail.com">
    <div class="link a">
      <i class="box fa fa-envelope fa-2x"></i>
    </div>
  </a>
  <a href="https://github.com/aukiha" target="_blank">
    <div class="link a">
      <i class="box fa fa-github-alt fa-2x"></i>
    </div>
  </a>
  <a href="http://steamcommunity.com/id/Aukiha" target="_blank">
    <div class="link a">
      <i class="box fa fa-steam fa-2x"></i>
    </div>
  </a>
</div>

<div class="ProjectsList">
  <h2 id="action" href="#">Projects I've worked on</h2>
  <div id="showOrHideDiv" style="display: none;">
    <dl>
      <dt><a href="http://www.hbpac.club/" target="_blank">HB Performing Arts Commitee Website</a></dt>
      <dd>Website for Harold M. Brathwaite Secondary School's Peforming Arts Commitee</dd>
      <dt><a href="https://benchmarkedstudios.com/" target="_blank">benchMarked Studios</a></dt>
      <dd>Enterprise-level services for small business and individuals</dd>
      <dt><a href="https://www.soundcloud.com/aukiha" target="_blank">Experimental Music</a></dt>
      <dd>Music I've made</dd>
    </dl>
  </div>
</div>

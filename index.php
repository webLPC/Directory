<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Las Positas College (LPC)" />
<meta name="keywords" content="Las Positas College, Las Positas, LPC" />
<?php
define('root', $_SERVER['DOCUMENT_ROOT'] . '/');
define('blogcategory', ' ');
?>
<title>Faculty &amp; Staff Directory</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

<link href="/files/css/home/base.css" rel="stylesheet" type="text/css" />
<link href="/files/css/home/lpc-bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/page.css" type="text/css" />
<link rel="stylesheet" href="/files/css/navigation/left.css" type="text/css" />

<style type="text/css">

</style>

<link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,400italic,700italic' rel='stylesheet' type='text/css'>

</head>

<body>

<?php include_once(root . "files/php/ga/googletags.php"); ?>

<!-- HEADER -->

<?php include_once(root . "files/includes/homepage/header.inc"); ?>

<!-- end of HEADER -->

<div class="container">

    <div class="row">
      <!-- Top Navigation -->
      <?php include_once(root . "files/includes/navigation/top.inc"); ?>
      <!-- End Top Navigation -->
    </div>

    <!-- <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 dept-banner">
        <img src="images/" alt="" class="img-responsive" />
      </div>
    </div> -->

    <div class="row">
      <div class="col-md-3">
        <?php include_once ("left-nav.php"); ?>
      </div>

      <div class="col-md-9 section-content">

        <span id="content-area" class="sr-only sr-only-focusable"></span>

        <h1>Faculty &amp; Staff Directory</h1>

        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-12">
            <h2>Search Page</h2>

            <p>Please enter the first or last name (or portion thereof), title or discipline, or classification to search for faculty, staff or administrators here at Las Positas College.</p>

            <h3>Search by First Name</h3>

            <form action="results.php" class="form-inline" method="post">
              <div class="form-group">
                <div class="col-md-8">
                  <label for="firstName" class="sr-only">First Name</label>
                  <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name" value="">
                </div>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </div>
            </form>

            <h3>Search by Last Name</h3>

            <form action="results.php" class="form-inline" method="post">
              <div class="form-group">
                <div class="col-md-8">
                  <label for="lastName" class="sr-only">Last Name</label>
                  <input class="form-control" type="text" id="lastName" name="lastName" placeholder="Last Name" value=""/>
                </div>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </div>
            </form>

            <h3>Search by Title or Discipline</h3>

            <form action="results.php" class="form-inline" method="post">
              <div class="form-group">
                <div class="col-md-5">
                  <label for="title" class="sr-only">Title or Discipline</label>
                  <input class="form-control" type="text" id="title" name="title" placeholder="Title or Discipline" value=""/>
                </div>
                <div class="col-md-7">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>


                <div class="col-md-12">
                  <p class="form-text text-muted">(e.g. Psychology, Counseling, Visual Communication)</p>
                </div>
              </div>
            </form>

            <h3>Search by Classification</h3>



            <form action="results.php" class="form-inline" method="post">
              <div class="form-group">
                <div class="col-md-5">
                  <select class="form-control" name="classification" id="classification">
                  <option selected="selected">Select Classification</option>
                  <option value="Full time Faculty">Full time Faculty</option>
                  <option value="Adjunct Faculty">Adjunct Faculty</option>
                  <option value="Administrator">Administrator</option>
                  <option value="Classified">Classified</option>
                  <option value="Classified Hourly">Classified Hourly</option>
                  <option value="Contract">Contract</option>
                  </select>
                </div>
                <div class="col-md-7">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
                <div class="col-md-12">
                  <p class="form-text text-muted">(e.g. Administrator, Full time Faculty Classified)</p>
                </div>
              </div>
            </form>



            <ul class="ul-lpc">
              <li><a href="fulldirectory.php">Complete list of all Faculty, Staff and Administrators</a></li>
              <li><a href="http://www.care-news.org/directory/directory.htm">CARE Retiree Directory</a></li>
            </ul>

          </div>
        </div>
      </div>



    </div>

</div>


</div>

<!-- Start Footer -->

<?php include_once (root . "files/includes/homepage/footer.inc"); ?>

<!-- End Footer-->

<!-- <div class="container-fluid">
  Current viewport width:<span id="monitor"></span>
</div> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type='text/javascript'>
$(document).ready(function() {
  // $('#monitor').html($(window).width());

  // $(window).resize(function() {
  //     var viewportWidth = $(window).width();
  //     $('#monitor').html(viewportWidth);
  // });
  var linkURL = document.location.pathname.match(/[^\/]+$/);

  if(linkURL === null) {
    $("a[href='index.php']").addClass("active");
  } else {
    $("a[href='"+linkURL+"']").addClass("active");
  }
});
</script>

<?php include_once(root . "files/includes/js/js.inc"); ?>

</body>
</html>

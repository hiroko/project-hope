<?php include('text_randomizer.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108484581-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-108484581-1');
      </script>
    <title>Project Hope // Burgundy for Life</title>
    <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom CSS -->
      <link href="style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- FONT AWESOME ICONS -->
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- GOOGLE FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Raleway|Raleway+Dots|Satisfy" rel="stylesheet">
  </head>
  <body>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-sm-6" id="content">

      <div class="container-fluid" id="top">
        <div class="row justify-content-center">
          <div class="col-sm-8 text-center">

          <h1 style="font-family: satisfy; font-size: 85px; padding: 15px;">Project Hope</h1>
          <h2 style="font-family: Raleway; font-size: 20px; padding: 0px;"><em><a href="http://hope.burgundyforlife.org">hope.burgundyforlife.org</a></em></h2>
            <p>Feeling alone after a diagnosis of vascular malformation, stroke, brain injury, or treatment?<br>
            <em>Project Hope</em> publishes real advice from those who have stepped through the same paths of uncertainly you are walking.</p>
            <p><em>Project Hope</em> curates voices from survivors and family members who took time to fill out a survey by <a href="http://burgundyforlife.org" target="_blank">Burgundy for Life</a> for #AVMAwarenessMonth in October, 2017.</p>
            <p>Refresh the page to "rotate" through the advices fellow survivors and their loved ones have provided.<br>
            <small>No quote showing? Simply Refresh, or click "<a href="index.php">Next</a>.</small></p>

          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-sm-6 text-center">
            <blockquote style="background-color: #f2d7de; padding: 20px; margin: 10px; outline: 2px solid #f2d7de; outline-offset: 15px; outline-radius: 15px; border-radius: 15px;">
              <h2 style="font-family: Raleway; font-size: 25px; padding: 15px;">
                <?php text_randomizer(); ?>
              </h2>
            </blockquote>
            <p style="padding: 10px;"><small><i class="fa fa-angle-double-right fa-fw"></i><a href="index.php">Next</a></small></p>
          </div>
        </div>

        <!-- SNS -->
            <section id="SNS">
              <div class="container-fluid"><!-- container-fluid -->
                <div class="row justify-content-center"><!-- row -->
                  <div class="col-sm-3 text-center"><!-- col -->
                    <i class="fa fa-facebook-official fa-lg fa-fw"></i>&nbsp; <a href="http://facebook.com/avmalformation" target="_blank">/avmalformation</a>
                  </div><!-- /col -->
                  <div class="col-sm-3 text-center"><!-- col -->
                    <i class="fa fa-twitter fa-lg fa-fw"></i>&nbsp; <a href="http://twitter.com/avmalformation" target="_blank">@avmalformation</a>
                  </div><!-- /col -->

                  <div class="col-sm-3 text-center"><!-- col -->
                    <i class="fa fa-envelope fa-lg fa-fw"></i>&nbsp; <a href="mailto:hi@burgundyforlife.org">hi@burgundyforlife.org</a>
                  </div><!-- /col -->
                </div><!-- /row -->
              </div><!-- /container-fluid -->
          </section>
          <!-- /SNS -->

      <div class="row justify-content-center" id="footer">
        <div class="col-sm-12 text-center">
          <p><i>Project Hope</i> is part of <a href="http://burgundyforlife.org" target="_blank">Burgundy for Life</a>, created by <a href="http://hirokonishimura.com" target="_blank">Hiroko Nishimura</a> using HTML5, CSS3, Bootstrap, and PHP.</p>
          <p><small><a href="https://affeli.us/" target="_blank">Text Randomizer Script</a> | <a href="https://vecteezy.com" target="_blank">Background Image</a></small>
        </div>
      </div>

    </div><!-- /col-sm-8 -->
  </div><!-- /row: content -->
</div><!-- /container-fluid: content -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

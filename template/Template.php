<!DOCTYPE html>
<html class="full" lang="no">


<head>
     <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
     <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/the-big-picture.css" rel="stylesheet">

</head>

<body>
<!-- Navigation -->
    <div class="container-fluid">
    <div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2">

  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle btn-lg btn-primary" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-th"></span>
    </button>
    <ul class="dropdown-menu">
        <?php echo $menu; ?>

    </ul>
  </div> <!-- /.drop -->
</div><!-- /.col -->

<div class="text-right col-md-10 col-sm-10 col-xs-10">
   <big><big><big> <?php echo $label; ?> </big> </big> </big>
</div><!-- /.col 11 -->
</div> <!-- /.row -->
        </div> <!-- /.panel.body -->
        </div> <!-- /.panel -->
    </div> <!-- /.container -->

   <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="text-center col-md-6 col-md-offset-3">
                <?php echo $content; ?>
                
                </div>


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
     <!-- script til sida -->
    <script src="js/quizjs.js"></script>

</body>

</html>


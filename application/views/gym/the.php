<body style="background-color:#E0E0E0;">
<?php $this->load->helper('url');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>About us</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?=base_url("css/bootstrap.min.css")?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?=base_url("css/modern-business.css")?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?=base_url("font-awesome/css/font-awesome.min.css")?> rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
	<body>

    <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                         </button>
                <a class="navbar-brand" href="<?=site_url("gym/view/home")?>">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                         <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?=site_url("gym/view/the")?>">About us</a>
                    </li>
                    <li>
                        <a href="<?=site_url("search/ff")?>">Features & Functions </a>
                    </li>
                    <li>
                        <a href="<?=site_url("news/index")?>">Database</a>
                    </li>
                </ul>
            </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About us
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="<?=base_url("photo/gym1.jpg")?>" alt="">
            </div>

            <div class="col-md-4">
                <h3>Our Gym</h3>
<p>We have designed our gyms around the things that matter most to our members:<br>

Low prices - we keep our prices low and make sure they are simple and easy to understand<br>
High quality gyms - our gyms are designed and maintained to the highest standards, with state-of-the-art equipment<br>
Built around you - with up to 50 free classes every week, large free weights and cardio areas and plenty of personal trainers you'll find everything you need<br>
No contract - you have the freedom to join and leave whenever suits you<br>
Open all day, every day - whenever you're ready to train, most gyms are open and ready to welcome you, 365 days a year, 24 hours a day<br>
Online - join, book classes or cancel your membership in seconds... at the touch of a button on your phone, tablet or computer
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
         <div class="row">

            
			<div class="col-lg-12">
            </div>

        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->


        
    <!-- jQuery -->
    <script src="<?=base_url("js/jquery.js")?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url("js/bootstrap.min.js")?>"></script>



</body>

</html>

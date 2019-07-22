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

	<title>AWT Work</title>
<script src="<?=base_url("https://code.jquery.com/jquery-3.1.0.min.js")?>"></script>
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
						
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container -->
    </nav>
	<br>
	<!-- Page Content -->

    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Database</h1>
            </div>
        </div>


<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>MembershipType</td>
    <th>MembershipLength</td>
    </tr>
    <tr>
<?php foreach ($news as $news_item): ?>

        <td><?php echo $news_item['id']; ?></td>
        <td><?php echo $news_item['name']; ?></td>
        <td><?php echo $news_item['slug']; ?></td>
        <td><?php echo $news_item['txt']; ?></td>
 </tr>
<?php endforeach; ?>

  
    </table>





	</div>	
		   
        
    <!-- /.container -->
 
    <!-- jQuery -->
	
    <script src="<?=base_url("js/jquery.js")?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url("js/bootstrap.min.js")?>"></script>



</body>

</html>

<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
th{
    color:red;
}
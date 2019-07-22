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
                <h1 class="page-header">Ajax Search
                    <small></small>
                </h1>
                <h5>Search for Membership types (GOLD, SILVER or BRONZE):</h5>
            </div>
        </div>
<script>

   // This is the jQuery Ajax call
   function doSearch()
   {
      $.ajax({
         type: "GET",
         url:"http://mi-linux.wlv.ac.uk/~1629320/codeigniter/index.php/ajax/getdata/" + $("#mysearch").val(),
         success:function(result){
         $("#searchresults").html(result);
      }});
   }
 $(document).ready(function(){  
      $('#search_text').keyup(function(){  
           var txt = $(this).val();  
           if(txt != '')  
           {  
                $.ajax({  
                     url:"fetch.php",  
                     method:"post",  
                     data:{search:txt},  
                     dataType:"text",  
                     success:function(data)  
                     {  
                          $('#result').html(data);  
                     }  
                });  
           }  
           else  
           {  
                $('#result').html('');                 
           }  
      });  
 });  
</script>

<!-- Search box -->
<input type="search" id="mysearch" placeholder="Search">

<!-- Search button -->
<input type="button" id="searchbutton" value="Search" onClick="doSearch();">

<!-- The DIV that will contain the search results -->
<div id="searchresults"></div> 
		<!-- this is the code for the geolocation -->
		


	

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Drag & Drop
                    <small></small>
                </h1>
            </div>
        </div>

		<script>
if (Modernizr.draganddrop) {
  // Browser supports HTML5 DnD.
} else {
  // Fallback to a library solution.
}
		</script>
<div id="columns">
  <div class="column" draggable="true">
  <img class="img-responsive portfolio-item" src="<?=base_url("photo/gym2.jpg")?>" alt="">
  </div>
  <div class="column" draggable="true">
  <img class="img-responsive portfolio-item" src="<?=base_url("photo/gym3.jpg")?>" alt="">
  </div>
   <div class="column" draggable="true">
  <img class="img-responsive portfolio-item" src="<?=base_url("photo/gym4.jpg")?>" alt="">
  </div>
   <div class="column" draggable="true">
  <img class="img-responsive portfolio-item" src="<?=base_url("photo/gym5.jpg")?>" alt="">
  </div>
</div>
    <script>
       function handleDragStart(e) {
  this.style.opacity = '0.4';  // this / e.target is the source node.
}

var cols = document.querySelectorAll('#columns .column');
[].forEach.call(cols, function(col) {
  col.addEventListener('dragstart', handleDragStart, false);
});
function handleDragStart(e) {
  this.style.opacity = '0.4';  // this / e.target is the source node.
}

function handleDragOver(e) {
  if (e.preventDefault) {
    e.preventDefault(); // Necessary. Allows us to drop.
  }

  e.dataTransfer.dropEffect = 'move';  // See the section on the DataTransfer object.

  return false;
}

function handleDragEnter(e) {
  // this / e.target is the current hover target.
  this.classList.add('over');
}

function handleDragLeave(e) {
  this.classList.remove('over');  // this / e.target is previous target element.
}

var cols = document.querySelectorAll('#columns .column');
[].forEach.call(cols, function(col) {
  col.addEventListener('dragstart', handleDragStart, false);
  col.addEventListener('dragenter', handleDragEnter, false);
  col.addEventListener('dragover', handleDragOver, false);
  col.addEventListener('dragleave', handleDragLeave, false);
});
function handleDrop(e) {
  // this / e.target is current target element.

  if (e.stopPropagation) {
    e.stopPropagation(); // stops the browser from redirecting.
  }

  // See the section on the DataTransfer object.

  return false;
}

function handleDragEnd(e) {
  // this/e.target is the source node.

  [].forEach.call(cols, function (col) {
    col.classList.remove('over');
  });
}

var cols = document.querySelectorAll('#columns .column');
[].forEach.call(cols, function(col) {
  col.addEventListener('dragstart', handleDragStart, false);
  col.addEventListener('dragenter', handleDragEnter, false)
  col.addEventListener('dragover', handleDragOver, false);
  col.addEventListener('dragleave', handleDragLeave, false);
  col.addEventListener('drop', handleDrop, false);
  col.addEventListener('dragend', handleDragEnd, false);
});
var dragSrcEl = null;

function handleDragStart(e) {
  // Target (this) element is the source node.
  this.style.opacity = '0.4';

  dragSrcEl = this;

  e.dataTransfer.effectAllowed = 'move';
  e.dataTransfer.setData('text/html', this.innerHTML);
}
function handleDrop(e) {
  // this/e.target is current target element.

  if (e.stopPropagation) {
    e.stopPropagation(); // Stops some browsers from redirecting.
  }

  // Don't do anything if dropping the same column we're dragging.
  if (dragSrcEl != this) {
    // Set the source column's HTML to the HTML of the column we dropped on.
    dragSrcEl.innerHTML = this.innerHTML;
    this.innerHTML = e.dataTransfer.getData('text/html');
  }

  return false;
}
    </script>
<br>
<br>
<br>
<br>


         <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Twitter Widget API
                    <small></small>
                </h1>
            </div>
        </div>
          <div>    
		<a class="twitter-timeline" href="https://twitter.com/Gymfluential" width="800px" height="400px">Tweets from Gymfluential</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>		
        </div>
       
</script>

  
       <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Third-party API 
                    <small></small>
                </h1>
            </div>
        </div>   
    <table>
    <tr>
     <th>Actor/Director</th>
     <th>ID</th>
     <th>Website</td>
    </tr>
    <tr>
      <?php
     
      $url = "https://newsapi.org/v1/articles?source=bbc-sport&sortBy=top&apiKey=e74bfaca19a84032b574de776678b521";
 
      
      $json = file_get_contents($url);
      $data = json_decode($json);
      
      ?>
      <?php foreach($data->data->results->characters as $link) { ?>
      <td><?php echo "<p>" . $link->title . "</p>"; ?></td>
       <td><?php echo "<p>" . $link->id . "</p>"; ?></td>
             <td><?php echo "<p>" . $link->url . "</p>"; ?></td>
      </tr> 
      <?php } ?>
	</div>	
	<br>	   
        
    <!-- /.container -->
 
    <!-- jQuery -->
	
    <script src="<?=base_url("js/jquery.js")?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url("js/bootstrap.min.js")?>"></script>



</body>

</html>
<style>
#holder { border: 10px dashed #ccc; width: 300px; height: 300px; margin: 20px auto;}
#holder.hover { border: 10px dashed #333; }
.column.over {
  border: 2px dashed #000;
}
/* Prevent the text contents of draggable elements from being selectable. */
[draggable] {
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  user-select: none;
  /* Required to make elements draggable in old WebKit */
  -khtml-user-drag: element;
  -webkit-user-drag: element;
}
.column {
  height: 150px;
  width: 150px;
  float: left;
  border: 2px solid #666666;
  background-color: #ccc;
  margin-right: 5px;
  -webkit-border-radius: 10px;
  -ms-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 3px #000;
  -ms-box-shadow: inset 0 0 3px #000;
  box-shadow: inset 0 0 3px #000;
  text-align: center;
  cursor: move;
}
.column header {
  color: #fff;
  text-shadow: #000 0 1px;
  box-shadow: 5px;
  padding: 5px;
  background: -moz-linear-gradient(left center, rgb(0,0,0), rgb(79,79,79), rgb(21,21,21));
  background: -webkit-gradient(linear, left top, right top,
                               color-stop(0, rgb(0,0,0)),
                               color-stop(0.50, rgb(79,79,79)),
                               color-stop(1, rgb(21,21,21)));
  background: -webkit-linear-gradient(left center, rgb(0,0,0), rgb(79,79,79), rgb(21,21,21));
  background: -ms-linear-gradient(left center, rgb(0,0,0), rgb(79,79,79), rgb(21,21,21));
  border-bottom: 1px solid #ddd;
  -webkit-border-top-left-radius: 10px;
  -moz-border-radius-topleft: 10px;
  -ms-border-radius-topleft: 10px;
  border-top-left-radius: 10px;
  -webkit-border-top-right-radius: 10px;
  -ms-border-top-right-radius: 10px;
  -moz-border-radius-topright: 10px;
  border-top-right-radius: 10px;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid Red;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: white;
}
tr:nth-child(odd) {
    background-color: lightblue;
}
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        WIDTH:50%;
        height: 50%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }
    </style>
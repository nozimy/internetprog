<?php session_start();

$filename = 'massiv.php';

if (file_exists('massiv.php')) {
    include 'massiv.php';
}
?>



<?php
if ($_GET){
    ++$_SESSION['basket'][$_GET['tovarId']] ;
    //$_SESSION['basket'][$_GET['tovarId']] = $_GET['tovarId'];
}
if ($_SESSION['basket']){
    $basket_count = array_sum($_SESSION['basket']);
} else {
    $basket_count = 0;
}
?>
<pre><?print_r($_SESSION);?></pre>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>МАШИНКО-МАГАЗИН</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

    <div  class="container">
    	<div class="page-header">
            <h1>МАШИНКО-МАГАЗИН</h1>
            <ul class="nav nav-pills" role="tablist">
              <li role="presentation"><a href="index.php">Главная</a></li>
              <li role="presentation"><a href="basket.php">Корзина <span class="badge"><?= $basket_count?></span></a></li>
            </ul>
        </div>
    	<div class"row">
    		<?php
    		if ($tovar && count($tovar) > 0) { 
    		for ($i=0; $i < count($tovar) ; $i++) {
    		?>
    		<DIV id="item" class="col-sm-6 col-md-4">
				<div class="thumbnail">
    				<a href="tovar.php?id=<?= $i ?>" >
    				<img  style="height: 200px; width: 100%; display: block;" class="img-rounded" src=" <?=  $tovar[$i]['pic'] ?>" width='150' height='150'></img>
    				</a>
    				<div class="caption">
        				<a href="tovar.php?id=<?= $i ?>" ><h3><?= $tovar[$i]['name']?></h3></a>
        				<form method=get>
        					<input type="hidden" name=tovarId value=<?= $i?> >
        					<input type="hidden" name=count value=1 >
        					<p style="font-size: 135%;" class="label label-success"><?= $tovar[$i]['price'] ?> руб.</p> 
        					<input type=submit name=addToCart  class="btn btn-default" value='В корзину'></button>
        				</form>
    				</div>
			    </div>
    		</DIV>
    		<?php
    		} // for
    		} // if
    		else
    		{
    		    ?>
    		    
    		    <p class="bg-primary">Нет товаров</p>
    		    
    		    <?php
    		} //else
    		?>
    	</div>
	</div>
	
	<footer class="footer">
      <div class="container">
        <p class="text-muted">Интернет магазин машинок в г. Ижевске</p>
      </div>
	</footer>


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>

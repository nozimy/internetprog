<? session_start();

if (file_exists('massiv.php')) {
include 'massiv.php';
}

$basket = $_SESSION['basket'];
    // if(){
        
    // }
if(isset($_POST['orderCompleted'])){
    $orderCompleted = $_POST['orderCompleted'];
} else {
    $orderCompleted = false;
}

if ($_SESSION['basket']){
    $basket_count = array_sum($_SESSION['basket']);
} else {
    $basket_count = 0;
}


?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?= $tovar[$tovarId]['name']?></title>
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
    <body >
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

      
    


    <div  class="container-fluid">
    	<div class="page-header">
            <h1>МАШИНКО-МАГАЗИН</h1>
            <ul class="nav nav-pills" role="tablist">
              <li role="presentation"><a href="index.php">Главная</a></li>
              <li role="presentation"><a href="basket.php">Корзина <span class="badge"><?= $basket_count?></span></a></li>
            </ul>
        </div>
        
        <form method=GET>
        	<div class"row">
        	    

                <DIV id="item" class="col-md-offset-2 col-sm-8 col-md-8">
                    
                    <?php
            		if ($basket && count($basket) > 0 && $tovar && $orderCompleted==false) { 
            		foreach ($basket as $key => $value) {
            		//for ($i=0; $i < count($basket) ; $i++) {
            		?>
                    <DIV class"row" style="margin-top: 20px; padding: 20px;">
                        
                        <input type="hidden" name=tovarId value=<?= $key?> >
                        
                	    <div class="col-sm-1 col-md-1">
                		    <img  style="height: 40px; width: 40px; display: block;" class="img-rounded" src=<?=  $tovar[$key]['pic'] ?> width='150' height='150'></img>
                		</div>
                		<div  class="col-sm-6 col-md-5">
                		    <a href="tovar.php?id=<?= $key ?>" >
                    			<h5><?= $tovar[$key]['name']?></h5>
                			</a>
                    			 
                		</div>
                		<div class="col-sm-2 col-md-2">
                    		<p style="font-size: 1em;"><?= $tovar[$key]['price'] ?> руб.</p>	
                		</div>
                		
                		<div class="col-sm-2 col-md-2">
                    		<input value=<?= $basket[$key]?> name="tovar_count" required="true" type="number" step="1" value="1" min="1" max="100"> шт.
                		</div>
                		<div class="col-sm-2 col-md-2">
                		    <!--<form method=GET>-->
                		        <!--<input type="hidden" name=delete value="true" >-->
                		        <button value="1" name='delete_btn' type="submit" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                		    <!--</form>-->
                    		
                		</div>
                	</DIV>
                	
                
                
                
        		<?php
        		} // for
        		?>
        		
        		<div class"row" style="margin-top: 20px; padding: 20px;">
                	<div class="col-md-offset-10 col-md-2">
                	    <input type="hidden" name=orderCompleted value="true" >
        	            <input type=submit name=buy  class="btn btn-success btn-lg" value='Купить'></button>
        	        </div>
                </div>
        		
        		<?php
        		} // if
    			else
        		{
        		    if($orderCompleted==false){
                ?>
            		    
    		    <p class="bg-primary">В корзине нет товаров</p>
    		    <?php
        		    } //if $orderCompleted==false
            	} //else
                ?>
                
                <?php
                if ($orderCompleted == true){
                ?>
                   <p class="bg-success">Вы купили!</p>
                <?php
                }
                ?>
                
                
                
                </DIV>
        	</div>
        	
        	
        	<div class="clearfix "></div>
        	
        </form> 
        
        
	</div> <!-- container-->
	
	<footer class="footer" style="margin-top: 100px;">
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
 <? 
 
 $in = '';
 $screen= $_GET['textarea'];
 $act = '';
 $a='';
 $b='';


  if ($_GET['act']=='+')
	 {
	 	$a = $screen;
	 	echo $a."+";


	 	//echo ($_GET['textarea'] + $_GET['act']);
	 } elseif ($_GET['act']=='-')
	 {
	 	$a = $screen;
	 	echo $a."-";
	 	//echo '='.($_GET['textarea']-$_GET['y']);
	 }elseif ($_GET['act']=='*')
	 {
	 	$a = $screen;
	 	echo $a."*";
	 	//echo '='.($_GET['textarea']*$_GET['y']);
	 } elseif ($_GET['act']=='/')
	 {
	 	$a = $screen;
	 	echo $a."/";
	 	//echo '='.($_GET['textarea']/$_GET['y']);
	 } elseif ( ($a != '')) {
		 $screen='';
		 $in = $_GET['num'];
 		 $screen=$screen.$in;
	 } elseif($_GET['num']) {
	 	
	 	$in = $_GET['num'];
 		//$screen=$_GET['textarea'];
 		$screen=$screen.$in;
	 }

	 if ($_GET['clear']=='c'){
	 $screen='';
 	}
 	if (($_GET['res']=='=') && ($a!='')){
 		$b= $screen;
		$screen=($a + $b).'';	 
 	}
	  
	
 ?>
 
<form 
 method=get> 
<input type=text name=textarea value=<?= $screen?>> <br>
<input type=hidden name=hid value=<?= $act?>> <br>
<input type=hidden name=a value=<?= $a?>> <br>
<input type=hidden name=b value=<?= $b?>> <br>
<input type=submit name=num value='0'>
<input type=submit name=num value='1'>
<input type=submit name=num value='2'>
<input type=submit name=num value='3'> <br>
<input type=submit name=num value='4'>
<input type=submit name=num value='5'>
<input type=submit name=num value='6'>
<input type=submit name=res value='='> <br>
<input type=submit name=num value='7'>
<input type=submit name=num value='8'>
<input type=submit name=num value='9'> 
<input type=submit name=clear value='c'> <br>
  <input type=submit name=act value='+'>
  <input type=submit name=act value='-'>
  <input type=submit name=act value='*'>
  <input type=submit name=act value='/'>
   </form>

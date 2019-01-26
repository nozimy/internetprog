<? session_start();
//$_SESSION['bread'] = 59;
//$_SESSION['milk'] = 80;
$r = rand();


if ($_SESSION['hid'] == $_GET['hid']){

	if ($_GET['add']){
		$_SESSION[$_GET['item']] += $_GET['price'];
	}

	if($_GET['delete']){
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
	}
}

//$_SESSION[$_GET['hid']] = $_GET['hid'];
//echo $_SESSION['milk'].'<br>';
//echo $_SESSION['bread'];
//if(!empty($_SESSION)){

//}
$_SESSION['hid'] = $r;

echo "session hid  ".$_SESSION['hid'].'<br>';
echo "form hid  ".$_GET['hid'].'<br>';

?>
<form method=get> 
Товар: <input type=text name=item value=''> <br><br>
Стоимость: <input type=text name=price value=''> р<br><br>
<input type=hidden name=hid value=<?= $r ?>>
<input type=submit name=add value='Добавить'>
</form>
<select>
	<?
		foreach ($_SESSION as $key => $value) {
			if($value<=0){
				unset($_SESSION[$key]);
			} else {
				if (!empty($key)){
					echo '<option>'.$key.' '.$value.'</option>';
				}
			}
		
		}
	?>
</select>р<br><br><br>
<form method=get> 
	<input type=submit name=delete value='Очистить'>
</form>

//Вопросы
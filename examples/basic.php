<?php

require_once('../vendor/autoload.php');

$menu = new Fleximenu\Menu;

$about = $menu->add('About', 'about',10);

// since this item has sub items we append a caret icon to the hyperlink text
$about->link->append(' <span class="caret"></span>');

// we can attach HTML attributes to the hyper-link as well
$about->link->attributes(['class' => 'link-item', 'target' => '_blank']);

$about->attributes('data-model', 'nice');

$t = $about->add('Who we are?', array('url' => 'who-we-are',  'class' => 'navbar-item whoweare'),20);
$about->add('What we do?', array('url' => 'what-we-do',  'class' => 'navbar-item whatwedo'),10);


$menu->add('Portfolio', 'portfolio',20);
$menu->add('Contact',   'contact',9);

// we're only going to hide items with `display` set to **false**

$menu->filter( function($item){
	if( $item->meta('display') === false) {
		return false;
	}
	return true;
});

// Now we can render the menu as various HTML entities:



//OR

//$menu->asOl( attribute('class' => 'ausomw-ol') );

// OR

//$menu->asDiv( attribute('class' => 'ausomw-div') );
?>

<html>
<head>
	<title>Simple Usage</title>

	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
<?php 
echo $menu->asUl(['class' => 'ausomw-ul']);
?>
</body>
</html>
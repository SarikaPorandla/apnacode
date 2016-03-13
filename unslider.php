<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unslider Example</title>
<link href="unslider.css" rel="stylesheet" />
<style type="text/css">
.unslider-arrow { display:none; }
.unslider-nav { display:none; }
</style>
</head>

<body>
<div class="my-slider" style="height:75px">
	<ul>
		<li><a href="http://www.apnacode.com"><img src="banner1.png" alt="Banner 1"  border="0" /></a></li>
        <li><a href="http://www.apnacode.com"><img src="banner2.png" alt="Banner 2"  border="0" /></a></li>									
    </ul>
</div>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="unslider.js"></script>	
<script>
		jQuery(document).ready(function($) {
			$('.my-slider').unslider({ autoplay: true, delay: 5000, animation: 'fade' });
		});
</script>
</body>
</html>

<?php
	define('BASE_URL', "/icons/");

	function getPath() {
    	return dirname($_SERVER["REQUEST_URI"] . '/.');
	}

	function createFilePath() {
		$dir = getPath();
		$result = $current = "";
		$folders = explode('/', $dir);

		foreach($folders as $folder) {
			if($folder != "" && $folder[0] != "?") {
				$result .= '<a href="'.str_replace(' ', '+', $current.'/'.$folder).'">/' . str_replace('%20', ' ', $folder) . '</a>';
				$current .= '/' . $folder;
			}
		}

		return $result;
	}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title><?php echo getPath(); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <base target=’_blank‘/>
		<link rel="stylesheet" href="<?php print BASE_URL ?>/css/reset.css" />
		<link rel="stylesheet" href="<?php print BASE_URL ?>/css/autoindex.css" />
        <script type="text/javascript" src="<?php print BASE_URL ?>/jquery.min.js"></script>		
		<script type="text/javascript" src="<?php print BASE_URL ?>/scrolltopcontrol.min.js"></script>	
        <!--[if lte IE 6]>
		<style>
			div.irtopo img, div.irtopo a {
				position:absolute; 
				bottom:0px; 
				right:0;
				}
		</style>
        <![endif]-->
        <!--[if lte IE 7]>
            <style>
                div.irtopo img,div.irtopo a {
                    position:absolute; 
                    bottom:0px; 
                    right:0;
                    }
            </style>
        <![endif]-->
        <!--[if lte IE 8]>
            <style>
                div.irtopo img,div.irtopo a {
                    position:absolute; 
                    bottom:0; 
                    right:0; 
                    }
            </style>
        <![endif]-->
	</head>
	<body>
		<div id="page">
			<div class="pathline"><a href="/"><img src="<?php print BASE_URL ?>/icons/home.png" alt="" /></a> <?php print createFilePath();?> | <?php echo $_SERVER['SCRIPT_FILENAME'] ?></div>
			
			<div id="dirlist">
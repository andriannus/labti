<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link href="<?php echo base_url('asset/css/style.css') ?>" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('asset/images/fav-icon.png') ?>" />
		<script type="application/x-javascript">
		addEventListener("load", function() { 
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar(){ 
			window.scrollTo(0,1); 
		}
		</script>
		</script>
		<!-webfonts->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!-webfonts->
		<!- Global CSS for the page and tiles ->
		<link rel="stylesheet" href="<?php echo base_url('asset/css/main.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/font-awesome/css/font-awesome.min.css'); ?>">
		<!-Global CSS for the page and tiles ->
		<!-start-click-drop-down-menu->
		<script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>
		<!-start-dropdown->
		<script type="text/javascript">
			var $ = jQuery.noConflict();
				$(function() {
					$('#activator').click(function(){
						$('#box').animate({'top':'0px'},500);
					});
					$('#boxclose').click(function(){
					$('#box').animate({'top':'-700px'},500);
					});
				});
				$(document).ready(function(){
				//Hide (Collapse) the toggle containers on load
				$(".toggle_container").hide(); 
				//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
				$(".trigger").click(function(){
					$(this).toggleClass("active").next().slideToggle("slow");
						return false; //Prevent the browser jump to the link anchor
				});
									
			});
		</script>
		<!-//End-dropdown->
		<!-//End-click-drop-down-menu->
	</head>
	<body>
		<!-start-wrap->
			<!-start-header->
			<?php $this->load->view('core/navigation/default'); ?>
		<!-//End-header->
		<!-start-content->
			<?php $this->load->view($page); ?>
		<!-//End-content->
		<!-wookmark-scripts->

		<script src="<?php echo base_url('asset/js/jquery.imagesloaded.js'); ?>"></script>
		<script src="<?php echo base_url('asset/js/jquery.wookmark.js'); ?>"></script>
		<script type="text/javascript">
			(function ($){
				var $tiles = $('#tiles'),
				$handler = $('li', $tiles),
				$main = $('#main'),
				$window = $(window),
				$document = $(document),
				options = {
					autoResize: true, // This will auto-update the layout when the browser window is resized.
					container: $main, // Optional, used for some extra CSS styling
					offset: 20, // Optional, the distance between grid items
					itemWidth:280 // Optional, the width of a grid item
				};
				/**
				* Reinitializes the wookmark handler after all images have loaded
				*/
				function applyLayout() {
					$tiles.imagesLoaded(function() {
						// Destroy the old handler
						if ($handler.wookmarkInstance) {
							$handler.wookmarkInstance.clear();
						}

						// Create a new layout handler.
						$handler = $('li', $tiles);
						$handler.wookmark(options);
					});
				}
				/**
				* When scrolled all the way to the bottom, add more tiles
				*/
				function onScroll() {
					// Check if we're within 100 pixels of the bottom edge of the broser window.
					var winHeight = window.innerHeight ? window.innerHeight : $window.height(), // iphone fix
					closeToBottom = ($window.scrollTop() + winHeight > $document.height() - 100);

					if (closeToBottom) {
						// Get the first then items from the grid, clone them, and add them to the bottom of the grid
						var $items = $('li', $tiles),
						$firstTen = $items.slice(0, 10);
						$tiles.append($firstTen.clone());

						applyLayout();
					}
				};

				// Call the layout function for the first time
				applyLayout();

				// Capture scroll event.
				$window.bind('scroll.wookmark', onScroll);
			})(jQuery);
		</script>
		<!-//wookmark-scripts->
		<!-start-footer->
		<div class="footer">
			<p>Copyright &copy; <?php echo date('Y'); ?> - Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!-//End-footer->
		<!-//End-wrap->
	</body>
</html>
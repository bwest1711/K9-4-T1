<!doctype html>
<html lang="en-US">
<head>
    <?php include('includes/head.php')?>
    <link rel="stylesheet" type="text/css" media="all" href="css/slideshow.css">
</head>

<body>
<?php include('includes/header.php') ?>
<div id="main" class="container">
	<div class="main_image">
		<img src="images/slideshow/image_1.png" alt="Starting Image" />
		<div class="desc">
			<a href="#" class="collapse">Close Me!</a>
			<div class="block">
				<h2>Image One</h2>
				<small>Small</small>
				<p>Paragraph with<br/><a href="#" target="_blank">anchor</a> </p>
			</div>
		</div>
	</div>
	<div class="image_thumb">
		<ul id="scroll">
			<li>
				<a href="images/slideshow/image_1.png"><img class="thumbnail" src="images/slideshow/image_1.png" alt="image_1" /></a>
				<div class="block">
					<h2>Image One</h2>
					<small>Small</small>
					
					<p>Paragraph with<br/><a href="" target="_blank">anchor</a> </p>
				</div>
			</li>
			<li>
				<a href="images/slideshow/image_2.png"><img class="thumbnail" src="images/slideshow/image_2.png" alt="image_2" /></a>
				<div class="block">
					<h2>Image Two</h2>
					<small>Small</small>
					
					<p>Paragraph with<br/><a href="" target="_blank">anchor</a> </p>
				</div>
			</li>
            <li>
				<a href="images/slideshow/image_3.png"><img class="thumbnail" src="images/slideshow/image_3.png" alt="image_3" /></a>
				<div class="block">
					<h2>Image Three</h2>
					<small>Small</small>
					
					<p>Paragraph with<br/><a href="" target="_blank">anchor</a> </p>
				</div>
			</li>
            <li>
				<a href="images/slideshow/image_4.png"><img class="thumbnail" src="images/slideshow/image_4.png" alt="image_4" /></a>
				<div class="block">
					<h2>Image Four</h2>
					<small>Small</small>
					
					<p>Paragraph with<br/><a href="" target="_blank">anchor</a> </p>
				</div>
			</li>
		</ul>
	</div>
</div>

<script type="text/javascript">
    var intervalId;
    var slidetime = 4000; // milliseconds between automatic transitions
    
    $(document).ready(function() {	
        
        // Comment out this line to disable auto-play
	   intervalID = setInterval(cycleImage, slidetime);
        
        $(".main_image .desc").show(); // Show Banner
        $(".main_image .block").animate({ opacity: 0.85 }, 1 ); // Set Opacity
        
        // Click and Hover events for thumbnail list
        $(".image_thumb ul li:first").addClass('active'); 
        $(".image_thumb ul li").click(function(){ 
            // Set Variables
            var imgAlt = $(this).find('img').attr("alt"); //  Get Alt Tag of Image
            var imgTitle = $(this).find('a').attr("href"); // Get Main Image URL
            var imgDesc = $(this).find('.block').html(); 	//  Get HTML of block
            var imgDescHeight = $(".main_image").find('.block').height();	// Calculate height of block	

            if ($(this).is(".active")) {  // If it's already active, then...
                return false; // Don't click through
            } else {
                // Animate the Teaser				
                $(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
                    $(".main_image .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
                    $(".main_image img").attr({ src: imgTitle , alt: imgAlt});
                });
            }

            $(".image_thumb ul li").removeClass('active'); // Remove class of 'active' on all lists
            $(this).addClass('active');  // add class of 'active' on this list only
            return false;

        }) .hover(function(){
            $(this).addClass('hover');
            }, function() {
            $(this).removeClass('hover');
        });

        // Toggle Teaser
        $("a.collapse").click(function(){
            $(".main_image .block").slideToggle();
            $("a.collapse").toggleClass("show");
        });

        // Function to autoplay cycling of images
        // Source: http://stackoverflow.com/a/9259171/477958
        function cycleImage(){
            var onLastLi = $(".image_thumb ul li:last").hasClass("active");
            var currentImage = $(".image_thumb ul li.active");

            // Check to see if this is the last image in the list
            if(onLastLi){
                var nextImage = $(".image_thumb ul li:first");
            } else {
                var nextImage = $(".image_thumb ul li.active").next();
            }

            $(currentImage).removeClass("active");
            $(nextImage).addClass("active");

            // Duplicate code for animation
            var imgAlt = $(nextImage).find('img').attr("alt");
            var imgTitle = $(nextImage).find('a').attr("href");
            var imgDesc = $(nextImage).find('.block').html();
            var imgDescHeight = $(".main_image").find('.block').height();

            $(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
                $(".main_image .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
                $(".main_image img").attr({ src: imgTitle , alt: imgAlt});
            });
        };

    });// Close Function
</script>
</body>
</html>
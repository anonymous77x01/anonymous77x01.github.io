<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Services</title>

<!-- Bootstrap Core and page CSS -->
	
    <link href="../css/bootstrap.min.css" rel="stylesheet" type='text/css'>
	<link href="../fonts/import-fonts.css" rel='stylesheet' type='text/css'>
	<link href="../css/page.design.css" rel="stylesheet" type='text/css'>
	<!-- jQuery -->
    <script src="../js/jquery.js"></script>
	<script src="../js/jquery.min.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Unknown Quantity</a>
            </li>
            <li>
                <a href="../index.html" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="../index.html#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="../index.html#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
			<li>
                <a href="#" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="../index.html#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

	<!-- Services -->
	

	<section class="content-large text-center container-fluid medium-gray">
	<h1>Portfolio</h1>
	<p class="text-left">here goes your projects and testimonials at the bottom
	   <button type="button" class="btn btn-default">Who owns this?</button>
	</section>
	
	
	
	
	
	
	
	
	
	
	
	
    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>

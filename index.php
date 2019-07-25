
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
 
       

        
<link href="new/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="new/themify/themify.css" rel="stylesheet" type="text/css">
        <link href="new/css/style.css" rel="stylesheet" type="text/css">
        <link href="new/css/global.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="mainstyle.css" rel="stylesheet" type="text/css">
        
    </head>

    
    <body>
        <div class="rowbar">
            <ul>
                <li><strong>
                    <span class="info">Call-Now: +92632503320</span>
                    <span class="info" style="margin-left:0;">Email-Us: hmcompany@gmail.com</span>
                </li>
            </ul>
        </div>
        <header style="background:#87cefa;">

            <nav class="s-header-v2__navbar">

               
                <div class="container g-display-table--lg">
                     <div><a href="">
                </a>
                    <img id="im" class="logo_styling" src="logo.png">
                </div>
                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">

                                    <li class="s-header-v2__nav-item">
                                      <a href="index.php" class="s-header-v2__nav-link">Home</a>
                                    </li>
                                    <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                        <a href="" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pharmacy <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                        	
                                        

                                            <li><a href="syrup.html" class="s-header-v2__dropdown-menu-link">Syrup</a></li>
                                            <li><a href="tablet.html" class="s-header-v2__dropdown-menu-link">Tablet</a></li>
                                            <li><a href="injection.html" class="s-header-v2__dropdown-menu-link">Injection</a></li>
                                            <li><a href="capsule.html" class="s-header-v2__dropdown-menu-link">Capsule</a></li>
                                            <li><a href="drops.html" class="s-header-v2__dropdown-menu-link">Drops</a></li>
                                            <li><a href="cream.html" class="s-header-v2__dropdown-menu-link">Cream & Ointment</a></li>
                                            <li><a href="inheler.html" class="s-header-v2__dropdown-menu-link">Inheler</a></li>
                                            <li><a href="lotion.html" class="s-header-v2__dropdown-menu-link">Lotion</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                        <a href="javascript:void(0);" class="dropdown-toggle s-header-v2__nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                            <li><a href="logout.php" class="s-header-v2__dropdown-menu-link">Logout</a></li>
                                        </ul>
                                    </li>

                                    <li class="s-header-v2__nav-item">
                                        <a href="cart.php" class="s-header-v2__nav-link">Search</a>
                                    </li>
                                    <li class="s-header-v2__nav-item">
                                        <a href="order.php" class="s-header-v2__nav-link">Order</a>
                                    </li>
                                    <li class="s-header-v2__nav-item">
                                        <a href="about.html" class="s-header-v2__nav-link">About Us</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>



  

   <div class="slideshow-container">


<div class="mySlides fade">

  <img src="pics/5.jpeg" style="width:100%">

</div>

<div class="mySlides fade">

  <img src="pics/2.jpeg" style="width:100%">

</div>

<div class="mySlides fade">

  <img src="pics/1.jpeg" style="width:100%">

</div>
<div class="mySlides fade">

  <img src="pics/1.jpeg" style="width:100%">

</div><div class="mySlides fade">

  <img src="pics/4.jpeg" style="width:100%">

</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); 
}
</script>



    <marquee id="marquee"> <strong>We provide Free Home Delivery in over all Chishtian of order above than PRP 2,000</strong> </marquee>



</body>

</html>

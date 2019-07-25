
<?php 
	session_start();
	$email=$_SESSION['email'];
?>
<!DOCTYPE html>

<html>
<head>
	<title>Order</title>
<link href="new/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="new/themify/themify.css" rel="stylesheet" type="text/css">
        <link href="new/css/style.css" rel="stylesheet" type="text/css">
        <link href="new/css/global.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.3.2/email.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="mainstyle.css" rel="stylesheet" type="text/css">
<style>

#custom-button {
  padding: 10px;
  color: white;
  background-color: #009578;
  border: 1px solid #000;
  border-radius: 5px;
  cursor: pointer;
}

#custom-button:hover {
  background-color: #00b28f;
}

#custom-text {
  margin-left: 10px;
  font-family: sans-serif;
  color: #aaa;
}

</style>

</head>
<body class="picture">
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
                <input type="hidden" id="email" value=<?php echo $_SESSION['email']; ?> /> 
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
                                        <a href="about.html" class="s-header-v2__nav-link">About Us</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>        
</div>

<div>
  <center>
    <h3>Upload Your Prescription </h3>
    <br>
    <br>
<input type="file" id="real-file" hidden="hidden" />
<button type="button" id="custom-button">CHOOSE A FILE</button>
<span id="custom-text">No file chosen, yet.</span>
<br><br>
<input type="text" id="address" placeholder="Address" style="width:700px;" />
<br>
<br>
     <button style="margin-bottom: 5mm;" onclick="placeOrder()">Click to place order on Email</button>
  </center>



</div>



     
</body>

<script type="text/javascript">


(function(){
      emailjs.init("user_cpeIcuSa4zqsKk1t76AGW");

 })();

  
var imageEncoded = null;
document.querySelector('#real-file').addEventListener('change',function(event){

		var reader = new FileReader();
		reader.readAsDataURL(this.files[0]);

		reader.onload = function(){
			imageEncoded = reader.result;
		}


});




function placeOrder(){

alert("Your order has been placed")

var address=  document.querySelector('#address').value

var templateParams  = {
	to_name:'Habib Medicine Company',
	from_name:document.querySelector('#email').value,
	body:`Hi, i want to place the order for the following address <b>${address}</b><br/>`,
	content:imageEncoded
}


emailjs.send('gmail', 'template_GgKzNaUN', templateParams)
    .then(function(response) {
       console.log('SUCCESS!', response.status, response.text,imageEncoded);
    }, function(error) {
       console.log('FAILED...', error);
    });



    
    }
const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});



</script>



</html>







<!DOCTYPE html>

<html>
<head>
	<title>cart</title>
<link href="new/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="new/themify/themify.css" rel="stylesheet" type="text/css">
        <link href="new/css/style.css" rel="stylesheet" type="text/css">
        <link href="new/css/global.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="mainstyle.css" rel="stylesheet" type="text/css">
<style>

		
  .picture{
    background-image: url(cartpic.jpg);
    background-size: cover;
  }
    .h1style{
      font-family:times ;
        padding-left: 10px;
        padding-top: 10px;
    }



* {
  box-sizing: border-box;
}


.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}



.col-25 {
  padding: 0 16px;
}

.box{
	 border: 10px solid #87cefa;
	 margin-top: 30px;
     padding: 5px;
}




.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}





a {
  color: #2196F3;
}



span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
    margin-top: 30px;
  }
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






        
       <center>
        <h1 class="h1style"><b>Search Medicines</b></h1>
        <form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
     
</form>



      </center>
        
</div>
     
</body>

</html>
<?php
 
$con = new PDO("mysql:host=localhost;dbname=CodeFlix",'root','');
 
if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");
 
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();
 
    if($row = $sth->fetch())
    {
        ?>
        <br><br><br>
      <center>
        <table style="border: solid 5px red; width:500px;height: 50px;" border="5">
            <tr>
                <th>Name</th>
                <th>Unit Price</th>
                <th>In Stock</th>
            </tr>
            <tr>
                <td><?php echo $row->Name; ?></td>
                <td><?php echo $row->UnitPrice;?></td>
                <td><?php echo $row->InStock;?></td>
            </tr>
            
        </table>
</center>
<?php 
    }
         
         
        else{
            echo "Name Does not exist";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<style>

body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f4f4f4;
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }

    .card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease-in-out;
    }

    .card:hover {
      transform: scale(1.05);
    }
	.card-img {
      width: 10px; /* Set the width of the image */
      height: auto; /* Maintain aspect ratio */
    }
    .card-header {
      padding: 20px;
      background-color: #3498db;
      color: #fff;
      text-align: center;
    }

    .card-content {
      padding: 20px;
    }

    .card-button {
      display: block;
      width: 100%;
      padding: 10px;
      text-align: center;
      background-color: #2ecc71;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .card-button:hover {
      background-color: #27ae60;
    }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoplist </title>
   	<!-- Bootstrap Files -->
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/ca0905f6a5.js"></script>
	<!-- TechSavvy Font -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet"> -->
	<!-- Headings Blog -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet"> -->
	<!-- Paragraph Blog -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet"> -->
	<link href="css/jquery-ui.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

</head>
<body>
<div class="blog">
		<!-- Navbar -->

		<nav class="navbar navbar-expand-md navbar-light bg-dark">
		  <a class="navbar-brand" href="#"><i class="fas fa-tree"></i> Mobile shop website</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Home</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="about.php">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="contact.php">Contact</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="shoplist.php">Shoplist</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" id="autocomplete" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
		    </form>
		  </div>
		</nav>
        <div>
			<div>
				<div class="row">
					<div class="col-md-4 title">
						<h1 class="text-blog"> Mobile shop website</h1>
						 <p class="lead-para">welcome </p> 
					</div>
				</div>
			</div>
            <div class="panel-body">
			<!-- <center><i class="fas fa-users"></i></center> -->
			</div>
		<body>
		<div class="card-container">
    <div class="card">
		
			<div class="card-content">
      
				<p><img src="images/user.png" alt="Girl in a jacket" style="width:320px;height:300px;">
        
</p>
			</div>
      <p >
          <h4 style=' 
                     padding-bottom: 10px;
                      padding-left: 10px;' >
                      Apple iPhone 15 Pro Max</h4>
          <h6 style='padding-left: 10px'>     IQD 1,939,994</h6>
          <h6 style='padding-left: 10px'>      ROM : 1 TB</h6>
          <h6 style='padding-left: 10px'>       Color:  Natural</h6>
          <h6 style='padding-left: 10px ; padding-bottom: 10px;'   >       Phone Number : 077211001100 </h6>
               
              </p>
    </div>

    <div class="card">

      <div class="card-content">
        <p><img src="images/pic2.jpg" alt="Girl in a jacket" style="width:320px;height:300px;">	</p>
      </div>
        <p >
          <h4 style=' 
                     padding-bottom: 10px;
                      padding-left: 10px;' >
                      Apple iPhone 15 Pro Max</h4>
          <h6 style='padding-left: 10px'>     IQD 1,939,994</h6>
          <h6 style='padding-left: 10px'>      ROM : 1 TB</h6>
          <h6 style='padding-left: 10px'>       Color:  Natural</h6>
          <h6 style='padding-left: 10px ; padding-bottom: 10px;'   >       Phone Number : 077211001100 </h6>
               
              </p>
    </div>

    <div class="card">
   
      <div class="card-content">
        <p><img src="images/user.png" alt="Girl in a jacket" style="width:320px;height:300px;">	</p>
      </div>
      <p >
          <h4 style=' 
                     padding-bottom: 10px;
                      padding-left: 10px;' >
                      Apple iPhone 15 Pro Max</h4>
          <h6 style='padding-left: 10px'>     IQD 1,939,994</h6>
          <h6 style='padding-left: 10px'>      ROM : 1 TB</h6>
          <h6 style='padding-left: 10px'>       Color:  Natural</h6>
          <h6 style='padding-left: 10px ; padding-bottom: 10px;'   >       Phone Number : 077211001100 </h6>
               
              </p>
    </div>

    <div class="card">
   
      <div class="card-content">
        <p>
        <img src="images/user.png" alt="Girl in a jacket" style="width:320px;height:300px;">	
		</p>
      </div>
      <p >
          <h4 style=' 
                     padding-bottom: 10px;
                      padding-left: 10px;' >
                      Apple iPhone 15 Pro Max</h4>
          <h6 style='padding-left: 10px'>     IQD 1,939,994</h6>
          <h6 style='padding-left: 10px'>      ROM : 1 TB</h6>
          <h6 style='padding-left: 10px'>       Color:  Natural</h6>
          <h6 style='padding-left: 10px ; padding-bottom: 10px;'   >       Phone Number : 077211001100 </h6>
               
              </p>
    </div>
  </div>
 
</body>
            <footer class="container-fluid">
			<p>Developed by Mohamad hafeed </p>
			<p> <a href=""><i class="fab fa-facebook-square"></i></a> | <a href=""><i class="fab fa-instagram"></i></a> | <a href=""><i class="fab fa-linkedin"></i></a> </p>
		</footer>
</body>
</html>
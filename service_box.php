<?php 

	require_once "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="service-media-box">
                <div class="service-icon"><img src="images/Apartment.png"></div>
                <h3 class="title">Web Design</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="service-media-box">
                <div class="service-icon"><img src="images/Apartment.png"></div>
                <h3 class="title">Web Development</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="service-media-box">
                <div class="service-icon"><img src="images/Apartment.png"></div>
                <h3 class="title">Web Development</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
                </p>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
	.service-media-box{
    padding: 25px 30px;
    text-align: center;
   	border: 2px solid #f6be28;
    position: relative;
}
.service-media-box:before{
    content: "";
    border-top: 0 solid #f6be28;
    border-right: 0 solid transparent;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 1;
    transition: all 0.3s ease 0s;
}
.service-media-box:hover:before{
    border-top-width: 78px;
    border-right-width: 78px;
}
.service-media-box:after{
    content: "";
    border-bottom: 0 solid #f6be28;
    border-left: 0 solid transparent;
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: 1;
    transition: all 0.3s ease 0s;
}
.service-media-box:hover:after{
    border-bottom-width: 78px;
    border-left-width: 78px;
}
.service-media-box .service-icon{
    display: inline-block;
    width: 100px;
    height: 100px;
    line-height: 100px;
    border-radius: 20px;
    border: 2px solid #f6be28;
    background: #0a2d43;
    font-size: 40px;
    color: #f6be28;
    margin-bottom: 20px;
    position: relative;
}
.service-media-box .title{
    font-size: 20px;
    font-weight: 700;
    color: #f6be28;
    letter-spacing: 1px;
    margin: 0 0 12px 0;
    text-transform: uppercase;
    position: relative;
    transition: all 0.3s ease 0s;
}
.service-media-box:hover .title{ letter-spacing: 3px; }
.service-media-box .description{
    font-size: 15px;
    color: #000;
    letter-spacing: 1px;
    line-height: 27px;
    margin: 0;
}
@media only screen and (max-width:990px){
    .service-media-box{ margin-bottom: 30px; }
}
</style>


<?php
		require_once "footer.php";

?>
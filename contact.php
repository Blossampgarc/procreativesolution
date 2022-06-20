<?php include 'include/head.php';?>

<body class="inner-pages contactpg hdar-clr">

<?php include 'include/header.php';?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS29C5K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="overlaybox">
<section class="oddinner-banner d-flex" style="background-image: url(assets/images/banners/contact-banner.png);">
  <div class="container align-self-center">
    <div class="row">
      <div class="col-lg-12">
        <div class="inner-banner-content">
          <h3>Get in touch</h3>
          <p>Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="twoboxes">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="contactboxeswrap">
          <div class="contactbox left">
            <figure>
              <span class="icon-phone2"></span>
              <figcaption>Get in Touch with Sales</figcaption>
            </figure>
            <p>We are more than willing to let you know of our services through our Sales team. Call at your convenience.</p>
            <a href="tel:+11-2345-678-910" class="btn-secondary">Call Us: +11-2345-678-910 </a>
          </div>
          <div class="contactbox">
            <figure>
              <span class="icon-chat"></span>
              <figcaption>Customer Support Service</figcaption>
            </figure>
            <p>Get all the help you need, for as long as you want, our customer support executives will take care of it.</p>
            <a href="javascript:;" onclick="setButtonURL();" class="btn-secondary">Talk with us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<section class="maparea">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Connect with one of our global offices</h2>
        <div class="mapwrap">

          <div class="mappart">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.294219054491!2d-0.47706248440772114!3d51.74594330105482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876415fe4cbbbd9%3A0xd1845186fce97a18!2sKD+tower%2C+3+Cotterells%2C+Hemel+Hempstead+HP1+1AZ%2C+UK!5e0!3m2!1sen!2s!4v1556806823030!5m2!1sen!2s" frameborder="0" style="border:0" allowfullscreen></iframe>
            
          </div>
          <div class="infopart">
            <div class="chunk">
              <h3>Mailing Address:</h3>
              <p>Plaza 8 Kd Tower, Cotterells, Hemel Hempstead, Hertfordshire, HP1 1FW</p>
            </div>
            <div class="chunk">
              <h3>Phone</h3>
              <a href="tel:+11-2345-678-910">+11-2345-678-910</a>
              
            </div>
            <div class="chunk">
              <h3>Email</h3>
              <a href="mailto:support@procreativesolution.co.uk">support@procreativesolution.co.uk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>










<?php include 'include/footer.php';?>






<script src="assets/js/mlib.js"></script> 



<script src="assets/js/functions.js"></script> 





<script>
var options = {
debug: false,
}







if ($.cookie('ysExit') == 1)
     {

     }
else{
 ysExit(options);
}


// setTimeout(function(){
//     // console.log("asdasdsa");   
//          $('.ys-layer').addClass("visible");
//          $('.ys-container').addClass("visible");
//          $('.ys-container').addClass("finished");
//          // $('.ys-popup-content').fadeIn();


// },1000);


// $(document).on("click",".ys-container",function(){ $(this).removeClass("visible"); $(".ys-layer").removeClass("visible"); });

$(document).on("click",".ys-container",function(){
  // var element=$(".ys-box");
 if($(event.target).closest(".ys-popup-content").length != 1){
    $('.ys-layer').removeClass("visible");
         $('.ys-container').removeClass("visible");
         $('.ys-container').removeClass("finished");
    // alert('element is a child of the custom controller');
 }


  
});



setTimeout(function(){
    // console.log("asdasdsa");   
         $('.ys-layer').addClass("visible");
         $('.ys-container').addClass("visible");
         $('.ys-container').addClass("finished");
         // $('.ys-popup-content').fadeIn();


},60000);


// $(document).on("click",".ys-container",function(){ 
$(document).on("click",".ys-popup-close.ys-exit",function(){ 

   $(".ys-container").removeClass("visible"); $(".ys-layer").removeClass("visible");

   });
   
   

function isNumberKey(t){var e=t.which?t.which:event.keyCode;return!(e>31&&(e<48||e>57))}
</script>

</body>

</html>
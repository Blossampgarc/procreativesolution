<?php include 'include/head.php';?>

<body class="hompg hdar-clr">

<?php include 'include/header.php';?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS29C5K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<div class="works-wrap">
	
<section class="subscribe-fold sec-padding-60">

<div class="container">
   <div class="col-md-12">
        <h2 class="myheading">Classic Video Package</h2>

        <p class="mytext">We guarantee that you’ll get a great design no matter what your budget is.</p>
      </div>


  <div class="row">
  	<div class="col-lg-4 col-md-4 col-sm-4">
  		<div class="subs-pac bronze ">
          <h3>Classic Video <br/>Package</h3>
          <h6><span class="old">£819.98</span> £409.99           <!-- <b>USD</b> --> <span><b class="monthss"></b>Suitable for potential super-startups and brand revamps for companies.</span></h6>
          
        <a href="orderf484.php?pack=10" class="ordrrrr">Place Your Order</a>
        <div class="actions row">
                    <div class="col-md-5 col-xs-6">
                          <a href="javascript:;" onclick="setButtonURL();" target="_self" class="chatbtn"><i class="fa fa-wechat"></i> Live Chat</a>
                    </div>
                    <div class="col-md-7 col-xs-6">
                        <a href="tel:+11-2345-678-910" class="numberbtn"><i class="fa fa-phone-square"></i> +11-2345-678-910</a>
                    </div>
                    
                  </div>
        </div>
  	</div>
  	<div class="col-lg-8 col-md-8 col-sm-8">
  		<div class="sub-list ">
          <div class="table-packages bronze">
            <div class="head">
              <h5>Package Includes</h5>
              <!-- <h6><b>$</b><span>1,600.00</span> only</h6> -->
            </div>
            <div class="body">
              <ul class="subscription-list">
                  <li><h6>60 Second Video</h6>
                  <span class="tick"></span></li>
                  <li><h6>Professional Script</h6>
                  <span class="tick"></span></li>
                  <li><h6>Sample Theme</h6>
                  <span class="tick"></span></li>
                  <li><h6>Storyboard</h6>
                  <span class="tick"></span></li>
                  <li><h6>Animation</h6>
                  <span class="tick"></span></li>
                  <li><h6>Voice - Over &amp; Sound Effects</h6>
                  <span class="tick"></span></li>
              </ul>
            </div>
          </div>
        </div>
  	</div>
  </div>	
</div>
</section>
</div>


<section class="bottomcta"> 
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="ctalist">
          <li>
            <h3>Email</h3>
            <div class="wrap">
              <div class="iconpart">
                <span class="icon-envelope-o"></span>
              </div>
              <div class="textpart">
                
                <a href="mailto:support@webprohub.co.uk">support@webprohub.co.uk</a>
              </div>
            </div>
          </li>
          <li>
            <h3>Address</h3>
            <div class="wrap">
              <div class="iconpart">
                <span class="icon-location"></span>
              </div>
              <div class="textpart">
                <p>Plaza 8 Kd Tower, Cotterells, Hemel Hempstead, Hertfordshire, HP1 1FW</p>
              </div>
            </div>
          </li>
          <li>
            <h3>Phone</h3>
            <div class="wrap">
              <div class="iconpart">
                <span class="icon-phone2"></span>
              </div>
              <div class="textpart">
                <a href="tel:+11-2345-678-910" class="callbx">Call Us +11-2345-678-910</a>
              </div>
            </div>
          </li>
        </ul>
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
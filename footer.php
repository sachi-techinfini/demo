<?php
/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Ecome

 * @since 1.0

 * @version 1.0

 */

?>
<style type="text/css">
.wishlist_table del {
  display: block;
}
.wishlist_table .woocs_price_code del span.woocommerce-Price-amount.amount {
  color: #444 !important;
}
.rtl .product-item.list .add-to-cart .add_to_cart_button {
  margin-right: 40px !important;
}
.product-item .onnew {
  /*left: 215px !important;*/
}
.rtl .product-item.style-1 .onnew {
  right: 215px;
}
.rtl #order_review .shop_table thead tr th.product-total:nth-child(2) {
  text-align: right;
}
.rtl.woocommerce-checkout.woocommerce-page.woocommerce-order-received .shop_table tr th,
.rtl.woocommerce-account.woocommerce-page.woocommerce-view-order .shop_table tr th {
  text-align: right;
}
.contain-left .flash {
  z-index: 7 !important;
}
.product-item .onnew {
  top: -40px;
}
.yith-wcwl-add-button a {
  width: 36px !important;
}
.product-inner .group-button .add-to-cart > a.add_to_cart_button {
  padding-left: 20px!important;
}
.wrps_related_products .product-item.style-1 .product-thumb img {
  height: 280px !important;
}
.wrps_related_products.owl-carousel .owl-item .product-info {
  height: 110px;
  width: 100%;
}
.product-item.style-2 .onsale, .product-item.list .onsale, 
.product-item .onnew {
  height: auto !important;
  border-radius: 5px !important;
  line-height: inherit !important;
}
.contain-left .onsale,
.contain-left .onnew {
  height: auto !important;
  border-radius: 5px !important;
  line-height: inherit !important;
}
.wpml-ls-legacy-dropdown + div {
  position: absolute;
  top: 9px;
  left: 74%;
}
.rtl .wpml-ls-legacy-dropdown + div {
  position: absolute;
  top: 9px;
  left: 5%;
}

@media screen and (orientation: landscape) and (min-width: 1000px) and (max-width: 1400px) {
    .rtl .product-item.list .onsale {
    right: 345px !important;
    top: -255px !important;
  }
}

@media screen and (orientation: landscape) and (min-width: 1000px) and (max-width: 1100px) {
  .post-type-archive-product .product-inner .product-thumb .woocommerce-product-gallery__image img {
      min-height: 295px;
  }
  .product-item .product-info{
    height: 140px !important;
  }
  .rtl .ecome-products ul.products .product-item.list .group-button {
      float: right;
      top: 60px;
  }
  .pagination .page-numbers {
      min-width: 42px;
  }
}

@media (min-width: 1200px) {
  .home .product-item.style-1 .product-thumb img {
    height: 187px;
  }
  .rtl .product-item.style-1 .onnew {
    right: 145px !important;
  }
  .product-item .onnew {
    top: 0px;
    left: 90px !important;
  }
  .product-item.list .onnew {
    top: -40px;
  }
  .rtl .product-item.style-2 .onnew {
    top: 5px;
    right: 75px !important;
  }
}
@media (min-width: 1190px) {
  .home .product-item.style-1 .product-thumb img {
    height: 187px;
  }
  .rtl .product-item.style-1 .onnew {
    right: 185px !important;
  }
  .rtl.woocommerce-shop .product-item.style-1 .onnew {
    right: 85px !important;
    top: 0;
  }
}
@media screen and (max-width: 1200px) and (min-width: 1000px) {
  .home .product-item {
    padding-bottom: 30px !important;
  }
  .home .product-item.style-1 .product-thumb img {
    height: 270px;
  }
  .onsale {
    top: 50px;
  }
  html[lang="ar"] .rtl .product-item .yith-wcwl-add-button a {
    left: 0px !important;
  }
  .rtl .product-item .yith-wcwl-add-button a {
    left: 0px !important;
  }
}
@media screen and (max-width: 1100px) and (min-width: 700px) {
  .home .product-item.style-1 .product-thumb img {
    height: 270px;
  }
  .rtl .product-item.style-1 .onsale {
    /*top: 60px;*/
    /*right: 185px !important;*/
  }
  .onsale {
    top: 50px;
  }
  /*.rtl .product-item .yith-wcwl-add-button a {
        left: 0px !important;
    }*/
}
@media (max-width: 991px) {
  .wpml-ls-legacy-dropdown + div {
    position: absolute;
    top: 9px;
    left: 74%;
  }
  .rtl .wpml-ls-legacy-dropdown + div {
    position: absolute;
    top: 9px;
    left: 5%;
  }
}
@media (max-width: 850px) {
  .managment_content .nav-link {
    display: block;
    padding: 0.5rem 0.4rem;
  }
  .pagination .page-numbers {
    min-width: 42px !important;
  }
  .rtl .product-item .onsale {
    right: 185px !important;
  }
}
@media (max-width: 767px) {
  .header-control-inner {
    float: initial !important;
  }
  form.woocommerce-currency-switcher-form {
    width: 72px !important;
  }
  .wishlist_table span.woocs_price_code,
  .wishlist_table span.woocs_price_code ins,
  .wishlist_table span.woocs_price_code del {
    display: block !important;
    text-align: center;
    margin-right: 0px;
  }
  #yith-wcwl-form ul.shop_table.cart.wishlist_table.wishlist_view.responsive.mobile .product-name,
  ul.shop_table.cart.wishlist_table.wishlist_view.responsive.mobile .product-name a,
  .field_value {
    display: block !important;
    width: auto !important;
    word-wrap: break-word !important;
    white-space: normal !important;
    overflow: visible !important;
    /*padding-right: 0 !important;*/
  }
  #yith-wcwl-form .wishlist_table.mobile li .additional-info-wrapper .product-remove {
    text-align: right;
    padding-right: 20px !important;
  }
  .wishlist_table table.item-details-table {
    position: relative !important;
    left: -20px !important;
  }
  .rtl .wishlist_table table.item-details-table {
    position: relative !important;
    left: 20px !important;
  }
  .rtl ul.products li.product-item .product-inner .group-button {
    left: auto !important;
    right: 80px !important;
  }
  .rtl .product-item.list .add-to-cart .add_to_cart_button {
    margin-right: 20px !important;
  }
  .rtl ul.products li.product-item .product-inner .group-button .add-to-cart a {
    padding: 0px 20px !important;
  }
}
@media screen and (orientation: landscape) and (min-width: 900px) and (max-width: 1100px) {
  .rtl .product-item.style-1 .onsale {
    right: 165px !important;
  }
}
@media screen and (orientation: landscape) and (min-width: 800px) and (max-width: 991px) {
  .rtl header .header-middle .header-middle-inner .header-control .meta-woo {
    position: absolute;
    left: 90px;
    margin-top: 70px;
  }
  .product-item.list .onsale {
    right: 345px !important;
    top: 40px !important;
  }
  .product-category-filter input[type="text"] {
    width: 150px !important;
  }
  .home .product-item.style-1 .product-thumb img {
    height: 270px;
  }
  .product-item .product-info{
    height: 140px !important;
  }
  .rtl .ecome-products ul.products .product-item.list .group-button {
      float: right;
      top: 60px;
  }
  .pagination .page-numbers {
      min-width: 38px !important;
  }
  .rtl h3.product-name.product_title a {
      min-height: 27px !important;
      padding-right: 10px !important;
  }
}
@media screen and (orientation: landscape) and (min-width: 850px) and (max-width: 900px) {
  .rtl header .header-middle .header-middle-inner .header-control .meta-woo {
    margin-top: -15px;
  }
  .rtl .product-item.style-1 .onsale {
    top: 60px;
    right: 185px !important;
  }
  .rtl .product-item.style-1 .onnew {
    right: 145px;
  }
  .rtl .product-item.style-1 .onsale {
    top: 60px;
    right: 145px !important;
  }
  .rtl .list h3.product-name.product_title a {
    min-height: 37px !important;
    padding-right: 20px !important;
  }
  .rtl .ecome-products ul.products .product-item.list .group-button {
    top: 60px;
  }
  .rtl .list .product-info {
    height: 150px;
  }
}
@media screen and (orientation: portrait) and (min-width: 650px) and (max-width: 850px) {
  header .header-middle .header-middle-inner .header-control .meta-woo {
    top: 60px;
  }
  .block-nav-category .block-title .before {
    margin-right: 0;
    margin-left: 9px;
  }
  .rtl .header-middle-inner .header-control {
    text-align: left !important;
  }
  .product-item span.onnew {
    top: 0 !important;
    left: 145px !important;
  }
  .rtl .product-item .onsale {
      right: 135px !important;
  }
  .rtl .product-item.list .onsale {
      right: 345px !important;
      top: -250px !important;
  }
  .rtl h3.product-name.product_title {
      padding-right: 10px;
  }
}
@media screen and (orientation: landscape) and (min-width: 650px) and (max-width: 850px) {
  .header-control-inner {
    position: absolute;
    right: 0;
  }
  .rtl .header-control-inner {
    position: initial;
  }
  .rtl header .header-middle .header-middle-inner .header-control .meta-woo {
    position: absolute;
    left: 90px;
    /*margin-top: 96px;*/
  }
  .rtl .ecome-products ul.products .product-item.list .group-button .yith-wcwl-add-to-wishlist {
    position: absolute;
    left: 0px;
  }
  .ecome-products ul.products .product-item.list .group-button .yith-wcwl-add-to-wishlist {
    position: absolute;
    left: 230px;
  }
  .product-item.list .onsale {
    right: 205px;
  }
  .home .product-item {
    padding-bottom: 30px !important;
  }
  .home .product-item.style-1 .product-thumb img {
    height: 270px;
  }
  .rtl .product-item.style-1 .onsale {
    top: 60px;
    right: 145px !important;
  }
  .rtl .product-item.list .onsale {
    top: -80px !important;
     right: 330px !important;
  }
  .rtl .product-item.list .onnew {
    top: -40px !important;
    right: 330px !important;
  }
  .rtl .product-item .onnew {
    top: 60px;
    right: 240px;
  }
}
@media screen and (orientation: landscape) and (min-width: 700px) and (max-width: 750px) {
  .ecome-products ul.products .product-item.list .group-button .yith-wcwl-add-to-wishlist {
    position: absolute;
    left: 290px;
  }
  .rtl .product-item.style-1 .onnew, .rtl .product-item.style-2 .onnew {
      top: 40px;
      right: 215px !important;
  }
  .rtl .product-item.style-1 .onsale, .rtl .product-item.style-2 .onsale {
    top: 80px !important;
      right: 215px !important;
  }
  ul.products li.product-item.list .product-inner .group-button {
    left: auto !important;
      right: 70px!important;
  }
   .product-item.list .onsale {    
    left: 90px;
    top: 70px;
  }
  .product-item.style-1 .onnew, .product-item.style-2 .onnew  {
      top: 40px;
      right: 215px !important;
  }
  .product-item.style-1 .onsale, .product-item.style-2 .onsale  {
      top: 80px !important;
      right: 215px !important;
  }
  .product-item.list .onnew {
      top: 30px;
      left: 90px;
  }
  .product-item.style-1 .onnew, .product-item.style-2 .onnew {
      left: 45px;
  }
}
@media screen and (orientation: landscape) and (min-width: 600px) and (max-width: 700px) {
  .product-item.list .onsale {    
    left: 90px;
    top: 70px;
  }
  .product-item.style-1 .onnew, .product-item.style-2 .onnew  {
      top: 40px;
      right: 215px !important;
  }
  .product-item.style-1 .onsale, .product-item.style-2 .onsale  {
    top: 80px !important;
      right: 215px !important;
  }
  .product-item.list .onnew {
      top: 30px;
      left: 90px;
  }
  .ecome-products ul.products .product-item.list .group-button .yith-wcwl-add-to-wishlist {
    position: absolute;
    left: 250px;
  }
  .product-category-filter input[type="text"] {
    width: 150px !important;
  }
  ul.products li.product-item.list .product-inner .group-button {
      left: auto !important; 
      right: 70px!important;
  }
}
@media screen and (orientation: landscape) and (min-width: 500px) and (max-width: 600px) {
  
  .product-item.style-2 .onsale {
    top: 45px;
    right: -3px;
  }
  .rtl .product-item .onsale {
    right: 15px !important;
  }
  .product-item.list .onsale {
    top: 50px !important;
    left: 90px;
  }
  .product-item.list .onsale {
    top: 50px !important;
    left: 90px;
  }
  .product-item .onnew {
    left: 180px !important;
    top: 10px;
  }
  .ecome-products ul.products .product-item.list .group-button .yith-wcwl-add-to-wishlist {
    left: 240px !important;
  }
  .rtl .ecome-products ul.products .product-item.list .group-button .yith-wcwl-add-to-wishlist {
    left: 0px !important;
  }
  .rtl .onsale {
    right: 20px !important;
  }
  .rtl .product-item .onnew {
    right: 15px !important;
  }
  .product-item.list .onnew {
    /*left: 485px !important;*/
        left: 90px !important;
  }
  ul.products li.product-item.list .product-inner .group-button {
    left: auto !important;
    right: 70px!important;
  }
  .rtl ul.products li.product-item .product-inner .group-button {
    right: 10px!important;
  }
  .rtl .list .onsale {
    right: 240px !important;
    top: -38px !important;
  }
  .rtl .product-item.list .onnew {
      right: 241px !important;
      top: -80px;
  }
}
@media (min-width: 700px) {
  .woocommerce-MyAccount-content .form-row label {
    width: 200px;
  }
}

@media (max-width: 500px) {
  .rtl .product-item .onsale {
    right: 275px !important;
  }
}


@media (max-width: 460px) {
  .product-item.style-1 .onnew, .product-item.style-2 .onnew  {
    left: 22px;
    top: 20px;
  }
  .product-item.list .onnew{
    left: 32px;
   }
  .woocommerce-pagination.pagination .page-numbers {
    min-width: 40px !important;
  }
  .rtl .product-item .onsale {
    right: 245px !important;
    top: 50px !important;
  }
  .product-item.list .onnew {
      top: 10px;
      right: 246px;
  }
  .product-item .onsale {
      top: 50px !important;
      right: 275px !important;
  }
  .product-item.style-1 .onnew, .product-item.style-2 .onnew {
     top: 10px !important;
  }
  .rtl .product-item.style-1 .onnew, .rtl .product-item.style-2 .onnew{
      right: 245px !important;
      top: 10px !important;
  }
}

@media (max-width: 380px)  {

  .product-item.style-1 .onnew, .product-item.style-2 .onnew {
    left: 22px;
      top: 20px;
  }
 
  .rtl .product-item.style-1 .onnew, .rtl .product-item.style-2 .onnew {
    right: 245px !important;
    top: 15px;
  }

  .product-item.list .onnew {
      top: 10px;
      right: 246px;
  }
  .product-item.list .onsale {
      top: 50px !important;
      right: 237px !important;
  }
}


@media (max-width: 358px) {
  .meta-woo .block-minicart .widget_shopping_cart::before,
  .meta-woo .block-minicart .widget_shopping_cart::after {
    right: 281px!important;
  }
  .rtl .meta-woo .block-minicart .widget_shopping_cart::before,
  .rtl .meta-woo .block-minicart .widget_shopping_cart::after {
    right: 250px!important;
  }
  .meta-woo .block-minicart .widget_shopping_cart {
    right: -275px !important;
  }
  .rtl ul.products li.product-item .product-inner .group-button {
    left: auto!important;
    right: 50px!important;
  }
  .product-type-simple .entry-summary .cart {
    width: 245px;
  }
  .comments-pagination .page-numbers,
  .post-pagination > span:not(.title),
  .post-pagination a span,
  .pagination .page-numbers {
    min-width: 42px;
  }
  .woocommerce-pagination.pagination .page-numbers {
    min-width: 30px !important;
  }
  .product-item.style-1 .onnew, .product-item.style-2 .onnew {
    left: 5px;
      top: 20px;
  }
  .rtl .product-item .onnew {
    right: 186px !important;
    top: 10px;
  }
  .rtl .product-item .onsale {
      right: 185px !important;
  }
  .product-item.list .onnew {
    top: 20px;
      left: 18px;
  }
}
</style>
<?php
/**

 * Functions hooked into ecome_footer action

 *

 * @hooked ecome_footer_content            - 10

 */

do_action( 'ecome_footer' );

get_template_part( 'templates-part/popup', 'content' ); ?>

<a href="#" class="backtotop">

    <i class="fa fa-angle-up"></i>

</a>

<?php wp_footer(); ?>

<script type="text/javascript">

    // jQuery(document).ready(function(){

    //     function destroyCarousel() {
    //       if (jQuery('.owl-products').hasClass('slick-initialized')) {
    //         jQuery('.owl-products').slick('destroy');
    //       }      
    //     }

    //     console.log("ssssssssss");
    //     jQuery(function(){
    //         destroyCarousel();
    //         jQuery('.owl-products').slick({
    //            speed: 10000,
    //            autoplay: true,
    //            autoplaySpeed: 100,
    //            cssEase: 'linear',
    //            slidesToShow: 1,
    //            slidesToScroll: -1,
    //            variableWidth: true

    //         });
    //     });
    // });
	
	jQuery('.rtl .ecome-products .product-inner .add-to-cart .ajax_add_to_cart').text("أضف إلى السلة");

 	setInputFilter(document.getElementById("billing_first_name"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]*$/i.test(value); });	
	setInputFilter(document.getElementById("billing_last_name"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]*$/i.test(value); });

	setInputFilter(document.getElementById("billing_city"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]*$/i.test(value); });
	setInputFilter(document.getElementById("billing_state"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]*$/i.test(value); });

	setInputFilter(document.getElementById("billing_postcode"), function(value) { return /^-?\d*$/.test(value); });
	setInputFilter(document.getElementById("billing_phone"), function(value) { return /^-?\d*$/.test(value); });
	
	setInputFilter(document.getElementById("billing_address_1"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z\d]*$/i.test(value); });

	setInputFilter(document.getElementById("account_first_name"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]*$/i.test(value); });	
	setInputFilter(document.getElementById("account_last_name"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]*$/i.test(value); });


	setInputFilter(document.getElementById("shipping_first_name"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]*$/i.test(value); });	
	setInputFilter(document.getElementById("shipping_last_name"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]*$/i.test(value); });

	setInputFilter(document.getElementById("shipping_city"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]*$/i.test(value); });
	setInputFilter(document.getElementById("shipping_state"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]*$/i.test(value); });

	setInputFilter(document.getElementById("shipping_postcode"), function(value) { return /^-?\d*$/.test(value); });
	setInputFilter(document.getElementById("shipping_phone"), function(value) { return /^-?\d*$/.test(value); });
	setInputFilter(document.getElementById("shipping_address_1"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z\d]*$/i.test(value); });
	//setInputFilternot(document.getElementById("billing_email"), function(value) { return /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]*$/i.test(value); });


	// Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
  	if(textbox){
	    textbox.addEventListener(event, function() {
	      if (inputFilter(this.value)) {
	        this.oldValue = this.value;
	        this.oldSelectionStart = this.selectionStart;
	        this.oldSelectionEnd = this.selectionEnd;
	      } else if (this.hasOwnProperty("oldValue")) {
	        this.value = this.oldValue;
	        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
	      } else {
	        this.value = "";
	      }
	    });
	}	
  });
}


function setInputFilternot(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
  	if(textbox){
	    textbox.addEventListener(event, function() {
	      if (!inputFilter(this.value)) {
	        this.oldValue = this.value;
	        this.oldSelectionStart = this.selectionStart;
	        this.oldSelectionEnd = this.selectionEnd;
	      } else if (this.hasOwnProperty("oldValue")) {
	        this.value = this.oldValue;
	        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
	      } else {
	        this.value = "";
	      }
	    });
    }
  });
 }
</script>

 <script type="text/javascript">
      
    jQuery(document).ready(function() {
      var theLanguage = jQuery('html').attr('lang');
    //alert(theLanguage);
    var title1 = "";
    var desc = "";
    desc2 = "";
    if(theLanguage == 'ar'){
      title1 = "هل أنت واثق؟";
      desc = "مجرد الحذف ، لن تتمكن من استعادة هذا الملف !";
      desc2 = "ها! تم حذف المستخدم الخاص بك!";
    }else {
      title1 = "Are you sure?";
       desc = "Once deleted, you will not be able to recover this!";
       desc2 = "h! Your user has been deleted!";
    }
    jQuery(".reset_pwd").click(function(){
    	var Test = jQuery(this).attr('id');
    	
    	jQuery('#custemail').val(Test);
        jQuery('#edit_password').modal('show');
    });

 var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    jQuery(".remove_user").click(function(){
    	var user_id = jQuery(this).attr('id');


				swal({
				  title: title1,
				  text: desc,
				  icon: "warning",
				 
				})
				.then((willDelete) => {
				  if (willDelete) {

				  	jQuery.ajax({
                        type: 'post',
                        url : ajaxurl,
                       data : {
                            action : 'low_to_high',
                            rem_user_id: user_id
                            
                        },
                        success: function (data) {
                        swal(desc2, {
     					 icon: "success",
     					 });
                       
                         location.reload();
                        }
                        });

				  } 
				});





    	
    	});



    jQuery("#reset_pwd_btn").click(function(){
       		var pwd =  jQuery('#pwd').val();
       		var confirm_pwd =  jQuery('#confirm_pwd').val();
       		var userId = jQuery('#custemail').val();

       		if( !jQuery('#pwd').val() ) {
                jQuery("#pwd").after("<span class='apcal-error'><br><strong><?php _e("Password required.", "woocommerce"); ?></strong></span>");
                return false;
            }else{
            	jQuery(".apcal-error").remove();
            }

            if( !jQuery('#confirm_pwd').val() ) {
                jQuery("#confirm_pwd").after("<span class='apcal-error'><br><strong><?php _e("Confirm password required.", "woocommerce"); ?></strong></span>");
                return false;
            }else{
            	jQuery(".apcal-error").remove();
            }

            if (pwd != confirm_pwd){
		        jQuery("#confirm_pwd").after("<span class='apcal-error'><br><strong><?php _e("Passwords does not match!", "woocommerce"); ?></strong></span>");
		                return false;
            }else{
            	jQuery(".apcal-error").remove();
            }
       
    


            
            var SecondData = "pwd=" + pwd + "&confirm_pwd=" + confirm_pwd;
       //var pwd = 
        var form_data = new FormData(jQuery('#pwd_from')[0]);
                        jQuery.ajax({
                        type: 'post',
                        url : ajaxurl,
                       data : {
                            action : 'low_to_high',
                            pwd: pwd,
                            confirm_pwd: confirm_pwd,
                            userId: userId
                        },
                        success: function (data) {
                        swal("Passwords updated successfully");
                         jQuery('#edit_password').modal('hide');
                         location.reload();
                        }
                        });

         });
// category delete

 jQuery(".delete_cat").click(function(){
      var cat_id = jQuery(this).attr('id');

        swal({
          title: title1,
          text: desc,
          icon: "warning",
         
        })
        .then((willDelete) => {
          if (willDelete) {

            jQuery.ajax({
                        type: 'post',
                        url : ajaxurl,
                       data : {
                            action : 'low_to_high',
                            rem_cat_id: cat_id
                            
                        },
                        success: function (data) {
                        swal(desc2, {
                         icon: "success",
                         });
                       
                         location.reload();
                        }
                        });

          } 
        });


      });


// Edit category
    
    jQuery(".edit_cat").click(function(){
      //alert('asdas');
      jQuery('#edit_cat').modal('show');
      var Test = jQuery(this).attr('id');
      var custFieldValue= jQuery(this).attr('data-field');

      
      jQuery('#cat_name').val(custFieldValue);
      jQuery('#cat_id').val(Test);
        
    });



    jQuery("#edit_cat_btn_save").click(function(){

           var cat_id =  jQuery('#cat_id').val();
          var cat_name = jQuery('#cat_name').val();
          file_data = jQuery('#cate_image').prop('files')[0];
        form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('cat_id', cat_id);
        form_data.append('cat_name', cat_name);
        form_data.append('action', 'low_to_high');



         
          //var cat_image = jQuery('#cate_image')[0].files[0];

          //var fd = new FormData();
       // var cat_image = jQuery('#cate_image').prop('files')[0];

        //console.log(cat_image);
       

          if( !jQuery('#cat_name').val() ) {
                jQuery("#cat_name").after("<span class='apcal-error'><br><strong><?php _e("required.", "woocommerce"); ?></strong></span>");
                return false;
            }else{
              jQuery(".apcal-error").remove();
            }

            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
            //var SecondData = "pwd=" + pwd + "&confirm_pwd=" + confirm_pwd;
       //var pwd = 
        //var form_data = new FormData(jQuery('#pwd_from')[0]);
                        jQuery.ajax({
                          url : ajaxurl,
                         type: 'POST',
                          contentType: false,
                          processData: false,

                          data: form_data,
                       
                        success: function (data) {
                        swal("Updated");
                         jQuery('#edit_cat').modal('hide');
                         location.reload();
                        }
                        });

         });

// Tags


// delete tags
 jQuery(".delete_tag").click(function(){
      var tag_id = jQuery(this).attr('id');

        swal({
          title: title1,
          text: desc,
          icon: "warning",
         
        })
        .then((willDelete) => {
          if (willDelete) {

            jQuery.ajax({
                        type: 'post',
                        url : ajaxurl,
                       data : {
                            action : 'low_to_high',
                            rem_tag_id: tag_id
                            
                        },
                        success: function (data) {
                        swal(desc2, {
                         icon: "success",
                         });
                       
                         location.reload();
                        }
                        });

          } 
        });


      });


// Edit Tags
    
    jQuery(".edit_tag").click(function(){
      //alert('asdas');
      jQuery('#edit_tag').modal('show');
      var Test = jQuery(this).attr('id');
      var custFieldValue= jQuery(this).attr('data-field');

      
      jQuery('#tag_name').val(custFieldValue);
      jQuery('#tag_id').val(Test);
        
    });



    jQuery("#edit_tag_btn_save").click(function(){

           var tag_id =  jQuery('#tag_id').val();
          var tag_name = jQuery('#tag_name').val();
          //file_data = jQuery('#cate_image').prop('files')[0];
        form_data = new FormData();
        //form_data.append('file', file_data);
        form_data.append('tag_id', tag_id);
        form_data.append('tag_name', tag_name);
        form_data.append('action', 'low_to_high');



         
          //var cat_image = jQuery('#cate_image')[0].files[0];

          //var fd = new FormData();
       // var cat_image = jQuery('#cate_image').prop('files')[0];

        //console.log(cat_image);
       

          if( !jQuery('#tag_name').val() ) {
                jQuery("#tag_name").after("<span class='apcal-error'><br><strong><?php _e("required.", "woocommerce"); ?></strong></span>");
                return false;
            }else{
              jQuery(".apcal-error").remove();
            }

            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
            //var SecondData = "pwd=" + pwd + "&confirm_pwd=" + confirm_pwd;
       //var pwd = 
        //var form_data = new FormData(jQuery('#pwd_from')[0]);
                        jQuery.ajax({
                          url : ajaxurl,
                         type: 'POST',
                          contentType: false,
                          processData: false,

                          data: form_data,
                       
                        success: function (data) {
                        swal("Updated");
                         jQuery('#edit_tag').modal('hide');
                         location.reload();
                        }
                        });

         });


// Brands


// delete brand
 jQuery(".delete_brand").click(function(){
      var brand_id = jQuery(this).attr('id');

        swal({
          title: title1,
          text: desc,
          icon: "warning",
         
        })
        .then((willDelete) => {
          if (willDelete) {

            jQuery.ajax({
                        type: 'post',
                        url : ajaxurl,
                       data : {
                            action : 'low_to_high',
                            rem_brand_id: brand_id
                            
                        },
                        success: function (data) {
                        swal(desc2, {
                         icon: "success",
                         });
                       
                         location.reload();
                        }
                        });

          } 
        });


      });


// Edit Tags
    
    jQuery(".edit_brand").click(function(){
      //alert('asdas');
      jQuery('#edit_brand').modal('show');
      var Test = jQuery(this).attr('id');
      var custFieldValue= jQuery(this).attr('data-field');

      
      jQuery('#brand_name').val(custFieldValue);
      jQuery('#brand_id').val(Test);
        
    });



    jQuery("#edit_brand_btn_save").click(function(){

           var tag_id =  jQuery('#brand_id').val();
          var tag_name = jQuery('#brand_name').val();
          file_data = jQuery('#cate_image').prop('files')[0];
        form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('brand_id', tag_id);
        form_data.append('brand_name', tag_name);
        form_data.append('action', 'low_to_high');



         
          //var cat_image = jQuery('#cate_image')[0].files[0];

          //var fd = new FormData();
       // var cat_image = jQuery('#cate_image').prop('files')[0];

        //console.log(cat_image);
       

          if( !jQuery('#brand_name').val() ) {
                jQuery("#brand_name").after("<span class='apcal-error'><br><strong><?php _e("required.", "woocommerce"); ?></strong></span>");
                return false;
            }else{
              jQuery(".apcal-error").remove();
            }

            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
            //var SecondData = "pwd=" + pwd + "&confirm_pwd=" + confirm_pwd;
       //var pwd = 
        //var form_data = new FormData(jQuery('#pwd_from')[0]);
                        jQuery.ajax({
                          url : ajaxurl,
                         type: 'POST',
                          contentType: false,
                          processData: false,

                          data: form_data,
                       
                        success: function (data) {
                        swal("Updated");
                         jQuery('#edit_brand').modal('hide');
                         location.reload();
                        }
                        });

         });




});
function item_status_change(val,id)
  {
     
    //alert(val+" "+id);
var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    jQuery.ajax({
                        type: 'post',
                        url : ajaxurl,
                       data : {
                            action : 'low_to_high',
                            order_id: id,
                            order_status: val,
                            
                        },
                        success: function (data) {
                        swal("Updated successfully");
                         
                         location.reload();
                        }
                        });
     
  
  }

jQuery(document).ready(function(){

  // jQuery(window).resize(function() {
  
  if (jQuery(window).width() < 600 && window.matchMedia("(orientation: portrait)").matches) {
         jQuery(".product-item .onsale").css({"top": "60px", "right": "235px"}); 
         jQuery(".product-item.style-1 .onsale").css("right", "140px"); 
         jQuery(".product-item.style-1 .onsale").css("right", "220px"); 
         jQuery(".product-item.list .onsale").css({"top": "40px", "right": "285px"});
  }
  if (jQuery(window).width() < 400 && window.matchMedia("(orientation: portrait)").matches) {
       jQuery(".product-item .onsale").css({"top": "60px", "right": "235px"}); 
       jQuery(".product-item.list .onsale").css({"top": "40px", "right": "245px"});
       jQuery(".block-minicart.ecome-mini-cart.ecome-dropdown").css("width", "28px"); 
       jQuery(".product-item.list .onsale").css({"top": "40px", "right": "235px"});
  }
  if (jQuery(window).width() < 350 && window.matchMedia("(orientation: portrait)").matches) {
       jQuery(".product-item .onsale").css({"top": "60px", "right": "195px"}); 
  }
 // })  


  if( jQuery("html").attr("lang") === 'ar' ){
      
      jQuery(window).on("orientationchange",function(){
               if (jQuery(window).width() <= 1100 && jQuery(window).width() > 900 && window.orientation === 0  ) { 
                   jQuery(".header-control-inner .meta-woo").css({"position": "relative", "top" : "90px", "float": "left"});
               }
               else if ( jQuery(window).width() <= 900 && jQuery(window).width() > 650 && window.orientation === 90  ) { 
                   jQuery(".header-control-inner .meta-woo").css({"position": "relative", "top" : "0px", "float": "left"});
               }
      });
         // console.log("xxxxxxxxxx");
         jQuery("html").css({"overflow": "auto"});
         jQuery(".widget.woocommerce.widget_shopping_cart").attr('style', 'right:-270px !important;'); 
         jQuery(".widget_shopping_cart:before").css("right", "295px"); 
         jQuery(".widget_shopping_cart:after").css("right", "295px"); 

         // jQuery(".product-item.list .onsale").css({"top": "100px", "right": "135px"});
         jQuery(".product-item .onsale").css({"top": "60px", "right": "135px"});
         jQuery(".product-item.list a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart").css({"left":"0px"});

         // jQuery(window).resize(function() {
           if( jQuery("html").attr("lang") === 'ar' && jQuery("body").hasClass("woocommerce-page") ){       
                 // jQuery(".product-item.list .onsale").css({"top": "100px", "right": "135px"});
                 jQuery(".product-item .onsale").css({"top": "60px", "right": "75px"});
                 jQuery(".product-item.list .onsale").css({"top": "-280px", "right": "375px"});

                 if (jQuery(window).width() <=600 && window.matchMedia("(orientation: portrait)").matches ) { 
                     jQuery(".block-wishlist").css({"position":"relative", "width": "20%"}); 
                     jQuery(".block-minicart.ecome-mini-cart.ecome-dropdown").css({"position":"relative", "width": "20%"}); 
                     jQuery(".menu-item.block-user.ecome-dropdown").css({"position":"relative", "width": "20%"}); 
                 }
            }  

           if (jQuery(window).width() < 1250 && jQuery(window).width() > 1150 && window.matchMedia("(orientation: portrait)").matches ) { 
              jQuery(".product-item .onsale").css({"top": "60px", "right": "105px"});
           }

           if (jQuery(window).width() <= 1100 && jQuery(window).width() > 991 && window.matchMedia("(orientation: portrait)").matches ) { 
              jQuery(".product-item .onsale").css({"top": "60px", "right": "185px"});
              // jQuery(".rtl .ecome-products ul.products .product-item.list .group-button").css({"float":"initial"});
              jQuery(".rtl .ecome-products ul.products .product-item.list .group-button").attr('style', "margin-top: 60px !important;");
           }

           if (jQuery(window).width() <= 900 && jQuery(window).width() > 650 && window.matchMedia("(orientation: portrait)").matches  ) { 
              jQuery(".rtl .ecome-products ul.products .product-item.list .group-button").attr('style', "margin-top: 60px !important;");
               jQuery(".product-item.list .onsale").css({"top": "40px", "right": "175px"});
               // jQuery(".header-control-inner .meta-woo").css({"position": "relative", "top" : "90px", "right": "170px"});
               jQuery(".header-control-inner .meta-woo").css({"position": "relative", "top" : "90px"});
           }

           if( jQuery(window).width() < 600 && window.matchMedia("(orientation: portrait)").matches ) { 
               jQuery(".product-item.list .onsale").css({"top": "100px", "right": "160px"});
               jQuery(".wpml-ls-statics-shortcode_actions a.js-wpml-ls-item-toggle.wpml-ls-item-toggle").css({"width":" 70px","text-align": "-webkit-right"});
               jQuery('form.woocommerce-currency-switcher-form .woocommerce-currency-switcher').attr('style',"background-position: left !important;");
           }

           if ( jQuery(window).width() < 600 && jQuery("body").hasClass("woocommerce-page") && window.matchMedia("(orientation: portrait)").matches) {

               jQuery(".block-wishlist").css("width", "25px"); 
               jQuery(".block-minicart.ecome-mini-cart.ecome-dropdown").css("width", "30px"); 
               jQuery(".menu-item.block-user.ecome-dropdown").css("width", "25px"); 
               
               jQuery(".rtl .meta-woo>div:not(:last-child)").css("padding-left", "0px"); 
               jQuery(".meta-woo > div:not(:last-child)").css({"padding-right": "0px", "margin-right":"0px"});
               jQuery(".header-control-inner").css({"float": "initial", "display": "block", "width": "100%"});
               jQuery(".product-item.list .onsale").css({"top": "50px", "right": "205px"});

           }
          if (jQuery(window).width() < 400 && window.matchMedia("(orientation: portrait)").matches ) {
             jQuery(".header-control-inner").css({"outline": "0"});
             jQuery(".rtl").css({"outline": "0"});
               jQuery(".block-wishlist").css({"outline": "0"});
               jQuery(".block-minicart.ecome-mini-cart.ecome-dropdown").css({"outline": "0"});
               jQuery(".menu-item.block-user.ecome-dropdown").css({"outline": "0"});

               jQuery(".product-item .onsale").css({"top": "60px", "right": "215px"}); 
               jQuery(".product-item.list .onsale").css({"top": "50px", "right": "205px"});

              jQuery(".block-minicart.ecome-mini-cart.ecome-dropdown").css("width", "28px"); 
              jQuery(".rtl .wpml-ls-legacy-dropdown").attr('style', "width: 70px !important; padding: 0 !important;");
              jQuery("form.woocommerce-currency-switcher-form").attr("style", "width: 62px !important;");
         }
   }  
})



  </script>


</body>
</html>

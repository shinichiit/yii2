<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?>Trang chu</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
  

    <div class="dropdown" >
    <?php if(!Yii::$app->user->isGuest) : ?>
      <div style="background-color: #99FFCC; width: 135px">
    Welcome!
    <strong><?php echo Yii::$app->user->identity->username; ?></strong>
    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dLabel">
      <li>
        <a href="#" title="">thong tin tai khoan</a>
      </li>
      <li><a href="#" title="">don hang</a></li>
      <li>
        <?php echo Html::beginForm(['/site/logout'],'post'); ?>
        <?php echo Html::submitButton('thoat',['class'=>'btn btn-link']) ; ?>
        <?php echo Html::endForm() ?>
        <?php //echo Html::a('thoat',['/site/logout'],['data-method'=>'post']);?>
      </li>

      
    </ul>
    </div>
      <?php else: ?>
        <ul class="pull-right">
          <li style="list-style: none; background-color: #9999CC; float: left">
           <?php echo Html::a('Dang nhap',['/site/login']);?>
           </li>
         <li style="list-style: none; background-color: #00CC00;float: left">
         <?php echo Html::a('Dang ky',['/site/signup']);?>
         </li>
          
        </ul>
      <?php endif; ?>
    </div>

    
    <div class="pull-right">
        <a href="product_summary.html"><span class="">Fr</span></a>
        <a href="product_summary.html"><span class="">Es</span></a>
        <span class="btn btn-mini">En</span>
        <a href="product_summary.html"><span>&pound;</span></a>
        <span class="btn btn-mini">$155.00</span>
        <a href="product_summary.html"><span class="">$</span></a>
        <a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
   
    </div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="/yiidemo"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
        <form class="form-inline navbar-search" method="post" action="/yiidemo" >
        <input id="srchFld" class="srchTxt" type="text" />
          <!-- <select class="srchTxt">
            <option>All</option>
            <option>CLOTHES </option>
            <option>FOOD AND BEVERAGES </option>
            <option>HEALTH & BEAUTY </option>
            <option>SPORTS & LEISURE </option>
            <option>BOOKS & ENTERTAINMENTS </option>
        </select>  -->
          <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
     <li class=""><a href="special_offer.html">Specials Offer</a></li>
     <li class=""><a href="normal.html">Delivery</a></li>
     <li class=""><a href="contact.html">Contact</a></li>
     <li class="">
     <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
    <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3>Login Block</h3>
          </div>
          <div class="modal-body">
            <form class="form-horizontal loginFrm">
              <div class="control-group">                               
                <input type="text" id="inputEmail" placeholder="Email">
              </div>
              <div class="control-group">
                <input type="password" id="inputPassword" placeholder="Password">
              </div>
              <div class="control-group">
                <label class="checkbox">
                <input type="checkbox"> Remember me
                </label>
              </div>
            </form>     
            <button type="submit" class="btn btn-success">Sign in</button>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          </div>
    </div>
    </li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<?php echo $content; ?>
<!-- Footer ================================================================== -->
    <div  id="footerSection">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h5>ACCOUNT</h5>
                <a href="login.html">YOUR ACCOUNT</a>
                <a href="login.html">PERSONAL INFORMATION</a> 
                <a href="login.html">ADDRESSES</a> 
                <a href="login.html">DISCOUNT</a>  
                <a href="login.html">ORDER HISTORY</a>
            
</div>
            <div class="span3">
                <h5>INFORMATION</h5>
                <a href="contact.html">CONTACT</a>  
                <a href="register.html">REGISTRATION</a>  
                <a href="legal_notice.html">LEGAL NOTICE</a>  
                <a href="tac.html">TERMS AND CONDITIONS</a> 
                <a href="faq.html">FAQ</a>
             </div>
            <div class="span3">
                <h5>OUR OFFERS</h5>
                <a href="#">NEW PRODUCTS</a> 
                <a href="#">TOP SELLERS</a>  
                <a href="special_offer.html">SPECIAL OFFERS</a>  
                <a href="#">MANUFACTURERS</a> 
                <a href="#">SUPPLIERS</a> 
             </div>
            <div id="socialMedia" class="span3 pull-right">
                <h5>SOCIAL MEDIA </h5>
                <a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
                <a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
             </div> 
         </div>
        <p class="pull-right">&copy; Bootshop</p>
</div><!-- Container End -->
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

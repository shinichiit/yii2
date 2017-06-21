<?php 
    use yii\helpers\Html;
use backend\models\Book;
// use yii\helpers\Url;
 ?>


</div>
<div id="mainBody">
    <div class="container">
    <div class="row">
<!-- Sidebar ================================================== -->
    <div id="sidebar" class="span3">
        <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
        <ul id="sideManu" class="nav nav-tabs nav-stacked">
            <li class="subMenu open"><a> ELECTRONICS [230]</a>
                <ul>
                <li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
                </ul>
            </li>
            <li class="subMenu"><a> CLOTHES [840] </a>
            <ul style="display:none">
                <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>                                                
                <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>    
                <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>                                              
                <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>                                                
                <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>                                               
            </ul>
            </li>
            <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
                <ul style="display:none">
                <li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>                                             
                <li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>    
                <li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>                                                
                <li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>                                             
                <li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>                                               
                <li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>                                              
            </ul>
            </li>
            <li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
            <li><a href="products.html">SPORTS & LEISURE [58]</a></li>
            <li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
        </ul>
        <br/>
          <div class="thumbnail">
            <img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
            <div class="caption">
              <h5>Panasonic</h5>
                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
            </div>
          </div><br/>
            <div class="thumbnail">
                <img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
                <div class="caption">
                  <h5>Kindle</h5>
                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                </div>
              </div><br/>
            <div class="thumbnail">
                <img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
                <div class="caption">
                  <h5>Payment Methods</h5>
                </div>
              </div>
    </div>
    <!-- Sidebar end=============================================== -->
    <div class="span9">     
      <div class="well well-small">
        <h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
        <?php $books=Book::find()->all();  ?>
        <?php if($books) : ?>
          <div class="row-fluid">
            <div id="featured" class="carousel slide">
              <div class="carousel-inner">
                <?php $length = sizeof($books);
                $page = intval($length/4) + 1;
                for ($i=0; $i < $page ; $i++) { 
                 ?>
                 <div class="item">
                  <ul class="thumbnails">
                    <?php
                    $length = sizeof($books);
                    for ($j=$i*4; $j < $i*4+4; $j++) { 
                      if ($j < $length) {?> 
                    <li class="span3">
                      <div class="thumbnail">
                        <i class="tag"></i>
                        <a href="#"><img src="<?php echo $books[$j]['image'] ;?>" alt=""></a>
                        <div class="caption">
                          <h5><?php echo Html::a($books[$j]['name'],['book/view','slug'=>$books[$j]['slug']]) ?></h5>
                          <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right"><?php echo $books[$j]['price'] ;?></span></h4>
                        </div>
                      </div>
                    </li>
                    <?php 
                  }};?>
                </ul>
              </div>
              <?php }; ?>
            </div>
            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#featured" data-slide="next">›</a>
          </div>
        </div>
      <?php endif; ?>
    </div>

        <h4>Latest Products</h4>
        

        
              <ul class="thumbnails">
              <?php foreach ($books as $item) : ?>
                <li class="span3">
                  <div class="thumbnail">
                    <img src="./uploads/images/<?php echo $item->image; ?>" alt=""/>
                    <div class="caption">
                      <h5><?php echo Html::a($item->name,['book/view','slug'=>$item->slug]) ?></h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                     
                      <h4 style="text-align:center"><a class="btn" href="product_details.html"></a> 
                      <?php 
                      echo Html::a('Add to cart',
                      [
                        '/cart/add-cart','slug'=>$item->slug
                      ],
                      [
                        'class'=>'add-cart',
                        'data-name'=>$item->name
                      ]
                      ); ?> 
                      <a class="btn btn-primary" href="#"><?php echo $item->price; ?></a></h4>
                    </div>
                  </div>
                </li>
                <?php endforeach?>

              </ul> 
              
            
        </div>
        </div>
    </div>
</div>

<!-- hien thi gio hang bang ajax -->
<div class="modal fade" id="modal-add-cart">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Them gio hang thanh cong</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-success" id="alert-pro-name">
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php echo Html::a('View Cart',['/cart'],['class'=>'btn btn-primary']); ?>
      </div>
    </div>
  </div>
</div>
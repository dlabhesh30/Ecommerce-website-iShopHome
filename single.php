<?php
if (session_status() == PHP_SESSION_NONE){
  session_start();
}

$h1 = null;
                if($_SESSION !== NULL && $_SESSION['Username'] != null ){
                  $h1 = $_SESSION['Username'];
                  //print('<h3>'.$h1.'</h3>');
                }else{
                  //print('<h3>'.'Not set'.'</h3>');
                }
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Our Inventory</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
      $(function()
      {
        $('.scroll-pane').jScrollPane();
      });
    </script>
<!-- top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
      });
    });
  </script>   
</head>
<body>
  <div class="header-top">
   <div class="wrap"> 
    <div class="logo">
      <a href="index.php"><img src="images/logo1.jpg" alt=""/></a>
      </div>
      <div class="cssmenu">
       <ul>
       <li class="active"><a href="register.html">Sign up</a></li> 
       <li><a href="shop.html">Inventory</a></li> 
       <li><a href="login.html">My Account</a></li> 
       <li><a href="checkout.html">CheckOut</a></li> 
       </ul>
    </div>
    
    <div class="clear"></div>
  </div>
   </div>
   <div class="header-bottom">
    <div class="wrap">
      <!-- start header menu -->
    <ul class="megamenu skyblue">
        <li><a class="color1" href="index.php">Home</a></li>
      <li class="grid"><a class="color2" href="labheshproducts.php">Guitar's</a>
        <div class="megapanel">
        <p><b>Want to buy Guitars ?</b></p>
          <div class="row">
            <div class="col1">
              <div class="h_nav">
                <h4>Popular</h4>
                <ul>
                  <li><a href="shop.html">new arrivals</a></li>
                  <li><a href="shop.html">men</a></li>
                  <li><a href="shop.html">women</a></li>
                  <li><a href="shop.html">accessories</a></li>
                  <li><a href="shop.html">kids</a></li>
                  <li><a href="shop.html">login</a></li>
                </ul> 
              </div>
              <div class="h_nav">
                <h4 class="top">New Arrivals</h4>
                <ul>
                  <li><a href="shop.html">new arrivals</a></li>
                  <li><a href="shop.html">men</a></li>
                  <li><a href="shop.html">women</a></li>
                  <li><a href="shop.html">accessories</a></li>
                  <li><a href="shop.html">kids</a></li>
                  <li><a href="shop.html">style videos</a></li>
                </ul> 
              </div>
            </div>
            <div class="col1">
              <div class="h_nav">
                <h4>All Products</h4>
                <?php 
                 $ch = curl_init();


                curl_setopt($ch, CURLOPT_URL, "http://labheshdeshpande.com/getList.php");


                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


                $contents = curl_exec ($ch);
                print("$contents");
      
              ?>
              </div>              
            </div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            
          </div>
        </div>
        </li>
           <li class="grid"><a class="color2" href="sidharthproducts.php">Robot's</a>
        <div class="megapanel">
        <p><b>Want to buy Robots ?</b></p>
          <div class="row">
            <div class="col1">
              <div class="h_nav">
                <h4>Popular</h4>
                <ul>
                  <li><a href="shop.html">new arrivals</a></li>
                  <li><a href="shop.html">men</a></li>
                  <li><a href="shop.html">women</a></li>
                  <li><a href="shop.html">accessories</a></li>
                  <li><a href="shop.html">kids</a></li>
                  <li><a href="shop.html">login</a></li>
                </ul> 
              </div>
              <div class="h_nav">
                <h4 class="top">New Arrivals</h4>
                <ul>
                  <li><a href="shop.html">new arrivals</a></li>
                  <li><a href="shop.html">men</a></li>
                  <li><a href="shop.html">women</a></li>
                  <li><a href="shop.html">accessories</a></li>
                  <li><a href="shop.html">kids</a></li>
                  <li><a href="shop.html">style videos</a></li>
                </ul> 
              </div>
            </div>
            <div class="col1">
              <div class="h_nav">
                <h4>All Products</h4><?php
                 $ch = curl_init();


      curl_setopt($ch, CURLOPT_URL, "http://robotsstore.co/getList.php");


      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


      $contents = curl_exec ($ch);
      print("$contents"); ?>
              </div>              
            </div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            
          </div>
        </div>
        </li>
        <li class="grid"><a class="color2" href="gurnoorproducts.php">Mystical</a>
        <div class="megapanel">
        <p><b>Want to buy Magic stuff ?</b></p>
          <div class="row">
            <div class="col1">
              <div class="h_nav">
                <h4>Popular</h4>
                <ul>
                  <li><a href="shop.html">new arrivals</a></li>
                  <li><a href="shop.html">men</a></li>
                  <li><a href="shop.html">women</a></li>
                  <li><a href="shop.html">accessories</a></li>
                  <li><a href="shop.html">kids</a></li>
                  <li><a href="shop.html">login</a></li>
                </ul> 
              </div>
              <div class="h_nav">
                <h4 class="top">New Arrivals</h4>
                <ul>
                  <li><a href="shop.html">new arrivals</a></li>
                  <li><a href="shop.html">men</a></li>
                  <li><a href="shop.html">women</a></li>
                  <li><a href="shop.html">accessories</a></li>
                  <li><a href="shop.html">kids</a></li>
                  <li><a href="shop.html">style videos</a></li>
                </ul> 
              </div>
            </div>
            <div class="col1">
              <div class="h_nav">
                <h4>All Products</h4>
                <?php 
                 $ch = curl_init();


                curl_setopt($ch, CURLOPT_URL, "http://gurnoors.com/getList.php");


                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


                $contents = curl_exec ($ch);
                print("$contents");
      
              ?>    
              </div>              
            </div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            
          </div>
        </div>
        </li>
        <li class="grid"><a class="color2" href="virajproducts.php">Second hand goods</a>
        <div class="megapanel">
        <p><b>Want to buy something ?</b></p>
          <div class="row">
            <div class="col1">
              <div class="h_nav">
                <h4>Popular</h4>
                <ul>
                  <li><a href="shop.html">new arrivals</a></li>
                  <li><a href="shop.html">men</a></li>
                  <li><a href="shop.html">women</a></li>
                  <li><a href="shop.html">accessories</a></li>
                  <li><a href="shop.html">kids</a></li>
                  <li><a href="shop.html">login</a></li>
                </ul> 
              </div>
              <div class="h_nav">
                <h4 class="top">New Arrivals</h4>
                <ul>
                  <li><a href="shop.html">new arrivals</a></li>
                  <li><a href="shop.html">men</a></li>
                  <li><a href="shop.html">women</a></li>
                  <li><a href="shop.html">accessories</a></li>
                  <li><a href="shop.html">kids</a></li>
                  <li><a href="shop.html">style videos</a></li>
                </ul> 
              </div>
            </div>
            <div class="col1">
              <div class="h_nav">
                <h4>All Products</h4>
                <?php 
                 $ch = curl_init();


                curl_setopt($ch, CURLOPT_URL, "http://myhelpinghandonline.com/getList.php");


                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


                $contents = curl_exec ($ch);
                print("$contents");
      
              ?>    
              </div>              
            </div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            
          </div>
        </div>
        </li>
        <li class="grid"><a class="color2" href="arunproducts.php">Car's</a>
        <div class="megapanel">
        <p><b>Want to buy cars ?</b></p>
          <div class="row">
            <div class="col1">
              <div class="h_nav">
                <h4>Popular</h4>
                <ul>
                  <li><a href="shop.html">new arrivals</a></li>
                  <li><a href="shop.html">men</a></li>
                  <li><a href="shop.html">women</a></li>
                  <li><a href="shop.html">accessories</a></li>
                  <li><a href="shop.html">kids</a></li>
                  <li><a href="shop.html">login</a></li>
                </ul> 
              </div>
              <div class="h_nav">
                <h4 class="top">New Arrivals</h4>
                <ul>
                  <li><a href="shop.html">new arrivals</a></li>
                  <li><a href="shop.html">men</a></li>
                  <li><a href="shop.html">women</a></li>
                  <li><a href="shop.html">accessories</a></li>
                  <li><a href="shop.html">kids</a></li>
                  <li><a href="shop.html">style videos</a></li>
                </ul> 
              </div>
            </div>
            <div class="col1">
              <div class="h_nav">
                <h4>All Products</h4>
                <?php 
                 $ch = curl_init();


                curl_setopt($ch, CURLOPT_URL, "http://arunkumarweb.com/getList.php");


                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


                $contents = curl_exec ($ch);
                print("$contents");
      
              ?>  
              </div>              
            </div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <img src="images/nav_img.jpg" alt=""/>
          </div>
        </div>
        </li>
        <li class="grid"><a class="color2" href="#">All shops</a>
        <div class="megapanel">
        <p><b>Want to visit individual sellers ? ?</b></p>
          <div class="row">
            <div class="col1">
              <div class="h_nav">
                <h4>Labhesh</h4>
                <ul>
                <li><a href="http://www.labheshdeshpande.com">Go to Soul Guitars</a></li>   
                </ul> 
              </div>
            </div>
            <div class="col1">
              <div class="h_nav">
                <h4>Sidharth</h4>
                <ul>
                <li><a href="http://www.your_site.com">Go to your_name</a></li>   
                </ul> 
              </div>
            </div>  
              <div class="col1">
              <div class="h_nav">
                <h4>Gurnoor</h4>
                <ul>
                <li><a href="http://www.your_site.com">Go to your_name</a></li>   
                </ul> 
              </div>
            </div>
              <div class="col1">
              <div class="h_nav">
                <h4>Viraj</h4>
                <ul>
                <li><a href="http://www.your_site.com">Go to your_name</a></li>   
                </ul> 
              </div>
            </div>
            <div class="col1">
              <div class="h_nav">
                <h4>Arun  </h4>
                <ul>
                <li><a href="http://www.your_site.com">Go to your_name</a></li>   
                </ul> 
              </div>
            </div>
          </div>
        </div>
        </li>
       </ul>
       <div class="clear"></div>
      </div>
       </div>       
       <div class="single">
         <div class="wrap">
          <div class="rsidebar span_1_of_left">
           <section  class="sky-form">
                      <h4>Occasion</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
              </div>
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
                </div>
             </div>
                      <h4>Category</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flats (70)</label>
              </div>
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Heels (38)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
                </div>
            </div>
            <h4>Styles</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
              </div>
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ballerina (5)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pumps (7)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>High Tops (2)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
                </div>
            </div>
          </section>
              <section  class="sky-form">
          <h4>Brand</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Adidas by Stella McCartney</label>
              </div>
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Asics</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch Kids</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Capezio</label>
                <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Capezio Kids</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
              </div>
            </div>
             </section>
             <section  class="sky-form">
          <h4>Heel Height</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flat (20)</label>
              </div>
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Under 1in(5)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1in - 1 3/4 in(5)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2in - 2 3/4 in(3)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>3in - 3 3/4 in(2)</label>
              </div>
            </div>
            </section>
            <section  class="sky-form">
          <h4>Price</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and Under (30)</label>
              </div>
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under (30)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under (30)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under (30)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under (30)</label>
              </div>
            </div>
            </section>
            <section  class="sky-form">
          <h4>Colors</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Red</label>
              </div>
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i></label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Black</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yellow</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
              </div>
            </div>
            </section>
    </div>
    <?php 
    extract($_POST);

                /*
                if(!isset($View_submit)){
                  // rating submitted

                  //make curl call to submit_rating.php in individual website
                  // send product name
                  //dont return anything, just udate DB
                  
                  //check rating value
                  $rating = "4";
                  if(isset($rating_input_1)){
                    $rating = "1";
                  }elseif(isset($rating_input_2)){
                    $rating = "2";
                  }elseif(isset($rating_input_3)){
                    $rating = "3";
                  }elseif(isset($rating_input_4)){
                    $rating="4";
                  }elseif(isset($rating_input_5)){
                    $rating="5";
                  }
                  print("rating= "/$rating);

                  
                  $ch = curl_init();
                  $some=$Image;
                  $pattern="/.+(com)/";
                  if (preg_match_all($pattern, $some, $matches_out)) {
                        
                    $post='name='.$Name;
                    $prating='rating='.$rating;
                    curl_setopt($ch, CURLOPT_URL, implode(' ',$matches_out[0]).'/submit_rating.php');
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_exec($ch);

                    //redirect the page: see  $some, accordinly reload gurnoorproducts.php, labhesh.., etc
                    //print('Website ='.$some);
                    $newURL = "http://www.myhelpinghandonline.com/272";
                    if($some == "http://gurnoors.com"){
                      $newURL = $newURL."/gurnoorproducts.php";
                    }elseif($some == "http://www.myhelpinghandonline.com"){
                      $newURL = $newURL."/virajproducts.php";
                    }elseif($some == "http://labheshdeshpande.com"){
                      $newURL = $newURL."/labheshproducts.php";
                    }elseif($some == "http://robotsstore.co"){
                      $newURL = $newURL."sidharthproducts.php";
                    }elseif($some == "http://arunkumarweb.com/"){
                      $newURL = $newURL."/arunproducts.php";
                    }
                    header('Location: '.$newURL);
                    
                
                }


                }
                */

                 $ch = curl_init();

                 $some=$Image;
                  $pattern="/.+(com)/";
                  if (preg_match_all($pattern, $some, $matches_out)) {
                  
                      if($h1!=null){
                        $post='name='.$Name.'&log='.$h1;
                      }else{
                        $post='name='.$Name.'&log='.'Someone';
                      }
                  
                curl_setopt($ch, CURLOPT_URL, implode(' ',$matches_out[0]).'/viewincr.php');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                $contents = curl_exec ($ch);
                print("$contents");
                

                // $ch = curl_init();

                
      }else{
        if($h1!=null){
                        $post='name='.$Name.'&log='.$h1;
                      }else{
                        $post='name='.$Name.'&log='.'Someone';
                      }
        curl_setopt($ch, CURLOPT_URL, 'http://robotsstore.co/viewincr.php');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                $contents = curl_exec ($ch);
                print("$contents");
               // $ch = curl_init();
      
      }
            
    echo '<div class="cont span_2_of_3">
        <div class="labout span_1_of_a1">
        <!-- start product_slider -->
             <ul id="etalage">
              <li>
                <a href="optionallink.html">
                  <img class="etalage_thumb_image" src="'.$Image.'" />
                  
                </a>
              </li>
              
            </ul>
          
          
      <!-- end product_slider -->
      </div>
      <div class="cont1 span_2_of_a1">
        <h3 class="m_3">'.$Name.'</h3>
        
        <div class="price_single">
                <span class="reducedfrom"></span>
                <span class="actual">$'.$Price.'</span>
              </div>
        
        <div class="btn_form">
           <form>
           <input type="submit" value="buy now" title="">
          </form>
        </div>
        <ul class="add-to-links">
             <li><img src="images/wish.png" alt=""/><a href="#">Add to wishlist</a></li>
          </ul>
          <p class="m_desc">'.$Description.'</p>
          
                <div class="social_single"> 
           <ul> 
            <li class="fb"><div class="fb-share-button" data-href="http://myhelpinghandonline.com/272/single.php" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmyhelpinghandonline.com%2F272%2Fsingle.php&amp;src=sdkpreparse">Share</a></div>
            </li>
            <li class="tw"><a class="twitter-share-button"
              href="https://twitter.com/intent/tweet"
              data-size="large">
            Tweet</a></li>
            <li class="g_plus"><div class="g-plusone" data-annotation="none"></div></li>
            <li class="rss"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
            <script type="IN/Share" data-url="http://myhelpinghandonline.com/272/single.php"></script></li>    
           </ul>
          </div>
      </div>
      <div class="clear"></div>';
    
     
     ?>
     
         <?php 
                 $ch = curl_init();

                 $some=$Image;
                  $pattern="/.+(com)/";
                  if (preg_match_all($pattern, $some, $matches_out)) {
                  
                      
                  
                curl_setopt($ch, CURLOPT_URL, implode(' ',$matches_out[0]).'/getSlider.php');


                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


                $contents = curl_exec ($ch);
                print("$contents");
      }else{
        
        curl_setopt($ch, CURLOPT_URL, 'http://robotsstore.co/getSlider.php');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                $contents = curl_exec ($ch);
                print("$contents");
                
      }
              ?> 
              
      <script type="text/javascript">
     $(window).load(function() {
      $("#flexiselDemo1").flexisel();
      $("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
          responsiveBreakpoints: { 
            portrait: { 
              changePoint:480,
              visibleItems: 1
            }, 
            landscape: { 
              changePoint:640,
              visibleItems: 2
            },
            tablet: { 
              changePoint:768,
              visibleItems: 3
            }
          }
        });
    
      $("#flexiselDemo3").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,        
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
          responsiveBreakpoints: { 
            portrait: { 
              changePoint:480,
              visibleItems: 1
            }, 
            landscape: { 
              changePoint:640,
              visibleItems: 2
            },
            tablet: { 
              changePoint:768,
              visibleItems: 3
            }
          }
        });
        
    });
  </script>
  <script type="text/javascript" src="js/jquery.flexisel.js"></script>


  <div>
    <form action="/272/rating_curl.php" method="post">
    <input type="hidden" name="prod_name" value=<?php
      print($Name);
     ?>/>
     <input type="hidden" name="domain" value=<?php 
      print(implode(' ',$matches_out[0]));
     ?> />
     <input type="hidden" name="username" value=<?php
      print($h1);
      ?> />
  <div class="form-all">
    <ul class="form-section page-section">
      <li class="form-line" data-type="control_scale" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6"> Rating: </label>
        <div id="cid_6" class="form-input-wide jf-required">
          <table summary="" cellpadding="4" cellspacing="0" data-component="scale">
            <tbody>
              <tr>
                <th>
                   
                </th>
                <th style="text-align:center;">
                  <label for="input_6_1"> 1 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_6_2"> 2 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_6_3"> 3 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_6_4"> 4 </label>
                </th>
                <th style="text-align:center;">
                  <label for="input_6_5"> 5 </label>
                </th>
                <th>
                   
                </th>
              </tr>
              <tr>
                <td>
                  <label for="input_6_1"> Not Bad </label>
                </td>
                <td style="text-align:center;">
                  <input class="form-radio" type="radio" name="q6_rating" value="1" title="1" id="input_6_1" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio" type="radio" name="q6_rating" value="2" title="2" id="input_6_2" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio" type="radio" name="q6_rating" value="3" title="3" id="input_6_3" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio" type="radio" name="q6_rating" value="4" title="4" id="input_6_4" />
                </td>
                <td style="text-align:center;">
                  <input class="form-radio" type="radio" name="q6_rating" value="5" title="5" id="input_6_5" />
                </td>
                <td>
                  <label for="input_6_5"> Excellent </label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Review </label>
        <div id="cid_7" class="form-input-wide jf-required">
          <textarea id="input_7" class="form-textarea" name="q7_review" cols="28" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:left;" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-none" data-component="button">
              Submit
            </button>
          </div>
        </div>
      </li>
    </ul>
  </div>

  <script>
  JotForm.showJotFormPowered = true;
  </script>
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "63531719857163-63531719857163";
  </script>
  </form>
  </div>

  
   
     </div>

<div id="display_ratings">
    <?php 
    print('<br/>Inside single.php > display_ratings><br/>');
    print('<br/>');
    print("matches_out = ");
    print_r($matches_out);

      $ch = curl_init();
      $some=$Image;
      print('<br/>');
      print('Image='.$Image);
      $pattern="/.+(com)/";
      if (preg_match_all($pattern, $some, $matches_out)) {

        $postfields ='name='.$Name;
        $post_url = implode(' ',$matches_out[0]).'/getReviews.php';
        print('post_url='.$post_url);
        curl_setopt($ch, CURLOPT_URL, $post_url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $contents = curl_exec ($ch);
        print("$contents");
      }
    ?>
  </div>

     <div class="clear"></div>
   </div>
     </div>
    
     <div class="footer">
          <div class="footer-top">
          <div class="wrap">
               <div class="col_1_of_footer-top span_1_of_footer-top">
             <ul class="f_list">
              <li><img src="images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over £100*</span></li>
             </ul>
           </div>
           <div class="col_1_of_footer-top span_1_of_footer-top">
            <ul class="f_list">
              <li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
             </ul>
           </div>
           <div class="col_1_of_footer-top span_1_of_footer-top">
            <ul class="f_list">
              <li><img src="images/f_icon2.png" alt=""/><span class="delivery">Fast delivery & free returns</span></li>
             </ul>
           </div>
          <div class="clear"></div>
       </div>
         </div>
         <div class="footer-middle">
          
                <div class="lsidebar span_1_of_c1">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Like and share us</p>
          </div>
          <div class="cont span_2_of_c1">
            <div class="social">  
               <ul> 
              <li class="facebook"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"><a href="#"> </a></div><div class="border hide"><p class="num">1.51K</p></div></li>
             </ul>
               </div>
             <div class="social"> 
               <ul> 
                <li class="twitter"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
              </ul>
              </div>
             <div class="social"> 
               <ul> 
                <li class="google"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
               </ul>
               </div>
             <div class="social"> 
               <ul> 
                <li class="dot"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
              </ul>
              </div>
            <div class="clear"> </div>
            </div>
            <div class="clear"></div>     
           
         </div>
         
        
         <div class="copy" id="hide">
           <div class="wrap">
              <p>© All rights reserved <a href="http://w3layouts.com/">W3Layouts</a></p>
           </div>
         </div>
       </div>

       <script type="text/javascript">
      $(document).ready(function() {
      
        var defaults = {
            containerID: 'toTop', // fading element id
          containerHoverID: 'toTopHover', // fading element hover id
          scrollSpeed: 1200,
          easingType: 'linear' 
        };
        
        
        $().UItoTop({ easingType: 'easeOutQuart' });
        
      });
    </script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
        <script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=578122012396261";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>



</body>
</html>
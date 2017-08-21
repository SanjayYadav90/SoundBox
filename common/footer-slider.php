<ul id="flexiselDemo1">
   <li>
      <a href="single.php"><img src="images/featured/a1.jpg" alt=""/></a>
      <div class="slide-title">
         <h4>
         Mehandi re mehandi
      </div>
      <div class="date-city">
         <h5>Dec-19-17</h5>
         <div class="buy-tickets">
            <a href="single.php">Play Now</a>
         </div>
      </div>
   </li>
   <li>
      <a href="single.php"><img src="images/featured/a2.jpg" alt=""/></a>
      <div class="slide-title">
         <h4>Bhojpuri tal</h4>
      </div>
      <div class="date-city">
         <h5>Dec-19-17</h5>
         <div class="buy-tickets">
            <a href="single.php">Play Now</a>
         </div>
      </div>
   </li>
   <li>
      <a href="single.php"><img src="images/featured/a3.jpg" alt=""/></a>
      <div class="slide-title">
         <h4>Krishana Bhajan</h4>
      </div>
      <div class="date-city">
         <h5>Dec-19-17</h5>
         <div class="buy-tickets">
            <a href="single.php">Play Now</a>
         </div>
      </div>
   </li>
   <li>
      <a href="single.php"><img src="images/featured/a4.jpg" alt=""/></a>
      <div class="slide-title">
         <h4>Doliya Kahar</h4>
      </div>
      <div class="date-city">
         <h5>Dec-19-17</h5>
         <div class="buy-tickets">
            <a href="single.php">Play Now</a>
         </div>
      </div>
   </li>
   <li>
      <a href="single.php"><img src="images/featured/a5.jpg" alt=""/></a>
      <div class="slide-title">
         <h4>Rock Star bhoj </h4>
      </div>
      <div class="date-city">
         <h5>Dec-19-17</h5>
         <div class="buy-tickets">
            <a href="single.php">Play Now</a>
         </div>
      </div>
   </li>
   <li>
      <a href="single.php"><img src="images/featured/a6.jpg" alt=""/></a>
      <div class="slide-title">
         <h4>Piya ki pyai </h4>
      </div>
      <div class="date-city">
         <h5>Dec-19-17</h5>
         <div class="buy-tickets">
            <a href="single.php">Play Now</a>
         </div>
      </div>
   </li>
   <li>
      <a href="single.php"><img src="images/featured/a7.jpg" alt=""/></a>
      <div class="slide-title">
         <h4>Ganasha Songs </h4>
      </div>
      <div class="date-city">
         <h5>Dec-19-17</h5>
         <div class="buy-tickets">
            <a href="single.php">Play Now</a>
         </div>
      </div>
   </li>
</ul>
<script type="text/javascript">
   $(window).load(function() {
      
     $("#flexiselDemo1").flexisel({
         visibleItems: 5,
         animationSpeed: 1000,
         autoPlay: true,
         autoPlaySpeed: 3000,          
         pauseOnHover: false,
         enableResponsiveBreakpoints: true,
         responsiveBreakpoints: { 
            portrait: { 
               changePoint:480,
               visibleItems: 2
            }, 
            landscape: { 
               changePoint:640,
               visibleItems: 3
            },
            tablet: { 
               changePoint:800,
               visibleItems: 4
            }
         }
      });
      });
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!DOCTYPE HTML>
<html>
   <head>
      <title>Mosaic a Entertainment Category Flat Bootstrap Responsive Website Template | Single:: w3layouts</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
      <!-- Custom CSS -->
      <link href="css/style.css" rel='stylesheet' type='text/css' />
      <!-- Graph CSS -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- jQuery -->
      <!-- lined-icons -->
      <link rel="stylesheet" href="css/icon-font.css" type='text/css' />
      <!-- //lined-icons -->
      <!-- Meters graphs -->
      <script src="js/jquery-2.1.4.js"></script>
   </head>
   <!-- /w3layouts-agile -->
   <?php include'dbconnection.php'; ?>
   <?php include("checklogin.php");?>
   <body class="sticky-header left-side-collapsed"  onload="initMap()">
      <section>
         <!-- left side start-->
         <?php include("common/side-menu.php"); ?>
         <!-- left side end-->
         <!-- app-->
         <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog facebook" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body">
                     <div class="app-grids">
                        <div class="app">
                           <div class="col-md-5 app-left mpl">
                              <h3>Mosaic mobile app on your smartphone!</h3>
                              <p>Download and Avail Special Songs Videos and Audios.</p>
                              <div class="app-devices">
                                 <h5>Gets the app from</h5>
                                 <a href="#"><img src="images/1.png" alt=""></a>
                                 <a href="#"><img src="images/2.png" alt=""></a>
                                 <div class="clearfix"> </div>
                              </div>
                           </div>
                           <div class="col-md-7 app-image">
                              <img src="images/apps.png" alt="">
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- //app-->
         <!-- /w3l-agileits -->
         <!-- signup -->
         <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="sign-grids">
                        <div class="sign">
                           <div class="sign-left">
                              <ul>
                                 <li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
                                 <li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
                                 <li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
                              </ul>
                           </div>
                           <div class="sign-right">
                              <form action="#" method="post">
                                 <h3>Create your account </h3>
                                 <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                 <input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
                                 <input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
                                 <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
                                 <input type="submit" value="CREATE ACCOUNT" >
                              </form>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                        <p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- //signup -->
         <!-- /w3l-agile-its -->
         <!-- main content start-->
         <div class="main-content">
            <!-- header-starts -->
            <?php include("common/header.php"); ?>
            <!-- //header-ends -->
            <!-- /wthree-agile -->
            <!-- //header-ends -->
            <div id="page-wrapper">
               <div class="inner-content single">
                  <!--/music-right-->
                  <div class="tittle-head">
                     <h3 class="tittle">Single <span class="new">Page</span></h3>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="single_left">
                     <!--/video-main-->
                     <div class="video-main">
                        <div class="video-record-list">
                           <div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">


                           <?php $ret=mysql_query("select * from audios");
                                 $cnt=1;
                                 while($row=mysql_fetch_array($ret))
                                 {?>
                              <tr> <?php print_r($ret); exit(); ?>
                                 <td><?php echo $cnt;?></td>
                                 <td><?php echo $row['title'];?></td>
                                 <td><?php echo $row['album_name'];?></td>
                                 <td><?php echo $row['artist_name'];?></td>
                                 <td><?php echo $row['image'];?></td>
                                 <td><?php echo $row['audio_type'];?></td>
                                 <td><?php echo $row['file'];?></td>
                                 <td><?php echo $row['created_at'];?></td>
                                 <td><?php echo $row['updated_at'];?></td>
                                 <td>
                                    <a href="update-profile.php?uid=<?php echo $row['id'];?>"> 
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a href="manage-users.php?id=<?php echo $row['id'];?>"> 
                                    <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                                 </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>


                              <audio controls "width=560px">
                                 <source src="media/01.CHADH_GAYA_ OOPAR.mp3" type="audio/ogg">
                                 Your browser does not support the audio element.
                              </audio>
                           </div>
                        </div>
                     </div>
                     <!-- script for play-list -->
                     <link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">
                     <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
                     <script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
                     <script type="text/javascript">
                        //<![CDATA[
                        $(document).ready(function(){
                        
                        	new jPlayerPlaylist({
                        		jPlayer: "#jquery_jplayer_1",
                        		cssSelectorAncestor: "#jp_container_1"
                        	}, [
                        		
                        		{
                        			title:"1. Ellie-Goulding",
                        			artist:"",
                        			mp4: "video/Ellie-Goulding.mp4",
                        			ogv: "video/Ellie-Goulding.ogv",
                        			webmv: "video/Ellie-Goulding.webm",
                        			poster:"video/play1.png"
                        		},
                        		{
                        			title:"2. Mark-Ronson-Uptown",
                        			artist:"",
                        			mp4: "video/Mark-Ronson-Uptown.mp4",
                        			ogv: "video/Mark-Ronson-Uptown.ogv",
                        			webmv: "video/Mark-Ronson-Uptown.webm",
                        			poster:"video/play2.png"
                        		},
                        		{
                        			title:"3. Ellie-Goulding",
                        			artist:"",
                        			mp4: "video/Ellie-Goulding.mp4",
                        			ogv: "video/Ellie-Goulding.ogv",
                        			webmv: "video/Ellie-Goulding.webm",
                        			poster:"video/play1.png"
                        		},
                        		{
                        			title:"4. Maroon-Sugar",
                        			artist:"",
                        			mp4: "video/Maroon-Sugar.mp4",
                        			ogv: "video/Maroon-Sugar.ogv",
                        			webmv: "video/Maroon-Sugar.webm",
                        			poster:"video/play4.png"
                        		},
                        		{
                        			title:"5. Pharrell-Williams",
                        			artist:"",
                        			mp4: "video/Pharrell-Williams.mp4",
                        			ogv: "video/Pharrell-Williams.ogv",
                        			webmv: "video/Pharrell-Williams.webm",
                        			poster:"video/play5.png"
                        		},
                        		{
                        			title:"6. Ellie-Goulding",
                        			artist:"",
                        			mp4: "video/Ellie-Goulding.mp4",
                        			ogv: "video/Ellie-Goulding.ogv",
                        			webmv: "video/Ellie-Goulding.webm",
                        			poster:"video/play1.png"
                        		},
                        		{
                        			title:"7. Pharrell-Williams",
                        			artist:"",
                        			mp4: "video/Pharrell-Williams.mp4",
                        			ogv: "video/Pharrell-Williams.ogv",
                        			webmv: "video/Pharrell-Williams.webm",
                        			poster:"video/play5.png"
                        		}
                        	], {
                        		swfPath: "../../dist/jplayer",
                        		supplied: "webmv,ogv,mp4",
                        		useStateClassSkin: true,
                        		autoBlur: false,
                        		smoothPlayBar: true,
                        		keyEnabled: true
                        	});
                        
                        });
                        //]]>
                        	
                     </script>
                     <!-- //script for play-list -->
                     <!--//video-main-->
                     <!-- /agileinfo -->
                  </div>
                  <div class="response">
                     <h4>Responses</h4>
                     <div class="media response-info">
                        <div class="media-left response-text-left">
                           <a href="#">
                           <img class="media-object" src="images/c1.jpg" alt="">
                           </a>
                           <h5><a href="#">Username</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                           </p>
                           <ul>
                              <li>Sep 21, 2015</li>
                              <li><a href="single.html">Reply</a></li>
                           </ul>
                           <div class="media response-info">
                              <div class="media-left response-text-left">
                                 <a href="#">
                                 <img class="media-object" src="images/c2.jpg" alt="">
                                 </a>
                                 <h5><a href="#">Username</a></h5>
                              </div>
                              <div class="media-body response-text-right">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                 </p>
                                 <ul>
                                    <li>Apr 17, 2016</li>
                                    <li><a href="single.html">Reply</a></li>
                                 </ul>
                              </div>
                              <div class="clearfix"> </div>
                           </div>
                        </div>
                        <div class="clearfix"> </div>
                     </div>
                     <div class="media response-info">
                        <div class="media-left response-text-left">
                           <a href="#">
                           <img class="media-object" src="images/c3.jpg" alt="">
                           </a>
                           <h5><a href="#">Username</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                           </p>
                           <ul>
                              <li>May 21,2016</li>
                              <li><a href="single.html">Reply</a></li>
                           </ul>
                        </div>
                        <div class="clearfix"> </div>
                     </div>
                     <div class="media response-info">
                        <div class="media-left response-text-left">
                           <a href="#">
                           <img class="media-object" src="images/c4.jpg" alt="">
                           </a>
                           <h5><a href="#">Username</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                           </p>
                           <ul>
                              <li>Mar 28, 2016</li>
                              <li><a href="single.html">Reply</a></li>
                           </ul>
                           <div class="media response-info">
                              <div class="media-left response-text-left">
                                 <a href="#">
                                 <img class="media-object" src="images/c5.jpg" alt="">
                                 </a>
                                 <h5><a href="#">Username</a></h5>
                              </div>
                              <div class="media-body response-text-right">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                 </p>
                                 <ul>
                                    <li>Feb 19, 2016</li>
                                    <li><a href="single.html">Reply</a></li>
                                 </ul>
                              </div>
                              <div class="clearfix"> </div>
                           </div>
                        </div>
                        <div class="clearfix"> </div>
                     </div>
                     <div class="media response-info">
                        <div class="media-left response-text-left">
                           <a href="#">
                           <img class="media-object" src="images/c6.jpg" alt="">
                           </a>
                           <h5><a href="#">Username</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                           </p>
                           <ul>
                              <li>Jan 20, 2016</li>
                              <li><a href="single.html">Reply</a></li>
                           </ul>
                        </div>
                        <div class="clearfix"> </div>
                     </div>
                  </div>
                  <!-- /agileits -->
                  <div class="clearfix"> </div>
                  <!--//music-right-->
                  <div class="coment-form">
                     <h4>Leave your comment</h4>
                     <form action="#" method="post">
                        <input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                        <input type="email" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
                        <input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
                        <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                        <input type="submit" value="Submit Comment">
                     </form>
                  </div>
               </div>
               <!-- /w3l-agileits-->
               <!--body wrapper start-->
               <div class="review-slider">
                  <div class="tittle-head">
                     <h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
                     <div class="clearfix"> </div>
                  </div>
                  <?php include("common/footer-slider.php"); ?>
               </div>
            </div>
            <div class="clearfix"></div>
            <!--body wrapper end-->
            <!-- /w3layouts-agile -->
         </div>
         <!--body wrapper end-->
         <?php include("common/footer.php"); ?>
         </div>
         <!-- /w3layouts-agile -->
         <!--footer section start-->
         <?php include("common/copy-right.php"); ?>
         <!--footer section end-->
         <!-- main content end-->
      </section>
      <script src="js/jquery.nicescroll.js"></script>
      <script src="js/scripts.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.js"></script>
   </body>
</html>
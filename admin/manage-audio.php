<?php
   session_start();
     $mysql_hostname ="localhost";
   include'dbconnection.php';
   include("checklogin.php");
     check_login();
   if(isset($_GET['id']))
   {
      $msg=mysql_query("delete from users where id='".$_GET['id']."'");
      if($msg)
      {
      echo "<script>alert('Data deleted');</script>";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head> 
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Dashboard">
      <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
      <title>Admin | Manage Audios</title>
      <link href="assets/css/bootstrap.css" rel="stylesheet">
      <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <link href="assets/css/style.css" rel="stylesheet">
      <link href="assets/css/style-responsive.css" rel="stylesheet">
   </head>
   <body>
      <section id="container" >
         <header class="header black-bg">
            <div class="sidebar-toggle-box">
               <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">
               </ul>
            </div>
            <div class="top-menu">
               <ul class="nav pull-right top-menu">
                  <li><a class="logout" href="logout.php">Logout</a></li>
               </ul>
            </div>
         </header>
         <aside>
            <div id="sidebar"  class="nav-collapse ">
               <ul class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><a href="#"><img src="assets/img/friends/fr-05.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $_SESSION['login'];?></h5>
                  <li class="mt">
                     <a href="change-password.php">
                     <i class="fa fa-pencil-square"></i>
                     <span>Change Password</span>
                     </a>
                  </li>
                  <li class="sub-menu">
                     <a href="manage-users.php" >
                     <i class="fa fa-users"></i>
                     <span>Manage Users</span>
                     </a>
                  </li>
                  <li class="sub-menu active">
                     <a href="manage-audio.php" >
                     <i class="fa fa-music"></i>
                     <span>Manage Audio</span>
                     </a>
                  </li>
                  <li class="sub-menu">
                     <a href="manage-video.php" >
                     <i class="fa fa-youtube-play"></i>
                     <span>Manage Video</span>
                     </a>
                  </li>
               </ul>
            </div>
         </aside>
         <section id="main-content">
            <section class="wrapper">
               <h3><i class="fa fa-angle-right"></i> Manage Audio</h3>
               <div class="row">
                  <div class="col-md-12">
                     <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                           <h4><i class="fa fa-angle-right"></i> All Audios Details </h4>
                           <hr>
                           <thead>
                              <tr>
                                 <th>S.No.</th>
                                 <th class="hidden-phone">Song Title</th>
                                 <th>Album Name</th>
                                 <th>Artist / Singer</th>
                                 <th>Image</th>
                                 <th>Audio type</th>
                                 <th>Song Track</th>
                                 <th>Created Date</th>
                                 <th>Updated Date</th>
                                 <th>Actions</th>
                              </tr>
                           </thead>
                           
                           <tbody>
                              <?php $ret=mysql_query("select * from audios");
                                 $cnt=1;
                                 while($row=mysql_fetch_array($ret))
                                 {?>
                              <tr>
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
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </section>
         </section>
      </section>
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
      <script src="assets/js/jquery.scrollTo.min.js"></script>
      <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
      <script src="assets/js/common-scripts.js"></script>
      <script>
         $(function(){
             $('select.styled').customSelect();
         });
      </script>
   </body>
</html>
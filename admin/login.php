<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <link rel="icon" type="image/png" href="./images/logo.gif"/>
  <title></title>
 
  <link rel="stylesheet" type="text/css" href="./css/bstyle.css" />

<body>
  <div id="main">

	<div id="menubar">
	  <div id="welcome">
	       <h1><img src="./images/logo.gif" width="50" align="middle"/>  <a href="http://mytestweb.bugs3.com/TeamRoseAllstars/">Team Rose Allstars </a></h1>
	  </div><!--close welcome-->
     
    </div><!--close menubar-->	
    
	<div id="site_content">
           
 <?php
     include './model/database.php';

   
            ?>

           <?php 
           if(isset($_SESSION['login_in'])==TRUE)
            {        echo '<h1><a href="./view/home.php">Go to the backend home page</a></h1>';
             
            }else{
                
                    if($_SERVER['REQUEST_METHOD']!='POST'){
           
                ?>
          <form class="form_settings" method="post" action="">  
                                <fieldset>  
                               <legend>Login</legend>  
                                <table>  
                                 <tr>  
                                <td><label for="username">Username :</label></td><td><input name="userName" type="text" id="username"></td>  
                                </tr>  
                                <tr>  
                                <td><label for="password">Password :</label></td><td><input name="password" type="password" id="password" ></td>  
                                </tr>  
                                 <tr>  
                                 <td><input class="submit" type="submit" value="Log In"></td>  
                                 </tr>  
                                 </table>  
                          </fieldset>  
          </form>  

</div><!--close site_content--> 
                    <?php } else{
     $sql="SELECT 
                 userID,
                 userName,
                 userPassword
            FROM USER
            WHERE userName='".mysql_real_escape_string($_POST['userName'])."'
            AND
            userPassword='".mysql_real_escape_string($_POST['password'])."'";
     
     $result=  mysql_query($sql);
        if(!$result){
            echo 'Something went wrone while log in.Please try again later';
        }else{
            if(mysql_num_rows($result)==0){
                echo '<h3>You have supplied a wrong user/password combination. Please try again.</h3>';
            }  else {
                  
              $_SESSION['login_in']=true;
              echo '<h1><a href="./view/home.php">Go to the backend home page</a></h1>';
               while ($row=mysql_fetch_assoc($result)){
                  $_SESSION['userID']=$row['userID'];
                   $_SESSION['userName']=$row['userName'];
                    
               }
            }
        }
 }
                    
                    
            }?>
  
  </div><!--close main-->
  
  <div id="footer">
	<p class="copyright">
       Copyright &copy; <?php echo date("Y");?> Team Rose Allstars.All rights seserved.
   </p>
   <p class="copyright">If you have any questions, please feel free to email <a href="mailto:chicagotabletennisclub@gmail.com">webmaster</a>.</p>
  </div><!--close footer-->  
  
</body>
</html>

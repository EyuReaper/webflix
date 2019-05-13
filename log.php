<?php
include 'dbh.php';

if(isset($_POST['login'])){
        $uname=$_POST['uname'];
        $password=$_POST['psw'];
        if($uname!="" && $password!=""){
            $sql="SELECT id FROM user where uname='$uname'and password='$password'";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
             $count=mysqli_num_rows($result);
             if($count==1){
               session_start();
               $_SESSION['id']=$row['id'];
                header ('Location: index.html');
             } 

        }
    }
   

?>
<link rel="stylesheet"  type="text/css" href="Style/style.css">


<div id="form pop" class="modal">
  
<form class="modal-content animate" method="POST">
    <div class="imgcontainer">
    <span onclick="document.getElementById('form pop').style.display=''" class="close" title="Close Login">&times;</span>
      <img src="image/avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br>
        
      <button id="submit" type="submit" name="login">Login</button>
      <label><br>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="submit" onclick="snackbar()" class="cancelbtn">Cancel</button>
      <span class="psw">Not registered? <a href="form.php">Signup</a></span>
    </div>
  </form>
</div>
<?php   include 'ini/css_config.php'; ?>
<?php   include 'ini/mysql.php'; ?>
<?php
        $error_tag=0;
    if ($_POST['add']=="add") {
    # code...

    $name=$_POST['username'];
    $password=$_POST['password'];
  
    $sql="select * from manage_infor where user_name='".$name."'";
    $result=mysql_query($sql);
    $user_num=mysql_num_rows($result);
    if ($result&&$user_num!=0) {
        $info=mysql_fetch_array($result,MYSQL_ASSOC);
        if ($info["user_pw"]==$password&&$user_num!=0) {
            $date=date("Y-m-d h:i:s");
            $sql_date="update manage_infor set time='".$date."'where id=".$info["id"];
            $excu_date=mysql_query($sql_date);

            $_SESSION['username_m']=$name;
            $_SESSION['username']=$name;
          
             echo "<script>window.location.href='dashboard.php'; </script>";
            }else{ 
           //密码错误
                $error_tag=1;
             // alert("密码错误！");  
        }
        # code...
    }else{
        //用户名不存在
                $error_tag=2;
    }

}

?>

<body class="loginpage">
    <div class="loginbox">
        <div class="loginboxinner">
            
            <div class="logo">
                <h1 class="logo">Ama.<span>Admin</span></h1>
                <span class="slogan">后台管理系统</span>
            </div><!--logo-->
            
            <br clear="all" /><br />
            
            <div class="nousername" 
                <?php if ($error_tag==2){ ?>
                     style="display: block";
                <?php } ?>
               
            >
            <div class="loginmsg">用户不存在.</div>
            </div><!--nousername-->
            
            <div class="nopassword" <?php if ($error_tag==1){ ?>
                     style="display: block";
                <?php } ?>
                >
                <div class="loginmsg">密码不正确.</div>
                <div class="loginf">
                    <div class="thumb"><img alt="" src="images/thumbs/avatar1.png" /></div>
                    <div class="userlogged">
                        <h4></h4>
                        <a href="#">找回密码 <span></span>?</a> 
                         <a href="login_super.php">返回<span></span>?</a> 
                    </div>
                </div><!--loginf-->
            </div><!--nopassword-->
            
            
            <form id="login" action="login_super.php" method="post">
                
                <div class="username">
                    <div class="usernameinner" <?php if ($error_tag==1){ ?>
                     style="display: none";
                <?php } ?>
                >
                        <input type="text" name="username" id="username" />
                    </div>
                </div>
                
                <div class="password">
                    <div class="passwordinner">
                        <input type="password" name="password" id="password" />
                    </div>
                </div>
                <div class="button_m">
                &nbsp&nbsp&nbsp&nbsp
                <button type="submit" value="add" name="add" style=" width: 120px;">登录</button>
                &nbsp&nbsp&nbsp&nbsp
                <button  type="reset" style=" width: 120px;" onclick="javaScript:window.location.href='login.php';">切换</button>
                </div>
                
            
            </form>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->
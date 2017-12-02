<?php   include 'ini/css_config.php'; ?>
<?php   include 'ini/mysql.php'; ?>
<?php
    $error_tag=0;
    if ($_POST['stu_add']=="stu_add"||$_POST['tea_add']=="tea_add") {

    $name=$_POST['username'];
    $password=$_POST['password'];;
    // //提交之后 接受帐号 密码
    if ($_POST['stu_add']=="stu_add") {
      $sql="select * from stu_infor where stu_xh='".$name."'";
      //学生登录查询学生编号
   
    }

    if ($_POST['tea_add']=="tea_add") {
        $sql="select * from teacher_login_infor where teacher_bh='".$name."'";
      
        //教师登录查询教室编号
    }
    
    $result=mysql_query($sql);
    // if ($result) {
    //     echo "语句正确";
    //       $info=mysql_fetch_array($result);
    //      echo $info['id'];
    //     # code...
    // }
    $user_num=mysql_num_rows($result);

    if ($result&&$user_num!=0) {
        $info=mysql_fetch_array($result);
      
    
        if ($_POST['stu_add']=="stu_add") {
            $bh=$info['stu_pw'];
            $login_name=$info['stu_name'];
            // 提取学生登录口令
            
        }

        if ($_POST['tea_add']=="tea_add") {
            $bh=$info['teacher_pw'];
            $id=$info['id'];

            $login_name=$info['teacher_name'];
            //提取教师ID和教师登录口令
        }

        
    //     echo $data;
    //     echo "</br>";

        if ($bh==$password&&$user_num!=0) {
           $_SESSION['username']=$login_name;
            //登录成功
            if ($_POST['tea_add']=="tea_add") {
            $date=date("Y-m-d h:i:s");
            $sql_date="update teacher_login_infor set login_time='".$date."'where id=".$id;
            $excu_date=mysql_query($sql_date);
            $_SESSION['username_t']=$login_name;
         
            echo "<script>window.location.href='dashboard_t.php'; </script>";
            }else{
            $_SESSION['stu_xh']=$name;
            $_SESSION['username_s']=$login_name;
          
            echo "<script>window.location.href='dashboard_s.php?stu_xh=$name'; </script>";
          
            }
        }else{ 
           //密码错误
                $error_tag=1;
             // alert("密码错误！");  
        }
    }else{
        //用户名不存在
                $error_tag=2;
    } 
    // 验证用户存在结束

}
// 验证结束

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
            <?php if ($error_tag==2){ ?> style="display: block"; <?php } ?> >
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
                         <a href="login.php">返回<span></span>?</a> 
                    </div>
                </div><!--loginf-->
            </div><!--nopassword-->
            
            
            <form id="login" action="login.php" method="post">
                
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
                <button type="submit" value="stu_add" name="stu_add" style=" width: 120px;">学生登录</button>
                &nbsp&nbsp&nbsp&nbsp
                <button type="submit" value="tea_add" name="tea_add" style=" width: 120px;">教师登录</button>
                </div>
                
            
            </form>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->
<?php include 'ini/config.php' ?>


<title>成绩管理系统</title>
<body class="withvernav">
    <div class="header">
        <ul class="headermenu">
            <li class="current"><a href="#"><span class="icon icon-flatscreen"></span>首页</a></li>
            <li><a href="#"><span class="icon icon-pencil"></span>博客管理</a></li>
            <li><a href="#"><span class="icon icon-message"></span>查看消息</a></li>
            <li><a href="#"><span class="icon icon-chart"></span>统计报表</a></li>
        </ul> 
    </div><!--header-->
    <div class="vernav2 iconmenu">
        <ul>
            <li><a href="#formsub" class="editor">学生管理</a>
                <span class="arrow"></span>
                <ul id="formsub">
                    <li><a href="stu_page.php">查找学生</a></li>
                    <li><a href="stu_add.php">添加学生</a></li>
                </ul>
            </li>
            <!--<li><a href="filemanager.html" class="gallery">文件管理</a></li>-->
            <li><a href="#elements" class="elements">查看班级</a>
             <span class="arrow"></span>
                  <ul id="elements">
                 <?php   include 'ini/mysql_select.php'; ?>
                  <?php $calss_excu=mysql_query($class_sql);
                    while ($class_info=mysql_fetch_array($calss_excu)) {
                    ?>
                    <li><a href="class_page.php?class_bh=<?php echo $class_info['class_bh']; ?>&class_name=<?php echo $class_info['class_name'];?>" > <?php echo $class_info["class_name"];?></a></li>
                    <?php }?> 
                    
                  </ul>
            </li>
            <li><a href="#widgets" class="widgets">教师管理</a>
                <span class="arrow"></span>
                <ul id="widgets">
                    <li><a href="tea_page.php">查看教师</a></li>
                </ul>
            </li>
            <li><a href="#calendar" class="calendar">课程管理</a>
                <span class="arrow"></span>
                <ul id="calendar">
                    <li><a href="lesson_page.php">查看课程</a></li>
                </ul>
            </li>
          
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
        <br clear="all" />
</body>
</html>

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
            <li><a href="#formsub" class="editor">学生信息</a>
                <span class="arrow"></span>
                <ul id="formsub">
                  
                    <li><a href="stu_score_s.php?stu_xh=<?php echo $_SESSION['stu_xh'];?>">学生成绩</a></li>
                    <li><a href="#">注册信息</a></li>
                </ul>
            </li>
            <!--<li><a href="filemanager.html" class="gallery">文件管理</a></li>-->
            <li><a href="#widgets" class="widgets">网上选课</a>
                <span class="arrow"></span>
                <ul id="widgets">
                    <li><a href="#">正选</a></li>
                     <li><a href="#">补选</a></li>
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

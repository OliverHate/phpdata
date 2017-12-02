<?php 
    include 'mysql.php';

     $surname=array(
                0=>"赵",
                1=>"钱",
                2=>"孙",
                3=>"李",
                4=>"周",
                5=>"吴",
                6=>"王",
                7=>"卫",
                8=>"邹",
                9=>"胡",
        );
        $fame1=array(
                0=>"宝",
                1=>"俊",
                2=>"春",
                3=>"囯",
                4=>"子", 
                5=>"庆",
                6=>"婕",
                7=>"家",
                8=>"紫",
                9=>"可",
                10=>"思",
                11=>"东",
                12=>"一",
                13=>"艾",
                14=>"安",
                15=>"之",
                16=>"文",
                17=>"沐",
                18=>"言",
                19=>"伊",
                20=>"青",
            );
    for ($i=5; $i <8 ; $i++) {
        $tea_bh1="201".$i;
        for ($m=1; $m <6 ; $m++) { 
             $tea_bh2="0".$m;
             $tea_bh=$tea_bh1.$tea_bh2;
            $name=$surname[rand(0,9)].$fame1[rand(0,20)];
            $sql="INSERT INTO teacher_login_infor(teacher_bh,teacher_name,teacher_pw)  VALUES ('".$tea_bh."','".$name."','".$tea_bh."')";
            $ecxu=mysql_query($sql);
            if ($ecxu) {
                echo "插入成功";
                echo $name.$tea_bh;

                    # code...
            }else{
                echo "插入失败";
                echo $name.$tea_bh;

            }
            echo "</br>";
         

         } 
        # code...
    }


?>
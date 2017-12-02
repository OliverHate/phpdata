<?php  include 'mysql.php';

    $score_s_1=array(
                1=>"6",
                2=>"7",
                3=>"8",
                4=>"9",

        );
        $score_s_2=array(
                0=>"0",
                1=>"1",
                2=>"2",
                3=>"3",
                4=>"4",
                5=>"5",
                6=>"6",
                7=>"7",
                8=>"8",
                9=>"9",
                
        );
        
      for ($i=1; $i <901 ; $i++) {
        $score_s=$score_s_1[rand(1,4)].$score_s_2[rand(0,9)];
        $score=(int)$score_s;
          $sql="UPDATE score_infor SET score='".$score."' where id =".$i;
                $excu=mysql_query($sql); 

                if ($excu) {
                     echo "success".$i;
                    echo "</br>";
                    # code...
                }
          # code...
      }



?>
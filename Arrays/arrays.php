<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $students = [
        ["name" =>"Jeff",
         "age"  => 23,
         "test1"=> 59,
         "test2"=> 89,
         "test3"=>50
      ],
        ["name" =>"Qwaw",
         "age"  => 22,
         "test1"=> 69,
         "test2"=> 79,
         "test3"=>55
    ],
        ["name" =>"Saviour",
         "age"  => 22,
         "test1"=> 80,
         "test2"=> 90,
         "test3"=>45
],
        ["name" =>"Sheriff",
         "age"  => 24,
         "test1"=> 70,
         "test2"=> 67,
         "test3"=>66
],
        ["name" =>"Stephen",
         "age"  => 23,
         "test1"=> 88,
         "test2"=> 89,
         "test3"=>77
        ]
];     
   
echo time(). "<br>";
      foreach ($students as $row){
          $name = $row["name"];
          $age = $row["age"];
          $test1 = $row["test1"];
          $test2 = $row["test2"];
          $test3 = $row["test3"];
          $average = round(($test1 + $test2 +$test3)/3,2);;

        if ( $average >= 90 && $average <= 100){
          $grade = "A";
        }elseif( $average >= 80 && $average <= 89){
          $grade = "B";
        }elseif( $average >= 70 && $average <= 79){
          $grade = "C";
        } elseif( $average >= 60 && $average <= 69){
          $grade = "D";
        } elseif( $average >= 0 && $average <= 59){
          $grade = "F";
        }else echo "invalid grade";

        echo "Name:" .$name." | Age: ".$age." |Average: ".$average." | Grade: ".$grade."<br>";
       
      }
       echo $_SERVER['REMOTE_ADDR'];
    ?>
</body>
</html>
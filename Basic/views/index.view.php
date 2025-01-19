<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr = [1, 2, 3, 4];
        $arr2 = [
            [
                "name" => "Prabin",
                "age" => 21
            ], [
                "name" => "Joshi",
                "age" => 22
            ]
        ];
        echo $arr[0]. "<br>";
        foreach($arr as $value){
            echo $value + 2 . "<br>";
        }
        foreach ($arr2 as $value){
            echo $value["name"] . "<br>"; 
        }
        

        $movies = [
            [
              'title' => 'The Shawshank Redemption',
              'director' => 'Frank Darabont',
              'year' => 1994
            ],
            [
              'title' => 'The Godfather',
              'director' => 'Francis Ford Coppola',
              'year' => 1972
            ],
            [
              'title' => 'The Dark Knight',
              'director' => 'Christopher Nolan',
              'year' => 2008
            ], [
              'title' => 'The Godfather: Part II',
              'director' => 'Francis Ford Coppola',
              'year' => 1974
            ]
          ];
          
          function filter ($movies){
            $result = [];
            foreach ($movies as $movie){
                if ($movie ['year'] < 2000){
                    // echo "{$movies["title"]} - {$movies["director"]} - {$movies["year"]}<br>"; 
                    $result[] = $movie;
                }
            };
            return $result;
          }

          $result = filter($movies);

          foreach ($result as $movie){
            echo "{$movie["title"]} - {$movie["director"]} - {$movie["year"]} <br>";
          }

          

    ?>
</body>
</html>
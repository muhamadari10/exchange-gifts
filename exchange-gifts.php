
<?php
// $x = array("red","green","blue");
// $xx = array("red","green","blue");
$x = array("red","green","blue","yellow","purple","brown");
$xx = array("red","green","blue","yellow","purple","brown");
$noel = 0;
$cde = abc($x,$xx);



function abc($my_array,$my_arrays){
    $no = 0;
    $except = [
        [
            'x' => 'yellow',
            'y' => 'purple'
        ],
        [
            'x' => 'yellow',
            'y' => 'red'
        ],
        [
            'x' => 'yellow',
            'y' => 'green'
        ],
        [
            'x' => 'yellow',
            'y' => 'blue'
        ],
    ];


    $abcde = $my_arrays;
    shuffle($abcde);
    foreach ($my_array as $key => $val) {
        
        if($val == $abcde[$key]){
            
        }else{
            $exceptValid = false;
            $exceptValidABC = "";

            foreach ($except as $ke => $ve) {
                $exceptValid = false; 
                // echo "Normal ".$val." = ".$abcde[$key];
                // echo "<br>";
                // echo "Except ".$ve['x']." = ".$ve['y'];
                // echo "<br>";
                if($val == $ve['x'] && $abcde[$key] == $ve['y']){
                      // green gak boleh dapet blue
                      $exceptValidABC = "ExceptValid ".$ve['x']." != ".$ve['y'];
                        echo "<br>";
                        echo "===========================================";
                        echo "<br>";
                        echo "Exception > ".$exceptValidABC;
                        echo "<br>";
                        echo "===========================================";
                        echo "<br>";
                    $exceptValid = false; 
                }else{
                    $exceptValidABC = "ExceptValid ".$ve['x']." = ".$ve['y'];
                    $exceptValid = true; 
                }
            }

            if($exceptValid){
                echo "default > ".$val." = ".$abcde[$key];
                echo "<br>";
                echo $exceptValid ? "exceptValid true" : "exceptValid false";
                echo "<br>";
                echo $exceptValidABC;
                echo "<br>";
                $no += 1;
            }
        }
    }

    if(count($my_array) == $no){
        echo "sukses ".$no;
        echo "<br>";
        echo "<br>";
        echo "<br>";
        foreach ($my_array as $k => $v) {
            echo $v." = ".$abcde[$k];
            echo "<br>";
        }

        return [
            $abcde,$my_array
        ];
    }else{
        echo "gagal ".$no;
        echo "<br>";
        abc($my_array,$my_arrays);
    }
    
}


?>

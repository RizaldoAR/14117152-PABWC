<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="Bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="./style.css">   
    <title>
            latihan 3
        </title>
    </head>
    <body>
        <form action="" method="GET">
        <div class="form-group">
            <label for="nilai">Nilai:</label>
            <input type="text" class="form-control" name="nilai" >
          </div>
          <input type="submit" name="submit" value="Submit"> 
        </form>
    <?php
        
        
        function faktorial (&$nilai){
            $cons=1;
            for($i = 1; $i <= $nilai; $i++){
                $cons = $cons * $i;
            }
            $nilai =  $cons;
            
        }
       echo " Nilai faktorial = ";
       $nilai =$_GET['nilai'];
        faktorial($nilai);
        echo $nilai;
       ?>
    

        

    </body>
    
</html>
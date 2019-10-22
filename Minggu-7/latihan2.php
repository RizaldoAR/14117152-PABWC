<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="Bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="./style.css">
        <title>
            Fungsi menghitung nama bet
        </title>
        
    </head>
    <body>
        <form action="" method="GET">
        <div class="form-group">
            <label for="nama">Name:</label>
            <input type="text" class="form-control" name="nama" >
          </div>
          
          
          <div class="form-group">
            <label for="color">Warna:</label>
            <input type="text" class="form-control" name="color"  >
          </div>
          
          <input type="submit" name="submit" value="Submit"> 
    
	</div>
        </form>
        <?php
        
       

        function namabet ($name, $warna= "red"){
            $jmlh=strlen($name);
            if ($jmlh<=10){
                $jmlh = $jmlh*300;
            }
            elseif ($jmlh>10 and $jmlh<=20) {
                $jmlh = $jmlh*500;
            
            }elseif ($jmlh>20) {
                $jmlh = $jmlh * 700;
            }
            echo "Harga bet anda : Rp. $jmlh";
            echo "<br>";
            echo '<font color="'.$warna.'">'.$name.'</font><br>';
        }
    namabet($_GET['nama'],$_GET['color']);

    ?>


        

        
    
    

    </body>
</html>
<!DOCTYPE html>
<head>
<title>
 FORM DATA DIRI </title>
  <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="Bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="./style.css"> </head>
<html>
<body>

<form action="tugasdirumahtampil.php" method="POST">

<div class="form-group">
            <label for="nama">Name:</label>
            <input type="text" class="form-control" name="nama" >
          </div>

          <label for="nama">Alamat:</label>
            <input type="text" class="form-control" name="alamat" >
          </div>

Jenis Kelamin         :
<div class="form-check">
    <input type="radio" class="form-check-input" name="jenis_kelamin" if (isset($gender) && $gender=="female") echo "checked" value="Perempuan">Perempuan
    </div> 
    <div class="form-check">   
    <input type="radio" class="form-check-input" name="jenis_kelamin" if (isset($gender) && $gender=="male") echo "checked" value="Laki-laki">Laki-laki
    </div>
    <br><br>
<label>Golongan Darah :   </label> 
  <select name="golongan_darah">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
      <option value="O">O</option>
    </select> <br><br>
<label>Hobi :</label><br>
    <input type="checkbox" name="hobi[]" value="Rebahan">Rebahan<br>
    <input type="checkbox" name="hobi[]" value="Lying">Lying<br>
    <input type="checkbox" name="hobi[]" value="Idle on bed">Idle on bed<br><br>
<label>Keterangan: </label><br>
<textarea name="keterangan" rows="6" cols="500"></textarea><br>
<input type="submit">
</form>
</body>
</html>
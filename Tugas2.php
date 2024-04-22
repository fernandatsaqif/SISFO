<?php
//array tanpa index
$arrayData = array("Nando",19,"Ponorogo");

//array dengan index
$arrayInfo = array(
	"nama" => "Ali",
	"umur" => 30,
	"asal" => "Trenggalek"
);

//array untuk baris pertama tabel
$arrayBaru = array(
    "nama" => "Ali",
    "tempat" => "Jakarta",
    "tanggal" => "1 Februari 2004",
    "telpon" => "0981234",
    "agama" => "Islam"
);

//array tambahan untuk 2 dimensi
$arrayModel1 = array(
    "nama" => ["Ali","Adi"],
    "tempat" => ["Jakarta","Surabaya"],
    "tanggal" => ["17 Mei 1995","01 Oct 2002"],
    "telpon" => ["081234567890","0923"],
    "agama" => ["Kristen","islam"]
);    

//menambahkan array tanpa index
$arrayData[]="Databaru";
$arrayData[]="Databaru";
$arrayData[]="Databaru";

//menambahkan array dengan index
$arrayInfo["Telepon"]= 98;


//menghitung isi arrayData dan arrayInfo
/*echo "<h2>menghitung isi array</h2>";
echo count($arrayData);
echo '<br>';
echo count($arrayInfo);
echo '<br>';
*/

//tampilkan arrayData ke - 0 dan arrayInfo "umur"
echo "<h2>TUGAS 1</h2>";

echo 'arrayData : '.$arrayData[0];
echo '<br>';
echo 'arrayInfo : '.$arrayInfo["umur"];
echo '<br>';

//tampilkan semua isi arrayData
echo "<h2>TUGAS 2</h2>";
foreach ($arrayData as $aD){ 
	echo "$aD <br>";
}

//Taruh kodingan HTML tugas form dibawah
echo "<h2>TUGAS 3</h2>";

?>
<!DOCTYPE html>
<html>
<head>
  <title>TUGAS 2 - Data Formulir + PHP</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="image">
        <img src="LOGO SD.png" alt="logo" class="center">
    </div>

    <fieldset>
        <legend><h1>Formulir Pendaftaran Siswa</h1></legend>
    
    <form>
        <table>
            <tr>
                <td>Nama Calon Siswa </td> 
                <td>:</td> 
                <td><input type="text" name="Nama Calon Siswa"></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir </td> 
                <td>:</td> 
                <td><input type="text" name="Tempat/Tanggal Lahir"><input type="date"></td>
            </tr>
            <tr>
                <td>Agama</td> 
                <td>:</td>
                <td><select>
                    <option value="option1">Islam</option>
                    <option value="option2">Kristen</option>
                    <option value="option3">Hindu</option>
                    <option value="option4">Budha</option>
                    <option value="option5">Khongucu</option>
                </select></td>
            </tr>
            <tr>
                <td>Alamat</td> 
                <td>:</td> 
                <td><textarea id="Alamat" name="Alamat" rows="5" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>No. Telepon/Hp</td>
                <td>:</td>
                <td><input type="number" name="No. Telepon"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td> 
                <td><input type="radio" name="JK" value="1" required> Pria 
                <input type="radio" name="JK" value="2"required> Wanita</td>
            </tr>
            <tr> 
                <td>Hobi</td>
                <td>:</td> 
                <td><input type="checkbox" name="Hobi" value="1"/> Membaca 
                <input type="checkbox" name="Hobi" value="2"/> Menulis 
                <input type="checkbox" name="Hobi" value="3"/> Olahraga</td>
            </tr>
            <tr>
                <td>Pas foto</td>
                <td>:</td>
                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>
    
            <tr>
                <td><input type="submit" value="SUBMIT"/></td>
             </tr>
        </table> 
    </fieldset>
    </form>


    <!-- //Ganti Baris Paling Atas dengan data pada Array di PHP -->
    <h2>TUGAS 4</h2>
    <h2>Data Pendaftaran Siswa</h2>
    <table class="Data">
            <tr>
                <th rowspan="2" width="20%">Nama</th>
                <th colspan="2" width="40%">Lahir</th>
                <th rowspan="2" width="20%">No Telpon</th>
                <th rowspan="2" width="20%">Agama</th>
            </tr>
            <tr>
                <th>Tempat</th>
                <th>Tanggal</th>
            </tr>
            </tr>


            <tr>
                <td class="Data"><?php echo $arrayModel1 ["nama"][0]; ?></td>
                <td class="Data"><?php echo $arrayModel1 ["tempat"][0]; ?></td>
                <td class="Data"><?php echo $arrayModel1 ["tanggal"][0]; ?></td>
                <td class="Data"><?php echo $arrayModel1 ["telpon"][0]; ?></td>
                <td class="Data"><?php echo $arrayModel1 ["agama"][0]; ?></td>
            </tr>

            <tr>
                <td class="Data"><?php echo $arrayModel1 ["nama"][1]; ?></td>
                <td class="Data"><?php echo $arrayModel1 ["tempat"][1]; ?></td>
                <td class="Data"><?php echo $arrayModel1 ["tanggal"][1]; ?></td>
                <td class="Data"><?php echo $arrayModel1 ["telpon"][1]; ?></td>
                <td class="Data"><?php echo $arrayModel1 ["agama"][1]; ?></td>
            </tr>

            <tr>
                <td class="Data">Ahmad</td>
                <td class="Data">Surabaya</td>
                <td class="Data">1 Januari 2001</td>
                <td class="Data">081712615</td>
                <td class="Data">Islam</td>
            </tr>
            <tr>
                <td class="Data">Yusuf</td>
                <td class="Data">Semarang</td>
                <td class="Data">3 Januari 2002</td>
                <td class="Data">083619276</td>
                <td class="Data">Islam</td>
            </tr>
    </table>

    <footer>
        <p>&copy; 2024 Fernanda Tsaqif. <br> Hak Cipta Dilindungi Undang-Undang.</p>
    </footer>

    
</body>
</html>



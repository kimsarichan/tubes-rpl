 <?php
include "../koneksi.php";
if(isset($_GET['nama'])){
       $nama=$_GET['nama'];
   }else{
       $nama="";
   }
   $no=1;
   $select=mysql_query("select*from pasien where nama like '%$nama%' order by idPasien asc");
   while($data=mysql_fetch_array($select)){
        if($data['jenisKelamin']=="l"){
          $jenisKelamin="Laki-laki";
        }else if($data['jenisKelamin']=="p"){
          $jenisKelamin="Perempuan";
        }
        echo "<tr>
        <td>".$no."</td>
        <td>".$data['nama']."</td>
        <td >".$jenisKelamin."</td>
        <td >".$data['umur']."</td>
        <td>".$data['diagnosis']."</td>
        </tr>";
        $no++;    
    }
?>
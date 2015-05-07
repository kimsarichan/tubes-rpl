 <?php
include "../koneksi.php";
if(isset($_GET['nama'])){
       $nama=$_GET['nama'];
   }else{
       $nama="";
   }
   $select=mysql_query("select*from pasien where nama like '%$nama%' order by idPasien asc");
   while($data=mysql_fetch_array($select)){
        echo "<tr>
        <td>".$no."</td>
        <td>".$data['nama']."</td>
        <td >".$data['jenisKelamin']."</td>
        <td ></td>
        <td></td>
        </tr>";    
    }
?>
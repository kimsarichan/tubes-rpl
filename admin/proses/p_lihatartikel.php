<?php
include "../koneksi.php";
   $query2=mysql_query("select nip from perawat where otoritas='admin' LIMIT 1");
   $no=1;
   $select=mysql_query("select*from artikel ");
   while($data=mysql_fetch_array($select)){
        echo "<tr>
        <td>".$no."</td>
        <td>".$data['Judul']."</td>
        <td >".$data['isi']."</td>
        </tr>";
        $no++;    
    }
?>
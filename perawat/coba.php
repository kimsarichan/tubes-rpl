 <?php
include "../koneksi.php";
$select=mysql_query("SELECT DAYNAME(tanggaljam) as hari, date_format(tanggaljam, '%e-%M-%Y') as tanggal, date_format(tanggaljam,'%H:%i') as jam, namaruang
                    from jadwal join memiliki using (idjadwal)
                    join ruang using(noruang)
                    where tanggaljam>=NOW()");
while($data=mysql_fetch_array($select)){
  "<tr>
    <td>$data[hari]</td>
    <td>$data[tanggal]</td>
    <td >$data[jam]</td>
    <td >$data[namaruang]</td>
  </tr>";
}
?>
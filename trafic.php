<html>
<head>
   <title>Visitor Counter</title>
</head>

<body>
   <h1 align="center">Statistik Pengunjung</h1>
   <h2>
      <?php
		error_reporting(0);
         include "rgx.php";
 
         $ip = gethostbyaddr($_SERVER['REMOTE_ADDR']);
         $tanggal = date("Ymd");
         $waktu = time();
         $bln=date("m");
         $tgl=date("d");
         $blan=date("Y-m");
         $thn=date("Y");
         $tglk=$tgl-1;
         $s = mysql_query("SELECT * FROM visitor WHERE ip='$ip' AND tanggal='$tanggal'");

         if(mysql_num_rows($s) == 0)
         {
            mysql_query("INSERT INTO visitor(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
         }
         else
         {
          mysql_query("UPDATE visitor SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");

             if($tglk=='1' | $tglk=='2' | $tglk=='3' | $tglk=='4' | $tglk=='5' | $tglk=='6' | $tglk=='7' | $tglk=='8' | $tglk=='9'){
                $kemarin=mysql_query("SELECT * FROM visitor WHERE tanggal='$thn-$bln-0$tglk'");
             } else {
                $kemarin=mysql_query("SELECT * FROM visitor WHERE tanggal='$thn-$bln-$tglk'");
             }

             $bulan=mysql_query("SELECT * FROM visitor WHERE tanggal LIKE '%$blan%'");
             $bulan1=mysql_num_rows($bulan);
             $tahunini=mysql_query("SELECT * FROM visitor WHERE tanggal LIKE '%$thn%'");
             $tahunini1=mysql_num_rows($tahunini);
             $pengunjung = mysql_num_rows(mysql_query("SELECT * FROM visitor WHERE tanggal='$tanggal' GROUP BY ip"));
             $totalpengunjung = mysql_result(mysql_query("SELECT COUNT(hits) FROM visitor"), 0);
             $hits = mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday FROM visitor WHERE tanggal='$tanggal' GROUP BY tanggal"));
             $totalhits = mysql_result(mysql_query("SELECT SUM(hits) FROM visitor"), 0);
             $bataswaktu = time() - 900;
             $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM visitor WHERE online > '$bataswaktu'"));
             $kemarin1 = mysql_num_rows($kemarin);
          }

           echo " <table width='100%' border='0' background='white' valign='center'>
              <tbody>
                 <tr>
                    <td width='100' align='right' valign='middle'></td>
                    <td width='86' align='left' valign='middle'> Hari Ini</td>
                    <td width='82' align='left' valign='middle'>: $pengunjung</td>
                 </tr>
                 <tr>
                    <td align='right' valign='middle'></td>
                    <td align='left' valign='middle'>Kemarin</td>
                    <td align='left' valign='middle'>: $kemarin1</td>
                 </tr>
                 <tr>
                    <td align='right' valign='middle'></td>
                    <td align='left' valign='middle'>Bulan ini </td>
                    <td align='left' valign='middle'> : $bulan1</td>
                 </tr>
                 <tr>
                    <td align='right' valign='middle'></td>
                    <td align='left' valign='middle'>Tahun ini </td>
                    <td align='left' valign='middle'>: $tahunini1</td>
                 </tr>
                 <tr>
                    <td align='right' valign='middle'></td>
                    <td width='98' align='left' valign='middle'>Total</td>
                    <td width='138' align='left' valign='middle'>: $totalhits</td>
                 </tr>
                 <tr>
                    <td align='right' valign='middle'></td>
                    <td align='left' valign='middle'>Hits Count </td>
                    <td align='left' valign='middle'>: $hits[hitstoday]</td>
                 </tr>
                 <tr>
                    <td align='right' valign='middle'></td>
                    <td width='98' align='left' valign='middle'>Now Online</td>
                    <td width='138' align='left' valign='middle'>: <b>$pengunjungonline</b> User</td>
                 </tr>
              </tbody>
           </table>";
        ?>
    </h2>
<body>
</html>
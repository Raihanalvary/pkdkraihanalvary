<html>                            
<head>
       <title>PENDAFTARAN KURSUS SECARA ONLINE</title>
</head>
<body bgcolor=#FFFFFF>
<form action = "output.php" method = "GET">
<h1>FORMULIR PENDAFTARAN KURSUS ONLINE </h1>
<marquee behavior="alternate"><b><i>Jl. Cut Mutiah Bekasi Timur <br></i></b>
</marquee><hr color = red>
<table width = 50% border = 2 bgcolor=white>
<tr>
<td>NAMA</td>
<td align=center>: </td>
<td><input type = "text" name = "nama" size = 25 maxlength = 30><br></td>
</tr>
<tr>
<td>ALAMAT EMAIL</td>
<td align=center>: </td>
<td> <input type = "text" name = "alamat" size = 25 maxlength = 30><br></td>
</tr>
<tr>
<td>TEMPAT LAHIR</td>
<td align=center>: </td>
<td><input type = "text" name = "tempat" size = 25 maxlength = 30><br></td>
</tr>
<tr>
<td>TGL LAHIR</td>
<td align=center>: </td>
<td>
<?php
echo"<select name=tgl>";
for($a=1;$a<=31;$a++)
  {
      echo"<option value=$a>$a</option>";
  }
  echo"</select>";
?>
<?php
echo"<select name=bln>";
$bln=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
foreach($bln as $b)
  {
      echo"<option value=$b>$b</option>";
  }
  echo"</select>";
?>
<?php
echo"<select name=thn>";
for($a=1956;$a<=2020;$a++)
  {
      echo"<option value=$a>$a</option>";
  }
  echo"</select>";
?>
</td><br>
<tr>
<td>SEKOLAH
<td align=center>: </td>
<td><input type = "text" name = "sekolah" size = 25 maxlength = 30><br></td>
</tr>
<tr>
<td>PAKET
<td align=center>: </td>
<td><select name=paket>
                 <option>VB Fundamental</option>
                 <option>VB Advance</option>
                 <option>Foxpro</option>
                 <option>Web 1</option>
                 <option>Delphi</option>
                 </select></td>
</tr>
</table>
</pre>
<hr color = red>
<input type = "submit" name = "cetak" value = "CETAK">&nbsp;&nbsp;&nbsp;
<input type = "reset" name = "reset" value = "BATAL">
<hr color = red></form>
</body>
</html>

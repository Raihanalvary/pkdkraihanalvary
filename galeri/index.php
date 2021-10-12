<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload gambar</title>
</head>
 
<body>
<p>
<a href="index.php">depan</a> | <a href="galeri.php">galeri</a>
</p>
<form action="upload.php" enctype="multipart/form-data" method="post">
<table border="0">
<tr>
    <td>Judul</td>
    <td><input type="text" name="judul" />
    </td>
</tr>
<tr>
    <td>Gambar</td>
    <td><input type="file" name="userfile" size="40" /></td>
</tr>
<tr>
    <td><input type="submit" name="submit" value="Unggah" /></td>
    <td></td>
</tr>
<input type="hidden" name="MAX_FILE_SIZE" value="2000000" /> <!-- dalam byte {2000000b = 2Mb} -->
</form>
</body>
</html>
<div class="content";
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style2.css">
 <link href="metro.css" rel="stylesheet">  
       
   <script src="metro.js"></script>
   <script src="jquery-latest.min.js"></script>
<script>
var refreshId = setInterval(function()
{
$('#responsecontainer').load('oo.php');
}, 1000);
var refreshId = setInterval(function()
{
$('#responsecontainer1').load('oo1.php');
}, 1000);
</script>
<style>
* {
	
  box-sizing:border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  padding: 10px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-50 {
  float: left;
  width: 50%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-50 {
    width: 100%;
    text-align: center;
  }
  .lingkaran1{
  	margin:auto;
  }
  img {
    margin: auto;
  }
}
table.scroll {width:100%;border:1px #a9c6c9 solid;font:12px verdana,arial,sans-serif;color:#333333;}
table.scroll thead {display:table;width:100%;}
table.scroll tbody {display:block;height:330px;overflow:auto;float:center;width:100%;}
table.scroll tbody tr {display:table;width:100%;}
table.scroll th, td {width:20%;padding:5px;}
table.scroll th {background-color:#336600;color:#ffffff;}
table.scroll tr:hover td {background:#a0a0a0;color:#ffffff;}
table.scroll tr:nth-child(odd) {background-color:#c0c0c0;}
table.scroll tr:nth-child(even) {background-color:#f0f0f0;}

</style>
</head>
<body>


			
<!-- The App Section -->
</div>
<!--- iki gawe Tabel --->
<div class="content">
  <div class="row" style="float:center">
      
      <div class="column-50">
	<div style="text-align:center">
 
        <div class="header1">
  	<h2>Demineral</h2>
	</div>
  </div>
  <form action="simpan.php" method="post">
  <div class="container" style="text-align:center;width:100%">
       <h2>PH</h2>
  	<div class="lingkaran1">
  	<h1><div id="responsecontainer" style="text-align:center;font-size:68px;font-family:Cambria;font-style:italic"> </h1>
	</div></div>
	<div class="input-group">
	 <button type="submit" class="btn" name="simpan3" style="width:100px">Isi</button>
	 <button type="submit" class="btn" name="simpan4" style="width:100px">Buang</button>
	</div>
	
  </form>
  
</div>  

      
      
    <div class="column-50">
	    <div style="text-align:center">
            <div class="header1">
  	        <h2>Asam Sulfat</h2>
	        </div>
        </div>
        <form action="simpan.php" method="post">
            <div class="container" style="text-align:center;width:100%;">
                 <h2>PH</h2>
  	            <div class="lingkaran1">
  	                <h2> <div id="responsecontainer1" style="text-align:center;font-size:68px;font-family:Cambria;font-style:italic"></h2>
	                    </div>
	           </div>
	        <div class="input-group">
            	 <label>Asam Sulfat</label> 
            	 <input class="numberbox" name="asm" type="number"  style="width:40%;">
            	 <button type="submit" class="btn" name="simpan1">Simpan</button>
            </div>
	        <div class="input-group">
	             <label>Basa</label> 
	            <input class="numberbox" name="bs" type="number"  style="width:40%;">
	            <button type="submit" class="btn" name="simpan2">Simpan</button>
	        </div>
        </form>
    </div>

    
</tbody>
</table>
  </div>
    
</div>
  </div>
</div>



</body>

</html>	
	

	

</div>
	

</body></div>
</div>
</html>
ßß
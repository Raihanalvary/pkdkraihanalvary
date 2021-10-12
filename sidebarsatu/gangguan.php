<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    body{
      background-image:url(back.jpg);
      background-size:cover;
      background-attachment:fixed;
	  position:fixed;
    }
    .content{
      background:white;
      width: 20%;
      margin: 200px auto;
    }
    </style>
  </head>
  <body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
    <a href="#"><i class="fas fa-bars"></i><span> Menu</span></a>
      <a href="gangguan.php"><i class="fas fa-desktop"></i><span>Gangguan</span></a>
    </div>
    <!--sidebar end-->
    <div class="content">
    <center>
   <table border="2" bgcolor=white width=780px>
        <tr>
			 <th width=50px height="40px">No</th>
		   <th width=500px>Id Gangguan</th>
			 <th width=700px>Nama</th>
			 <th width=900px>Alamat</th>
       <th width=900px>Aksi</th>
		</tr>
        <tr>
			 <th width=100px height="40px"></th>
		   <th width=100px></th>
			 <th width=100px></th>
			 <th width=100px></th>
       <th width=100px><button><input value="terima" type="submit"></th>
		</tr>
        <tr>
			 <th width=100px height="40px"></th>
		   <th width=100px></th>
			 <th width=100px></th>
			 <th width=100px></th>
       <th width=100px><button><input value="proses" type="submit"></th>
		</tr>
    <form action="diagnosa.php" method="post">
    <tr>
			 <th width=100px height="40px"></th>
		   <th width=100px></th>
			 <th width=100px></th>
			 <th width=100px></th>
       <th width=100px></th>
		</tr>
     	<?php
		include 'koneksi.php';
		$idgangguan = mysqli_query($koneksi,"select * from tb_gangguan");
		$nama = mysqli_query($koneksi,"select * from tb_gangguan");
		$alamat = mysqli_query($koneksi,"select * from tb_gangguan");
    $aksi = mysqli_query($koneksi,"select * from tb_gangguan");
		while($d = mysqli_fetch_assoc($idgangguan)){
		    ?>
			<tr>
			   <td><?php echo $d['no']; ?></td>
			   <td><?php echo $d['id gangguan']; ?></td>
			   <td><?php echo $d['nama']; ?></td>
			   <td><?php echo $d['alamat']; ?></td>
         <td><?php echo $d['aksi']; ?></td>
			   
		</tr>	
   		<?php
	    } 
		?>
	<table>
	</center>
  </div>
  <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Diagnosa</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Diagnosa</h4>
        </div>
        <div class="panel-body">
        <form action="proses.php" method="POST">
          <div class="control-group after-add-more">
            <label>ID Aduan</label>
            <input type="text" name="nama[]" class="form-control">
            <label>ID Pelanggan</label>
            <input type="text" name="jk[]" class="form-control">
            <label>Masalah</label>
            <input type="text" name="masalah[]" class="form-control">
            <br>
            <button class="btn btn-success add-more" type="button">
              <i class="glyphicon glyphicon-plus"></i> Add
            </button>
            <br>
            <label>Solusi</label>
            <input type="text" name="solusi[]" class="form-control">
            <br>
            <button class="btn btn-success add-more" type="button">
              <i class="glyphicon glyphicon-plus"></i> Add
            </button>
            <hr>
          </div>
          <button class="btn btn-success" type="submit">Submit</button>
          <div class="copy hide">
            <div class="control-group">
              <label>Masalah</label>
              <input type="text" name="masalah[]" class="form-control">
              <label>Solusi</label>
              <input type="text" name="solusi[]" class="form-control">
              <br>
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
              <hr>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
    
  </body>
</html>
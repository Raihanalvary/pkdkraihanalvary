<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

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
              <label>ID Aduan</label>
              <input type="text" name="idaduan[]" class="form-control">
              <label>ID Pelanggan</label>
              <input type="text" name="idpelanggan[]" class="form-control">
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

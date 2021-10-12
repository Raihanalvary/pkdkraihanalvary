<?php
// koneksi ke database
$conn = new mysqli("localhost", "root", "", "bot") or die("Database Error");

// get pesan dari user
$getMesg = $conn->real_escape_string($_POST['text']);

//cek user query dengan yang ada di database
$check_data = "SELECT replies FROM tb_chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = $conn->query($check_data) or die("Error");

// jika query user sama dengan yang ada dalam database maka akan dibalas sesuai query-nya
if(mysqli_num_rows($run_query) > 0){
    $fetch_data = mysqli_fetch_assoc($run_query);
    //menyetorkan balasan ke variabel yang kemudian dikirimkan ke ajax
    $replay = $fetch_data['replies'];
    echo $replay;
}else{
    echo "Maaf, kami tidak paham maksud anda!";
}

?>
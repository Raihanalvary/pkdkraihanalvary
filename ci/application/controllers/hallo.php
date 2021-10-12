<?php
class Hallo extends CI_Controller{
    public function index(){
       // $this -> load ->view('contoh_view');
        $this -> load ->model('m_siswa');        
        $data['siswa']= $this ->m_siswa->get_data();
        $this ->load->view('contoh_view2',$data);
    }
}
?>
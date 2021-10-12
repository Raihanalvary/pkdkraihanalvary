<?php
class M_siswa extends CI_Model{
    public function get_data(){
        return $this -> db -> get('tb_siswa')->result_array();
    }
}
?>
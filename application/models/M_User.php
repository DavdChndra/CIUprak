<?php 

class M_User extends CI_Model
{

    public function select(){
        return $this->db->get('buku');
    }

    public function insert($data, $table){
        $this->db->insert($table, $data);
    }
    
    public function edit($data, $table){
        return $this->db->get_where($table, $data);
    }

    public function update($data, $no_data, $table){
        $this->db->where($no_data);
        $this->db->update($table, $data);
    }
    
    public function delete($no_data, $table){
        $this->db->where($no_data);
        $this->db->delete($table);
    }
}

?>
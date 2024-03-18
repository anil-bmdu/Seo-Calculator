<?php 
class calcmodel extends CI_Model
{
   


    public function calc_List()
    {
        $q=$this->db->select()
                    ->from('calc')
                    ->get();
                return $q->result();
              
    }
    public function add_calc($data){
        return $this->db->insert('calc', $data);
    }
   
}

?>
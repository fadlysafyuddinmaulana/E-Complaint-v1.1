<?php

class M_Sql extends CI_Model
{

    /* Data Manipulation */
    public function insert_record($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_record($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_record($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_record($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function check_nim($nim)
    {
        $this->db->where('nim', $nim);
        return $this->db->get('table');
    }
}

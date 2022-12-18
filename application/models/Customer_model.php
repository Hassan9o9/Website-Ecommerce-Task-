<?php

class Customer_Model extends CI_Model
{
    public function save_customer_info($data)
    {
        return $this->db->insert('tbl_customer', $data);
    }

    public function getall_customer_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $info = $this->db->get();
        return $info->result();
    }

    public function edit_customer_info($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function delete_customer_info($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tbl_customer');
    }

    public function update_customer_info($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('tbl_customer', $data);
    }

    public function published_customer_info($id)
    {
        $this->db->set('publication_status', 1);
        $this->db->where('id', $id);
        return $this->db->update('tbl_customer');
    }

    public function unpublished_customer_info($id)
    {
        $this->db->set('publication_status', 0);
        $this->db->where('id', $id);
        return $this->db->update('tbl_customer');
    }

}

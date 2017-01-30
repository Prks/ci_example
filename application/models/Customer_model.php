<?php
Class Customer_model extends CI_model {
	public function getcustomers(){
		$this->db->select('*');
		$this->db->from('customers');
		return $this->db->get()->result_array();
	}

	public function addCustomer($insert_data){
		$this->db->insert('customers',$insert_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}

	public function deleteCustomer($chosen_id) {
		$this->db->where('id_customers',$chosen_id);
		$this->db->delete('customers');
	}

	public function updateCustomer($update_data,$id_customers){
		$this->db->where('id_customers',$id_customers);
		$this->db->update('customers',$update_data);

	}
}

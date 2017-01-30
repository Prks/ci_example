<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function show_customers(){
		$this->load->model('Customer_model');
		$data['customers']=$this->Customer_model->getCustomers();
		$data['page']='customer/show_customers';
		$this->load->view('menu/content',$data);
	}

	public function add_customers() {
		$this->load->model('Customer_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$insert_data=array(
				"fname"=>$this->input->post('fn'),
				"lname"=>$this->input->post('ln')
				);
			$data['test']=$this->Customer_model->addCustomer($insert_data);

		}
		$data['page']='customer/add_customers';
		$this->load->view('menu/content',$data);
	}

	public function delete_customers() {
		//this method will show the customers
		$this->load->model('Customer_model');
		$data['customers']=$this->Customer_model->getCustomers();
		$data['page']='customer/delete_customers';
		$this->load->view('menu/content',$data);
	}

	public function remove_customer($chosen_id){
		$this->load->model('Customer_model');
		$this->Customer_model->deleteCustomer($chosen_id);
		$this->show_customers();
	}

	public function update_customers() {
		$this->load->model('Customer_model');	
		$data['customers']=$this->Customer_model->getCustomers();
		$data['page']='customer/update_customers';
		$this->load->view('menu/content',$data);
	}

	public function do_update_customers() {
		$this->load->model('Customer_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$a_fname=$this->input->post('fn');
			$a_lname=$this->input->post('ln');
			$id_customers=$this->input->post('id');
			//calculate rows
			$rows=0;
			foreach ($id_customers as $a) {
				$rows++;
			}
			//update database row by row
			for($x=0; $x < $rows; $x++ ){
				$update_data=array(
					"fname"=>$a_fname[$x],
					"lname"=>$a_lname[$x]
					);
				$this->Customer_model->updateCustomer($update_data,$id_customers[$x]);
			}
		$this->show_customers();
		}
	}
}
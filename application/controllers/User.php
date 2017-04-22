<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	
	public function index()
	{
		$data['query'] = $this->M_User->get();


		$this->load->view('user/index', $data);
	}

	/**
	 * [store description]
	 * @return [type] [description]
	 */
	
	public function store()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');

		$this->form_validation->set_rules('email', 'Email', 'required');

		$this->form_validation->set_rules('phone', 'Phone', 'required');

		$data = [

			'name'	=> $this->input->post('name'),

			'email'	=> $this->input->post('email'),

			'phone'	=> $this->input->post('phone'),
		];

		if($this->form_validation->run() == true){

			$this->M_User->create($data);

			$this->session->set_flashdata('message', 'Your data has been saved');

			redirect($this->index());

		}else{

			$this->index();
		}
	}

	/**
	 * [edit description]
	 * @return [type] [description]
	 */
	public function edit()
	{
		$id = $this->input->get('id');

		$data['edit'] = $this->M_User->show($id);

		$this->load->view('user/edit', $data);
	}
	/**
	 * [update description]
	 * @return [type] [description]
	 */
	
	public function update()
	{
		$id = $this->input->get('id');

		$this->form_validation->set_rules('name', 'Name', 'required');

		$this->form_validation->set_rules('email', 'Email', 'required');

		$this->form_validation->set_rules('phone', 'Phone', 'required');



		if($this->form_validation->run() == true){

			$data = [

				'name' => $this->input->post('name'),

				'email' => $this->input->post('email'),

				'phone' => $this->input->post('phone')
			];

			$this->M_User->update($id, $data);

			$this->session->set_flashdata('message', 'Your data has been updated');

			redirect($this->edit());

		}else{

			redirect($this->edit());
		}
	}
	/**
	 * [destroy description]
	 * @return [type] [description]
	 */
	public function destroy()
	{
		$id = $this->input->get('id');

		$delet = $this->M_User->delete($id);

		


			$this->session->set_flashdata('message', 'Your data has been deleted');

			redirect($this->index());

			
		

		
	}
}

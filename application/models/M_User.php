<?php 

	class M_User extends CI_Model
	{
		public function get()
		{
			$query = $this->db->get('user');

			return $query->result();
		}

		public function show($id)
		{
			$query = $this->db->get_where('user', ['id' => $id]);

			return $query->row();
		}

		public function create($data)
		{
			$this->db->insert('user', $data);
		}

		public function update($id, $data)
		{
			$this->db->where('id', $id);

			$this->db->update('user', $data);
		}


		public function delete($id)
		{
			$this->db->where('id', $id);

			$this->db->delete('user');
		}
	}
?>
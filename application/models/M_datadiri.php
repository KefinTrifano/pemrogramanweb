<?php
defined ('BASEPATH') OR exit('No direct scrip access allow');

	class M_datadiri extends CI_Model
	{
	
	public function getdatadiri()
	{
		// cara 1

		return $this->db->get('tbl_datadiri',1)->row();

		// cara 2
		$this->db->select('*');
		$this->db->from('tbl_datadiri');
		$this->db->limit(1);
		return $this->db->get()->row();
		

	}
}
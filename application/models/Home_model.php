<?php
class Home_model extends CI_Model
{
	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('profile_data','product.userid=profile_data.userid');
		$query = $this->db->get();
		return $query->result();
	}
}
?>
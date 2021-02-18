<?php 
/**
  * 
  */
 class m_obat_masuk extends CI_Model
 {
 	
 	public function getALL()
	{
		$this->db->select('*');
		$this->db->from('tbl_obat_masuk');
		$this->db->join('tbl_obat', 'tbl_obat.kd_obat = tbl_obat_masuk.kd_obat');
		$this->db->join('tbl_suplier', 'tbl_suplier.kd_suplier = tbl_obat_masuk.kd_suplier');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_obat_masuk.id_user');
		return $query = $this->db->get()->result();
	}
	public function tambah($object)
	{
		$this->db->insert('tbl_obat_masuk',$object);
	}
	public function getwhere($id)
	{
		return $this->db->where('id',$id)->get('tbl_obat_masuk')->row();
	}
	public function simpan_edit($id, $object)
	{
		$this->db->where('id',$id)->update('tbl_obat_masuk', $object);
	}
	public function hapus($id)
	{
		$this->db->delete('tbl_obat_masuk',array('id' => $id ));
	}
	function update_obat($data)
	{
		$jumlah = $data['jumlah'];
		$kd_obat = $data['kd_obat'];
		$sql = "UPDATE tbl_obat_masuk SET stok = stok - '$jumlah' WHERE kd_obat = '$kd_obat'";
		$this->db->query($sql);
	}
 } ?>
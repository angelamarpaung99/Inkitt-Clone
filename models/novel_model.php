<?php
class novel_model extends CI_model
{

	public function getAllNovel()
	{
		
		return $this->db->get("isi_novel")->result_array();

	}

	public function tambahNovel($file)
	{
		$data = [
			"judul" => $this->input->post('title', true),
			"author" => $this->input->post('auth', true),
			"gambar" => $file,
			"isi" => $this->input->post('content', true),
		];

		return $this->db->insert('isi_novel', $data);
	}

	public function hapusNovel($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('isi_novel');
	}

	public function getNovelById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('isi_novel')->row_array();

	}

	public function ubahNovel($id)
	{
		$data = [
			"judul" => $this->input->post('title', true),
			"author" => $this->input->post('auth', true),
			"isi" => $this->input->post('content', true),
		];
		$this->db->where('id', $id);
		return $this->db->update('isi_novel', $data);
	}

	public function cariDataNovel()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('judul', $keyword, 'both');
		$this->db->or_like('author', $keyword, 'both');
		return $this->db->get('isi_novel')->result_array();



	}
}

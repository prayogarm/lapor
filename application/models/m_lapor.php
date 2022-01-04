<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapor extends CI_Model {
	
	public function login() 
	{
		$query = $this->db->select('id_user,email,password,nama_user,no_telp,no_id,status')
				 ->where('email', $this->input->post('emailMasuk'))
				 ->where('password', sha1($this->input->post('passwordMasuk')))
				 ->get('user');

		if ($this->db->affected_rows() > 0) {
			$data = $query->row();

			if ($data->status == 0) {
				return false;
			}

			$session = array('id_user'	=> $data->id_user,
							 'nama_user' => $data->nama_user,
							 'no_telp' 		=> $data->no_telp,
							 'email'		=> $data->email,
							 'password'		=> $data->password,
							 'no_id'		=> $data->no_id,
							 'login'		=> true,
							 'klasifikasi'	=> 'user',
							 'status'		=> $data->status
						);

			$this->session->set_userdata( $session );

			return true;
		} else {
			return false;
		}
	}
	

	public function register()
	{
		$data = array('nama_user' => $this->input->post('regNama'),
					  'no_telp'		 => $this->input->post('regTelp'),
					  'email'		 => $this->input->post('regEmail'),
					  'password'	 => sha1($this->input->post('regPass')),
					  'no_id'		 => $this->input->post('regId'),
					  'nama_org'	 => $this->input->post('namaOrg'),
					  'alamat_org'	 => $this->input->post('alamatOrg')
					);

		$this->db->insert('user', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editProfil($id)
	{
				$object = array('nama_user' => $this->input->post('regNama'),
					  'no_telp'		 => $this->input->post('regTelp'),
					  'email'		 => $this->input->post('regEmail'),
					  'password'	 => $this->input->post('regPass')
					);

		$this->db->where('id_user', $id)->update('user', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function lapor($files)
	{
		$ticket = substr(str_shuffle(str_repeat("0123456789LMNOPQRSTUVWXYZ", 5)), 0, 5);

		$data = array('waktu_kejadian' => $this->input->post('waktu_kejadian'), 
					  'deskripsi_umum' => $this->input->post('desc_umum'),
					  'nama_ket_aset'  => $this->input->post('nama_aset'),
					  'lokasi_aset'	   => $this->input->post('lokasi'),
					  'lat'			   => $this->input->post('lat'),
					  'lng'	 		   => $this->input->post('lng'),
					  'identitas_pemilik_aset'	=> $this->input->post('id_pemilik'),
					  'bukti'		   => $files['file_name'],
					  'jenis_klasifikasi' => $this->input->post('jenis'),
					  'ticket'		   => $ticket,
					  'id_user'	   => $this->session->userdata('id_user')
					);

		$this->db->insert('aduan_siber', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getHistory()
	{
		return $this->db->select('id_aduan,ticket,waktu_laporan,jenis_klasifikasi,status_verif,status')->where('id_user',$this->session->userdata('id_user'))->get('aduan_siber')->result();
	}

	public function getHistory1()
	{
		return $this->db->select('*')->where('status_verif', 0)->get('aduan_siber')->result();
	}

	public function getHistoryVerif()
	{
		return $this->db->select('*')
						->join('balas_aduan','balas_aduan.id_aduan=aduan_siber.id_aduan')
						->where('status_verif', 1)
						->get('aduan_siber')
						->result();
	}

	public function getHistoryVerif1()
	{
		return $this->db->select('*')
						->where('status_verif', 1)
						->get('aduan_siber')
						->result();
	}

	public function getChat()
	{
		return $this->db->join('user','user.id_user=chat.user', 'left')
						->join('admin_1','admin_1.id_admin=chat.id_admin', 'left')
						->where('id_aduan', $this->uri->segment(4))
						->get('chat')
						->result();
	}

	public function tampilChat($id)
	{
		$object = array('status_chat' => 1);

		$this->db->where('id', $id)->update('chat', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function sendChat()
	{
		$status = 1;
		$admin = '';
		$admin2 = '0';

		$object = array(
			'id_aduan' => $this->session->userdata('id_aduan'),
			'id_admin' => $admin,
			'id_admin2' => $admin2,
			'chat' 	   => $this->input->post('chat'),
			'status_chat'   => $status,
			'user'	=>  $this->session->userdata('id_user')
		);

		$this->db->insert('chat', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function uploadFile($file)
	{
		$object = array('id_aduan' => $this->session->userdata('id_aduan'), 
						'user'	=> $this->session->userdata('id_user'),
						'file'		=> $file['file_name'],
						'status'	=> 1
					);

		$this->db->insert('chat', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function aktivasiAkun($id)
	{
		$object = array('status' => 1 );
		$this->db->where('id_user', $id)->update('user', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

}

/* End of file m_lapor.php */
/* Location: ./application/models/m_lapor.php */
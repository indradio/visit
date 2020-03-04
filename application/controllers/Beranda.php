<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('beranda/index');
	}
	public function daftar()
	{
		date_default_timezone_set('asia/jakarta');
		$waktu_kunjugan = date('Y-m-d H:i', strtotime($this->input->post('waktu_kunjungan')));
		$this->load->helper('string');
		$id = random_string('alnum',8);

		if ($this->input->post('point1')){
			$point1 = 'YA';
		}else{
			$point1 = 'TIDAK';
		}
		if ($this->input->post('point2')){
			$point2 = 'YA';
		}else{
			$point2 = 'TIDAK';
		}
		if ($this->input->post('point3')){
			$point3 = 'YA';
		}else{
			$point3 = 'TIDAK';
		}
		if ($this->input->post('point4')){
			$point4 = 'YA';
		}else{
			$point4 = 'TIDAK';
		}
		if ($this->input->post('point5')){
			$point5 = 'YA';
		}else{
			$point5 = 'TIDAK';
		}
		if ($this->input->post('point6')){
			$point6 = 'YA';
		}else{
			$point6 = 'TIDAK';
		}

		$data = [
			'id' => $id,
			'tanggal' => date('Y-m-d H:i:s'),
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('gender'),
			'identitas' => $this->input->post('identitas'),
			'phone' => '62'.$this->input->post('phone'),
			'waktu_kunjugan' => $waktu_kunjugan,
			'perusahaan' => $this->input->post('perusahaan'),
			'pic' => $this->input->post('pic'),
			'keperluan' => $this->input->post('keperluan'),
			'point1' => $this->input->post('point1'),
			'point2' => $this->input->post('point2'),
			'point3' => $this->input->post('point3'),
			'point4' => $this->input->post('point4'),
			'point5' => $this->input->post('point5'),
			'point6' => $this->input->post('point6'),
			'status' => '1'
		];
		$this->db->insert('visit', $data);

		// Kirim via Whatsapp
		$postData = array(
			'deviceid' => 'ed59bffb-7ffd-4ac2-b039-b4725fdd4010',
			'number' => '62'.$this->input->post('phone'),
			'message' => "*Terima kasih, Anda telah mengisi FORM DEKLARASI KESEHATAN*" .
			"\r\nID anda : ". $id .
			"\r\n\r\nTunjukan ID ini saat anda akan memasuki PT Astra Otoparts Divisi WINTEQ."
		);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://ws.premiumfast.net/api/v1/message/send');
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$headers = array();
		$headers[] = 'Accept: application/json';
		$headers[] = 'Authorization: Bearer 4495c8929e574477a9167352d529969cded0eb310cd936ecafa011dc48f2921b';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
		$result = curl_exec($ch);

		//WA to Anchila
		// $postData = array(
		// 	'deviceid' => 'ed59bffb-7ffd-4ac2-b039-b4725fdd4010',
		// 	'number' => '6281113306882',
		// 	'message' => "*Pendaftaran Peserta Training*" .
		// 	"\r\n\r\nNama : " . $this->input->post('nama') .
		// 	"\r\nEmail : " . $this->input->post('email') .
		// 	"\r\nPhone : 0" . $this->input->post('phone') .
		// 	"\r\nTgl Lahir : " . date('d F Y', strtotime($this->input->post('tanggal_lahir'))) .
		// 	"\r\nTingkat Pendidikan : " . $pendidikan .
		// 	"\r\nJurusan : " . $this->input->post('jurusan') .
		// 	"\r\nPerusahaan : " . $this->input->post('perusahaan') .
		// 	"\r\nLokasi : " . $this->input->post('lokasi') .
		// 	"\r\nJabatan : " . $jabatan .
		// 	"\r\nMasa Kerja : " . $this->input->post('masa_kerja') .
		// 	"\r\nPassword : ". $password .
		// 	"\r\n\r\nTanggal Training : " . date('d M Y', strtotime($this->input->post('tanggal_training'))) .
		// 	"\r\nProgram Training : " . $this->input->post('program') .
		// 	"\r\nMerek PLC : " . $merek ." (".$this->input->post('tipe').")".
		// 	"\r\nHarapan : " . $this->input->post('harapan') .
		// 	"\r\nMakanan : " . $this->input->post('makanan') .
		// 	"\r\nUntuk informasi lebih lengkap dapat dilihat melalui link berikut https://training.winteq-astra.com"
		// );

		// $ch = curl_init();

		// curl_setopt($ch, CURLOPT_URL, 'https://ws.premiumfast.net/api/v1/message/send');
		// curl_setopt($ch, CURLOPT_POST, 1);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
		// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		// $headers = array();
		// $headers[] = 'Accept: application/json';
		// $headers[] = 'Authorization: Bearer 4495c8929e574477a9167352d529969cded0eb310cd936ecafa011dc48f2921b';
		// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
		// $result = curl_exec($ch);


		redirect('beranda/berhasil/' . $id);
	}

	public function checkEmail()
	{
		 $this->load->model('Beranda_model');
		 if($this->Beranda_model->getEmail($_POST['email'])){
		  echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
		  </i> This Email is already registered</span></label>';
		 }
		 else {
		  echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Email is available</span></label>';
		 }
	}

	public function berhasil($id)
	{
        $data['id']=$id;
		$this->load->view('beranda/berhasil',$data);
	}
}

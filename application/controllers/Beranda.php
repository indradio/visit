<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//load Guzzle Library
require_once APPPATH.'third_party/guzzle/autoload.php';

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('beranda/index');
	}
	public function daftar()
	{
		date_default_timezone_set('asia/jakarta');
		$sekarang = strtotime(date('Y-m-d'));
		$tempo = strtotime(date('Y-m-d', strtotime('+12 hours', strtotime(date('Y-m-d')))));
		$berkunjung = strtotime(date('Y-m-d', strtotime($this->input->post('waktu_kunjungan'))));
		if ($berkunjung <= $tempo AND $berkunjung >= $sekarang)
		{
			$tgl_antigen = date('Y-m-d', strtotime($this->input->post('tgl_antigen')));
			$ex_antigen = strtotime(date('Y-m-d', strtotime('+1 days', strtotime($this->input->post('tgl_antigen')))));
			$waktu_kunjungan = date('Y-m-d H:i', strtotime($this->input->post('waktu_kunjungan')));
			
			if ($berkunjung > $ex_antigen){
				redirect('beranda/gagal_antigen/');
			}

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

			if ($this->input->post('kewarganegaraan')=='WNI'){
				$negara = 'Indonesia';
			}else{
				$negara = $this->input->post('negara');
			}
	
			$data = [
				'id' => $id,
				'tanggal' => date('Y-m-d H:i:s'),
				'nama' => $this->input->post('nama'),
				'warganegara' => $this->input->post('kewarganegaraan'),
				'negara' => $negara,
				'identitas' => $this->input->post('identitas'),
				'phone' => '62'.$this->input->post('phone'),
				'waktu_kunjungan' => $waktu_kunjungan,
				'perusahaan' => $this->input->post('perusahaan'),
				'pic' => $this->input->post('pic'),
				'keperluan' => $this->input->post('keperluan'),
				'point1' => $point1,
				'point2' => $point2,
				'point3' => $point3,
				'point4' => $point4,
				'point5' => $point5,
				'point6' => $point6,
				'sertifikat' =>  $this->input->post('sertifikat'),
				'antigen_at' =>  $tgl_antigen,
				'status' => '1'
			];
			$this->db->insert('visit', $data);
			
	
			// Kirim via Whatsapp
			if ($this->input->post('kewarganegaraan')=='WNI'){
				if ($point1=='YA' OR $point2=='YA' OR $point3=='YA' OR $point4=='YA' OR $point5=='YA' OR $point6=='YA'){
					
					$client = new \GuzzleHttp\Client();
					$response = $client->post(
						'https://region01.krmpesan.com/api/v2/message/send-text',
						[
							'headers' => [
								'Content-Type' => 'application/json',
								'Accept' => 'application/json',
								'Authorization' => 'Bearer zrIchFm6ewt2f18SbXRcNzSVXJrQBEsD1zrbjtxuZCyi6JfOAcRIQkrL6wEmChqVWwl0De3yxAhJAuKS',
							],
							'json' => [
								'phone' 	=> '62'.$this->input->post('phone'),
								'message' 	=> "*Terima kasih, Anda telah mengisi FORM DEKLARASI KESEHATAN*" .
								"\r\nKami mohon maaf, Saat ini kami tidak dapat menerima kunjungan anda untuk alasan kesehatan" .
								"\r\nKami akan segera menghubungi anda untuk mengatur kembali pertemuan ini."
							],
						]
					);
					$body = $response->getBody();

					$pic = $this->db->get_where('karyawan', ['nama' => $this->input->post('pic')])->row_array();
					if (!empty($pic))
					{
						$client = new \GuzzleHttp\Client();
						$response = $client->post(
							'https://region01.krmpesan.com/api/v2/message/send-text',
							[
								'headers' => [
									'Content-Type' => 'application/json',
									'Accept' => 'application/json',
									'Authorization' => 'Bearer zrIchFm6ewt2f18SbXRcNzSVXJrQBEsD1zrbjtxuZCyi6JfOAcRIQkrL6wEmChqVWwl0De3yxAhJAuKS',
								],
								'json' => [
									'phone' 	=> $pic['phone'],
									'message' 	=> "*Tamu Anda telah mengisi FORM DEKLARASI KESEHATAN*" .
									"\r\n \r\nNama : *" . $this->input->post('nama') . "*" .
									"\r\nPerusahaan : *" . $this->input->post('perusahaan') . "*" .
									"\r\nKeperluan : *" . $this->input->post('keperluan') . "*" .
									"\r\nRencana Berkunjung : *" . date('d-m-Y H:i', strtotime($this->input->post('waktu_kunjungan'))) . "*" .
									"\r\n \r\nMohon maaf, Tamu anda masuk dalam kategori *DILARANG* berkunjung demi alasan keselamatan" .
									"\r\nHarap segera hubungi kembali untuk mengatur pertemuan menggunakan metode lainnya atau segera mengajukan penggunaan RUANG ISOLASI.".
									"\r\nInfo lebih lengkap dapet menghubungi komite P2K3L."
								],
							]
						);
						$body = $response->getBody();
					}
				
				}else{

					$client = new \GuzzleHttp\Client();
					$response = $client->post(
						'https://region01.krmpesan.com/api/v2/message/send-text',
						[
							'headers' => [
								'Content-Type' => 'application/json',
								'Accept' => 'application/json',
								'Authorization' => 'Bearer zrIchFm6ewt2f18SbXRcNzSVXJrQBEsD1zrbjtxuZCyi6JfOAcRIQkrL6wEmChqVWwl0De3yxAhJAuKS',
							],
							'json' => [
								'phone' 	=> '62'.$this->input->post('phone'),
								'message' 	=> "*Terima kasih, Anda telah mengisi FORM DEKLARASI KESEHATAN*" .
								"\r\nKode ID anda : ". $id .
								"\r\nTunjukan Kartu Identitas dan Sertifikat Vaksin/Surat Hasil Antigen anda saat akan memasuki PT Astra Otoparts Divisi WINTEQ." .
								"\r\nPT Astra Otoparts Divisi WINTEQ berhak untuk *“MEMBATALKAN/MENUNDA”* kunjungan anda untuk alasan keselamatan." .
								"\r\n \r\n1. Tamu yang akan berkunjung wajib menggunakan Masker selama kunjungan." .
								"\r\n2. Tamu yang akan berkunjung wajib mematuhi segala peraturan maupun himbauan selama kunjungan."
							],
						]
					);
					$body = $response->getBody();

					$pic = $this->db->get_where('karyawan', ['nama' => $this->input->post('pic')])->row_array();
					if (!empty($pic))
					{
						$client = new \GuzzleHttp\Client();
						$response = $client->post(
							'https://region01.krmpesan.com/api/v2/message/send-text',
							[
								'headers' => [
									'Content-Type' => 'application/json',
									'Accept' => 'application/json',
									'Authorization' => 'Bearer zrIchFm6ewt2f18SbXRcNzSVXJrQBEsD1zrbjtxuZCyi6JfOAcRIQkrL6wEmChqVWwl0De3yxAhJAuKS',
								],
								'json' => [
									'phone' 	=> $pic['phone'],
									'message' 	=> "*Tamu Anda telah mengisi FORM DEKLARASI KESEHATAN*" .
									"\r\n \r\nNama : *" . $this->input->post('nama') . "*" .
									"\r\nPerusahaan : *" . $this->input->post('perusahaan') . "*" .
									"\r\nKeperluan : *" . $this->input->post('keperluan') . "*" .
									"\r\nRencana Berkunjung : *" . date('d-m-Y H:i', strtotime($this->input->post('waktu_kunjungan'))) . "*" .
									"\r\n \r\nTamu anda masuk dalam kategori *DITERIMA* berkunjung." .
									"\r\nTetap jaga kesehatan kamu dengan mematuhi himbauan dan kebijakan terkait pencegahan penyebaran covid-19.".
									"\r\nInfo lebih lengkap dapet menghubungi komite P2K3L."
								],
							]
						);
						$body = $response->getBody();
					}

				}
			}else{

				$client = new \GuzzleHttp\Client();
				$response = $client->post(
					'https://region01.krmpesan.com/api/v2/message/send-text',
					[
						'headers' => [
							'Content-Type' => 'application/json',
							'Accept' => 'application/json',
							'Authorization' => 'Bearer zrIchFm6ewt2f18SbXRcNzSVXJrQBEsD1zrbjtxuZCyi6JfOAcRIQkrL6wEmChqVWwl0De3yxAhJAuKS',
						],
						'json' => [
							'phone' 	=> '62'.$this->input->post('phone'),
							'message' 	=> "*Thank you for filling out THE HEALTH DECLARATION FORM*" .
							"\r\nHello Mr/Mrs ".$this->input->post('nama').", We apologize that we could not accept your visit in the near future." .
							"\r\nWe will contact you to arrange another meeting soon."
						],
					]
				);
				$body = $response->getBody();

				$pic = $this->db->get_where('karyawan', ['nama' => $this->input->post('pic')])->row_array();
				if (!empty($pic))
				{
					$client = new \GuzzleHttp\Client();
					$response = $client->post(
						'https://region01.krmpesan.com/api/v2/message/send-text',
						[
							'headers' => [
								'Content-Type' => 'application/json',
								'Accept' => 'application/json',
								'Authorization' => 'Bearer zrIchFm6ewt2f18SbXRcNzSVXJrQBEsD1zrbjtxuZCyi6JfOAcRIQkrL6wEmChqVWwl0De3yxAhJAuKS',
							],
							'json' => [
								'phone' 	=> $pic['phone'],
								'message' 	=> "*Tamu Anda telah mengisi FORM DEKLARASI KESEHATAN*" .
								"\r\n \r\nNama : *" . $this->input->post('nama') . "*" .
								"\r\nPerusahaan : *" . $this->input->post('perusahaan') . "*" .
								"\r\nKeperluan : *" . $this->input->post('keperluan') . "*" .
								"\r\nRencana Berkunjung : *" . date('d-m-Y H:i', strtotime($this->input->post('waktu_kunjungan'))) . "*" .
								"\r\n \r\nMohon maaf, Tamu anda masuk dalam kategori *DILARANG* berkunjung demi alasan keselamatan" .
								"\r\nHarap segera hubungi kembali untuk mengatur pertemuan menggunakan metode lainnya atau segera mengajukan penggunaan RUANG ISOLASI.".
								"\r\nInfo lebih lengkap dapet menghubungi komite P2K3L."
							],
						]
					);
					$body = $response->getBody();
				}
					
			}

	
			redirect('beranda/berhasil/' . $id);
			
		}else{
			
			redirect('beranda/gagal/');
		}
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
        $data['visit'] = $this->db->get_where('visit', ['id' => $id])->row_array();
		$this->load->view('beranda/berhasil',$data);
	}

	public function gagal()
	{
		$this->load->view('beranda/gagal');
	}

	public function gagal_antigen()
	{
		$this->load->view('beranda/gagal_antigen');
	}

	public function json_data()
    {
        date_default_timezone_set('asia/jakarta');

		$this->db->where('is_active', '1');
		$this->db->where('status', '1');
        $karyawan = $this->db->get('karyawan')->result_array();
        $output = array();
        foreach ($karyawan as $row) {
			$output[] = $row['nama'];
        }

		//output to json format
        echo json_encode($output);
    }
}

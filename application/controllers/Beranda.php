<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('beranda/index');
	}
	public function daftar()
	{
		$sekarang = strtotime(date('Y-m-d'));
		$tempo = strtotime(date('Y-m-d', strtotime('+2 days', strtotime(date('Y-m-d')))));
		$berkunjung = strtotime(date('Y-m-d', strtotime($this->input->post('waktu_kunjungan'))));
		if ($berkunjung <= $tempo AND $berkunjung >= $sekarang)
		{
			date_default_timezone_set('asia/jakarta');
			$waktu_kunjungan = date('Y-m-d H:i', strtotime($this->input->post('waktu_kunjungan')));
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
				'status' => '1'
			];
			$this->db->insert('visit', $data);
	
			// Kirim via Whatsapp
			if ($this->input->post('kewarganegaraan')=='WNI'){
				if ($point1=='YA' OR $point2=='YA' OR $point3=='YA' OR $point4=='YA' OR $point5=='YA' OR $point6=='YA'){
					$postData = array(
						'deviceid' => 'ed59bffb-7ffd-4ac2-b039-b4725fdd4010',
						'number' => '62'.$this->input->post('phone'),
						'message' => "*Terima kasih, Anda telah mengisi FORM DEKLARASI KESEHATAN*" .
						"\r\nKami mohon maaf, Saat ini kami tidak dapat menerima kunjungan anda untuk alasan keselamatan" .
						"\r\nKami akan segera menghubungi anda untuk mengatur kembali pertemuan ini."
					);
				}else{
					$postData = array(
						'deviceid' => 'ed59bffb-7ffd-4ac2-b039-b4725fdd4010',
						'number' => '62'.$this->input->post('phone'),
						'message' => "*Terima kasih, Anda telah mengisi FORM DEKLARASI KESEHATAN*" .
						"\r\nKode ID anda : ". $id .
						"\r\nTunjukan Kode ID ini dan Kartu Identitas anda saat akan memasuki PT Astra Otoparts Divisi WINTEQ." .
						"\r\nPT Astra Otoparts Divisi WINTEQ berhak untuk *“MEMBATALKAN/MENUNDA”* kunjungan anda untuk alasan keselamatan." .
						"\r\n \r\n1. Tamu yang akan berkunjung wajib menggunakan Masker selama kunjungan" .
						"\r\n2. Tamu yang akan berkunjung wajib mematuhi segala peraturan maupun himbauan selama kunjungan"
					);
				}
			}else{
				$postData = array(
					'deviceid' => 'ed59bffb-7ffd-4ac2-b039-b4725fdd4010',
					'number' => '62'.$this->input->post('phone'),
					'message' => "*Thank you for filling out THE HEALTH DECLARATION FORM*" .
					"\r\nHello Mr/Mrs ".$this->input->post('nama').", We apologize that we could not accept your visit in the near future." .
					"\r\nWe will contact you to arrange another meeting soon."
				);
			}
	
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
			$pic = $this->db->get_where('karyawan', ['nama' => $this->input->post('pic')])->row_array();
			if (!empty($pic))
			{
				if ($this->input->post('kewarganegaraan')=='WNI'){
					if ($point1=='YA' OR $point2=='YA' OR $point3=='YA' OR $point4=='YA' OR $point5=='YA' OR $point6=='YA'){
						$postData = array(
							'deviceid' => 'ed59bffb-7ffd-4ac2-b039-b4725fdd4010',
							'number' => $pic['phone'],
							'message' => "*Tamu Anda telah mengisi FORM DEKLARASI KESEHATAN*" .
								"\r\n \r\nNama : *" . $this->input->post('nama') . "*" .
								"\r\nPerusahaan : *" . $this->input->post('perusahaan') . "*" .
								"\r\nKeperluan : *" . $this->input->post('keperluan') . "*" .
								"\r\nRencana Berkunjung : *" . date('d-m-Y H:i', strtotime($this->input->post('waktu_kunjungan'))) . "*" .
								"\r\n \r\nMohon maaf, Tamu anda masuk dalam kategori *DILARANG* berkunjung demi alasan keselamatan" .
								"\r\nHarap segera hubungi kembali untuk mengatur pertemuan menggunakan metode lainnya atau segera mengajukan penggunaan RUANG ISOLASI.".
								"\r\nInfo lebih lengkap dapet menghubungi komite P2K3L."
						);
					}else{
						$postData = array(
							'deviceid' => 'ed59bffb-7ffd-4ac2-b039-b4725fdd4010',
							'number' => $pic['phone'],
							'message' => "*Tamu Anda telah mengisi FORM DEKLARASI KESEHATAN*" .
								"\r\n \r\nNama : *" . $this->input->post('nama') . "*" .
								"\r\nPerusahaan : *" . $this->input->post('perusahaan') . "*" .
								"\r\nKeperluan : *" . $this->input->post('keperluan') . "*" .
								"\r\nRencana Berkunjung : *" . date('d-m-Y H:i', strtotime($this->input->post('waktu_kunjungan'))) . "*" .
								"\r\n \r\nTamu anda masuk dalam kategori *DITERIMA* berkunjung." .
								"\r\nTetap jaga kesehatan kamu dengan mematuhi himbauan dan kebijakan terkait pencegahan penyebaran covid-19.".
								"\r\nInfo lebih lengkap dapet menghubungi komite P2K3L."
						);
					}
				}else{
					$postData = array(
						'deviceid' => 'ed59bffb-7ffd-4ac2-b039-b4725fdd4010',
						'number' => $pic['phone'],
						'message' => "*Tamu Anda telah mengisi FORM DEKLARASI KESEHATAN*" .
							"\r\n \r\nNama : *" . $this->input->post('nama') . "*" .
							"\r\nPerusahaan : *" . $this->input->post('perusahaan') . "*" .
							"\r\nKeperluan : *" . $this->input->post('keperluan') . "*" .
							"\r\nRencana Berkunjung : *" . date('d-m-Y H:i', strtotime($this->input->post('waktu_kunjungan'))) . "*" .
							"\r\n \r\nMohon maaf, Tamu anda masuk dalam kategori *DILARANG* berkunjung demi alasan keselamatan" .
							"\r\nHarap segera hubungi kembali untuk mengatur pertemuan menggunakan metode lainnya atau segera mengajukan penggunaan RUANG ISOLASI.".
							"\r\nInfo lebih lengkap dapet menghubungi komite P2K3L."
					);
				}
		
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
}

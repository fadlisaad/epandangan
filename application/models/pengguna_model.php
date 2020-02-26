<?php

class Pengguna_model extends Model {
	
	public function listSingle($user_id)
	{
		$stm  = "SELECT * FROM view_profile WHERE user_id = :user_id";
		$bind = array('user_id' => $user_id);

		try{
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function addCompleteProfile($data)
	{
		try{
			$stm  = "INSERT INTO profile (user_id, nama_penuh, ic_passport, alamat, poskod, telefon_rumah, telefon_pejabat, telefon_bimbit) VALUES (:user_id, :nama_penuh, :ic_passport, :alamat, :poskod, :telefon_rumah, :telefon_pejabat, :telefon_bimbit)";
			$bind = array(
				'user_id' => $data['user_id'],
				'nama_penuh' => $data['nama_penuh'],
				'ic_passport' => $data['ic_passport'],
				'alamat' => $data['alamat'],
				'poskod' => $data['poskod'],
				'telefon_rumah' => $data['telefon_rumah'],
				'telefon_pejabat' => $data['telefon_pejabat'],
				'telefon_bimbit' => $data['telefon_bimbit']
			);

			return $this->pdo->fetchAffected($stm, $bind);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function updateProfile($data)
	{
		try{
			$stm  = "UPDATE profile SET nama_penuh = :nama_penuh, ic_passport = :ic_passport, alamat = :alamat, poskod = :poskod, telefon_rumah = :telefon_rumah, telefon_pejabat = :telefon_pejabat, telefon_bimbit = :telefon_bimbit WHERE user_id = :user_id";
			$bind = array(
				'nama_penuh' => $data['nama_penuh'],
				'ic_passport' => $data['ic_passport'],
				'alamat' => $data['alamat'],
				'poskod' => $data['poskod'],
				'telefon_rumah' => $data['telefon_rumah'],
				'telefon_pejabat' => $data['telefon_pejabat'],
				'telefon_bimbit' => $data['telefon_bimbit'],
				'user_id' => $data['user_id'],
			);
			
			return $this->pdo->fetchAffected($stm, $bind);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function updateUser($data)
	{
		try{
			$stm_user  = "UPDATE users SET permission = :permission WHERE id = :id";
			$bind_user = array(
				'permission' => $data['permission'],
				'id' => $data['user_id']
			);
			
			$this->pdo->fetchAffected($stm_user, $bind_user);

			$stm_profile  = "UPDATE profile SET nama_penuh = :nama_penuh WHERE user_id = :user_id";
			$bind_profile = array(
				'nama_penuh' => $data['nama_penuh'],
				'user_id' => $data['user_id']
			);
			
			$this->pdo->fetchAffected($stm_profile, $bind_profile);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}
}
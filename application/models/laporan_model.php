<?php
Class Laporan_model extends Model {
	
	public function getLaporan($table)
	{
		try{
			$stm  = "SELECT * FROM ".$table;
			$result = $this->pdo->fetchAll($stm);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getByID($table, $id_name, $id)
	{
		try{
			$stm  = "SELECT * FROM ".$table." WHERE ".$id_name." = :id";
			$bind = array('id' => $id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getEmail($email)
	{
		try{
			$stm = "SELECT * FROM email_log WHERE recipient = :email";
			$bind = array('email' => $email);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function countMatlamat($matlamat_id)
	{
		try{
			$stm = "SELECT COUNT('matlamat_id') as total FROM view_matlamat_vs_user WHERE matlamat_id = :matlamat_id";
			$bind = array('matlamat_id' => $matlamat_id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function countMatlamatUlasan($matlamat_id)
	{
		try{
			$stm = "SELECT COUNT('matlamat_id') as total FROM view_borang_ulasan_matlamat WHERE matlamat_id = :matlamat_id";
			$bind = array('matlamat_id' => $matlamat_id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function countKriteria()
	{
		try{
			$stm = "SELECT * FROM count_kriteria";
			$result = $this->pdo->fetchAll($stm);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function countLaporan($table)
	{
		try{
			$stm = "SELECT * FROM ".$table;
			$result = $this->pdo->fetchAll($stm);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function update($data)
	{
		try{
			$stm  = "UPDATE ".$data['table']." SET name = ".$data['name']." WHERE id = :id";
			$bind = array(
				'id' => $data['id']
			);
			
			return $this->pdo->fetchAffected($stm, $bind);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function delete($data)
	{
		try{
			$stm  = "DELETE FROM ".$data['table']." WHERE id = :id LIMIT 1";
			$bind = array(
				'id' => $data['id']
			);
			
			return $this->pdo->fetchAffected($stm, $bind);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}
}
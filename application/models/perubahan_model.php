<?php

class Perubahan_model extends Model {
	
	public function getByID($table, $id)
	{
		try{
			$stm  = "SELECT * FROM view_".$table." WHERE id = :id";
			$bind = array('id' => $id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getBorang($user_id)
	{
		try{
			$stm  = "SELECT * FROM borang_ptkl_3 WHERE user_id = :user_id";
			$bind = array('user_id' => $user_id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getPerubahanByID($borang_id)
	{
		try{
			$stm  = "SELECT * FROM view_ptkl_perubahan WHERE borang_id = :borang_id";
			$bind = array('borang_id' => $borang_id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getZon()
	{
		try{
			$stm  = "SELECT * FROM zon";
			$result = $this->pdo->fetchAll($stm);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getZonByID($id)
	{
		try{
			$stm  = "SELECT * FROM zon WHERE id = :id LIMIT 1";
			$bind = array('id' => $id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getTapak($zon_id)
	{
		try{
			$stm  = "SELECT * FROM view_perubahan_3 WHERE zon_id = :zon_id";
			$bind = array('zon_id' => $zon_id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function add($data)
	{
		try{
			$stm  = "INSERT INTO perubahan_3 (bil, rujukan, perkara, zon_id, attachment_1, attachment_2) VALUES (:bil, :rujukan, :perkara, :zon_id, :attachment_1, :attachment_2)";
			$bind = array(
				'bil' => $data['bil'],
				'rujukan' => $data['rujukan'],
				'perkara' => $data['perkara'],
				'zon_id' => $data['zon_id'],
				'attachment_1' => $data['attachment_1'],
				'attachment_2' => $data['attachment_2']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			return $this->pdo->lastInsertId();
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function update($data)
	{
		try{
			$stm  = "UPDATE perubahan_3 SET bil = :bil, rujukan = :rujukan, perkara = :perkara, zon_id = :zon_id, attachment_1 = :attachment_1, attachment_2 = :attachment_2 WHERE id = :id";
			$bind = array(
				'bil' => $data['bil'],
				'rujukan' => $data['rujukan'],
				'perkara' => $data['perkara'],
				'zon_id' => $data['zon_id'],
				'attachment_1' => $data['attachment_1'],
				'attachment_2' => $data['attachment_2'],
				'id' => $data['id'],
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			$e->getMessage();
			echo "0";
		}
	}

	public function delete($data)
	{
		try{
			$stm  = "DELETE FROM ".$data['table']." WHERE id = :id LIMIT 1";
			$bind = array(
				'id' => $data['id']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			$e->getMessage();
			echo "0";
		}
	}
	
}
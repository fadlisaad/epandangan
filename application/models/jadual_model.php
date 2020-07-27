<?php
Class Jadual_model extends Model {
	
	public function get($table = 'sesi_jadual')
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

	public function addSesi($data)
	{
		try{
			$stm  = "INSERT INTO sesi_jadual (lokasi_id, jenis, tarikh, slot_masa, chairman, ajk_1, ajk_2, ajk_3, ajk_4, keterangan) VALUES (:lokasi_id, :jenis, :tarikh, :slot_masa, :chairman, :ajk_1, :ajk_2, :ajk_3, :ajk_4, :keterangan)";
			$bind = array(
				'lokasi_id' => $data['lokasi_id'],
				'jenis' => $data['jenis'],
				'tarikh' => $data['tarikh'],
				'slot_masa' => $data['slot_masa'],
				'chairman' => $data['chairman'],
				'ajk_1' => $data['ajk_1'],
				'ajk_2' => $data['ajk_2'],
				'ajk_3' => $data['ajk_3'],
				'ajk_4' => $data['ajk_4'],
				'keterangan' => $data['keterangan']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			return $this->pdo->lastInsertId();
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function updateJadual($data)
	{
		try{
			$stm  = "UPDATE sesi_jadual SET lokasi_id = :lokasi_id, jenis = :jenis, tarikh = :tarikh, slot_masa = :slot_masa, chairman = :chairman, ajk_1 = :ajk_1, ajk_2 = :ajk_2, ajk_3 = :ajk_3, ajk_4 = :ajk_4, keterangan = :keterangan WHERE id = :id";
			$bind = array(
				'lokasi_id' => $data['lokasi_id'],
				'jenis' => $data['jenis'],
				'tarikh' => $data['tarikh'],
				'slot_masa' => $data['slot_masa'],
				'chairman' => $data['chairman'],
				'ajk_1' => $data['ajk_1'],
				'ajk_2' => $data['ajk_2'],
				'ajk_3' => $data['ajk_3'],
				'ajk_4' => $data['ajk_4'],
				'keterangan' => $data['keterangan'],
				'id' => $data['id'],
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

	public function deleteBorang($data)
	{
		try{
			$stm  = "DELETE FROM sesi_pendengaran WHERE borang_id = :borang_id AND sesi_id = :sesi_id LIMIT 1";
			$bind = array(
				'borang_id' => $data['borang_id'],
				'sesi_id' => $data['sesi_id']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}
}
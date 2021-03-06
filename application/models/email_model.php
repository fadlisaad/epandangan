<?php
Class Email_model extends Model {
	
	public function getEmailLog($table)
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

	public function getByEmail($email)
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
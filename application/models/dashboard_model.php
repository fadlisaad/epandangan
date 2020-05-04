<?php

class Dashboard_model extends Model {

	public function countDownload()
	{
		try{
			$stm = "SELECT COUNT(id) AS total FROM download";
			$result = $this->pdo->fetchAll($stm);
			return $result[0]['total'];
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function totalDownload()
	{
		try{
			$stm = "SELECT SUM(count) AS total FROM download";
			$result = $this->pdo->fetchAll($stm);
			return $result[0]['total'];
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function countRegister()
	{
		try{
			$stm = "SELECT COUNT(id) AS total FROM users WHERE permission = 'user'";
			$result = $this->pdo->fetchAll($stm);
			return $result[0]['total'];
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function countKehadiran($hadir)
	{
		try{
			$stm = "SELECT COUNT(borang_id) AS total FROM view_dashboard WHERE hadir = :hadir";
			$bind = array('hadir' => $hadir);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result[0]['total'];
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}
	
}
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

	public function countKategori($kategori)
	{
		try{
			$stm = "SELECT COUNT(borang_id) AS total FROM view_dashboard WHERE kategori = :kategori";
			$bind = array('kategori' => $kategori);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result[0]['total'];
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function countAttachment()
	{
		try{
			$stm = "SELECT COUNT(borang_id) AS total FROM view_dashboard WHERE file_id > 0";
			$result = $this->pdo->fetchAll($stm);
			return $result[0]['total'];
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function countAttachmentNull()
	{
		try{
			$stm = "SELECT COUNT(borang_id) AS total FROM view_dashboard WHERE file_id IS NULL";
			$result = $this->pdo->fetchAll($stm);
			return $result[0]['total'];
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function countSubmitByPegawai()
	{
		try{
			$stm = "SELECT COUNT(vbp.borang_id) AS total FROM view_borang_pskl vbp LEFT JOIN users u ON u.id = vbp.user_id WHERE u.email LIKE '%yopmail.com%'";
			$result = $this->pdo->fetchAll($stm);
			return $result[0]['total'];
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function countTotal()
	{
		try{
			$stm = "SELECT COUNT(vbp.borang_id) AS total FROM view_borang_pskl vbp LEFT JOIN users u ON u.id = vbp.user_id";
			$result = $this->pdo->fetchAll($stm);
			return $result[0]['total'];
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}
	
}
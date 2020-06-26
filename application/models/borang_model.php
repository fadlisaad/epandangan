<?php
Class Borang_model extends Model {
	
	public function get($table)
	{
		try{
			$stm = "SELECT * FROM borang_".$table;
			$result = $this->pdo->fetchAll($stm);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getByID($table, $borang_id)
	{
		try{
			$stm = "SELECT * FROM view_borang_".$table." WHERE borang_id = :borang_id";
			$bind = array('borang_id' => $borang_id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getSesiByID($table, $borang_id)
	{
		try{
			$stm  = "SELECT * FROM view_".$table." WHERE borang_id = :borang_id";
			$bind = array('borang_id' => $borang_id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getPenilaianByID($table, $id)
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

	public function checkPenilaianByID($table, $borang_id)
	{
		try{
			$stm  = "SELECT * FROM ".$table." WHERE borang_id = :borang_id";
			$bind = array('borang_id' => $borang_id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getSingleByID($table, $id, $id_name)
	{
		try{
			$stm = "SELECT * FROM ".$table." WHERE ".$id_name." = :id";
			$bind = array('id' => $id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getLastIDPSKL()
	{
		try{
			$stm = "SELECT id FROM pskl_borang ORDER BY id DESC";
			$result = $this->pdo->fetchAll($stm);
			return $result[0]['id'];
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function getByUserID($table, $user_id)
	{
		try{
			$stm = "SELECT * FROM view_borang_".$table." WHERE user_id = :user_id";
			$bind = array('user_id' => $user_id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function addPTKL($data, $table)
	{
		try{
			$stm = "INSERT INTO borang_".$table." (peta_indeks, no_lot, muka_surat, pandangan_awam, cadangan, user_id, pegawai_id, tarikh_terima, tarikh_key_in, hadir, kategori, nama_organisasi, jumlah_nama) VALUES (:peta_indeks, :no_lot, :muka_surat, :pandangan_awam, :cadangan, :user_id, :pegawai_id, :tarikh_terima, :tarikh_key_in, :hadir, :kategori, :nama_organisasi, :jumlah_nama)";
			$bind = array(
				'peta_indeks' => $data['peta_indeks'],
				'no_lot' => $data['no_lot'],
				'muka_surat' => $data['muka_surat'],
				'pandangan_awam' => $data['pandangan_awam'],
				'cadangan' => $data['cadangan'],
				'user_id' => $data['user_id'],
				'pegawai_id' => $data['pegawai_id'],
				'tarikh_terima' => $data['tarikh_terima'],
				'tarikh_key_in' => $data['tarikh_key_in'],
				'hadir' => $data['hadir'],
				'kategori' => $data['kategori'],
				'nama_organisasi' => $data['nama_organisasi'],
				'jumlah_nama' => $data['jumlah_nama']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			return $this->pdo->lastInsertId();
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function addBorangPSKL($data)
	{
		try{
			$stm = "INSERT INTO pskl_borang (user_id, komen_bentuk_kandungan, komen_lain_lain, pegawai_id, tarikh_terima, hadir, kategori, nama_organisasi, jumlah_nama) VALUES (:user_id, :komen_bentuk_kandungan, :komen_lain_lain, :pegawai_id, :tarikh_terima, :hadir, :kategori, :nama_organisasi, :jumlah_nama)";
			$bind = array(
				'komen_bentuk_kandungan' => $data['komen_bentuk_kandungan'],
				'komen_lain_lain' => $data['komen_lain_lain'],
				'pegawai_id' => $data['pegawai_id'],
				'user_id' => $data['user_id'],
				'tarikh_terima' => $data['tarikh_terima'],
				'hadir' => $data['hadir'],
				'kategori' => $data['kategori'],
				'nama_organisasi' => $data['nama_organisasi'],
				'jumlah_nama' => $data['jumlah_nama']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			return $this->pdo->lastInsertId();
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function updateBorangPSKL($data)
	{
		try{
			$stm = "UPDATE pskl_borang SET komen_bentuk_kandungan = :komen_bentuk_kandungan, komen_lain_lain = :komen_lain_lain, tarikh_terima = :tarikh_terima, hadir = :hadir, kategori = :kategori, nama_organisasi = :nama_organisasi, jumlah_nama = :jumlah_nama WHERE user_id = :user_id";
			$bind = array(
				'komen_bentuk_kandungan' => $data['komen_bentuk_kandungan'],
				'komen_lain_lain' => $data['komen_lain_lain'],
				'user_id' => $data['user_id'],
				'tarikh_terima' => $data['tarikh_terima'],
				'hadir' => $data['hadir'],
				'kategori' => $data['kategori'],
				'nama_organisasi' => $data['nama_organisasi'],
				'jumlah_nama' => $data['jumlah_nama'],
				'user_id' => $data['user_id']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function addBorangMatlamat($data)
	{
		try{
			$stm = "INSERT INTO pskl_borang_matlamat (borang_id, matlamat_id, halatuju_id, tindakan_id, cadangan, justifikasi) VALUES (:borang_id, :matlamat_id, :halatuju_id, :tindakan_id, :cadangan, :justifikasi)";
			$bind = array(
				'borang_id' => $data['borang_id'],
				'matlamat_id' => $data['matlamat_id'],
				'halatuju_id' => $data['halatuju_id'],
				'tindakan_id' => $data['tindakan_id'],
				'cadangan' => $data['cadangan'],
				'justifikasi' => $data['justifikasi']
			);
			
			return $this->pdo->fetchAffected($stm, $bind);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function addBorangMatlamatPegawai($data)
	{
		try{
			$stm = "INSERT INTO pskl_borang_matlamat_pegawai (borang_id, pskl_borang_matlamat_id, matlamat_id, halatuju_id, tindakan_id, kriteria, muka_surat) VALUES (:borang_id, :pskl_borang_matlamat_id, :matlamat_id, :halatuju_id, :tindakan_id, :kriteria, :muka_surat)";
			$bind = array(
				'borang_id' => $data['borang_id'],
				'pskl_borang_matlamat_id' => $data['pskl_borang_matlamat_id'],
				'matlamat_id' => $data['matlamat_id'],
				'halatuju_id' => $data['halatuju_id'],
				'tindakan_id' => $data['tindakan_id'],
				'kriteria' => $data['kriteria'],
				'muka_surat' => $data['muka_surat']
			);
			
			return $this->pdo->fetchAffected($stm, $bind);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function addTindakan($data)
	{
		try{
			$stm = "INSERT INTO tindakan (borang_id, topik_id, zon_id, sektor_id, pegawai_id, sesi_id, status) VALUES (:borang_id, :topik_id, :zon_id, :sektor_id, :pegawai_id, :sesi_id, :status)";
			$bind = array(
				'borang_id' => $data['borang_id'],
				'topik_id' => $data['topik_id'],
				'zon_id' => $data['zon_id'],
				'sektor_id' => $data['sektor_id'],
				'pegawai_id' => $data['pegawai_id'],
				'sesi_id' => $data['sesi_id'],
				'status' => $data['status']
			);
			
			return $this->pdo->fetchAffected($stm, $bind);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function updatePTKL($data)
	{
		try{
			$stm = "UPDATE borang_ptkl SET peta_indeks = ".$data['peta_indeks'].", no_lot = ".$data['no_lot'].", muka_surat = ".$data['muka_surat'].", pandangan_awam = ".$data['pandangan_awam'].", cadangan = ".$data['cadangan'].", user_id = ".$data['user_id'].", pegawai_id = ".$data['pegawai_id'].", hadir = ".$data['hadir']." WHERE id = :id";
			$bind = array(
				'peta_indeks' => $data['peta_indeks'],
				'no_lot' => $data['no_lot'],
				'muka_surat' => $data['muka_surat'],
				'pandangan_awam' => $data['pandangan_awam'],
				'cadangan' => $data['cadangan'],
				'user_id' => $data['user_id'],
				'pegawai_id' => $data['pegawai_id'],
				'hadir' => $data['hadir'],
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
			$stm = "DELETE FROM borang_".$data['table']." WHERE id = :id LIMIT 1";
			$bind = array(
				'id' => $data['id']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function deleteAJAX($data)
	{
		try{
			$stm = "DELETE FROM ".$data['table']." WHERE id = :id LIMIT 1";
			$bind = array(
				'id' => $data['id']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function deleteMatlamat($id)
	{
		try{
			$stm = "DELETE FROM pskl_borang_matlamat WHERE id = :id LIMIT 1";
			$bind = array(
				'id' => $id
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
			echo "0";
		}
	}

	public function getDropdown($table)
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

	public function addPegawai($data)
	{
		try{
			$stm  = "INSERT INTO pegawai (nama) VALUES (:nama)";
			$bind = array(
				'nama' => $data['nama']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
			echo "0";
		}
	}

	public function addUlasanPanel($data)
	{
		try{
			$stm  = "INSERT INTO ulasan_panel (borang_id, penilaian, catatan, pengesyoran, justifikasi) VALUES (:borang_id, :penilaian, :catatan, :pengesyoran, :justifikasi)";
			$bind = array(
				'borang_id' => $data['borang_id'],
				'penilaian' => $data['penilaian'],
				'catatan' => $data['catatan'],
				'pengesyoran' => $data['pengesyoran'],
				'justifikasi' => $data['justifikasi']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
			echo "0";
		}
	}

	public function updateUlasanPanel($data)
	{
		try{
			$stm  = "UPDATE ulasan_panel SET borang_id = :borang_id, penilaian = :penilaian, catatan = :catatan, pengesyoran = :pengesyoran, justifikasi = :justifikasi WHERE id = :id";
			$bind = array(
				'borang_id' => $data['borang_id'],
				'penilaian' => $data['penilaian'],
				'catatan' => $data['catatan'],
				'pengesyoran' => $data['pengesyoran'],
				'id' => $data['id']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function addUlasan($data)
	{
		try{
			$stm  = "INSERT INTO ulasan (borang_id, user_id, ringkasan, ulasan, matlamat_id, halatuju_id, tindakan_id, kriteria, muka_surat) VALUES (:borang_id, :user_id, :ringkasan, :ulasan, :matlamat_id, :halatuju_id, :tindakan_id, :kriteria, :muka_surat)";
			$bind = array(
				'borang_id' => $data['borang_id'],
				'user_id' => $data['user_id'],
				'ringkasan' => $data['ringkasan'],
				'ulasan' => $data['ulasan'],
				'matlamat_id' => $data['matlamat_id'],
				'halatuju_id' => $data['halatuju_id'],
				'tindakan_id' => $data['tindakan_id'],
				'kriteria' => $data['kriteria'],
				'muka_surat' => $data['muka_surat']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
			echo "0";
		}
	}

	public function addUlasanKeseluruhan($data)
	{
		try{
			$stm  = "INSERT INTO ulasan_keseluruhan (borang_id, user_id, ringkasan, matlamat_id, halatuju_id, tindakan_id, kriteria, muka_surat) VALUES (:borang_id, :user_id, :ringkasan, :matlamat_id, :halatuju_id, :tindakan_id, :kriteria, :muka_surat)";
			$bind = array(
				'borang_id' => $data['borang_id'],
				'user_id' => $data['user_id'],
				'ringkasan' => $data['ringkasan'],
				'matlamat_id' => $data['matlamat_id'],
				'halatuju_id' => $data['halatuju_id'],
				'tindakan_id' => $data['tindakan_id'],
				'kriteria' => $data['kriteria'],
				'muka_surat' => $data['muka_surat']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
			echo "0";
		}
	}

	public function addUlasanMatlamat($data)
	{
		try{
			$stm  = "INSERT INTO ulasan_matlamat (borang_id, borang_matlamat_id, user_id, ulasan, implikasi, matlamat_id, halatuju_id, tindakan_id, kriteria, muka_surat) VALUES (:borang_id, :borang_matlamat_id, :user_id, :ulasan, :implikasi, :matlamat_id, :halatuju_id, :tindakan_id, :kriteria, :muka_surat)";
			$bind = array(
				'borang_id' => $data['borang_id'],
				'borang_matlamat_id' => $data['borang_matlamat_id'],
				'user_id' => $data['user_id'],
				'ulasan' => $data['ulasan'],
				'implikasi' => $data['implikasi'],
				'matlamat_id' => $data['matlamat_id'],
				'halatuju_id' => $data['halatuju_id'],
				'tindakan_id' => $data['tindakan_id'],
				'kriteria' => $data['kriteria'],
				'muka_surat' => $data['muka_surat']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
			echo "0";
		}
	}

	public function updateUlasan($data)
	{
		try{
			$stm  = "UPDATE ulasan SET borang_id = :borang_id, user_id = :user_id, ringkasan = :ringkasan, ulasan = :ulasan, matlamat_id = :matlamat_id, halatuju_id = :halatuju_id, tindakan_id = :tindakan_id, kriteria = :kriteria, muka_surat = :muka_surat WHERE id = :id";
			$bind = array(
				'id' => $data['id'],
				'borang_id' => $data['borang_id'],
				'user_id' => $data['user_id'],
				'matlamat_id' => $data['matlamat_id'],
				'halatuju_id' => $data['halatuju_id'],
				'tindakan_id' => $data['tindakan_id'],
				'kriteria' => $data['kriteria'],
				'muka_surat' => $data['muka_surat'],
				'ulasan' => $data['ulasan'],
				'ringkasan' => $data['ringkasan']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
			echo "0";
		}
	}

	public function updateUlasanKeseluruhan($data)
	{
		try{
			$stm  = "UPDATE ulasan_keseluruhan SET borang_id = :borang_id, user_id = :user_id, ringkasan = :ringkasan WHERE id = :id";
			$bind = array(
				'id' => $data['id'],
				'borang_id' => $data['borang_id'],
				'user_id' => $data['user_id'],
				'ringkasan' => $data['ringkasan']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
			echo "0";
		}
	}

	public function updateUlasanMatlamat($data)
	{
		try{
			$stm  = "UPDATE ulasan_matlamat SET borang_id = :borang_id, borang_matlamat_id = :borang_matlamat_id, user_id = :user_id, ulasan = :ulasan, implikasi = :implikasi, matlamat_id = :matlamat_id, halatuju_id = :halatuju_id, tindakan_id = :tindakan_id, kriteria = :kriteria, muka_surat = :muka_surat WHERE id = :id";
			$bind = array(
				'id' => $data['id'],
				'borang_id' => $data['borang_id'],
				'borang_matlamat_id' => $data['borang_matlamat_id'],
				'matlamat_id' => $data['matlamat_id'],
				'halatuju_id' => $data['halatuju_id'],
				'tindakan_id' => $data['tindakan_id'],
				'kriteria' => $data['kriteria'],
				'muka_surat' => $data['muka_surat'],
				'user_id' => $data['user_id'],
				'ulasan' => $data['ulasan'],
				'implikasi' => $data['implikasi']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
			echo "0";
		}
	}

	public function updateMatlamatPegawai($data)
	{
		try{
			$stm  = "UPDATE pskl_borang_matlamat_pegawai SET matlamat_id = :matlamat_id, halatuju_id = :halatuju_id, tindakan_id = :tindakan_id, kriteria = :kriteria, muka_surat = :muka_surat WHERE id = :id";
			$bind = array(
				'id' => $data['id'],
				'matlamat_id' => $data['matlamat_id'],
				'halatuju_id' => $data['halatuju_id'],
				'tindakan_id' => $data['tindakan_id'],
				'kriteria' => $data['kriteria'],
				'muka_surat' => $data['muka_surat']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
			echo "0";
		}
	}

	public function addSesi($data)
	{
		try{
			$stm  = "INSERT INTO sesi_pendengaran (sesi_id, borang_id) VALUES (:sesi_id, :borang_id)";
			$bind = array(
				'sesi_id' => $data['sesi_id'],
				'borang_id' => $data['borang_id']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			echo $e->getMessage();
			echo "0";
		}
	}

	public function addPA3($data)
	{
		try{
			$stm = "INSERT INTO pskl_pa3 (borang_id, nama_1, nama_2, nama_3, jawatan_1, jawatan_2, jawatan_3, tarikh_1, tarikh_2, tarikh_3) VALUES (:borang_id, :nama_1, :nama_2, :nama_3, :jawatan_1, :jawatan_2, :jawatan_3, :tarikh_1, :tarikh_2, :tarikh_3)";
			$bind = array(
				'borang_id' => $data['borang_id'],
				'nama_1' => $data['nama_1'],
				'nama_2' => $data['nama_2'],
				'nama_3' => $data['nama_3'],
				'jawatan_1' => $data['jawatan_1'],
				'jawatan_2' => $data['jawatan_2'],
				'jawatan_3' => $data['jawatan_3'],
				'tarikh_1' => $data['tarikh_1'],
				'tarikh_2' => $data['tarikh_2'],
				'tarikh_3' => $data['tarikh_3']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function updatePA3($data)
	{
		try{
			$stm = "UPDATE pskl_pa3 SET nama_1 = :nama_1, nama_2 = :nama_2, nama_3 = :nama_3, jawatan_1 = :jawatan_1, jawatan_2 = :jawatan_2, jawatan_3 = :jawatan_3, tarikh_1 = :tarikh_1, tarikh_2 = :tarikh_2, tarikh_3 = :tarikh_3 WHERE borang_id = :borang_id";
			$bind = array(
				'borang_id' => $data['borang_id'],
				'nama_1' => $data['nama_1'],
				'nama_2' => $data['nama_2'],
				'nama_3' => $data['nama_3'],
				'jawatan_1' => $data['jawatan_1'],
				'jawatan_2' => $data['jawatan_2'],
				'jawatan_3' => $data['jawatan_3'],
				'tarikh_1' => $data['tarikh_1'],
				'tarikh_2' => $data['tarikh_2'],
				'tarikh_3' => $data['tarikh_3']
			);
			
			$this->pdo->fetchAffected($stm, $bind);
			echo "1";
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function getPA3($table, $borang_id)
	{
		try{
			$stm  = "SELECT * FROM view_".$table." WHERE borang_id = :borang_id";
			$bind = array('borang_id' => $borang_id);
			$result = $this->pdo->fetchAll($stm, $bind);
			return $result;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}
}
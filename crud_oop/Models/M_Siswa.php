<?php
    class M_Siswa extends Database {

        public function Tampil_Siswa($tabel){
            $query = $this->Select($tabel);
            return $query;
        }

        public function Simpan_Siswa($tabel, $data) {
            $query = $this->Insert($tabel, $data);
            return $query;
        }

        public function Edit_Data_Siswa($tabel, $where) {
            $query = $this->SelectWhere($tabel, $where);
            return $query;
        }

        public function Update_Siswa($tabel, $data, $id) {
            $query = $this->Update($tabel, $data, $id);
            return $query;
        }

        public function Delete_Siswa($tabel, $where) {
            $query = $this->Delete($tabel, $where);
            return $query;
        }
    }
?>
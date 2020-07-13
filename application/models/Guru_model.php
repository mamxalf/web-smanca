<?php

class Guru_model extends CI_Model {

    public function getAllGuru()
    {
        return $this->db->get('teachers')->result();
    }

    public function saveDataGuru()
    {
        // $foto_furu = $_FILES['foto_furu'];
    
        //     $config['upload_path']  = './assets/img/foto_guru';
        //     $config['allowed_types'] = 'jpg|png|jpeg';
            
        //     $this->load->library('upload', $config);
        //     if ($this->upload->do_upload('foto_furu')) {
        //         $foto_furu = $this->upload->data('file_name');
        //     } else {
        //         $foto_furu = null;
        //     }
        $data = [
            "nama_guru" => $this->input->post('nama_guru', true),
            "foto_guru" => $this->uploadFotoGuru()
        ];
        $this->db->insert('teachers', $data);
    }

    public function deleteDataGuru($id)
    {
        $this->db->where('id_teacher', $id);
        $this->db->delete('teachers');
    }

    public function getGurubyId($id)
    {
        return $this->db->get_where('teachers', ['id_teacher' => $id])->row();
    }
    
    public function editDataGuru()
    {
        $data = [
            "id_teacher" => $this->input->post('id_teacher'),
            "nama_guru" => $this->input->post('nama_guru', true),
            "foto_guru" => $this->updateFotoGuru()
        ];
        
        $this->db->where('id_teacher', $this->input->post('id_teacher'),);
        $this->db->update('teachers', $data);
    }

    private function uploadFotoGuru()
    {
        $config['upload_path']          = './assets/img/foto_guru';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_guru')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function updateFotoGuru()
    {
        $config['upload_path']          = './assets/img/foto_guru';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_guru')) {
            return $this->upload->data("file_name");
        }
        
        return $this->input->post('old_guru');
    }
}

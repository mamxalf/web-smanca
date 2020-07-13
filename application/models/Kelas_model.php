<?php

class Kelas_model extends CI_Model {

    public function getAllKelas()
    {
        return $this->db->get('classes')->result();
    }

    public function saveDataKelas()
    {
        $foto_bersama = $_FILES['foto_bersama'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto_bersama')) {
                $foto_bersama = $this->upload->data('file_name');
            } else {
                $foto_bersama = null;
            }
        

        $kelompok_1 = $_FILES['kelompok_1'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_1')) {
                $kelompok_1 = $this->upload->data('file_name');
            } else {
                $kelompok_1 = null;
            }
        

        $kelompok_2 = $_FILES['kelompok_2'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_2')) {
                $kelompok_2 = $this->upload->data('file_name');
            } else {
                $kelompok_2 = null;
            }
        

        $kelompok_3 = $_FILES['kelompok_3'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_3')) {
                $kelompok_3 = $this->upload->data('file_name');
            } else {
                $kelompok_3 = null;
            }
        

        $kelompok_4 = $_FILES['kelompok_4'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_4')) {
                $kelompok_4 = $this->upload->data('file_name');
            } else {
                $kelompok_4 = null;
            }
        

        $kelompok_5 = $_FILES['kelompok_5'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_5')) {
                $kelompok_5 = $this->upload->data('file_name');
            } else {
                $kelompok_5 = null;
            }
        

        $kelompok_6 = $_FILES['kelompok_6'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_6')) {
                $kelompok_6 = $this->upload->data('file_name');
            } else {
                $kelompok_6 = null;
            }
        

        $kelompok_7 = $_FILES['kelompok_7'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_7')) {
                $kelompok_7 = $this->upload->data('file_name');
            } else {
                $kelompok_7 = null;
            }
        

        $kelompok_8 = $_FILES['kelompok_8'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = NULL;
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_8')) {
                $kelompok_8 = $this->upload->data('file_name');
            } else {
                $kelompok_8 = null;
            }
        

        $data = [
            "nama_kelas" => $this->input->post('nama_kelas', true),
            "foto_bersama" => $foto_bersama,
            "kelompok_1" => $kelompok_1,
            "kelompok_2" => $kelompok_2,
            "kelompok_3" => $kelompok_3,
            "kelompok_4" => $kelompok_4,
            "kelompok_5" => $kelompok_5,
            "kelompok_6" => $kelompok_6,
            "kelompok_7" => $kelompok_7,
            "kelompok_8" => $kelompok_8
        ];
        $this->db->insert('classes', $data);
    }

    public function deleteDataKelas($id)
    {
        $this->db->where('id_class', $id);
        $this->db->delete('classes');
    }

    public function getKelasByKode($id)
    {
        return $this->db->get_where('classes', ['id_class' => $id])->row();
    }

    public function editDataKelas()
    {
        $foto_bersama = $_FILES['foto_bersama'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto_bersama')) {
                $foto_bersama = $this->upload->data('file_name');
            } else {
                $foto_bersama = $this->input->post('old_bersama');
            }
        

        $kelompok_1 = $_FILES['kelompok_1'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_1')) {
                $kelompok_1 = $this->upload->data('file_name');
            } else {
                $kelompok_1 = $this->input->post('old_1');
            }
        

        $kelompok_2 = $_FILES['kelompok_2'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_2')) {
                $kelompok_2 = $this->upload->data('file_name');
            } else {
                $kelompok_2 = $this->input->post('old_2');
            }
        

        $kelompok_3 = $_FILES['kelompok_3'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_3')) {
                $kelompok_3 = $this->upload->data('file_name');
            } else {
                $kelompok_3 = $this->input->post('old_3');
            }
        

        $kelompok_4 = $_FILES['kelompok_4'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_4')) {
                $kelompok_4 = $this->upload->data('file_name');
            } else {
                $kelompok_4 = $this->input->post('old_4');
            }
        

        $kelompok_5 = $_FILES['kelompok_5'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_5')) {
                $kelompok_5 = $this->upload->data('file_name');
            } else {
                $kelompok_5 = $this->input->post('old_5');
            }
        

        $kelompok_6 = $_FILES['kelompok_6'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_6')) {
                $kelompok_6 = $this->upload->data('file_name');
            } else {
                $kelompok_6 = $this->input->post('old_6');
            }
        

        $kelompok_7 = $_FILES['kelompok_7'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_7')) {
                $kelompok_7 = $this->upload->data('file_name');
            } else {
                $kelompok_7 = $this->input->post('old_7');
            }
        

        $kelompok_8 = $_FILES['kelompok_8'];
    
            $config['upload_path']  = './assets/img/foto_kelas';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kelompok_8')) {
                $kelompok_8 = $this->upload->data('file_name');
            } else {
                $kelompok_8 = $this->input->post('old_8');
            }
        

        $data = [
            "nama_kelas" => $this->input->post('nama_kelas', true),
            "foto_bersama" => $foto_bersama,
            "kelompok_1" => $kelompok_1,
            "kelompok_2" => $kelompok_2,
            "kelompok_3" => $kelompok_3,
            "kelompok_4" => $kelompok_4,
            "kelompok_5" => $kelompok_5,
            "kelompok_6" => $kelompok_6,
            "kelompok_7" => $kelompok_7,
            "kelompok_8" => $kelompok_8
        ];

        $this->db->where('id_class', $this->input->post('id_class'));
        $this->db->update('classes', $data);
    }

    public function getKelasByNama($kelas)
    {
        return $this->db->get_where('classes', ['nama_kelas' => $kelas])->row();
    }
}

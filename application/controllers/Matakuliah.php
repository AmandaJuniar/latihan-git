<?php
class Matakuliah extends CI_Controller
{

    public function index()
    {

        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules ('nama', 'Nama Siswa', 
'required|min_length[10]', [
            'required' => 'Nama Siswa Harus diisi',
            'min_length' => 'nama terlalu pendek',
        ]);

    $this->form_validation->set_rules('kelas', 'Kelas siswa', 
'required|min_length[4]', [
            'required' => 'Kelas  Harus diisi',
            'min_length' => 'Kelas terlalu pendek'
        ]);

        $this->form_validation->set_rules('tanggal', 'Tanggal Siswa', 
        'required', [
                    'required' => 'Tanggal  Harus diisi',
        ]);
    
        $this->form_validation->set_rules('tempat', 'Tempat Lahir', 
        'required', [
                    'required' => 'Tempat Lahir Harus diisi',
                ]);   
                
        $this->form_validation->set_rules('tempat', 'Tempat Lahir', 
        'required', [
                    'required' => 'Tempat Lahir Harus diisi',
                ]); 
        $this->form_validation->set_rules('alamat', 'Alamat', 
                'required', [
                            'required' => 'Alamat Harus diisi',
                        ]); 
        $this->form_validation->set_rules('jenis', 'Jenis Kelamin', 
                        'required', [
                                    'required' => 'Jenis Kelamin Harus diisi',
                                ]); 
        $this->form_validation->set_rules('agama', 'Agama', 
                                'required', [
                                            'required' => 'Agama Harus diisi',
                                        ]); 
    if ($this->form_validation->run() != true) {
        $this->load->view('view-form-matakuliah');
 } else {
    $data = [
        'nama' => $this->input->post('nama'),
        'kelas' => $this->input->post('kelas'),
        'tanggal' => $this->input->post('tanggal'),
        'tempat' => $this->input->post('tempat'),
        'alamat' => $this->input->post('alamat'),
        'jenis' => $this->input->post('jenis'),
        'agama' => $this->input->post('agama'),
    ];

    $this->load->view('view-data-matakuliah', $data);
    
    }
  }
}

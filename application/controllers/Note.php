<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Note extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        check_not_login();
        $this->load->library('form_validation');
        $this->load->model('note_m');
    }


    // Method show all data
    public function index()
    {
        $data = array(
            'title' => 'Note Data'
        );
        $this->load->model('note_m');
        $data['note'] = $this->note_m->get();
        $this->template->load('template', 'note/note_data', $data);
    }

    // Method add data
    public function add()
    {
        $data = array(
            'title' => 'Add Note'
        );

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
        $this->form_validation->set_rules('dikirim_ke', 'Dikirim ke', 'trim|required');
        $this->form_validation->set_rules('item', 'Item', 'trim|required');
        $this->form_validation->set_rules('user', 'User', 'trim|required');
        $this->form_validation->set_rules('department', 'Department', 'trim|required');
        $this->form_validation->set_rules('unit', 'Unit', 'trim|required');
        $this->form_validation->set_rules('sn', 'S/N', 'trim|required');
        $this->form_validation->set_rules('kerusakan', 'Damage Items', 'trim|required');
        $this->form_validation->set_rules('remarks', 'Remarks', 'trim|required');
        $this->form_validation->set_rules('number', 'Number', 'trim|required');

        $note = $this->note_m;
        $validation = $this->form_validation;
        // $validation->set_rules($note->rules());

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'note/note_form_add', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->note_m->add($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil ditambah!');
            }
            redirect('note');
        }
    }



    public function edit($id)

    {

        $data = array(
            'title' => 'Edit Note'
        );

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
        $this->form_validation->set_rules('dikirim_ke', 'Dikirim ke', 'trim|required');
        $this->form_validation->set_rules('item', 'Item', 'trim|required');
        $this->form_validation->set_rules('user', 'User', 'trim|required');
        $this->form_validation->set_rules('department', 'Department', 'trim|required');
        $this->form_validation->set_rules('unit', 'Unit', 'trim|required');
        $this->form_validation->set_rules('sn', 'S/N', 'trim|required');
        $this->form_validation->set_rules('kerusakan', 'Damage Items', 'trim|required');
        $this->form_validation->set_rules('remarks', 'Remarks', 'trim|required');
        $this->form_validation->set_rules('number', 'Number', 'trim|required');

        $this->form_validation->set_error_delimiters(' <span class="text-danger font-weight-light txt-md">', '</span>');
        $this->form_validation->set_message('required', '%s masih kosong,silakan isi!');
        if ($this->form_validation->run() == FALSE) {
            $query = $data['row'] = $this->note_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'note/note_form_edit', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan!');
                window.location='" . site_url('note') . "'; </script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->note_m->edit($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil diubah!');
            }
            redirect('note');
        }
    }

    public function del()
    {
        $id = $this->input->post('note_id');
        $this->note_m->del($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        }
        redirect('note');
    }

    // Export Excel
    public function excel()
    {
        // $this->load->model('note_m');
        // $data['note'] = $this->note_m->result();
        $data['note'] = $this->note_m->view_data('note_data')->result();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Service Book");
        $object->getProperties()->setLastModifiedBy("Service Book");
        $object->getProperties()->setTitle("List Service Book Data");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'DATE');
        $object->getActiveSheet()->setCellValue('C1', 'SENT TO');
        $object->getActiveSheet()->setCellValue('D1', 'ITEM');
        $object->getActiveSheet()->setCellValue('E1', 'USER');
        $object->getActiveSheet()->setCellValue('F1', 'DEPARTMENT');
        $object->getActiveSheet()->setCellValue('G1', 'UNIT');
        $object->getActiveSheet()->setCellValue('H1', 'S/N');
        $object->getActiveSheet()->setCellValue('I1', 'DAMAGE');
        $object->getActiveSheet()->setCellValue('J1', 'REMARKS');
        $object->getActiveSheet()->setCellValue('K1', 'NUMBER');

        $baris = 2;
        $no = 1;



        foreach ($data['note'] as $nt) {

            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $nt->tanggal);
            $object->getActiveSheet()->setCellValue('C' . $baris, $nt->dikirim_ke);
            $object->getActiveSheet()->setCellValue('D' . $baris, $nt->item);
            $object->getActiveSheet()->setCellValue('E' . $baris, $nt->user);
            $object->getActiveSheet()->setCellValue('F' . $baris, $nt->department);
            $object->getActiveSheet()->setCellValue('G' . $baris, $nt->unit);
            $object->getActiveSheet()->setCellValue('H' . $baris, $nt->sn);
            $object->getActiveSheet()->setCellValue('I' . $baris, $nt->kerusakan);
            $object->getActiveSheet()->setCellValue('J' . $baris, $nt->remarks);
            $object->getActiveSheet()->setCellValue('K' . $baris, $nt->number);

            $baris++;
        }

        $filename = "Data_Service_Book" . '.xlsx';

        $object->getActiveSheet()->setTitle("Data Service Book");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }

    // Print Out Data
    public function print()
    {
        $data = array(
            'title' => 'Print Note Data'
        );

        $data['note'] = $this->note_m->view_data("note_data")->result();
        $this->load->view('print_note_data', $data);
    }
}

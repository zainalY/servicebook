<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Note_m extends CI_Model
{

    function get($id = null)
    {
        $this->db->from('note_data');
        if ($id != null) {
            $this->db->where('note_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // for excel data
    public function view_data()
    {
        return $this->db->get('note_data');
    }

    public function add($post)
    {
        $params['tanggal'] = $post['tanggal'];
        $params['dikirim_ke'] = $post['dikirim_ke'];
        $params['item'] = $post['item'];
        $params['user'] = $post['user'];
        $params['department'] = $post['department'];
        $params['unit'] = $post['unit'];
        $params['sn'] = $post['sn'];
        $params['kerusakan'] = $post['kerusakan'];
        $params['remarks'] = $post['remarks'];
        $params['number'] = $post['number'];

        $this->db->insert('note_data', $params);
    }

    public function edit($post)
    {
        $params['tanggal'] = $post['tanggal'];
        $params['dikirim_ke'] = $post['dikirim_ke'];
        $params['item'] = $post['item'];
        $params['user'] = $post['user'];
        $params['department'] = $post['department'];
        $params['unit'] = $post['unit'];
        $params['sn'] = $post['sn'];
        $params['kerusakan'] = $post['kerusakan'];
        $params['remarks'] = $post['remarks'];
        $params['number'] = $post['number'];

        $this->db->where('note_id', $post['note_id']);
        $this->db->update('note_data', $params);
    }

    public function del($id)
    {
        $this->db->where('note_id', $id);
        $this->db->delete('note_data');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
    public function index() {
        $this->load->database();
        $sql = 'select name from recruit.jobs';
        $query = $this->db->query($sql);
        $this->json([
            'code' => 0,
            'data' => $query->result()
        ]);
    }

    public function hello() {
        $this->json([
            'code' => 0,
            'data' => [
                'msg' => 'Hello World1'
            ]
        ]);
    }
}
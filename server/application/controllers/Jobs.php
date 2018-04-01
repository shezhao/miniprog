<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
    public function index() {
        $this->json([
            'code' => 0,
            'data' => [
                'company' => 'alibaba'
            ]
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
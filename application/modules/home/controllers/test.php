<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Test extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    public function index()
    {
        $this->load->library('controllerlist'); // Load the library
        $data['_folder_rot']='nhucauvieclam';
        $data['_module']='dangky';
        $data['_rot']=$_SERVER['DOCUMENT_ROOT'];
        print_r($this->controllerlist->initialize($data));
        exit;
    }
    public function sendmail()
    {
        $this->load->library('mailer');
        $this->mailer->sendmail('nguyentruonggiang91@gmail.com','nguyentruonggiang','test','test');
    }
}
?>

<?php
App::uses('AppController', 'Controller');

class EmailsController extends AppController {
	var $uses = array('Email', 'Url');
	
	public function index(){
	}

	public function get_emails(){

		$responser = array(
			'emails'  => $this->Email->find('all', array('limit' => 10)),
			'urlsNum' => $this->Url->find('count')
		); 

		return new CakeResponse(array('body' => json_encode($responser)));	
	}
}

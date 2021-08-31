<?php
class Controller {
	public function view($view, $data=[]){
		if(file_exists('../application/views/' . $view . '.php')){
			require_once '../application/views/' . $view . '.php';
		} else {
			die('Page not found');
		}
	}

	public function model($name){
		require_once '../application/models' . $name . '.php';

		return new $name();
	}

	public function redirect($page){
        header('location: ' . URLROOT. '/' . $page);
    }

}
?>
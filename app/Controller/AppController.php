<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

	public $components = array(
		'Session',
		'Brownie.BrwPanel',
		'DebugKit.Toolbar'
	);
        
	public $helpers = array('Html', 'Js', 'Time', 'Form', 'Session');

	// Este es el menu de Brownie
	public $brwMenu = array(
		'Menú' => array(
                        'Páginas' => 'Page',
                        'Artículos' => 'Article',
                        'Categorías de Artículos' => 'ArticleCategory'
		),
	);

	public function _isPanel() {
		return (!empty($this->params['plugin']) or !empty($this->params['brw']));
	}

	function beforeFilter() {
		if (!$this->_isPanel()) {
		
		}
		//Poner lo que sea dentro de if (!$this->_isPanel()) { y solo llamados a funciones!
        }

	function beforeRender() {
		$this->_setTitle();
                $this->set('date_format', 'd/m/Y');
                $this->set('date_format_mes', 'M');
                $this->set('date_format_dia', 'd');
	}

	function _setTitle() {
		if (!empty($this->pageTitle)) {
			$this->pageTitle .= ' - ';
		}
		$this->pageTitle .= Configure::read('brwSettings.companyName');
		$this->set('title_for_layout', $this->pageTitle);
	}

}
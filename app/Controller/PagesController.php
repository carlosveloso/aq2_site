<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * Default helper
 *
 * @var array
 */
	public $helpers = array('Html', 'Session');

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {
		$path = func_get_args();

		App::uses('GameQ', 'Lib/gameq');
		$gq = new GameQ();
		$servers = array(
		    'Privado 1' => array('quake2', '190.114.254.173', 27100),
		    'Elara' 		=> array('quake2', '190.114.254.173', 27000),
		    //'Quake3' => array('quake3', '190.98.228.106', 27960)
		);

		$gq->addServers($servers);
    
		// You can optionally specify some settings
		$gq->setOption('timeout', 500);
		$gq->setOption('raw', false);
		$gq->setOption('debug', false);

		// You can optionally specify some output filters,
		// these will be applied to the results obtained.
		$gq->setFilter('normalise');
		$gq->setFilter('sortplayers', 'gq_ping');

		// Send requests, and parse the data
		$results = $gq->requestData();
		//$results = explode("\\", $results['s1']['status'][0]);
		$this->set('results',$results);
		$this->render(implode('/', $path));
	}
}

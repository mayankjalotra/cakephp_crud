<?php
class DashboardsController extends AppController
{
	var $name='Dashboards';
	
	function linkdashboard(){
		$this->set('dashboards',$this->Dashboard->find('all'));
	}
}
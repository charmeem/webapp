<?php

/**
 * Course Model
 *
 * Create Database interaction Methods for Student section
 *
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */
 
class CourseModel extends BaseModel
{
    public $registry, $actionData;
    public function __construct ($controller_name, $addData, $table, Registry $registry)
	{
	$this->registry = $registry;
	$this->columns = $addData;
	
	}
	
	
}
 
 
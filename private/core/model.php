<?php

/**
 * main model
 */
class Model extends Database
{
	protected $table = "users";

	function __construct()
	{
		// code...
	}


	public function where($column,$value)
	{

		$column = addslashes($column);
		$query = "select * from $this->table where $column = :value";
		return $this->query($query,[
			'value'=>$value
		]);
	}

	public function findAll()
	{
		$query = "select * from $this->table ";
		return $this->query($query);
	}

    // public function get($columns = ['*'])
    // {
    //     $query = "select $columns from $this->table ";
	// 	return $this->query($query);
    // }

    // public function getWhere($columns = ['*'],$where ="")
    // {
    //     if(empty($where)){
    //         $where =1;
    //     }
    //     $query = "select $columns from $this->table WHERE $where ";
	// 	return $this->query($query);
    // }

	
}
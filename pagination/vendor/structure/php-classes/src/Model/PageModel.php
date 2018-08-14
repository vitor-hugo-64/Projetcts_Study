<?php

namespace ST\Model;

use PDO;

class PageModel
{
	private $DB;

	function __construct()
	{
		$this->DB =new PDO("mysql:host=localhost; dbname=structure", "root", "");;
	}

	public function pagination( $table, $currentPage, $numberRows = 3)
	{
		$start = ( $currentPage - 1) * $numberRows;

		$stmt = $this->DB->prepare("SELECT SQL_CALC_FOUND_ROWS person_id, first_name, last_name, handle FROM $table LIMIT :start, :number_rows");

		$stmt->bindParam(":start", $start, PDO::PARAM_INT);
		$stmt->bindParam(":number_rows", $numberRows, PDO::PARAM_INT);

		$stmt->execute();
		$registers = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt = $this->DB->prepare("SELECT FOUND_ROWS() AS total_registers");

		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$totalRegisters = $result[0]['total_registers'];

		$numberPages = ceil( $totalRegisters / $numberRows);

		$allPages = array();
		for ($i=1; $i <= $numberPages; $i++) { 
			$page = array( 
				'link' => 'http://local.com/PHP_MVC/pagination?page=' . $i, 
				'page' => $i

			);

			array_push( $allPages, $page);
		}

		$previous = ($currentPage - 1);
		$next = ($currentPage + 1);

		$pagination = array( 'registers' => $registers, 'all_pages' => $allPages, 'previous' => $previous, 'next' => $next, 'max' => $numberPages, 'currentPage' => $currentPage);

		// echo json_encode( $pagination);

		return $pagination;
	}
}
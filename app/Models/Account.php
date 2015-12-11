<?php 
namespace Models;

use Core\Model;

class Account extends Model 
{    
    public function __construct() {
        parent::__construct();
    }

	/**
	 * Select a student from the database by ID
	 */
    public function studentExists($id) {
		return $this->db->select("SELECT StudentId FROM " . "student WHERE StudentId = :id",
			array(
				':id' => $id
			));
    }

	/**
	 * Select a student by specific properties
	 */
    public function getStudentHash($id) {
		return $this->db->select("SELECT StudentId, Name, Password FROM " . "student WHERE StudentId = :id",
			array(
				':id' => $id
			));
    }

	/**
	 * Insert a student record into the database, return the id
	 */
	public function insertStudent($student) {
		$this->db->insert("student", $student);
		return $this->db->lastInsertId('StudentId');
	}
}
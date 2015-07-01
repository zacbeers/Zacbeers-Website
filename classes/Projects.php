<?php
class Projects {
    private $_db,
            $_data;
    
    public function __construct() {
        $this->_db = DB::getInstance();
    }
    
    public function update($fields = array(), $id = null) {
        if(!$this->_db->update($table, $id, $fields)) {
            throw new Exception('There was a problem updating.<br />');
        }
    }
    
    public function create($table, $fields = array()) {
        if(!$this->_db->insert($table, $fields)) {
            throw new Exception('There was a problem adding new project.<br />');
        }
    }
    
    public function exists() {
        return (!empty($this->_data)) ? true : false;
    }
    
    public function data() {
        return $this->_data;
    }
    public function list() {
        return DB::select("SELECT * FROM projects");
    }
}
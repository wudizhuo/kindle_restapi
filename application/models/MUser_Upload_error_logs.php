<?php
class MUser_Upload_error_logs extends CI_Model {
    protected $table = "user_upload_error_logs";

    function __construct() {
        parent::__construct($this->table);
    }

    public function get_by_uid($users_app_uid){
        $this->db->select();
        $this->db->where('app_uid', $users_app_uid);
        $res = $this->db->get($this->table);
        return $res ? $res->result_array() : array();
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}

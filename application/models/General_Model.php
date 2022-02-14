<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class General_Model extends CI_Model {
    function get_type_name_by_id($type, $type_id = '', $field = 'settings_name') {
        if ($type_id != '') {
            $l = $this->db->get_where($type, array($type . '_id' => $type_id));
            $n = $l->num_rows();
            if ($n > 0) {
                return $l->row()->$field;
            }
        }
    }
    function get_settings_value($type, $type_name = '', $field = 'settings_value') {
        if ($type_name != '') {
            return $this->db->get_where($type, array('settings_name' => $type_name))->row()->$field;
        }
    }
    public function getAllItemTable($table, $colum = '', $id = '', $orderColumn = '', $orderby = '') {
        if ($colum != "") {
            $this->db->where($colum, $id);
        }
        if ($orderColumn != "" && $orderby != "") {
            $this->db->order_by($orderColumn, $orderby);
        }
        $query = $this->db->get($table);
        return $query;
    }
    public function getAllItemTable_array($table, $column_array = array(), $statusColum = '', $orderColumn = '', $orderby = '') {
        foreach ($column_array as $columnkey => $column) {
            $this->db->where($columnkey, $column);
        }
        if ($orderColumn != "" && $orderby != "") {
            $this->db->order_by($orderColumn, $orderby);
        }
        $query = $this->db->get($table);
        return $query;
    }
    function update_table($table, $colid, $idval, $uvalue) {
        $this->db->where($colid, $idval);
        $dbquery = $this->db->update($table, $uvalue);
        if ($this->db->affected_rows() > 0) return true;
        else return false;
    }
    function insert_data($table, $insert_data) {
        $this->db->insert($table, $insert_data);
        $last_insert_id = $this->db->insert_id();
        return $last_insert_id;
    }
    function delete_multiple_data($id) {
        $this->db->delete('admin_login_details', array('admin_id' => $id));
        $this->db->delete('admin_bank_details', array('admin_id' => $id));
        $this->db->delete('admin_role_details', array('admin_id' => $id));
        $this->db->delete('admin_details', array('admin_id' => $id));
        if ($this->db->affected_rows() >= '1') {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function delete_data($table, $col, $val) {
        $this->db->where($col, $val);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1') {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function get_side_bar_menu_v1($group = '', $where = '', $module = '') {
        if ($this->session->userdata('admin_id') != ADMIN_ID) {
            $sub_admin_id = $this->session->userdata('admin_id');
            $this->db->where('admin_role_details.admin_id', $sub_admin_id);
            if ($where != '') {
                $this->db->where('privilege_title', $where);
            }
            if ($module != '') {
                $this->db->where('privilege_module', $module);
            }
            $this->db->where('privilege_functions.menu_status', 'ACTIVE');
            $this->db->where('privilege_functions.menu_visible', '1');
            $this->db->join('privilege_admin_roles', 'privilege_admin_roles.admin_role_id = admin_role_details.admin_roles_id', 'right');
            $this->db->join('privilege_actions', 'privilege_actions.privilege_id = privilege_admin_roles.privilege_id', 'right');
            $this->db->join('privilege_functions', 'privilege_functions.privilege_functions_id = privilege_actions.privilege_functions_id', 'left');
            if ($group != '') {
                $this->db->group_by($group);
            }
            if ($group == 'privilege_module') {
                $this->db->order_by('sorting_by_2', 'ASC');
            } else if ($group == 'privilege_title') {
                $this->db->order_by('sorting_by', 'ASC');
            } else {
                $this->db->order_by('sorting_by_3', 'ASC');
            }
            $query = $this->db->get('admin_role_details');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return '';
            }
        } else {
            if ($where != '') {
                $this->db->where('privilege_title', $where);
            }
            if ($module != '') {
                $this->db->where('privilege_module', $module);
            }
            $this->db->where('privilege_functions.menu_status', 'ACTIVE');
            $this->db->where('privilege_functions.menu_visible', '1');
            if ($group != '') {
                $this->db->group_by($group);
            }
            if ($group == 'privilege_module') {
                $this->db->order_by('sorting_by_2', 'ASC');
            } else if ($group == 'privilege_title') {
                $this->db->order_by('sorting_by', 'ASC');
            } else {
                $this->db->order_by('sorting_by_3', 'ASC');
            }
            $query = $this->db->get('privilege_functions');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return '';
            }
        }
    }
    function fetch_country_list() {
        $select = "SELECT * FROM countries";
        $query = $this->db->query($select);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function get_user_roles() {
        $select = "SELECT * FROM admin_role WHERE status = 'ACTIVE'";
        $query = $this->db->query($select);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function get_admin_details($admin_id) {
        // print_r($_SESS);
        /* $this->db->select('admin_details.*,address_details.*,admin_login_details.admin_type_id, countries.name,admin_bank_details.*')->from('admin_details')->where('admin_details.admin_id', $admin_id)->where('admin_status', 'ACTIVE')
        ->join('admin_login_details', 'admin_login_details.admin_id = admin_details.admin_id', 'left')->join('address_details', 'address_details.address_details_id = admin_details.address_details_id', 'left')->join('countries', 'countries.id = address_details.country', 'left')->join('admin_bank_details', 'admin_bank_details.admin_id = admin_details.admin_id', 'left');
        $query = $this->db->get();*/
        $this->db->select('admin_details.*,admin_details.admin_id as user_id,address_details.*, countries.name as country_name,cities.name as city_name,admin_role.admin_role_id,admin_role.admin_role_name,admin_bank_details.*')->from('admin_details')->where('admin_details.admin_id', $admin_id)->join('admin_login_details', 'admin_login_details.admin_id = admin_details.admin_id', 'left')->join('address_details', 'address_details.address_details_id = admin_details.address_details_id', 'left')->join('countries', 'countries.id = address_details.country', 'left')->join('cities', 'cities.id = address_details.city', 'left')->join('admin_role_details', 'admin_role_details.admin_id = admin_details.admin_id', 'left')->join('admin_role', 'admin_role.admin_role_id = admin_role_details.admin_roles_id', 'left')->join('admin_bank_details', 'admin_bank_details.admin_id = admin_details.admin_id', 'left');
        $this->db->order_by('admin_details.admin_id', 'DESC');
        $query = $this->db->get();
        // print_r($this->db->last_query());exit;
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return '';
        }
    }
    public function get_admin_details_by_role($role_id) {
        $this->db->select('admin_details.*,admin_details.admin_id as user_id,address_details.*, countries.name as country_name,cities.name as city_name,admin_role.admin_role_id,admin_role.admin_role_name,admin_bank_details.*')->from('admin_details')->join('admin_login_details', 'admin_login_details.admin_id = admin_details.admin_id', 'left')->join('address_details', 'address_details.address_details_id = admin_details.address_details_id', 'left')->join('countries', 'countries.id = address_details.country', 'left')->join('cities', 'cities.id = address_details.city', 'left')->join('admin_role_details', 'admin_role_details.admin_id = admin_details.admin_id', 'left')->join('admin_role', 'admin_role.admin_role_id = admin_role_details.admin_roles_id', 'left')->join('admin_bank_details', 'admin_bank_details.admin_id = admin_details.admin_id', 'left')->where('admin_role_details.admin_roles_id', $role_id)->or_where('admin_role_details.admin_roles_id', 5);
        $this->db->order_by('admin_details.admin_id', 'DESC');
        $query = $this->db->get();
        // print_r($this->db->last_query());exit;
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return '';
        }
    }
    public function get_user_details() {
        $this->db->select('admin_details.*,address_details.*, countries.name as country_name,cities.name as city_name,admin_role.admin_role_id,admin_role.admin_role_name')->from('admin_details')->join('admin_login_details', 'admin_login_details.admin_id = admin_details.admin_id', 'left')->join('address_details', 'address_details.address_details_id = admin_details.address_details_id', 'left')->join('countries', 'countries.id = address_details.country', 'left')->join('cities', 'cities.id = address_details.city', 'left')->join('admin_role_details', 'admin_role_details.admin_id = admin_details.admin_id', 'left')->join('admin_role', 'admin_role.admin_role_id = admin_role_details.admin_roles_id', 'left');
        $this->db->order_by('admin_details.admin_id', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function check_admin_password($password) {
        $password = (md5($password));
        $aa = "SELECT admin_id FROM admin_login_details WHERE admin_password='$password' AND admin_id='" . $this->session->userdata('admin_id') . "'";
        $query = $this->db->query($aa); //echo $this->db->last_query();exit;
        if ($query->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    function update_admin_password($password = '', $admin_id) {
        if (!empty($password)) {
            $data['admin_password'] = md5($password);
            $where = "admin_id = " . $admin_id;
            if ($this->db->update('admin_login_details', $data, $where)) {
                //echo $this-> db->last_query();exit;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    function update_admin_address($update_data_address, $address_details_id) {
        // echo "<pre>";print_r($update_data_address);exit;
        $this->db->where('address_details_id', $address_details_id);
        $this->db->update('address_details', $update_data_address);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function update_admin_details($update, $admin_id) {
        $this->db->where('admin_id', $admin_id);
        $this->db->update('admin_details', $update);
        //echo $this->db->last_query();exit;
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function activate_functions($data) {
        $status = false;
        $this->db->where("privilege_id != ", 0);
        $this->db->delete('privilege_actions');
        //echo "<pre>"; var_dump($privilege_details); exit;
        if (count($data) > 0) {
            if ($this->db->insert_batch("privilege_actions", $data)) {
                $status = true;
            }
        }
        return $status;
    }
    function get_privilege_functions() {
        $this->db->select('*');
        $query = $this->db->get('privilege_functions');
        // echo $this->db->last_query(); die();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return '';
        }
    }
    function get_privilege_active_functions() {
        //$this->db->where("privilege_id",$privilege_id);
        $this->db->select('privilege_actions.privilege_id,privilege_actions.privilege_functions_id');
        $query = $this->db->get('privilege_actions');
        // echo $this->db->last_query(); die();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
}
?>

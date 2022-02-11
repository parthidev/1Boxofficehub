<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Home extends CI_Controller
{
    public function __construct()
    {
            /*
     *  Developed by: Sivakumar G
     *  Date    : 22 January, 2022
     *  1BoxOffice Hub
     *  https://www.1boxoffice.com/
     */
        parent::__construct();
         $this->app_name          = $this->General_Model->get_type_name_by_id('general_settings', '1', 'settings_value');
        $this->app_login_image    = $this->General_Model->get_type_name_by_id('general_settings', '13', 'settings_value');
        $this->app_title          = $this->General_Model->get_type_name_by_id('general_settings', '2', 'settings_value');
        $this->general_path       = $this->General_Model->get_type_name_by_id('general_settings', '16', 'settings_value');
        $this->app_favicon        = $this->General_Model->get_type_name_by_id('general_settings', '15', 'settings_value');
        $this->login_image        = $this->General_Model->get_type_name_by_id('general_settings', '13', 'settings_value');
        $this->logo                 = $this->General_Model->get_type_name_by_id('general_settings', '17', 'settings_value');
        
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        

    }

    public function app_data(){

        $data['app_name']        = $this->app_name;
        $data['app_login_image'] = $this->app_login_image;
        $data['app_title']       = $this->app_title;
        $data['general_path']    = $this->general_path;
        $data['app_favicon']     = $this->app_favicon;
        $data['login_image']     = $this->login_image;
        $data['logo']            = $this->logo;
        $data['branches']        = $this->General_Model->getAllItemTable('branches','status','1','branch_id','DESC')->result();
        return $data;
    }

    public function index(){

        $data['app'] = $this->app_data();
        $this->load->view('home',$data);
    }

    public function branch()
    { 
        $data['app'] = $this->app_data();
        $segment = $this->uri->segment(3);

        if($segment == 'add_branch'){

        $segment4 = $this->uri->segment(4);
        if($segment4 != ""){
            $edit_id = json_decode(base64_decode($segment4));
            $data['branch']       = $this->General_Model->getAllItemTable('branches','branch_id',$edit_id,'branch_id','DESC')->row();
        }

        $this->load->view('users/add_branch',$data);
        }
        else if($segment == 'list_branch'){

        $data['branches']       = $this->General_Model->getAllItemTable('branches','','','branch_id','DESC')->result();
        $this->load->view('users/branch',$data);

        }
        else if($segment == 'delete_branch'){
         $segment4   = $this->uri->segment(4);
         $delete_id  = json_decode(base64_decode($segment4));
        $delete         = $this->General_Model->delete_data('branches','branch_id',$delete_id);

        if($delete == 1){
            $response = array('status' => 1,'msg' => 'Branch data deleted Successfully.');
          echo json_encode($response);exit;
        }
        else{
            $response = array('status' => 1,'msg' => 'Error While Deleting Branch data.');
          echo json_encode($response);exit;
        }

        }
        else if($segment == 'save_branch'){

            $this->form_validation->set_rules('branch_name', 'Branch Name', 'required');

             if ($this->form_validation->run() !== false) {

                
                $insert_data = array(
                    'branch_name'      => $_POST['branch_name'],
                );
                if($_POST['status'] != ''){

                    $insert_data['status'] = $_POST['status'];

                }

                $branch_id = $_POST['branch_id'];

                if($branch_id == ''){

                 if ($this->General_Model->insert_data('branches',$insert_data)) {


                    $response = array(
                        'msg' => 'New Branch Created Successfully.',
                        'redirect_url' => base_url() . 'home/branch/list_branch',
                        'status' => 1
                    );

                } else {
                    
                    $response = array(
                        'msg' => 'Failed to create new Branch.',
                        'redirect_url' => base_url() . 'home/branch/add_branch',
                        'status' => 0
                    );
                }

                 echo json_encode($response);exit;
             }
             else{

                if ($this->General_Model->update_table('branches','branch_id',$branch_id,$insert_data)) {


                    $response = array(
                        'msg' => 'Branch details updated Successfully.',
                        'redirect_url' => base_url() . 'home/branch/list_branch',
                        'status' => 1
                    );

                } else {
                    
                    $response = array(
                        'msg' => 'Failed to update Branch details.',
                        'redirect_url' => base_url() . 'home/branch/add_branch/'.$branch_id,
                        'status' => 0
                    );
                }

                 echo json_encode($response);exit;
             }


                 } else {
                
                $response = array(
                'msg' => validation_errors(),
                'redirect_url' => base_url() . 'home/branch/add_branch',
                'status' => 0
                );
        }
       
        echo json_encode($response);exit;
        }
        
    }

    public function profile(){

         $data['app'] = $this->app_data();
         $segment = $this->uri->segment(3);
         if($segment == "bankaccounts"){
            
            $this->load->view('profile/bank_accounts', $data);
         }
         if($segment == 'edit_profile'){
            
            $this->load->view('profile/edit_admin_profile', $data);
        }
        if($segment == 'manage_profile'){

            $data['country_lists']      = $this->General_Model->fetch_country_list();
            $data['admin_profile_info'] = $this->General_Model->get_admin_details();
            $data['flag'] = $this->uri->segment(4);
            $this->load->view('profile/manage_profile', $data);

        }
         if($segment == 'update_profile'){
            
             $this->load->library('form_validation');

        if($_POST['flag'] == 1){
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        }
        if($_POST['flag'] == 2){ 


            $this->form_validation->set_rules('address_details_id', 'Address Id', 'required');
            $this->form_validation->set_rules('country', 'Country', 'required');
            $this->form_validation->set_rules('state', 'State', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('zip_code', 'Postal Code', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
        }
        if($_POST['flag'] == 3){
            $this->form_validation->set_rules('old_password', 'Old Password', 'required');
            $this->form_validation->set_rules('new_password', 'New Password', 'required');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required');
        }
        
       
       
        if ($this->form_validation->run() !== false) {

            if($_POST['flag'] == 1){

                if (isset($_FILES["profile_filepond"]["name"]) && $_FILES["profile_filepond"]["name"] != '') {
                $logo_image  = explode(".", $_FILES["profile_filepond"]["name"]);
                $newlogoname = date('YmdHis') . rand(1, 9999999) . '.' . end($logo_image);
                $tmpnamert   = $_FILES['profile_filepond']['tmp_name'];

                move_uploaded_file($tmpnamert, 'uploads/users/' . $newlogoname);

                $admin_profile_pic = base_url() . 'uploads/users/' . $newlogoname;

                } else {

                $admin_lists       = $this->General_Model->get_admin_details($admin_id);
                $admin_profile_pic = $admin_lists->admin_profile_pic;
                } 
                

                $update_information = array(
                    'admin_name'      => $_POST['first_name'],
                    'admin_last_name' => $_POST['last_name'],
                );
                $update_information['admin_profile_pic'] = $admin_profile_pic;

                 if ($this->General_Model->update_admin_details($update_information,$this->session->userdata('admin_id'))) {


                    $response = array(
                        'msg' => 'Admin details updated successfully.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'],
                        'status' => 1
                    );

                } else {
                    
                    $response = array(
                        'msg' => 'Failed to update admin details.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'],
                        'status' => 0
                    );
                }

                 echo json_encode($response);exit;
            }
            if($_POST['flag'] == 2){

                $address_details_id = $_POST['address_details_id'];
                $address_information = array(
                    'country'      => $_POST['country'],
                    'state'        => $_POST['state'],
                    'city'         => $_POST['city'],
                    'zip_code'     => $_POST['zip_code'],
                    'address'      => $_POST['address'],
                );// echo "<pre>";print_r($address_information);exit;

                if ($this->General_Model->update_admin_address($address_information,$address_details_id)) {


                    $response = array(
                        'msg' => 'Address details updated successfully.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'],
                        'status' => 1
                    );

                } else {
                    
                    $response = array(
                        'msg' => 'Failed to update admin address.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'],
                        'status' => 0
                    );
                }

                 echo json_encode($response);exit;
            }
            if($_POST['flag'] == 3){

                $update_information = array(
                    'new_password'      => $_POST['new_password'],
                );


            $check_password = $this->General_Model->check_admin_password($this->input->post('old_password'));
            if ($check_password == 1) {
                $new_password = $this->input->post('new_password');
                if ($this->General_Model->update_admin_password($new_password)) {


                    $response = array(
                        'msg' => 'Password updated successfully.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'],
                        'status' => 1
                    );

                } else {
                    
                    $response = array(
                        'msg' => 'Password updation Failed.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'],
                        'status' => 0
                    );
                }
            } else {
                $response = array(
                    'msg' => 'Invalid Old Password.',
                    'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'],
                      'status' => 0
                );
                
            }
            }

        } else {
            $response = array(
                'msg' => validation_errors(),
                'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'],
                'status' => 0
            );
        }
       
        echo json_encode($response);exit;
    
        }

    }

    public function users(){

        $data['app'] = $this->app_data();
        $segment = $this->uri->segment(3);
        
        if($segment == 'add_user'){

            $data['flag'] = $this->uri->segment(4);
            $data['roles']       = $this->General_Model->getAllItemTable('admin_role','status','ACTIVE','admin_role_id','DESC')->result();
            $this->load->view('users/add_user',$data);
        }
        else if($segment == 'save_user'){

            
        if($_POST['flag'] == 1){

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile_no', 'Mobile No.', 'required');
        $this->form_validation->set_rules('company_name', 'Company Name', 'required');
        $this->form_validation->set_rules('company_url', 'Company Website Url', 'required');
         $this->form_validation->set_rules('role', 'Role', 'required');

        }
        else if($_POST['flag'] == 2){

        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('zip_code', 'Zip Code', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        }
        else if($_POST['flag'] == 3){

       
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required');

        }
        else if($_POST['flag'] == 4){

        $this->form_validation->set_rules('beneficiary_name', 'Beneficiary Name', 'required');
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
        $this->form_validation->set_rules('iban_number', 'Iban Number', 'required');
        $this->form_validation->set_rules('beneficiary_address', 'Beneficiary Address', 'required');
        $this->form_validation->set_rules('bank_address', 'Bank Address', 'required');
        $this->form_validation->set_rules('account_number', 'Account Number', 'required');
        $this->form_validation->set_rules('swift_code', 'Swift Code', 'required');

        }

        if ($this->form_validation->run() !== false) {

            if($_POST['flag'] == 1){

                if (isset($_FILES["profile_filepond"]["name"]) && $_FILES["profile_filepond"]["name"] != '') {
                $logo_image  = explode(".", $_FILES["profile_filepond"]["name"]);
                $newlogoname = date('YmdHis') . rand(1, 9999999) . '.' . end($logo_image);
                $tmpnamert   = $_FILES['profile_filepond']['tmp_name'];

                move_uploaded_file($tmpnamert, 'uploads/users/' . $newlogoname);

                $admin_profile_pic = base_url() . 'uploads/users/' . $newlogoname;

                } else {

                $admin_lists       = $this->General_Model->get_admin_details($admin_id);
                $admin_profile_pic = $admin_lists->admin_profile_pic;

                } 
                

                $update_information = array(
                    'admin_name'        => $_POST['first_name'],
                    'admin_last_name'   => $_POST['last_name'],
                    'admin_email'       => $_POST['email'],
                    'admin_cell_phone'  => $_POST['mobile_no'],
                    'company_name'      => $_POST['company_name'],
                    'company_url'       => $_POST['company_url'],
                );
                $update_information['admin_profile_pic'] = $admin_profile_pic;

                $admin_id = $_POST['admin_id'];

                if($admin_id != ''){

                 if ($this->General_Model->update_admin_details($update_information,$this->session->userdata('admin_id'))) {


                    $response = array(
                        'msg' => 'Admin details updated successfully.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'],
                        'status' => 1
                    );

                } else {
                    
                    $response = array(
                        'msg' => 'Failed to update admin details.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'],
                        'status' => 0
                    );
                }

            }
            else{

                $admin_newid = $this->General_Model->insert_data('admin_details',$update_information);

                if($admin_newid != ''){

                    $address_information = array(
                    'country'      => $_POST['country'],
                    'state'        => $_POST['state'],
                    'city'         => $_POST['city'],
                    'zip_code'     => $_POST['zip_code'],
                    'address'      => $_POST['address'],
                );

                $address_id = $this->General_Model->insert_data('address_details',$address_information);

                if($address_id != ''){

                    $update_information = array(
                    'address_details_id' => $address_id
                    );

                    if ($this->General_Model->update_admin_details($update_information,$admin_newid)) {


             $login_information = array(
                    'admin_id'             => $admin_newid,
                    'admin_type_id'        => $_POST['role'],
                    'admin_user_name'      => $_POST['email'],
                );

                $login_id = $this->General_Model->insert_data('admin_login_details',$login_information);

                if($login_id != ''){

                    $bank_information = array(
                    'admin_id'                  => $admin_newid,
                    'beneficiary_name'          => $_POST['beneficiary_name'],
                    'bank_name'                 => $_POST['bank_name'],
                    'iban_number'               => $_POST['iban_number'],
                    'beneficiary_address'       => $_POST['beneficiary_address'],
                    'bank_address'              => $_POST['bank_address'],
                    'account_number'            => $_POST['account_number'],
                    'swift_code'                => $_POST['swift_code'],
                );

                $bank_id = $this->General_Model->insert_data('admin_bank_details',$bank_information);

                if($bank_id != ''){

                      $response = array(
                        'msg' => 'New user details created successfully.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'].'/'.$admin_newid,
                        'status' => 1
                    );

                }

                }
                else{

                 $response = array(
                        'msg' => 'Failed to Create User details.',
                        'redirect_url' => base_url() . 'home/users/create_user/1',
                        'status' => 1
                    );

                }

                    }
                }
                else{

                 $response = array(
                        'msg' => 'Failed to Create User details.',
                        'redirect_url' => base_url() . 'home/users/create_user/1',
                        'status' => 1
                    );

                }

                }
                else{

                 $response = array(
                        'msg' => 'Failed to Create User details.',
                        'redirect_url' => base_url() . 'home/users/create_user/1',
                        'status' => 1
                    );

                }
            }

                 echo json_encode($response);exit;
            }
            if($_POST['flag'] == 2){

                $address_details_id = $_POST['address_details_id'];
                $address_information = array(
                    'country'      => $_POST['country'],
                    'state'        => $_POST['state'],
                    'city'         => $_POST['city'],
                    'zip_code'     => $_POST['zip_code'],
                    'address'      => $_POST['address'],
                );// echo "<pre>";print_r($address_information);exit;

                if ($this->General_Model->update_admin_address($address_information,$address_details_id)) {


                    $response = array(
                        'msg' => 'Address details updated successfully.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'].'/'.$_POST['admin_id'],
                        'status' => 1
                    );

                } else {
                    
                    $response = array(
                        'msg' => 'Failed to update admin address.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'].'/'.$_POST['admin_id'],
                        'status' => 0
                    );
                }

                 echo json_encode($response);exit;
            }
            if($_POST['flag'] == 3){

                $update_information = array(
                    'new_password'      => $_POST['new_password'],
                );


            $check_password = $this->General_Model->check_admin_password($this->input->post('old_password'));
            if ($check_password == 1) {
                $new_password = $this->input->post('new_password');
                if ($this->General_Model->update_admin_password($new_password)) {


                    $response = array(
                        'msg' => 'Password updated successfully.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'].'/'.$_POST['admin_id'],
                        'status' => 1
                    );

                } else {
                    
                    $response = array(
                        'msg' => 'Password updation Failed.',
                        'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'].'/'.$_POST['admin_id'],
                        'status' => 0
                    );
                }
            } else {
                $response = array(
                    'msg' => 'Invalid Old Password.',
                    'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'].'/'.$_POST['admin_id'],
                      'status' => 0
                );
                
            }
            }

        } else {
            $response = array(
                'msg' => validation_errors(),
                'redirect_url' => base_url() . 'home/profile/manage_profile/'.$_POST['flag'].'/'.$_POST['admin_id'],
                'status' => 0
            );
        }
       
        echo json_encode($response);exit;
        }
        else if($segment == 'users'){

            $data['users']       = $this->General_Model->get_user_details()->result();
            $this->load->view('users/user_list',$data);
            //echo "<pre>";print_r($data['users']);exit;

        }
        else if($segment == 'user_permissions'){
        $data['roles']       = $this->General_Model->getAllItemTable('admin_role','status','ACTIVE','admin_role_id','DESC')->result();
        $this->load->view('users/user_permissions',$data);
        }
        else if($segment == 'user_roles'){
        $data['roles']       = $this->General_Model->get_user_roles();
        $this->load->view('users/user_roles',$data);

        }

        

    }

   
    public function permissions(){

        $data['app'] = $this->app_data();
        $segment = $this->uri->segment(2);
        $data['form'] = $segment;
        $this->load->view('profile/permissions',$data);
    }

    

    

}
<?php //echo strtoupper(substr(PHP_OS, 0, 3));exit;
if (!defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Login extends CI_Controller
{
    public function __construct()
    {
            /*
     *  Developed by: Sivakumar GG
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
        return $data;
    }

    //Default function while load the admin panel
    public function index()
    { 
        $data['app'] = $this->app_data();

        if ($this->session->userdata('admin_logged_in')) //Whether already panel logged or not.
        
        {
            redirect(base_url() . 'home/index', 'refresh');
        }
        $type = "URL";
        //Whoever enter the admin panel link will track the IP and User Info.
        $last_track_id = $this->Security_Model->admin_ip_track($type);
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $data['status'] = '';
        $data['flag'] = $this->uri->segment(3);
        if ($this->form_validation->run() !== false)
        {
        
        $res = $this->Security_Model->check_admin_login($this->input->post('username') , md5($this->input->post('password')));

            if ($res['status'] == 1)
            {

                if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on'){
                                $hour = time() + (10 * 365 * 24 * 60 * 60);
                                setcookie('username', $this->input->post('username'), $hour, '/');
                                setcookie('password', $this->input->post('password'), $hour, '/');
                }else{
                         if(isset($_COOKIE["username"])){
                                    setcookie('username', "", time() - 3600,  '/');
                                    setcookie('password', "", time() - 3600,  '/'); 
                         }
                }

                $sessionUserInfo = array(

                    'admin_id'          => $res['result']->admin_id,
                    'admin_name'        => $res['result']->admin_name,
                    'profile_pic'       => $res['result']->admin_profile_pic,
                    'admin_type'        => $res['result']->admin_type_name,
                    'role'              => $res['result']->role_id,
                    'admin_logged_in'   => true,
                );

                if($res['result']->admin_type_name == 'SUB ADMIN'){

                 /* $user_res = $this->Security_Model->get_user_details($res['result']->admin_id);
             
                  $user_sess = array(
                
                'user_id'       => $user_res->user_id,
                'shop_name'     => $user_res->shop_name,
                'shop_gst'      => $user_res->shop_gst,
                );
                  
                $this->session->set_userdata($user_sess);*/
                    
                }
                $this->session->set_userdata($sessionUserInfo);
                $data['status']         = 1;
                $data['msg']            = 'Success.You have sucessfully logged in.';
                $data['redirect_url']   = base_url() . 'home/index';
                echo json_encode($data);
                exit;
                
            }
            else
            {
                $type                   = "FAIL";
                $last_track_id          = $this->Security_Model->admin_ip_track($type);
                $data['status']         = 0;
                $data['msg']            = 'Invalid login information.';
                $data['redirect_url']   = base_url() . 'login';
                echo json_encode($data);
                exit;
                
            }
        }
        else
        { 
        
            if (validation_errors())
            { 
                $data['status']         = 0;
                $data['msg']            = validation_errors();
                $data['redirect_url']   = base_url() . 'login';
                echo json_encode($data);
                exit;
            }
           
            $this->load->view('login', $data);

        }
        

    }

    function blocked()
    {
        $this
            ->load
            ->view('errors/access_denied');
    }

    public function logout()
    {
     $data['app'] = $this->app_data();
        $this
            ->session
            ->unset_userdata('sessionUserInfo');
        $this
            ->session
            ->sess_destroy();
        redirect(base_url() . 'login/index/1', 'refresh');
    }
    public function lockoff()
    {

        $sessionUserInfo_logoff = array(
            'admin_logged_in' => false
        );
        $this
            ->session
            ->set_userdata($sessionUserInfo_logoff);
        redirect(WEB_URL . 'login/login_off', 'refresh');
    }
    public function login_off()
    {

        if (!$this
            ->session
            ->userdata('admin_id'))
        {
            redirect(WEB_URL . 'login');
        }
        else
        {
            $data['admin_details'] = $this
                ->Security_Model
                ->get_admin_details();
            $this
                ->load
                ->view('login/logoff', $data);
        }

    }

    public function logoff_pattern($pattern)
    {

        if (!$this
            ->session
            ->userdata('admin_id') && $pattern != '' && $pattern != '0')
        {
            $response = array(
                'status' => 2
            );
            echo json_encode($response);

        }
        else
        {
            $status = $this
                ->Security_Model
                ->admin_pattern_check($pattern);
            if ($status)
            {
                $sessionUserInfo_logoff = array(
                    'admin_logged_in' => true
                );
                $this
                    ->session
                    ->set_userdata($sessionUserInfo_logoff);
                $response = array(
                    'status' => 1
                );
                echo json_encode($response);
            }
            else
            {
                $response = array(
                    'status' => 0
                );
                echo json_encode($response);
            }
        }

    }
    public function forgot_password()
    {
        $this
            ->load
            ->view('login/forgot_password');
    }

    public function send_password_reset_link()
    {

    $email = $data['user_email'] = $_POST['email_id'];
    $count = $this->General_Model->getAllItemTable('admin_details','admin_email',$email)->num_rows();
        
        if ($count == 1)
        {
    $userInfo = $this->General_Model->getAllItemTable('admin_details','admin_email',$email)->row();
     
            if ($userInfo->admin_status == 'ACTIVE')
            {
                 $user_password = $this
                    ->General_Model
                    ->getAllItemTable_array('admin_login_details',array('admin_user_name' => $email,'admin_id' => $userInfo->admin_id))
                    ->row();

                $password = ($user_password->admin_password);

                $status = $this->get_mail_content_forgotpass($email, $password);

                if ($status == '1')
                {
                    $response = array(
                        'status' => '1',
                        'success' => 'true',
                        'redirect_url'   => base_url() . 'login',
                        'msg' => "Your password reset link has been sent to " . $email . ".!"
                    );
                }
                else
                {
                    $response = array(
                        'status' => '0',
                        'success' => 'false',
                        'redirect_url'   => base_url() . 'login',
                        'msg' => "Failed to send your password reset link.Please contact support.",
                    );
                }
            }
            else
            {
                $response = array(
                    'status' => '0',
                    'success' => 'false',
                    'redirect_url'   => base_url() . 'login',
                    'msg' => "Oops.We don't have any account with this email id.",
                );
            }
        }
        else
        {
            $response = array(
                'status' => '0',
                'success' => 'false',
                'redirect_url'   => base_url() . 'login',
                'msg' => "Oops.We don't have any account with this email id.",
            );
        }
        echo json_encode($response);exit;
    }

    public function get_mail_content_retrivepass($email, $password)
    {

        $data['password'] = $password;
        $data['user_data'] = $this
            ->General_Model
            ->isRegistered($email)->row();
        $email_type = 'RETRIEVE_PASSWORD';
        $data['email_template'] = $this
            ->email_model
            ->get_email_template($email_type);
        $Response = $this
            ->email_model
            ->sendmail_forgot_password($data);
        return $Response;
    }

    public function get_mail_content_forgotpass($email, $password)
    {
        $this->load->model('Email_Model');
        $data['password'] = $password;
        $data['user_data'] = $this->General_Model->getAllItemTable('admin_details','admin_email',$email)->row();
        $email_type = 'FORGET_PASSWORD';
        $data['email_template'] = $this->General_Model->getAllItemTable('email_template','email_type',$email_type)->row();
        $key = $this->generate_random_key();
        $secret = md5($email);
        $this->General_Model->update_table('admin_login_details','admin_id',$data['user_data']->admin_id, $update = array(
            'pwd_reset_random_key' => $key,
            'pwd_reset_secret_key' => $secret
        ));
        $data['reset_link'] = base_url() . 'login/set_password/' . $key . '/' . $secret;
        $Response = $this->Email_Model->send_mail($data);
        return $Response;
    }

    public function generate_random_key($length = 50)
    {
        $alphabets = range('A', 'Z');
        $numbers = range('0', '9');
        $additional_characters = array(
            '_',
            '.'
        );
        $final_array = array_merge($alphabets, $numbers, $additional_characters);
        $id = '';
        while ($length--)
        {
            $key = array_rand($final_array);
            $id .= $final_array[$key];
        }
        return $id;
    }

    //~ public function reset_password(){
    //~ $this->load->view('login/reset_password');
    //~ }
    public function set_password($key, $secret)
    {
        if ($key == '' || $secret == '')
        {
            $data['msg'] = 'sorry link has been expired, plese reset again';
            $data['status'] = '0';
        }
        else
        {
            $count = $this
                ->General_Model
                ->isvalidSecrect($key, $secret)->num_rows();
            if ($count == 1)
            {
                $user_data = $this
                    ->General_Model
                    ->isvalidSecrect($key, $secret)->row();
                $data['status'] = '1';
                $data['email'] = $user_data->admin_email;
            }
            else
            {
                $data['msg'] = 'sorry link has been expired, plese reset again';
                $data['status'] = '0';
            }
        }
        $this
            ->load
            ->view('login/reset_password', $data);
    }

    public function resetpwd()
    {
        //echo "<pre>"; print_r($_POST);echo "</pre>";
        $email = $_POST['emailid'];
        //echo $email;
        //  $password = "AES_ENCRYPT(" . $this->input->get('new_password') . ",'" . SECURITY_KEY . "')";
        $strFpass = $_POST['fpassword'];
        $strRpass = $_POST['rpassword'];
        $strpatern = $_POST['patern'];
        if ($strFpass == $strRpass)
        {
            $password = $strRpass;
            $this
                ->General_Model
                ->update_agent($password, $email, $strpatern);
            $response = array(
                'status' => '1',
                'success' => 'true',
                'msg' => "Your password has been changed you can login now!"
            );
        }
        else
        {
            $response = array(
                'status' => '0',
                'success' => 'false',
                'msg' => "Your password are not matching. Please verify."
            );
        }
        echo json_encode($response);
    }
}

?>

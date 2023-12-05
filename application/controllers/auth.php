<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends MY_Controller {
    function __construct()
    {       
        parent::__construct();
    }

    function login(){
        $this->_head();
        $this->load->view('login');
        $this->_footer();  
    }

    function logout(){
    	$this->session->sess_destroy();
    	$this->load->helper('url');
    	redirect('/');
    }

    function register(){
        $this->_head();

        $this->load->library('form_validation');

        //form 에 들어오는 데이터의 유효성을 체크한다.
        if($this->form_validation->run() === false){
            $this->load->view('register');
        }else{
            // 단방향 hash 방식으로 md5(1) 을 입력하면 암호화된 임의의 문자열이 출력된다.
            // 암호화된 문자열을 보고 md5(1) 인지 확인할 수 없다. 하지만 현재는 hash의 값들이 데이터베이스화되어있어서
            // 암호화로는 의미는 없다.
            // password_hash 가 존재하는지 여부를 파악 없다면 따로 만들어둔 helper를 로드한다. helper는 함수형 library는 class로 되어있다.
            if(!function_exists('password_hash')){
                $this->load->helper('password');
            }
            $hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

            $this->load->model('user_model');
            $this->user_model->add(array(
               'email' =>$this->input->post('email'),
               'password' => $hash,
               'nickname' => $this->input->post('nickname')
            ));
            // 한번만 출력되는 메세지를 불러오는 함수이다. 
            $this->session->set_flashdata('message', '회원가입에 성공하였습니다.');
            $this->load->helper('url');
            redirect('/');
        }
        $this->_footer();
    }

    function authentication(){
        $this->load->model('user_model');
        $user = $this->user_model->getByEmail(array('email' =>$this->input->post('email')));
        if(
            $this->input->post('email') == $user->email &&
            password_verify($this->input->post('password'), $user->password)
        ) {
            $this->session->set_userdata('is_login', true);
            $this->load->helper('url');
            redirect("/");
        } else {
            echo "불일치";
            $this->session->set_flashdata('message', '로그인에 실패했습니다.');
            $this->load->helper('url');
            redirect('/auth/login');
        }     
        
    }
}
?>
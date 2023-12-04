<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
    function __construct()
    {       
        parent::__construct();
    }

    function login(){
        echo '로그인페이지';
    }
}
?>
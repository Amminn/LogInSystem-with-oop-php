<?php 

class SignupContr{

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email) {
        $this-> uid = $uid;
        $this-> pwd = $pwd;
        $this-> pwdrepeat = $pwdrepeat;
        $this-> email = $email         
    }

}
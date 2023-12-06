<?php
include 'session_manager.php';

class User {
  private $db_username = 'root';
  private $db_password = 'password';
  private $username;
  private $password;

  public function __construct($username, $password) {
     $this->username = $username;
     $this->password = $password;
  }

  public function Authenticate() {
  	 if($this->username == $this->db_username && $this->password == $this->db_password) {
    	return true;
    }
    return false;
  }
}

//$user = new User("root", "password");
//var_dump ($user->Authenticate());

class AuthUser {
	   public function __construct() {
         
    }
	public function login($username, $password) {
		$user = new User($username, $password);
		if ($user->Authenticate()) {
           $sessionManager = SessionManager::getInstance();
           $sessionManager->setSession('User', $username);
           echo "Logged succesfully";
		}
		else {
			echo "Wrong details";
		}
	}
	public function logout() {
       $sessionManager = SessionManager::getInstance();
           $sessionManager->destroySession();
           echo "Log out succesfully";
	}
}

//$auth = new AuthUser();
//$auth->login("root", "password");
//$auth->logout();
//$sessionManager = SessionManager::getInstance();
//var_dump ($sessionManager->getSessionData("User"));
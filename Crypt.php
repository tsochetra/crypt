<?php

class Crypt {

	// make crypt password with md5 before crypt
	// password_default mode
	public function make($pass) {
		return password_hash(md5($pass), PASSWORD_DEFAULT);
	}
	
	// verify password login with password crypt in database 
	// salt is crypted password
	public function check($pass, $crypted) {
		return password_verify(md5($pass), $crypted);
	}
	
}

?>

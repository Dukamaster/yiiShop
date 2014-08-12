<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate() {
		$record = User::model()->findByAttributes(array("email"=>$this->username));
		if($record === null) {
		  $this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		elseif ($record->password !== md5($this->password.$record->salt.$record->email)) {
		  $this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else {
			($record->role === '0')?$this->setState('isAdmin', true):$this->setState('isAdmin', false);
		  $this->setState('userId',$record->user_id);
		  $this->setState('email', $record->email);
		  $this->setState('name', $record->detail->first_name.' '.$record->detail->last_name);
		  $this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}
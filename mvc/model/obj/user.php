<?php
	class User{
		public $userId=0;
		public $userCName='';
		public $userPass='';
		public $userEmail='';
		public $userRealName='';

		public function setUserId($userId){
			$this->userId=$userId;
		}
		public function getUserId(){
			return $this->userId;
		}
		public function setUserCName($userCName){
			$this->userCName=userCName;
		}
		public function getUserCName(){
			return $this->userCName;
		}
		public function setUserPass($userPass){
			$this->userPass=$userPass;
		}
		public function getUserPass(){
			return $this->userPass;
		}
		public function setUserEmail($userEmail){
			$this->userEmail=$userEmail;
		}
		public function getUserEmail(){
			return $this->userEmail;
		}
		public function setUserRealName($userRealName){
			$this->userRealName=$userRealName;
		}
		public function getUserRealName(){
			return $this->userRealName;
		}
	}
?>

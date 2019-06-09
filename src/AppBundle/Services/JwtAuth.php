<?php

namespace AppBundle\Services;

use Firebase\JWT\JWT;

class JwtAuth{

	public $manager;
	public $key;

	public function __construct($manager){
		$this->manager = $manager;
		$this->key = 'Key!@#!3!!21$%ˆ&*()';

	}

	public function signup($email, $password, $getHash = null){

		$user = $this->manager->getRepository('AppBundle:User')->findOneBy(array(
			"email" => $email,
			"password" => $password
		));
		$signup = false;
		if(is_object($user)){
			$signup = true;
		}
		if($signup){
			$token = array(
				"sub" => $user->getId(),
				"email" => $user->getEmail(),
				"name" => $user->getName(),
				"iat" => time(),
				"exp" => time() + (7*24*60*60)
			);

			$jwt 		= JWT::encode($token, $this->key, 'HS256');
			$decoded 	= JWT::decode($jwt, $this->key, array('HS256'));
			
			$data = $jwt;

		}else{
			$data = array(
				'status' => 'error',
				'data'	 => 'Login failed!'
			);
		}

		return $data;
	}

	public function checkToken($jwt, $getIdentity = false){

		$auth = false;
		

		$decoded = base64_decode(strtr($jwt, '-_', '+/'));
		if(isset($decoded) && strpos($decoded,"sub")){
			$auth = true;
		}else{
			$auth = false;
		}

		if($getIdentity == false){
			return $auth;
		}else{
			return $decoded;
		}
	}
}
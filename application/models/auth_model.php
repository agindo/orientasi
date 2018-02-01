<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model {

	public function auth($username, $password){
		$check = $this->db->get_where('users', array('email'=>$username, 'password'=>$password));
		if($check->num_rows() > 0) {
			return 1;
		}else{
			return 0;
		}
	}

	public function authUsers($username, $password){
		$check = $this->db->get_where('users', array('email'=>$username, 'password'=>$password))->row();
		$arr = Array();
		$obj = Array();
		$arr['userID'] = $check->id;
		$arr['namaLengkap'] = $check->nama_lengkap;
		$obj['Users'] = $arr;
		// return Array($arr, $this->authMenus($check->IDlevel));
		return $obj;
	}

	public function authMenus($IDlevel){
		$check = $this->db->get_where('menus', array('IDlevel'=>$IDlevel));
		$arr = Array();
		$obj = Array();
		foreach ($check->result() as $value) {
			$arr['menuID'] = $value->id;
			$arr['menuName'] = $value->menuName;
			$arr['levelID'] = $value->IDlevel;
			$arr['subMenus'] = $this->authSubmenus($value->id);
			$obj[] = $arr;
		}
		return $obj;
	}

	public function authSubmenus($IDMenu){
		$check = $this->db->get_where('submenus', array('IDMenu'=>$IDMenu));
		$arr = Array();
		$obj = Array();
		foreach ($check->result() as $value) {
			$arr['submenuID'] = $value->id;
			$arr['submenuName'] = $value->submenuName;
			$arr['menuID'] = $value->IDmenu;
			$obj[] = $arr;
		}
		return $obj;
	}

	public function getUsers($email)
	{
		return $this->db->get_where('users', array('email'=>$email))->row();
	}
}

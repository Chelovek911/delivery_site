<?php

namespace application\models;

use application\core\Model;
use mysqli;

class Main extends Model
{

	public $error;

	public function contactValidate($post)
	{
		$nameLen = iconv_strlen($post['name']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 20) {
			$this->error = 'Имя должно содержать от 3 до 20 символов';
			return false;
		} elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error = 'E-mail указан неверно';
			return false;
		} elseif ($textLen < 10 or $textLen > 500) {
			$this->error = 'Сообщение должно содержать от 10 до 500 символов';
			return false;
		}
		return true;
	}

	public function postsCount()
	{
		return $this->db->column('SELECT COUNT(id) FROM posts');
	}

	public function postsList($route)
	{
		$max = 8;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
	}
	public function feedback()
	{
		$params = [
			'id' => '',
			'name' => $_POST['name'],
			'email' =>  $_POST['email'],
			'message' =>  $_POST['message'],
		];

		return $this->db->query('INSERT INTO feedback (id, name,email,message) VALUES (:id,:name,:email,:message)', $params);
	}

	public function getData($id)
	{
		return $this->db->row('SELECT * FROM posts WHERE id=' . $id);
	}
	public function sendcomments($name, $text, $post_id)
	{
		$params = [
			'id' => '',
			'name' => $name,
			'text' =>  $text,
			'post_id' => $post_id,
		];
		return $this->db->query('INSERT INTO comments (id, name,text,post_id) VALUES (:id,:name,:text,:post_id)', $params);
	}
	public function commentsviews($route)
	{
		$max = 3;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
			'id' => $route,
		];
		return $this->db->row('SELECT text FROM comments WHERE post_id=:id ORDER BY id DESC LIMIT :start, :max', $params);
	}
	public function sendcomments1($name, $text, $post_id)
	{
		//$newtext = preg_replace('|\W|', "",  $text);
		$text = urlencode($text);
		return $this->db->query("INSERT INTO comments(name,text,post_id) VALUES ('" . $name . "','" . $text . "','" . $post_id . "')");
	}
	public function contactValidate1($name)
	{
		$pregname = preg_replace('|\s|', '', $_POST['name']);
		if (strlen($pregname) < strlen($name) or strlen($name) == 0) {
			$this->error = 'Поле имени не может быть пустым и не может содержать пробелы';
			return false;
		} else return true;
	}
	public function emailValidate1($email)
	{
		$pregname = preg_replace('|\s|', '', $_POST['email']);
		if (strlen($pregname) < strlen($email) or strlen($email) == 0) {
			$this->error = 'Поле имени не может быть пустым и не может содержать пробелы';
			return false;
		} else return true;
	}

	public function textValidate($text)
	{
		$newtext = preg_replace('|\s|', "", $text);
		if (strlen($newtext) == 0) {
			$this->error = 'Поле текста не может быть пустым';
			return false;
		} else return true;
	}
	public function textValidate2($text)
	{
		$newtext = preg_replace('|\s|', "", $text);
		if (strlen($newtext) == 0) {
			$this->error = 'Поле текста не может быть пустым';
			return false;
		} else return true;
	}
	public function contactValidate2($name)
	{
		$pregname = preg_replace('|\s|', '', $_POST['name']);
		if (strlen($pregname) < strlen($name) or strlen($name) == 0) {
			$this->error = 'Поле имени не может быть пустым и не может содержать пробелы';
			return false;
		} else return true;
	}

	public function selectTovar($ids)
	{
		return $this->db->row("SELECT * from tovar WHERE id IN (" . $ids . ")");
	}
	public function tovarCount()
	{
		return $this->db->column('SELECT COUNT(id) FROM tovar');
	}
	public function getTovars($route)
	{
		$max = 4;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM tovar WHERE extra_tov = "" ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function getFilterTovars($type_tovars)
	{
		$type_tovars = str_replace('"', '', $type_tovars);
		return $this->db->row("SELECT * FROM tovar WHERE type_tovar IN(" . $type_tovars . ")");
	}
	public function total_price()
	{
		return $this->db->column("SELECT price FROM tovar");
	}
	public function getextraTovars($route)
	{
		$max = 4;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM tovar WHERE extra_tov=1 ORDER BY id  DESC LIMIT :start, :max', $params);
	}
	public function extratovarCount()
	{
		return $this->db->column('SELECT COUNT(id) FROM tovar');
	}
}

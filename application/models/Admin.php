<?php

namespace application\models;

use application\core\Model;
use Imagick;

class Admin extends Model
{

	public $error;

	public function loginValidate($post)
	{
		$config = require 'application/config/admin.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}

	public function postValidate($post, $type)
	{
		$nameLen = iconv_strlen($post['name']);
		$descriptionLen = iconv_strlen($post['description']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Название должно содержать от 3 до 100 символов';
			return false;
		} elseif ($descriptionLen < 3 or $descriptionLen > 100) {
			$this->error = 'Описание должно содержать от 3 до 100 символов';
			return false;
		} elseif ($textLen < 10 or $textLen > 5000) {
			$this->error = 'Текст должнен содержать от 10 до 5000 символов';
			return false;
		}
		if (empty($_FILES['img']['tmp_name']) and $type == 'add') {
			$this->error = 'Изображение не выбрано';
			return false;
		}
		return true;
	}
	public function tovarValidate($post, $type)
	{
		$nameLen = iconv_strlen($post['name_tovar']);
		$descriptionLen = iconv_strlen($post['description_tovar']);
		$textLen = iconv_strlen($post['text_tovar']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Название должно содержать от 3 до 100 символов';
			return false;
		} elseif ($descriptionLen < 3 or $descriptionLen > 100) {
			$this->error = 'Описание должно содержать от 3 до 100 символов';
			return false;
		} elseif ($textLen < 10 or $textLen > 5000) {
			$this->error = 'Текст должнен содержать от 10 до 5000 символов';
			return false;
		}
		if (empty($_FILES['img_tovar']['tmp_name']) and $type == 'add') {
			$this->error = 'Изображение не выбрано';
			return false;
		}
		return true;
	}
	public function extratovarValidate($post, $type)
	{
		$nameLen = iconv_strlen($post['name_extratovar']);
		$descriptionLen = iconv_strlen($post['description_extratovar']);
		$textLen = iconv_strlen($post['text_extratovar']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Название должно содержать от 3 до 100 символов';
			return false;
		} elseif ($descriptionLen < 3 or $descriptionLen > 100) {
			$this->error = 'Описание должно содержать от 3 до 100 символов';
			return false;
		} elseif ($textLen < 10 or $textLen > 5000) {
			$this->error = 'Текст должнен содержать от 10 до 5000 символов';
			return false;
		}
		if (empty($_FILES['img_extratovar']['tmp_name']) and $type == 'add') {
			$this->error = 'Изображение не выбрано';
			return false;
		}
		return true;
	}

	public function postAdd($post)
	{
		$params = [
			'id' => '',
			'name' => $post['name'],
			'description' => $post['description'],
			'text' => $post['text'],
			'date' => $post['date'],


		];
		$this->db->query('INSERT INTO posts VALUES (:id, :name, :description, :text, :date)', $params);
		return $this->db->lastInsertId();
	}
	public function docadd($post)
	{
		$params = [
			'id' => '',
		];
		$this->db->query('INSERT INTO files_id(id) VALUES (:id)', $params);
		return $this->db->lastInsertId();
	}
	public function tovarAdd($post)
	{
		if (!empty($_POST['extra_tov'])) {
			$extra_tovar = $_POST['extra_tov'];
		} else $extra_tovar = "";

		$params = [
			'id' => '',
			'name_tovar' => $post['name_tovar'],
			'description_tovar' => $post['description_tovar'],
			'text_tovar' => $post['text_tovar'],
			'type_tovar' => $post['filter-tovar'],
			'extra_tov' => $extra_tovar,

		];
		$this->db->query('INSERT INTO tovar VALUES (:id, :name_tovar, :description_tovar, :text_tovar, :type_tovar, :extra_tov)', $params);
		return $this->db->lastInsertId();
	}
	public function extratovarAdd($post)
	{
		$params = [
			'id' => '',
			'name_extratovar' => $post['name_extratovar'],
			'description_extratovar' => $post['description_extratovar'],
			'text_extratovar' => $post['text_extratovar'],
			'type_extratovar' => $post['filter-extratovar']

		];
		$this->db->query('INSERT INTO tovar VALUES (:id, :name_extratovar, :description_extratovar, :text_extratovar, :type_extratovar)', $params);
		return $this->db->lastInsertId();
	}

	public function postEdit($post, $id)
	{
		$params = [
			'id' => $id,
			'name' => $post['name'],
			'description' => $post['description'],
			'text' => $post['text'],
			'date' => $post['date'],
		];
		$this->db->query('UPDATE posts SET name = :name, description = :description, text = :text, date = :date WHERE id = :id', $params);
	}
	public function tovarEdit($post, $id)
	{
		$params = [
			'id' => $id,
			'name_tovar' => $post['name_tovar'],
			'description_tovar' => $post['description_tovar'],
			'text_tovar' => $post['text_tovar'],

		];
		$this->db->query('UPDATE tovar SET name = :name_tovar, price = :description_tovar, descr = :text_tovar WHERE id = :id', $params);
	}
	public function extratovarEdit($post, $id)
	{
		$params = [
			'id' => $id,
			'name_extratovar' => $post['name_extratovar'],
			'description_extratovar' => $post['description_extratovar'],
			'text_extratovar' => $post['text_extratovar'],

		];
		$this->db->query('UPDATE tovar SET name = :name_extratovar, price = :description_extratovar, descr = :text_extratovar WHERE id = :id', $params);
	}

	public function postUploadImage($path, $id)
	{
		move_uploaded_file($path, 'public/images/' . $id . '.jpg');
	}
	public function post_docUpload($path)
	{
		$name = basename($_FILES['doc']['name']);
		move_uploaded_file($path, 'public/doc_file/'.$name);
	}
	public function tovarUploadImage($path, $id)
	{
		move_uploaded_file($path, 'public/images_tovar/' . $id . '.jpg');
	}
	public function extratovarUploadImage($path, $id)
	{
		move_uploaded_file($path, 'public/extraimages_tovar/' . $id . '.jpg');
	}

	public function isPostExists($id)
	{
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM posts WHERE id = :id', $params);
	}
	public function istovarExists($id)
	{
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM tovar WHERE id = :id', $params);
	}
	public function isextratovarExists($id)
	{
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM extra_tovar WHERE id = :id', $params);
	}

	public function postDelete($id)
	{
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM posts WHERE id = :id', $params);
		unlink('public/materials/' . $id . '.jpg');
	}
	public function tovarDelete($id)
	{
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM tovar WHERE id = :id', $params);
		unlink('public/materials/' . $id . '.jpg');
	}
	public function extratovarDelete($id)
	{
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM extra_tovar WHERE id = :id', $params);
		unlink('public/materials/' . $id . '.jpg');
	}

	public function postData($id)
	{
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM posts WHERE id = :id', $params);
	}
	public function tovarData($id)
	{
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM tovar WHERE id = :id', $params);
	}
	public function extratovarData($id)
	{
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM extra_tovar WHERE id = :id', $params);
	}
}

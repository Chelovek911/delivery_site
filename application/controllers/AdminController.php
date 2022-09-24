<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Main;

class AdminController extends Controller
{

	public function __construct($route)
	{
		parent::__construct($route);
		$this->view->layout = 'admin';
	}

	public function loginAction()
	{
		if (isset($_SESSION['admin'])) {
			$this->view->redirect('admin/add');
		}
		if (!empty($_POST)) {
			if (!$this->model->loginValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			$_SESSION['admin'] = true;
			$this->view->location('admin/add');
		}
		$this->view->render('Вход');
	}

	public function addAction()
	{

		if (!empty($_POST)) {

			if (!$this->model->postValidate($_POST, 'add')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->postAdd($_POST);
			if (!$id) {
				$this->view->message('success', 'Ошибка обработки запроса');
			}
			$this->model->postUploadImage($_FILES['img']['tmp_name'], $id);
			$this->view->message('success', 'Пост добавлен');
		}
		$this->view->render('Добавить пост');
	}
	public function add_docAction()
	{


		if (!($_FILES['doc']['size'] <= 5242880)) {
			$this->view->message('error', 'Слишком большой размер файла');
		}
		$id = $this->model->docadd($_POST);
		if (!$id) {
			$this->view->message('success', 'Ошибка обработки запроса');
		}
		if ($_FILES['doc']['type'] == "application/pdf") {
			$this->view->message('success', 'нельзя pdf формат грузить');
		} else $this->model->post_docUpload($_FILES['doc']['tmp_name']);
		$this->view->message('success', 'Документ добавлен');
	}
	public function add_tovarAction()
	{
		if (!empty($_POST)) {

			if (!$this->model->tovarValidate($_POST, 'add')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->tovarAdd($_POST);
			if (!$id) {
				$this->view->message('success', 'Ошибка обработки запроса');
			}
			$this->model->tovarUploadImage($_FILES['img_tovar']['tmp_name'], $id);
			$this->view->message('success', 'Товар добавлен');
		}
		$this->view->render('Добавить товар');
	}
	public function add_extratovarAction()
	{
		if (!empty($_POST)) {

			if (!$this->model->extratovarValidate($_POST, 'add')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->extratovarAdd($_POST);
			if (!$id) {
				$this->view->message('success', 'Ошибка обработки запроса');
			}
			$this->model->extratovarUploadImage($_FILES['img_extratovar']['tmp_name'], $id);
			$this->view->message('success', 'Товар добавлен');
		}
		$this->view->render('Добавить сопутствующий товар');
	}

	public function editAction()
	{
		if (!$this->model->istovarExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		if (!empty($_POST)) {
			if (!$this->model->tovarValidate($_POST, 'edit')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->postEdit($_POST, $this->route['id']);
			if ($_FILES['img']['tmp_name']) {
				$this->model->postUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
			}
			$this->view->message('success', 'Сохранено');
		}
		$vars = [
			'data' => $this->model->postData($this->route['id'])[0],
		];
		$this->view->render('Редактировать пост', $vars);
	}
	public function edit_tovarAction()
	{
		if (!$this->model->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		if (!empty($_POST)) {
			if (!$this->model->postValidate($_POST, 'edit')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->tovarEdit($_POST, $this->route['id']);
			if ($_FILES['img']['tmp_name']) {
				$this->model->tovarUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
			}
			$this->view->message('success', 'Сохранено');
		}
		$vars = [
			'data' => $this->model->tovarData($this->route['id'])[0],
		];
		$this->view->render('Редактировать пост', $vars);
	}

	public function deleteAction()
	{
		if (!$this->model->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$this->model->postDelete($this->route['id']);
		$this->view->redirect('admin/posts');
	}
	public function delete_tovarAction()
	{
		if (!$this->model->istovarExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$this->model->postDelete($this->route['id']);
		$this->view->redirect('admin/posts');
	}

	public function logoutAction()
	{
		unset($_SESSION['admin']);
		$this->view->redirect('admin/login');
	}

	public function postsAction()
	{
		$mainModel = new Main;
		$pagination = new Pagination($this->route, $mainModel->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $mainModel->postsList($this->route),
		];
		$this->view->render('Посты', $vars);
	}
}

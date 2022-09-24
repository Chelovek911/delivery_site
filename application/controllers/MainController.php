<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller
{

	public function indexAction()
	{

		$this->view->render('Главная страница');
	}

	public function aboutAction()
	{
		$this->view->render('Обо мне');
	}

	public function contactAction()
	{
		if (!empty($_POST)) {
			if (!$this->model->contactValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			mail('titef@p33.org', 'Сообщение из блога', $_POST['name'] . '|' . $_POST['email'] . '|' . $_POST['text']);
			$this->view->message('success', 'Сообщение отправлено Администратору');
		}
		$this->view->render('Контакты');
	}

	public function postAction()
	{

		$adminModel = new Admin;
		if (!$adminModel->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $adminModel->postData($this->route['id'])[0],
		];
		$this->view->render('Пост', $vars);
	}
	public function productionAction()
	{
		$this->view->render('production');
	}
	public function reviewAction()
	{
		$this->view->render('review');
	}
	public function priceAction()
	{
		if ($_POST != NULL) {
			var_dump($_POST);
			asort($_POST['empl_type']);
			$arr = implode(', ', $_POST['empl_type']);
			//echo $arr;
		}
		$newarr = '';
		foreach ($_POST['empl_type'] as $val) {
			$newarr = $newarr . ', ' . $val;
		}
		echo $newarr;
		$this->view->render('price');
	}

	public function newsAction()
	{
		$pagination = new Pagination($this->route, $this->model->postsCount(), 8);
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postsList($this->route),

		];
		$this->view->render('news', $vars);
	}
	public function opennewsAction()
	{
		$_SESSION['curr_id'] = $this->route['id'];

		$pagination3 = new Pagination($this->route, 10, 3);



		$curr_id = $this->route['id'];
		$data = [
			'data1' => $this->model->getData($curr_id),
			'takepost' => $this->model->commentsviews($_SESSION['curr_id']),
			'pagination3' => $pagination3->get(),
		];
		$this->view->render('opennews', $data);
	}
	public function feedbackAction()
	{

		if (!empty($_POST)) {
			if (!$this->model->contactValidate1($_POST['name'])) {
				$this->view->message('error', $this->model->error);
			}
			if (!$this->model->emailValidate1($_POST['email'])) {
				$this->view->message('error', $this->model->error);
			} else {
				if (!$this->model->textValidate($_POST['message'])) {
					$this->view->message('error', $this->model->error);
				}
				$this->model->feedback();
				$this->view->message('Запрос', 'выполнен');
			}
			/*if (!$this->model->feedback()) {
				$this->view->message('error', 'error');
			} else $this->view->message('Запрос', 'выполнен');8*/
		}
	}
	public function sendcommentsAction()
	{
		$name = $_POST['name'];
		$text = $_POST['text'];
		$post_id = $_SESSION['curr_id'];

		if (!empty($_POST)) {
			//if (!$this->model->contactValidate2($_POST['name'])) {
			//	$this->view->message('error', $this->model->error);
			//}
			//if (!$this->model->textValidate2($_POST['text'])) {
			//	$this->view->message('error', $this->model->error);
			//} else {
			if ($this->model->sendcomments1($name, $text, $post_id)) {;
				$this->view->message('Запрос', 'выполнен');
			}
			//}
			//$this->model->sendcomments($name, $text, $post_id);


		}
	}

	public function urnAction()
	{
		$pagination = new Pagination($this->route, $this->model->tovarCount(), 4);
		$params = [
			'pagination' => $pagination->get(),
			'list' => $this->model->getTovars($this->route),
		];
		$this->view->render('Urn', $params);
	}


	public function shopAction()
	{
		$ids = implode(',', $_SESSION['urn']['id_tovar']);
		$params = [
			'row' => $this->model->selectTovar($ids),
			'total' => $this->model->total_price(),
		];

		$this->view->render('asd', $params);
	}

	public function addAction()
	{

		if (!isset($_SESSION['urn'])) {
			session_destroy();
			session_start();
			$_SESSION['urn']['tovar'] = '';
			$_SESSION['urn']['num'] = 0;


			goto a;
		} else {
			a:
			$i = $_SESSION['urn']['num']; //количество товаров в корзине общее
			foreach ($_SESSION['urn']['id_tovar'] as $val) :
				if ($val == $_POST['id_of_tovar']) {
					$this->view->message('Nовар', ' Уже есть');
					return false;
				}
			endforeach;
			$tovar =  $_POST['id_of_tovar']; // ид товара который мы отправили со страницы
			$_SESSION['urn']['id_tovar'][$i] = $tovar;


			$_SESSION['urn']['num']++;
			$referer = substr($_SERVER['HTTP_REFERER'], 17);
			$this->view->location($referer);
		}
	}

	public function filterAction()
	{
		var_dump($_GET);
		$pagination = new Pagination($this->route, $this->model->tovarCount(), 4);

		$arr = "'";
		if (!empty($_GET)) {
			foreach ($_GET['filter-tovar'] as $val) :
				$type_tovar = str_replace("'", "", $val);
				$arr = $arr . $type_tovar . "','";
			endforeach;
			$arr = substr($arr, 0, -2);
			$params = [
				'pagination' => $pagination->get(),
				'list' => $this->model->getFilterTovars($arr)
			];
			$this->view->render('Filtered tovars', $params);
		}
	}

	public function extratovarAction()
	{
		$pagination = new Pagination($this->route, $this->model->extratovarCount(), 4);
		$params = [
			'pagination' => $pagination->get(),
			'list' => $this->model->getextraTovars($this->route),
		];
		$this->view->render('secondtovar', $params);
	}
	
}

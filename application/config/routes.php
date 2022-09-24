<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'main/index/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'about' => [
		'controller' => 'main',
		'action' => 'about',
	],
	'contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],
	'production' => [
		'controller' => 'main',
		'action' => 'production',
	],
	'sendcomments' => [
		'controller' => 'main',
		'action' => 'sendcomments',
	],
	'main/news/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'news',
	],
	'opennews/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'opennews',
	],
	'feedback' => [
		'controller' => 'main',
		'action' => 'feedback',
	],
	'forma2' => [
		'controller' => 'main',
		'action' => 'forma2',
	],
	'sendcomments1' => [
		'controller' => 'main',
		'action' => 'sendcomments1',
	],
	'price' => [
		'controller' => 'main',
		'action' => 'price',
	],
	'main/add' => [
		'controller' => 'main',
		'action' => 'add',
	],

	'review' => [
		'controller' => 'main',
		'action' => 'review',
	],
	'post/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'post',
	],
	'main/urn/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'urn',
	],
	'main/shop' => [
		'controller' => 'main',
		'action' => 'shop',
	],
	'main/extratovar' => [
		'controller' => 'main',
		'action' => 'extratovar',
	],
	'main/filter\?\S+' => [
		'controller' => 'main',
		'action' => 'filter',
	],
	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/add_doc' => [
		'controller' => 'admin',
		'action' => 'add_doc',
	],
	'admin/add_tovar' => [
		'controller' => 'admin',
		'action' => 'add_tovar',
	],
	'admin/add_extratovar' => [
		'controller' => 'admin',
		'action' => 'add_extratovar',
	],
	'admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
	'admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
];

<?php
return array(
		'view_manager' => array(
				'template_path_stack' => array(
						'lpbug' => __DIR__ . '/../view',
				),
		),
		'controllers' => array(
				'invokables' => array(
						'lpbug' => 'LpBug\Controller\BugController',
				),
		),
		'service_manager' => array(
				'aliases' => array(
						'lpbug_zend_db_adapter' => 'Zend\Db\Adapter\Adapter',
				),
		),
		'router' => array(
				'routes' => array(
						'bug' => array(
								'type' => 'Literal',
								'priority' => 1000,
								'options' => array(
										'route' => '/bug',
										'defaults' => array(
												'controller' => 'lpbug',
												'action'     => 'index',
										),
								),
								'may_terminate' => true,
								'child_routes' => array(
										'login' => array(
												'type' => 'Literal',
												'options' => array(
														'route' => '/add',
														'defaults' => array(
																'controller' => 'lpbug',
																'action'     => 'add',
														),
												),
										),
								),
						),
				),
		),
);

<?php
return array(
		'controllers' => array(
				'invokables' => array(
						'Bug\Controller\Bug' => 'Bug\Controller\BugController',
				),
		),
		// Le routing
		'router' => array(
				'routes' => array(
						'bug' => array(
								'type'    => 'segment',
								'options' => array(
										'route'    => '/bug[/][:action][/:id]',
										'constraints' => array(
												'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
												'id'     => '[0-9]+',
										),
										'defaults' => array(
												'controller' => 'Bug\Controller\Bug',
												'action'     => 'index',
										),
								),
						),
				),
		),
		'view_manager' => array(
				'template_path_stack' => array(
						'bug' => __DIR__ . '/../view',
				),
		),
);
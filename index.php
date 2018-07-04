<?php
header('Content-Type: application/json');
$v = isset($_GET['v']) ? $_GET['v'] : null;
$f = isset($_GET['f']) ? $_GET['f'] : null;

$materialize_versions = [
	'v1' => [
		'doc' => 'https://materializecss.com/',
		'css' => [
			[
				'src' => 'https://cdns.nicolaschoquet.fr/materialize-css/dist/css/materialize.min.css'
			]
		],
		'js'  => [
			[
				'src' => 'https://cdns.nicolaschoquet.fr/jquery/dist/jquery.min.js',
			],
			[
				'src' => 'https://cdns.nicolaschoquet.fr/materialize-css/dist/js/materialize.min.js'
			]
		]
	]
];
$bootstrap_versions = [
	'v3' => [
		'doc' => 'http://getbootstrap.com/docs/3.3/',
		'css' => [
			[
				'src' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
			],
		],
		'js'  => [
			[
				'src' => 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'
			],
			[
				'src' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
			],
		]
	],
	'v4' => [
		'doc' => 'https://getbootstrap.com/',
		'css' => [
			[
				'src' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css',
			]
		],
		'js'  => [
			[
				'src' => 'https://code.jquery.com/jquery-3.2.1.slim.min.js',
			],
			[
				'src' => 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
			],
			[
				'src' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',
			]
		]
	]
];

if($v === null && $f !== null) {
	echo isset(${"{$f}_versions"})
		? json_encode(${"{$f}_versions"})
			: json_encode([]);
}
elseif ($v !== null && $f !== null) {
	if(file_exists("{$f}/index.php")) include "{$f}/index.php";
	else echo json_encode([]);
}
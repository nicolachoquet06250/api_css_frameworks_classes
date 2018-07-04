<?php

$v = isset($v) ? $v : 'v1';
$materialize_classes = [
	'v1' => [
		'container' => [
			'' => 'container',
			'fluid' => 'container-fluid',
		],
		'row' => [
			'' => 'row',
		],
		'col' => [
			'sm' => [
				1 => 'col s-1', 2 => 'col s-2', 3 => 'col s-3',
				4 => 'col s-4', 5 => 'col s-5', 6 => 'col s-6',
				7 => 'col s-7', 8 => 'col s-8', 9 => 'col s-9',
				10 => 'col s-10', 11 => 'col s-11', 12 => 'col s-12'
			],
			'md' => [
				1 => 'col m-1', 2 => 'col m-2', 3 => 'col m-3',
				4 => 'col m-4', 5 => 'col m-5', 6 => 'col m-6',
				7 => 'col m-7', 8 => 'col m-8', 9 => 'col m-9',
				10 => 'col m-10', 11 => 'col m-11', 12 => 'col m-12'
			],
			'lg' => [
				1 => 'col l-1', 2 => 'col l-2', 3 => 'col l-3',
				4 => 'col l-4', 5 => 'col l-5', 6 => 'col l-6',
				7 => 'col l-7', 8 => 'col l-8', 9 => 'col l-9',
				10 => 'col l-10', 11 => 'col l-11', 12 => 'col l-12'
			],
			'xl' => [
				1 => 'col xl-1', 2 => 'col xl-2', 3 => 'col xl-3',
				4 => 'col xl-4', 5 => 'col xl-5', 6 => 'col xl-6',
				7 => 'col xl-7', 8 => 'col xl-8', 9 => 'col xl-9',
				10 => 'col xl-10', 11 => 'col xl-11', 12 => 'col xl-12'
			],
		],
		'header' => 'header',
		'title' => 'title',
		'offset' => [
			'sm' => [
				1 => 'offset-s1', 2 => 'offset-s2', 3 => 'offset-s3',
				4 => 'offset-s4', 5 => 'offset-s5', 6 => 'offset-s6',
				7 => 'offset-s7', 8 => 'offset-s8', 9 => 'offset-s9',
				10 => 'offset-s10', 11 => 'offset-s11', 12 => 'offset-s12'
			],
			'md' => [
				1 => 'offset-m1', 2 => 'offset-m2', 3 => 'offset-m3',
				4 => 'offset-m4', 5 => 'offset-m5', 6 => 'offset-m6',
				7 => 'offset-m7', 8 => 'offset-m8', 9 => 'offset-m9',
				10 => 'offset-m10', 11 => 'offset-m11', 12 => 'offset-m12'
			],
			'lg' => [
				1 => 'offset-l1', 2 => 'offset-l2', 3 => 'offset-l3',
				4 => 'offset-l4', 5 => 'offset-l5', 6 => 'offset-l6',
				7 => 'offset-l7', 8 => 'offset-l8', 9 => 'offset-l9',
				10 => 'offset-l10', 11 => 'offset-l11', 12 => 'offset-l12'
			],
			'xl' => [
				1 => 'offset-xl1', 2 => 'offset-xl2', 3 => 'offset-xl3',
				4 => 'offset-xl4', 5 => 'offset-xl5', 6 => 'offset-xl6',
				7 => 'offset-xl7', 8 => 'offset-xl8', 9 => 'offset-xl9',
				10 => 'offset-xl10', 11 => 'offset-xl11', 12 => 'offset-xl12'
			],
		],
		'push' => [
			'sm' => [
				1 => 'push-s1', 2 => 'push-s2', 3 => 'push-s3', 4 => 'push-s4',
				5 => 'push-s5', 6 => 'push-s6', 7 => 'push-s7', 8 => 'push-s8',
				9 => 'push-s9', 10 => 'push-s10', 11 => 'push-s11', 12 => 'push-s12',
			],
			'md' => [
				1 => 'push-m1', 2 => 'push-m2', 3 => 'push-m3', 4 => 'push-m4',
				5 => 'push-m5', 6 => 'push-m6', 7 => 'push-m7', 8 => 'push-m8',
				9 => 'push-m9', 10 => 'push-m10', 11 => 'push-m11', 12 => 'push-m12',
			],
			'lg' => [
				1 => 'push-l1', 2 => 'push-l2', 3 => 'push-l3', 4 => 'push-l4',
				5 => 'push-l5', 6 => 'push-l6', 7 => 'push-l7', 8 => 'push-l8',
				9 => 'push-l9', 10 => 'push-l10', 11 => 'push-l11', 12 => 'push-l12',
			],
			'xl' => [
				1 => 'push-xl1', 2 => 'push-xl2', 3 => 'push-xl3', 4 => 'push-xl4',
				5 => 'push-xl5', 6 => 'push-xl6', 7 => 'push-xl7', 8 => 'push-xl8',
				9 => 'push-xl9', 10 => 'push-xl10', 11 => 'push-xl11', 12 => 'push-xl12',
			],
		],
		'pull' => [
			'sm' => [
				1 => 'pull-s1', 2 => 'pull-s2', 3 => 'pull-s3', 4 => 'pull-s4',
				5 => 'pull-s5', 6 => 'pull-s6', 7 => 'pull-s7', 8 => 'pull-s8',
				9 => 'pull-s9', 10 => 'pull-s10', 11 => 'pull-s11', 12 => 'pull-s12',
			],
			'md' => [
				1 => 'pull-m1', 2 => 'pull-m2', 3 => 'pull-m3', 4 => 'pull-m4',
				5 => 'pull-m5', 6 => 'pull-m6', 7 => 'pull-m7', 8 => 'pull-m8',
				9 => 'pull-m9', 10 => 'pull-m10', 11 => 'pull-m11', 12 => 'pull-m12',
			],
			'lg' => [
				1 => 'pull-l1', 2 => 'pull-l2', 3 => 'pull-l3', 4 => 'pull-l4',
				5 => 'pull-l5', 6 => 'pull-l6', 7 => 'pull-l7', 8 => 'pull-l8',
				9 => 'pull-l9', 10 => 'pull-l10', 11 => 'pull-l11', 12 => 'pull-l12',
			],
			'xl' => [
				1 => 'pull-xl1', 2 => 'pull-xl2', 3 => 'pull-xl3', 4 => 'pull-xl4',
				5 => 'pull-xl5', 6 => 'pull-xl6', 7 => 'pull-xl7', 8 => 'pull-xl8',
				9 => 'pull-xl9', 10 => 'pull-xl10', 11 => 'pull-xl11', 12 => 'pull-xl12',
			],
		],
		'divider' => ['' => 'divider',],
		'section' => ['' => 'section',],
		'flow' => ['text' => 'flow-text',],
		'valign' => ['wrapper' => 'valign-wrapper',],
		'text' => [
			'left' => 'left-align',
			'right' => 'right-align',
			'center' => 'center-align',
			'justify' => 'justify-align',
			'truncate' => 'truncate',
			'flow' => 'flow-text',
		],
		'hide' => [
			'' => 'hide',
			'on small' => [
				'only' => 'hide-on-small-only',
			],
			'on med' => [
				'only' => 'hide-on-med-only',
				'and' => [
					'up' => 'hide-on-med-and-down',
					'down' => 'hide-on-med-and-up',
				],
			],
			'on larg' => [
				'only' => 'hide-on-large-only',
			],
		],
		'show' => [
			'on small' => 'show-on-small',
			'on med' => [
				'' => 'show-on-medium',
				'and' => [
					'up' => 'show-on-medium-and-up',
					'down' => 'show-on-medium-and-down',
				],
			],
			'on large' => 'show-on-large',
		],
		'card' => [
			'panel' => 'card-panel',
			'content' => 'card-content',
			'title' => 'card-title',
			'action' => 'card-action',
			'image' => 'card-image',
			'stacked' => 'card-stacked',
			'reveal' => 'card-reveal',
			'tabs' => 'card-tabs',
		],
		'tabs' => [
			'fixed width' => 'tabs-fixed-width',
		],
		'tab' => 'tab',
		'small' => 'small',
		'teal' => 'teal',
		'chip' => 'chip',
		'chips' => [
			'' => 'chips',
			'initial' => 'chips chips-initial',
			'placeholder' => 'chips chips-placeholder',
			'autocomplete' => 'chips chips-autocomplete',
		],
		'sticky' => [
			'action' => 'sticky-action',
		],
		'activator' => 'activator',
		'halfway' => [
			'fab' => 'halfway-fab',
		],
		'hoverable' => 'hoverable',
		'img' => [
			'responsive' => 'responsive-img',
			'fluid' => 'fluid responsive-img',
			'thumbnail' => 'thumbnail responsive-img',
			'circle' => 'circle responsive-img',
		],
		'video' => [
			'container' => 'video-container',
			'responsive' => 'responsive-video',
		],
		'pulse' => [
			'' => 'btn btn-floating pulse',
			'large' => 'btn btn-floating btn-large pulse',
		],
		'depth' => [
			1 => 'z-depth-1', 2 => 'z-depth-2',
			3 => 'z-depth-3', 4 => 'z-depth-4',
			5 => 'z-depth-5', 6 => 'z-depth-6',
		],
		'table' => [
			'' => '',
			'striped' => 'striped',
			'bordered' => 'bordered',
			'hightlight' => 'hightlight',
			'centered' => 'centered',
			'responsive' => 'responsive-table'
		],
		'btn' => [
			'' => 'btn',
			'floating' => 'btn-floating',
			'large' => 'btn-large',
			'fixed action' => 'fixed-action-btn',
			'flat' => 'btn-flat',
		],
		'scale' => [
			'transition' => 'scale-transition',
			'out' => 'scale-out',
			'in' => 'scale-in',
		],
		'collection' => [
			'item' => 'collection-item',
			'header' => 'collection-header',
		],
		'secondary' => [
			'content' => 'secondary-content',
		],
		'dismissable' => 'dismissable',
		'badge' => [
			'' => 'badge',
			'new' => 'new-badge',
		],
		'dropdown' => [
			'content' => 'dropdown-content',
			'button' => 'dropdown-button',
		],
		'page' => [
			'footer' => 'page-footer',
		],
		'footer' => [
			'copyright' => 'footer-copyright',
		],
		'right' => 'right',
		'left' => 'left',
		'center' => 'center',
		'nav' => [
			'wrapper' => 'nav-wrapper',
		],
		'brand' => [
			'logo' => 'brand-logo',
		],
		'collapsible' => [
			'' => 'collapsible',
			'header' => 'collapsible-header',
			'body' => 'collapsible-body',
		],
		'waves' => [
			'effect' => 'waves-effect',
			'light' => 'waves-light',
			'teal' => 'waves-teal',
		],
		'horizontal' => 'horizontal',
		'toolbar' => 'toolbar',
		'disabled' => 'disabled',
		'breadcrumb' => 'breadcrumb',
		'input' => [
			'field' => 'input-field',
		],
	]
];
echo isset($materialize_classes[$v]) ? json_encode($materialize_classes[$v]) : json_encode([]);
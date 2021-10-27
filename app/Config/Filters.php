<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

use App\Filters\LoginFilter;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'isLoggedIn' => 	LoginFilter::class,
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			// 'honeypot',
			// 'csrf',
		],
		'after'  => [
			'toolbar',
			// 'honeypot',
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [

			'isLoggedIn' => ['before' =>
			[
				'Cadmin',
				'Cuser',
				
				'Ccommunity_admin',
				'Ccommunity_admin/*',
				'Ccommunity_user',
				'Ccommunity_user/*',

				'Cevents_admin',
				'Cevents_admin/*',
				'Cevents_user',
				'Cevents_user/*',

				'Cjabatan_admin',
				'Cjabatan_admin/*',

				'CjenisProgram_admin',
				'CjenisProgram_admin/*',

				'CkelolaUser_admin',
				'CkelolaUser_admin/*',

				'Cregional_admin',
				'Cregional_admin/*',

				'CtentangRegional_user',
				'CtentangRegional_user/*',

				'Cprogram_admin',
				'Cprogram_admin/*'


			]


		]

	];
}

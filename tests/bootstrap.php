<?php

/**
 * This file is part of the AlesWita\Components\VisualPaginator
 * Copyright (c) 2015 Ales Wita (aleswita+github@gmail.com)
 */

declare(strict_types=1);

if (@!include __DIR__ . "/../vendor/autoload.php") {
	echo "Install Nette Tester using `composer install`";
	exit(1);
}


Tester\Environment::setup();

define("TEMP_DIR", __DIR__ . "/temp/" . (isset($_SERVER["argv"]) ? md5(serialize($_SERVER["argv"])) : getmypid()));
@mkdir(dirname(TEMP_DIR));
@mkdir(TEMP_DIR);

<?php

/**
 * This file is part of TwigView.
 *
 ** (c) 2014 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WyriHaximus\CakePHP\TwigView\Lib\Twig\Extension;

/**
 * Class Basic
 * @package WyriHaximus\CakePHP\TwigView\Lib\Twig\Extension
 */
class Basic extends \Twig_Extension {

    /**
     * @return \Twig_SimpleFilter[]
     */
    public function getFilters() {
		return [
			new \Twig_SimpleFilter('debug', 'debug'),
			new \Twig_SimpleFilter('pr', 'debug'),
			new \Twig_SimpleFilter('low', 'low'),
			new \Twig_SimpleFilter('up', 'up'),
			new \Twig_SimpleFilter('env', 'env'),
			new \Twig_SimpleFilter('count', 'count'),
		];
	}

    /**
     * @return string
     */
    public function getName() {
		return 'basic';
	}
}
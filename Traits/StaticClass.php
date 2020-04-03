<?php
namespace Sci\Traits;

defined('WPINC') OR exit('No direct script access allowed');

/**
 * Static class trait
 *
 * @author		Eduardo Lazaro Rodriguez <edu@edulazaro.com>
 * @copyright	2020 Kenodo LTD
 * @license		http://opensource.org/licenses/MIT	MIT License
 * @version     1.0.0
 * @link		https://www.sciwp.com
 * @since		Version 1.0.0 
 */
trait StaticClass
{
	/**
	 *  Class constructor
	 */
    final protected function __construct(){}

	/**
	 * Clone
	 */	
    final private function __clone(){}

	/**
	 * Wakeup
	 */			
	final protected function __wakeup(){}
}
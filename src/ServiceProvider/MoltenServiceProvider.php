<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2017
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace FastD\ServiceProvider;


use FastD\Container\Container;
use FastD\Container\ServiceProviderInterface;

class MoltenServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function register(Container $container)
    {
        if (function_exists('molten_set_service_name')) {
            molten_set_service_name(app()->getName());
        }
    }
}
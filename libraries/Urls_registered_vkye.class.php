<?php

defined('_EXEC') or die;

class Urls_registered_vkye
{
    static public $home_page_default = '/';

    static public function urls()
    {
        return [
            '/' => [
                'controller' => 'Index',
                'method' => 'index'
            ],
            '/products' => [
                'controller' => 'Products',
                'method' => 'index'
            ],
            '/cart' => [
                'controller' => 'Cart',
                'method' => 'index'
            ],
            '/contact' => [
                'controller' => 'Contact',
                'method' => 'index'
            ],
            '/about' => [
                'controller' => 'About',
                'method' => 'index'
            ]
        ];
    }
}

<?php
namespace App\Menu;

use Knp\Menu\FactoryInterface;

class MenuBuilder
{

    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu()
    {
        $menu = $this->factory->createItem('root');

        $menu->setChildrenAttribute('class', 'navbar-nav mr-auto');

        $menu->addChild('Home', [
            'route' => 'app_index',
            'routes' => 'app_index'
        ]);
        $menu->addChild('Hello', [
            'attributes' => [
                'icon' => 'far fa-smile'
            ]
        ]);

        return $menu;
    }
}


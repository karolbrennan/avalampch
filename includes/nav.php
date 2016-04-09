<?php
/**
 * Array that holds all of the menu items
 * Values: title, url, submenu (array of more menu items, can be nested)
 */
$menuItems = [
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'About', 'url' => '/about'],
    [
        'title' => 'Services',
        'url' => '/services',
        'submenu' => [
            ['title' => 'Stuff', 'url' => '/stuff'],
            ['title' => 'Things', 'url' => '/things']
        ]
    ],
    ['title' => 'Contact', 'url' => '/contact']
];

function getMenuItems(array $menuItems){
    $currentUrl = $_SERVER["REQUEST_URI"];
    foreach($menuItems as $menuItem){
        $class = ($currentUrl === $menuItem['url']) ? 'active' : '';
        $url = $menuItem['url'];
        $title = $menuItem['title'];

        echo "<li class='" . ((!empty($menuItem['submenu'])) ? 'is-dropdown-submenu-parent' : '') . " {$class}' role='menuitem'>
              <a href='{$url}'>{$title}</a>";
                if(!empty($menuItem['submenu'])){
                    echo "<ul class='menu submenu " . ((!empty($menuItem['submenu'])) ? 'is-dropdown-submenu' : '') . "' data-submenu role='menu'>";
                    getSubMenuItems($menuItem['submenu']);
                    echo "</ul>";
                }
        echo "</li>";
    }
}

function getSubMenuItems(array $subMenuItems){
    $currentUrl = $_SERVER["REQUEST_URI"];
    foreach($subMenuItems as $menuItem){
        $class = ($currentUrl === $menuItem['url']) ? ' active' : '';
        $url = $menuItem['url'];
        $title = $menuItem['title'];

        echo "<li class='is-submenu-item is-dropdown-submenu-item" . ((!empty($menuItem['submenu'])) ? ' is-dropdown-submenu-parent' : '') . " {$class}' role='menuitem'>
              <a href='{$url}'>{$title}</a>";
        if(!empty($menuItem['submenu'])){
            echo "<ul class='menu submenu " . ((!empty($menuItem['submenu'])) ? 'is-dropdown-submenu' : '') . "' data-submenu role='menu'>";
            getSubMenuItems($menuItem['submenu']);
            echo "</ul>";
        }
        echo "</li>";
    }
}


?>

<nav>
    <ul class="dropdown menu float-right" data-dropdown-menu="dropdown-menu" role="menubar">
        <?php getMenuItems($menuItems); ?>
    </ul>
</nav>


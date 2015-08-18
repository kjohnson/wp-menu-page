<?php if ( ! defined( 'ABSPATH' ) || ! class_exists( 'KBJ_MenuPage' ) ) exit;

final class KBJ_ExampleMenu extends KBJ_MenuPage
{
    public $page_title = 'Example';

    public function __construct()
    {
        parent::__construct();
    }

    public function display()
    {
        echo 'Hello, world!';
    }

}

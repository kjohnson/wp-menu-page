# WP Menu Page

[![Join the chat at https://gitter.im/kjohnson/wp-menu-page](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/kjohnson/wp-menu-page?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
A base class for the WordPress [Menu Pages](https://codex.wordpress.org/Function_Reference/add_menu_page)

## Example Menu Page

```PHP
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
    
} // End Class KBJ_ExampleMenu
```

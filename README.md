# WP Menu Page
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

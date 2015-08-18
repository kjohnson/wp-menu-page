# wp-menu-page
A base class for the WordPress

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

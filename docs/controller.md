## Controller

All controllers are stored in the `app/Controllers` directory. For create new contoller just duplicate `ExampleController.php` and name it as you want.

## Basic Usage
```
<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        parent::_construct();
        $this->model = new User;
    }

    public function index()
    {
        $user = $this->model->all();
        $hello = 'Hello World';
        return view('users/index', ['user' => $user, 'hello' => $hello]);
    }
}
```
Based on the example code above, you should call base controller on constructor. If you want to use model, you can instance model on constructor also.

To passing data into view, use `view` method and put the data on second parameter as associative array.

## Related Documentation
* [Routing](https://github.com/biobii/fylite/blob/master/docs/routing.md)
* [Model](https://github.com/biobii/fylite/blob/master/docs/model.md)
* [View](https://github.com/biobii/fylite/blob/master/docs/view.md)
* [Simple Form Validation](https://github.com/biobii/fylite/blob/master/docs/form-validation.md)
* [File Upload](https://github.com/biobii/fylite/blob/master/docs/file-upload.md)

Back to [Home](https://github.com/biobii/fylite)



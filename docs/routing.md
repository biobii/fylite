## Routing

All routes are defined on route file, which are located in the `routes/route.php`. The first parameter contains about the destination url and the second parameter is used to call the namespace and method of controller. Remember to define method after `@` symbol.

## Basic Usage

### GET Method
```php
$route->get('/', 'ExampleController@welcome');
```
### POST Method
```php
$route->post('/post', 'ExampleController@post');
```
Remember base namespace of controllers is `App\Controllers`, so if you want to place the controller inside a folder, call the controllers like this:
```php
$route->get('/hello', 'YourFolder\YourController@yourMethod');
```

### Set Route Parameter
```php
// route.php
$route->get('/hello/{name}', 'ExampleController@greet');

// ExampleController.php
public function greet($name)
{
    echo 'Hello ' . $name;
}
```

## Complete Routing Documentation
For more route documentation can be read on [FastRoute](https://github.com/nikic/FastRoute).

## Related Documentation
* [Controller](https://github.com/biobii/fylite/blob/master/docs/controller.md)

Back to [Home](https://github.com/biobii/fylite)



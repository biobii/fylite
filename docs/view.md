## View

All views are stored in the `views` directory. For create the new view file don't forget to add `.blade.php` after the name of file. For example `register.blade.php`. Because FYLite using Blade as template engine.

## Basic Usage

### Call view from controller
```php
// some-controller.php

public function hello()
{
    return view('welcome'); // welcome.blade.php
}
```

### Passing data from controller to view
```php
public function hello()
{
    $name = 'Biobii';
    $age = 20;

    return view('welcome', ['name' => $name, 'age' => $age]);
}
```

### Displaying data
```php
// welcome.blade.php

<p>My name is {{ $name }}</p>
<p>I'm {{ $age }} years old</p>   
```

### Load assets and go to specific URL
FYLite has a helper that makes it easy to call asset files in public folder.
```php
// load assets
<head>
    <title>FYLite</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

// go to specific URL
<form action="{{ myurl('login') }}" method="POST">
	{!! csrf_token() !!}
  	// 
</form>
```

## Blade Documentation

[Original Blade Documentation](https://laravel.com/docs/5.2/views)

## Related Documentation
* [Controller](https://github.com/biobii/fylite/blob/master/docs/controller.md)

Back to [Home](https://github.com/biobii/fylite)



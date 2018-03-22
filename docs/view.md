## View

All views are stored in the `views` directory. For create the new view file don't forget to add `.view.php` after the name of file. For example `register.view.php`.

## Basic Usage

### Call view from controller
```php
// some-controller.php

public function hello()
{
    return view('awesome'); // awesome.view.php
}
```

### Passing data from controller to view
```php
public function hello()
{
    $name = 'Biobii';
    $age = 20;

    return view('awesome', ['name' => $name, 'age' => $age]);
}
```

### Displaying data
```php
// awesome.view.php

<p>My name is <?php echo $data['name'] ?></p>
<p>I'm <?php echo $data['age'] ?> years old</p>   
```

### Load assets and go to specific URL
FYLite has a helper that makes it easy to call asset files in public folder.
```php
// load assets
<head>
    <title>FYLite</title>
    <link rel="stylesheet" href="<?php asset('css/style.css') ?>">
</head>

// go to specific URL
<form action="<?php myurl('login') ?>" method="POST">
    //
</form>
```

## Related Documentation
* [Controller](https://github.com/biobii/fylite/blob/master/docs/controller.md)

Back to [Home](https://github.com/biobii/fylite)



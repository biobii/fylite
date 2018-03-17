## View

All views are stored in the `views` directory. For create the new view file don't forget to add `.view.php` after the name of file. For example `register.view.php`.

## Basic Usage

### Call view from controller
```
// some-controller.php

public function hello()
{
    return view('awesome'); // awesome.view.php
}
```

### Passing data from controller to view
```
public function hello()
{
    $name = 'Biobii';
    $age = 20;

    return view('awesome', ['name' => $name, 'age' => $age]);
}
```

### Displaying data
```
// awesome.view.php

<p>My name is <?php echo $data['name'] ?></p>
<p>I'm <?php echo $data['age'] ?> years old</p>   
```

### Load assets
FYLite has a helper that makes it easy to call asset files in public folder.
```
<head>
    <title>FYLite</title>
    <link rel="stylesheet" href="<?php asset('css/style.css') ?>">
</head>
```
Before do that, please configure your basepath on MainHelpers file.

## Related Documentation
* [Controller](https://github.com/biobii/fylite/blob/master/docs/controller.md)

Back to [Home](https://github.com/biobii/fylite)



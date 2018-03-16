## Simple Form Validation

FYLite provides simple useful form validation. Validation rules are incomplete but sufficient for some common purposes. The validation file stored in the `app/Core` directory.

## Basic Usage

### Defined rules validation
```
public function post() {
    $validator = $this->validation->check([
        'email' => [
            'required' => true,
            'email' => true,
        ],
        'password' => [
            'required' => true,
            'min' => 6,
        ],
    ]);
}
```

### Check validation status
```
if ($validator->fails()) {
    // validation failed
    return redirectBack(); // redirect back to form view
}

// validation passed
```

### Display validation errors message on view
```
// views/login.view.php

<?php if (hasErrorsValidation) :
    foreach (getErrorsValidation() as $error) : ?>
        <li><?php echo $error ?></li>
    <?php endforeach;
<?php endif; ?>

<form action="<?php echo basepath() . '/login' ?>" method="POST>
    <?php echo csrf_token() ?>
    <input type="text" name="email">
    <input type="password" name="password">
    <button type="submit">
        Login
    </button>
</form>
```

## Available Validation Rules
* required - Field can't be empty.
* min - Define minimum characters of field.
* max - Define maximum characters of field.
* string - Input field should be string.
* numeric - Input field should be numeric.
* integer - Input field should be integer.
* boolean - Input field should be boolean.
* array - Input field should be an array.

## Related Documentation
* [Controller](https://github.com/biobii/fylite/blob/master/docs/controller.md)

Back to [Home](https://github.com/biobii/fylite)



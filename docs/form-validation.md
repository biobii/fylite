## Simple Form Validation

FYLite provides simple useful form validation. Validation rules are incomplete but sufficient for some common purposes. The validation file stored in the `app/Core` directory.

## Basic Usage

### Defined rules validation
```php
public function post()
{
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

### Unique rule validation
```php
public function register()
{
    $validator = $this->validation->check([
        'email' => [
            'unique' => 'users' // email should be unique on users table
        ]
    ]);
}
```

### Check validation status
```php
if ($validator->fails())
{
    // validation failed
    return redirectBack(); // redirect back to form view
}

// validation passed, continue proccess
```

### Display errors message on view
```php
// views/login.blade.php

@if (hasErrorsValidation) 
    @foreach (getErrorsValidation() as $error)
        <li>{{ $error }}</li>
    @endforeach
@endif

<form action="{{ myurl('login') }}" method="POST">
    {!! csrf_token() !!} 
    <input type="text" name="email" value="{{ old('email') }}">
    <input type="password" name="password" value="{{ old('password') }}">
    <button type="submit">
        Login
    </button>
</form>
```
Use `old` helper for keep input value.

## Available Validation Rules
* required - field can't be empty.
* min - define minimum characters of field.
* max - define maximum characters of field.
* string - input field should be string.
* numeric - input field should be numeric.
* integer - input field should be integer.
* boolean - input field should be boolean.
* array - input field should be an array.
* unique - filter existing data in specific table.

## Related Documentation
* [Controller](https://github.com/biobii/fylite/blob/master/docs/controller.md)

Back to [Home](https://github.com/biobii/fylite)



## Simple File Upload

FYLite provides a simple file upload feature. By default upload files are placed in the `public/storage` directory, but you can adjust it later.

## Basic Usage

### Form View
```php
// upload-example.blade.php
<form action="{{ myurl('upload') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_token() !!} 
    <input type="file" name="myFile" class="form-control">
    <button type="submit">
        Upload
    </button>
</form>
```

### Uploading File
```php
// SomeController.php
use FYLite\FileUpload;

public function upload()
{
    csrf_check(); // check csrf token
    $myFile = inputFile('myFile');
    $file = new FileUpload('jpg,jpeg,png', '2000'); // file type, size in Kilobytes
    $file->setFile($myFile)->setName('awesome-photo')
            ->pathTo('photos')->upload();

    // continue proccess
}
```
The first parameter in the constructor is the allowed format file (separated by commas and without spaces). The second parameter is the file size in kilobytes.

If you set specific path like the example, then you should create the folder before. In this case the file stored in `/public/storage/photos`. Make sure photos folder is exist.

If the process succesfully it will return the name of file as string, and if it fails will return error messages.

## Related Documentation
* [Controller](https://github.com/biobii/fylite/blob/master/docs/controller.md)
* [View](https://github.com/biobii/fylite/blob/master/docs/view.md)

Back to [Home](https://github.com/biobii/fylite)



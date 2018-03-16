<?php

namespace App\Core;

class FileUpload
{

    private $_file, $_type, $_name, $_tmpname, $_error, $_size, $_path, $_format;
    private $_error_message = [];
    private $_passed = false;
    private $_type_array = [];

    public function __construct($type, $size)
    {
        $this->_type = $type;
        $this->_size = $size;
        $this->_type_array = explode(',', $this->_type);
    }

    public function setFile($file)
    {
        $this->_file = $file;
        $this->_tmpname = $this->_file['tmp_name'];
        return $this;
    }

    public function setName($name)
    {
        $this->_format = pathinfo($this->_file['name'], PATHINFO_EXTENSION);
        $this->_name = $name . '.' . $this->_format;
        return $this;
    }

    public function pathTo($path)
    {
        $this->_path = __DIR__ . '/../../public/storage/' . $path . '/';
        $this->_format = pathinfo($this->_file['name'], PATHINFO_EXTENSION);
        return $this;
    }

    public function upload()
    {
        if ($this->validate()) {
            if (empty($this->_name)) {
                $this->_name = $this->_file['name'];
            }
            move_uploaded_file($this->_tmpname, $this->_path . $this->_name);
            return $this->_name . $this->_format;
        }
        return $this->getErrors();
    }

    private function addError($error)
    {
        $this->_error_message[] = $error;
    }

    public function getErrors()
    {
        return $this->_error_message;
    }

    private function validate()
    {
        if ($this->_file['error'] == 0) {
            if ($this->_file['size'] < $this->_size * 1000) {
                for ($i = 0; $i < count($this->_type_array); $i++) {
                    $type_temp = $this->_type_array[$i];
                    if ($this->_format == $type_temp) {
                        $name = $this->_file['name'];
                        if (isset($this->_name)) {
                            $name = $this->_name;
                        }
                        if (! file_exists($this->_path . $name . $this->_format)) {
                            return true;
                        } else {
                            $this->addError('File already exists!');
                        }
                    }
                }
                $this->addError('File type should: ' . $this->_type);
            } else {
                $this->addError('File should less than ' . $this->_size . ' Kb.');
            }
        } else {
            $this->addError('Error');
        }
        return false;
    }
}
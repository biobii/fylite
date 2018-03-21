<?php

    /**
     * Call errors view on views folder
     * @param string $file
     * @param array $data
     * @return string
     */
    function abort($file, $data = [])
    {
        $path = __DIR__ . '/../../views/errors/' . $file . '.php';
        if (file_exists($path))
            return require $path;
        return die('View ' . $file . ' not found!');
    }

    /**
     * Direct to asset path
     * @param string $file
     */
    function asset($file)
    {
        $basepath = basepath();
        if (substr($basepath, -1) != '/') {
            $basepath .= '/';
        }

        echo $basepath . $file;
    }

    /**
     * Check is user login or not
     * @param void
     * @return bool
     */
    function authCheck()
    {
        return isset($_SESSION['auth_id']) ? true : false;
    }

    function basepath()
    {
        $http = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://';
        return $http . $_SERVER['HTTP_HOST'];
    }

    /**
     * Hashing value
     * @param string $value
     * @return string password_hash()
     */
    function bcrypt($value)
    {
        return password_hash($value, PASSWORD_DEFAULT);
    }

    /**
     * Verify hash
     * @param string $value
     * @param string $hash
     * @return bool 
     */
    function bcrypt_verify($value, $hash)
    {
        return password_verify($value, $hash);
    }

    /**
     * Check valid CSRF token
     */
    function csrf_check()
    {
        if (isset($_SESSION['csrf_token'])) {
            if ($_SESSION['csrf_token'] == input('_token')) {
                unset($_SESSION['csrf_token']);
                return true;
            }
        }

        return die('csrf_token invalid');
    }

    /**
     * Set CSRF token
     */
    function csrf_token()
    {
        $base_token = 'ghsyGsnHks02Vt3bYb2YbjO217bBSjLD7M31mhSfLksGjhbUisG28Sb2gsndk8nBsjGs63hs7S';
        $_SESSION['csrf_token'] = str_shuffle(str_shuffle($base_token));
        echo '<input type="hidden" name="_token" value="' . $_SESSION['csrf_token'] . '">';
    }

    /**
     * var_dump and die script
     * @param mix $value
     * @return void
     */
    function dump($value)
    {
        var_dump($value);
        die();
    }

    /**
     * Get message errors form validation
     * @param void
     * @return array $errors
     */
    function getErrorsValidation()
    {
        $errors = $_SESSION['form_errors_validation'];
        unset($_SESSION['form_errors_validation']);
        return $errors;
    }

    /**
     * Get authenticated user id from session
     * @param void
     * @return string $_SESSION['auth_id] 
     */
    function getAuth()
    {
        return authCheck() ? $_SESSION['auth_id'] : null;
    }

    /**
     * Check has error form validation
     * @param void
     * @return bool
     */
    function hasErrorsValidation()
    {
        return isset($_SESSION['form_errors_validation']) ? true : false;
    }

    /**
     * Grab dynamic input value from form (POST/GET)
     * @param mix $value
     * @return mix $value
     */
    function input($value)
    {
        if (isset($_POST[$value])) {
            return $_POST[$value];
        } else if (isset($_GET[$value])) {
            return $_GET[$value];
        }
        
        return false;
    }

    /**
     * 
     */
    function inputFile($value)
    {
        return isset($_FILES[$value]) ? $_FILES[$value] : false;
    }

    /**
     * Redirect to specific url
     * @param string $url
     * @return header
     */
    function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }

    /**
     * Redirect to previous url
     */
    function redirectBack()
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    /**
     * Set id users to session
     * @param int $id
     * @return void
     */
    function setAuth($id)
    {
        $_SESSION['auth_id'] = $id;
    }

    /**
     * Set message errors form validation
     * @param array $errors
     * @return void
     */
    function setErrorsValidation($errors)
    {
        $_SESSION['form_errors_validation'] = $errors;
    }

    /**
     * Direct to url destination
     * @param string $route
     */
    function myurl($route = '')
    {
        $basepath = basepath();
        if (substr($basepath, -1) != '/') {
            $basepath .= '/';
        }

        echo $basepath . $route;
    }

    /**
     * Call view on views folder
     * @param string $file
     * @param array $data
     * @return void
     */
    function view($file, $data = [])
    {
        $path = __DIR__ . '/../../views/' . $file . '.view.php';
        if (file_exists($path))
            return require $path;
        return die('View ' . $file . ' not found!');
    }

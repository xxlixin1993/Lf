<?php
/**
 * helpers.php
 * 帮助函数
 * User: lixin
 * Date: 17-5-19
 */
if (! function_exists('env')) {
    /**
     * Gets the value of an environment variable. Supports boolean, empty and null.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    function env($key, $default = null)
    {
        $value = getenv($key);

        if ($value === false) {
            return value($default);
        }

        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;

            case 'false':
            case '(false)':
                return false;

            case 'empty':
            case '(empty)':
                return '';

            case 'null':
            case '(null)':
                return;
        }

        if (\core\Str::startsWith($value, '"') && \core\Str::endsWith($value, '"')) {
            return substr($value, 1, -1);
        }

        return $value;
    }
}


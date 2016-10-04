<?php namespace Redsys\Messages;

class Messages
{
    /**
     * @var array
     */
    private static $messages = array();

    /**
     * @return array
     */
    public static function getAll()
    {
        return self::load();
    }

    /**
     * @param  string $code
     * @return string
     */
    public static function getByCode($code)
    {
        self::load();

        if (array_key_exists($code, self::$messages)) {
            return self::$messages[$code];
        }
    }

    /**
     * @param  string $exp
     * @return array
     */
    public static function getByExp($exp)
    {
        self::load();

        $exp = str_replace('/', '\\/', $exp);

        return array_filter(self::$messages, function ($value) use ($exp) {
            return preg_match('/'.$exp.'/', $value['code']);
        });
    }

    /**
     * @return array
     */
    private static function load()
    {
        if (self::$messages) {
            return self::$messages;
        }

        foreach (glob(__DIR__.'/Messages/*.php') as $file) {
            self::loadArray(require $file);
        }

        return self::$messages;
    }

    /**
     * @param  array $array
     * @return null
     */
    private static function loadArray(array $array)
    {
        foreach ($array as $key => $value) {
            if (strstr($key, '-')) {
                self::loadRange($key, $value);
            } else {
                self::$messages[$key] = $value;
            }
        }
    }

    /**
     * @param  string $key
     * @param  array  $value
     * @return null
     */
    private static function loadRange($key, $value)
    {
        $prefix = preg_match('/^[^0-9\-]+/', $key, $prefix) ? $prefix[0] : '';

        list($first, $last) = explode('-', str_replace($prefix, '', $key));

        foreach (range($first, $last) as $key) {
            $value['code'] = $key = $prefix.sprintf('%04d', $key);
            self::$messages[$key] = $value;
        }
    }
}

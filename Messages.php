<?php namespace Redsys\Messages;

class Messages
{
    /**
     * @var array
     */
    private static $messages = [];

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

        $files = glob(__DIR__.'/Messages/*.php');

        foreach ($files as $file) {
            self::$messages = array_merge(self::$messages, require $file);
        }

        return self::$messages;
    }
}

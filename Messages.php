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
     *
     * @return array|null
     */
    public static function getByCode($code)
    {
        self::load();

        if (preg_match('/^[0-9]+$/', $code)) {
            $code = (int)$code;
        }

        if (isset(self::$messages[$code])) {
            return self::$messages[$code];
        }
    }

    /**
     * @param  string $exp
     *
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
            self::$messages += require $file;
        }

        return self::$messages;
    }
}

<?php
class Counter
{
    static $count = 0;
    static function inc()
    {
        self::$count++;
    }
}
Counter::inc();
Counter::inc();
echo Counter::$count;
?>

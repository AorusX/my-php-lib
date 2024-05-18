<?php

namespace MyPhpLib;

class Encoder {
    public static function encode($string) {
        return base64_encode($string);
    }

    public static function decode($encodedString) {
        return base64_decode($encodedString);
    }
}

?>
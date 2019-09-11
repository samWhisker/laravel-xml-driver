<?php

namespace SamWhisker\LaravelXmlDriver;


class Feed
{
    public static $feed;

    /*
        Chain methods
    */
    public static function orderBy(string $id){
        static::$feed->count = $id;
        return new static;
    }
    public static function limit(string $id){
        static::$feed->limit = $id;
        return new static;
    }
    public static function where(string $object, string $term){
        static::$feed->id = $term;
        return new static;      
    }

    /*
        Return data
    */
    public static function get(){
        return static::$feed;
    }

    public static function find(string $term){
        static::$feed->term = $term;
        return static::$feed;
    }

}

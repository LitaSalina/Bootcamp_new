<?php

class HumorRepository
{
    public static function getHumor(): array
    {
        $query =DB::$connection->query("SELECT * FROM humor");
        $output = [];
        while ($joke = $query->fetchObject('Joke')) {
            
            $output[] = $joke;
    }
        
        return $output;

    }
    public static function getJoke(int $id): ?Joke {

        $query = DB::$connection->prepare("SELECT * FROM humor WHERE id = :id");

        $query->execute(['id' => $id]);

        $joke = $query ->fetchObject('Joke');

        if (!$joke) {
            return null;
        }

        return $joke;
    } 
}
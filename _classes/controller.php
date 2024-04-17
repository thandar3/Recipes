<?php
    class Recipe{

       public function connectJson(){
        $json_data = file_get_contents("./jsons/thingyan.json");
        $recipes = json_decode($json_data,true);
        return $recipes;
       }

       public function connectDesertJson(){
        $json_data = file_get_contents("./jsons/desert.json");
        $recipes = json_decode($json_data,true);
        return $recipes;
       }

       public function connectBurmeseJson(){
        $json_data = file_get_contents("./jsons/burmese.json");
        $recipes = json_decode($json_data,true);
        return $recipes;
       }
    }

    $Recipe = new Recipe();
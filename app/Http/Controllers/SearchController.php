<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Allnews;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Определим сообщение, которое будет отображаться, если ничего не найдено 
        // или поисковая строка пуста
        $error = ['error' => 'No results found, please try with different keywords.'];

        // Удостоверимся, что поисковая строка есть
        if($request->has('q')) {

            // Используем синтаксис Laravel Scout для поиска по таблице products.
            $array1 = Event::search($request->get('q'))->get();
            $array2 = Allnews::search($request->get('q'))->get();
            
            $posts = array_merge ([$array1], [$array2]);

            // Если есть результат есть, вернем его, если нет  - вернем сообщение об ошибке.
            return isset($posts)  ? $posts : $error;
                
        }

        // Вернем сообщение об ошибке, если нет поискового запроса
        return $error;
    }
}

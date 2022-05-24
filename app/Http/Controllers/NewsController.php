<?php

// Логика создания новостей

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNewsRequest;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::get(); // достаём из базы записи
        return view('news.index', compact('news')); // Отрисовываем шаблон странички с новостями. Compact - передаёт компактный массив по переменной 'news'
    }

    public function create()
    {
        $categories = Category::all(); // достаём категории
        return view('news.create', compact('categories')); // Отрисовываем шаблон страницы создания новости, и передаём в компактом массиве под переменной 'categories'
    }

    public function store(StoreNewsRequest $request) // Метод принимает свойством класс с валидацией содержимого
    {
        $data = $request->except('image'); // Возвращает массив с проверенными данными в переменную $data кроме image
        $imagePath = $request->file('image')->store('news', 'public'); // Из проверенных данных берём файл, указанный в поле image и вызываем метод сохранения файл. Метод возвращает путь до сохраненного файла
        $news = News::create($data + ['image' => $imagePath]); // Создаёем новость с проверенными данными из формы
        return redirect("/news/$news->id"); // перенаправляем пользователя на страницу с созданной новостью
    }

    public function show(News $news) // Показывает одну новость, переменная с классом в аргументах ищет запись в базе по первичному ключу
    { 
       return view('news.show', compact('news')); // // Отрисовываем шаблон странички с новостью. Compact - передаёт компактный массив по переменной 'news'
    }
}


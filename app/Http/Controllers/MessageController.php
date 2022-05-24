<?php
// Контроллер формы обратной связи
namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store() 
    {
        $data = request()->validate([   // Проводит проверку содержимого отправленной формы
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);

        Message::create($data); // Записывает в базу данные с формы

        return redirect('/contact')->with('Success', 'Ежжи!'); // В случае успеха возвращает на ту же страницу с сообщением
    }
}

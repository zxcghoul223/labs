<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function n1()
    {
        $name = 'Иван';
        $age = 25;
        $salary = 50000;
        
        return view('user.1', compact('name', 'age', 'salary'));
    }
    
    public function n2()
    {
        $cssClass = 'highlight';
        return view('user.2', compact('cssClass'));
    }
    
    public function n3()
    {
        $value1 = 'Первый инпут';
        $value2 = 'Второй инпут';
        $value3 = 'Третий инпут';
        
        return view('user.3', compact('value1', 'value2', 'value3'));
    }
    
    public function n4()
    {
        $colorStyle = 'color: red; font-size: 20px;';
        return view('user.4', compact('colorStyle'));
    }
    
    public function n5()
    {
        $text = 'Перейти на сайт';
        $href = 'https://example.com';
        
        return view('user.5', compact('text', 'href'));
    }
    
    public function n6()
    {
        return view('user.6');
    }
    
    public function n7()
    {
        $employee = [
            'name' => 'Анна Смирнова',
            'age' => 28,
            'salary' => 65000
        ];
        
        return view('user.7', compact('employee'));
    }
    
    public function n8()
    {
        $arr = [10, 20, 30, 40, 50, 60];
        return view('user.8', compact('arr'));
    }
    
    public function n9()
    {
        $city = null; 
        return view('user.9', compact('city'));
    }
    
    public function n10()
    {
        $location = [
            'country' => null,
            'city' => null
        ];
        
        return view('user.10', compact('location'));
    }
    
    public function n11()
    {
        $year = null;
        $month = null;
        $day = null;
        
        return view('user.11', compact('year', 'month', 'day'));
    }
    
    public function n12()
    {
        $str = '<b>Жирный текст</b> <i>курсив</i> <u>подчеркнутый</u>';
        return view('user.12', compact('str'));
    }
    
    public function n13()
    {
        return view('user.13');
    }
    
    public function n14()
    {
        $age = 20;
        return view('user.14', compact('age'));
    }
    
    public function n15()
    {
        $age = 16;
        return view('user.15', compact('age'));
    }
    
    public function n16()
    {
        $age = 18;
        return view('user.16', compact('age'));
    }
    
    public function n17()
    {
        $age = 15;
        return view('user.17', compact('age'));
    }
    
    public function n18()
    {
        $numbers = [10, 20, 30, 40];
        return view('user.18', compact('numbers'));
    }
    
    public function n19()
    {
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        return view('user.19', compact('numbers'));
    }
    
    public function n20()
    {
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        return view('user.20', compact('numbers'));
    }
    
    public function n21()
    {
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        return view('user.21', compact('numbers'));
    }
    
    public function n22()
    {
        $strings = ['яблоко', 'банан', 'апельсин', 'виноград'];
        return view('user.22', compact('strings'));
    }
    
    public function n23()
    {
        $strings = ['яблоко', 'банан', 'апельсин', 'виноград'];
        return view('user.23', compact('strings'));
    }
    public function n24()
    {
        $numbers = [1,2,3,4,5,6,7,8,9,10];
        return view('user.24', compact('numbers'));
    }
    public function n25()
    {
        $data = [1,2,3,4,5];  // поменяйте на число, например 42, для проверки
        return view('user.25', compact('data'));
    }
    public function n26()
    {
        $matrix = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
            ];
        return view('user.26', compact('matrix'));
    }

    public function n27()
    {
    $employees = [
        ['name' => 'user1', 'surname' => 'surname1', 'salary' => 1000],
        ['name' => 'user2', 'surname' => 'surname2', 'salary' => 2000],
        ['name' => 'user3', 'surname' => 'surname3', 'salary' => 3000],
        ];
        return view('user.27', compact('employees'));
    }
    public function n28()
    {
        $employees = [
            ['name' => 'user1', 'surname' => 'surname1', 'salary' => 1000],
            ['name' => 'user2', 'surname' => 'surname2', 'salary' => 2000],
            ['name' => 'user3', 'surname' => 'surname3', 'salary' => 3000],
    ];
        return view('user.28', compact('employees'));
    }
    public function n29()
    {
        $users = ['Иван', 'Петр', 'Сергей'];  
        return view('user.29', compact('users'));
    }
    public function n30()
    {
        $items = ['Первый', 'Второй', 'Третий', 'Четвертый', 'Пятый'];
        return view('user.30', compact('items'));
    }
    public function n31()
    {
        $items = ['Первый', 'Второй', 'Третий', 'Четвертый', 'Пятый'];
        return view('user.31', compact('items'));
    }
    public function n32()
    {
        $items = ['Первый', 'Второй', 'Третий', 'Четвертый', 'Пятый'];
        return view('user.32', compact('items'));
    }
    public function n33()
    {
        $numbers = [10, 20, 30, 40, 50, 60];
        return view('user.33', compact('numbers'));
    }
    public function n34()
    {
        $numbers = [5, 8, 3, 0, 7, 2, 9];
        return view('user.34', compact('numbers'));
    }
    public function n35()
    {
        $numbers = [5, 0, 8, 3, 0, 7, 2, 0, 9];
        return view('user.35', compact('numbers'));
    }
    public function n36()
    {
        return view('user.36');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class QueryBuilder extends Controller
{
    
    public function pervoe()
    {
        $users = DB::table('users')->get();
        return view('db.1', compact('users'));
    }
    
    public function vtoroe()
    {
        $users = DB::table('users')->get();
        return view('db.2', compact('users'));
    }
    
    public function trete()
    {
        $users = DB::table('users')->get();
        return view('db.3', compact('users'));
    }
    
    public function chet()
    {
        $sql = DB::table('users')->where('id', '!=', 3)->toSql();
        $users = DB::table('users')->where('id', '!=', 3)->get();
        return view('db.4', compact('sql', 'users'));
    }
    
    public function pyt()
    {
        $start = microtime(true);
        $users = DB::table('users')->where('id', '!=', 3)->get();
        $time = microtime(true) - $start;
        return view('db.5', compact('time', 'users'));
    }
     
    public function shest()
    {
        $users = DB::table('users')->select('name', 'email')->get();
        return view('db.6', compact('users'));
    }
       
    public function sem()
    {
        $users = DB::table('users')->select('name', 'email as user_email')->get();
        return view('db.7', compact('users'));
    }
     
    public function vosem()
    {
        $users = DB::table('users')->where('age', 30)->get();
        return view('db.8', compact('users'));
    }
    
    public function devyt()
    {
        $users = DB::table('users')->where('age', '!=', 30)->get();
        return view('db.9', compact('users'));
    }
     
    public function desyt()
    {
        $users = DB::table('users')->where('age', '>', 30)->get();
        return view('db.10', compact('users'));
    }
    
    public function odinadin()
    {
        $users = DB::table('users')->where('age', '<', 30)->get();
        return view('db.11', compact('users'));
    }
     
    public function dvenadcat()
    {
        $users = DB::table('users')->where('age', '<=', 30)->get();
        return view('db.12', compact('users'));
    }
     
    public function trinadcat()
    {
        $users = DB::table('users')->whereBetween('age', [20, 30])->get();
        return view('db.13', compact('users'));
    }
    
    public function chetyrnadcat()
    {
        $users = DB::table('users')->where('age', 30)->orWhere('id', '>', 4)->get();
        return view('db.14', compact('users'));
    }
    
    public function pyatnadcat()
    {
        $users = DB::table('users')->where('age', 30)->orWhere('salary', 500)->orWhere('id', '>', 4)->get();
        return view('db.15', compact('users'));
    }
    
    public function shestnadcat()
    {
        $users = DB::table('users')->where('salary', 500)->orWhereBetween('age', [20, 30])->get();
        return view('db.16', compact('users'));
    }
    
    public function semnadcat()
    {
        $users = DB::table('users')->whereBetween('age', [20, 30])->orWhereBetween('salary', [400, 800])->get();
        return view('db.17', compact('users'));
    }
    
    public function vosemnadcat()
    {
        $user = DB::table('users')->where('id', 3)->first();
        return view('db.18', compact('user'));
    }
     
    public function devyatnadcat()
    {
        $user = DB::table('users')->where('id', 3)->first();
        return view('db.19', compact('user'));
    }
     
    public function dvadcat()
    {
        $email = DB::table('users')->where('id', 3)->value('email');
        return view('db.20', compact('email'));
    }
     
    public function dvadcatodin()
    {
        $email = DB::table('users')->where('id', 3)->value('email');
        return view('db.21', compact('email'));
    }
       
    public function dvadcatdva()
    {
        $names = DB::table('users')->pluck('name');
        return view('db.22', compact('names'));
    }
      
    public function dvadcatri()
    {
        $names = DB::table('users')->pluck('name');
        return view('db.23', compact('names'));
    }
      
    public function dvadcatchet()
    {
        $users = DB::table('users')->whereBetween('age', [30, 40])->get();
        return view('db.24', compact('users'));
    }
     
    public function dvadcatpyat()
    {
        $users = DB::table('users')->whereNotBetween('age', [30, 40])->get();
        return view('db.25', compact('users'));
    }
      
    public function dvadcatshest()
    {
        $users = DB::table('users')->whereIn('id', [1, 2, 3, 5])->get();
        return view('db.26', compact('users'));
    }
    
    public function dvadcatsem()
    {
        $users = DB::table('users')->whereNotIn('id', [1, 2, 3, 5])->get();
        return view('db.27', compact('users'));
    }
     
    public function dvadcatvosem()
    {
        $user = DB::table('users')->where('id', 3)->first();
        return view('db.28', compact('user'));
    }
    
    public function dvadcatdevyt()
    {
        $user = DB::table('users')->where('name', 'john')->first();
        return view('db.29', compact('user'));
    }
     
    public function tridcat()
    {
        $user = DB::table('users')->where('email', 'john@mail.com')->first();
        return view('db.30', compact('user'));
    }
    
    public function tridcatodin()
    {
        $user = DB::table('users')->where('id', 3)->where('age', 20)->first();
        return view('db.31', compact('user'));
    }
    
    public function tridcatdva()
    {
        $users = DB::table('users')->where('id', 3)->orWhere('age', 20)->get();
        return view('db.32', compact('users'));
    }
    
    public function tridcatri()
    {
        $users = DB::table('users')->orderBy('age', 'asc')->get();
        return view('db.33', compact('users'));
    }
    
    public function tridcatchet()
    {
        $users = DB::table('users')->orderBy('salary', 'desc')->get();
        return view('db.34', compact('users'));
    }
    
    public function tridcatpyat()
    {
        $users = DB::table('users')->orderBy('created_at', 'asc')->get();
        return view('db.35', compact('users'));
    }
     
    public function tridcatshest()
    {
        $users = DB::table('users')->orderBy('created_at', 'desc')->get();
        return view('db.36', compact('users'));
    }
    
    public function tridcatsem()
    {
        $users = DB::table('users')->where('age', '>', 30)->orderBy('created_at', 'asc')->get();
        return view('db.37', compact('users'));
    }
    
    public function tridcatvosem()
    {
        $users = DB::table('users')->orderBy('updated_at', 'desc')->get();
        return view('db.38', compact('users'));
    }
     
    public function tridcatdevyt()
    {
        $users = DB::table('users')->where('age', '>', 30)->orderBy('updated_at', 'asc')->get();
        return view('db.39', compact('users'));
    }
    
    public function sorok()
    {
        $users = DB::table('users')->inRandomOrder()->get();
        return view('db.40', compact('users'));
    }
     
    public function sorokodin()
    {
        $user = DB::table('users')->inRandomOrder()->first();
        return view('db.41', compact('user'));
    }
    
    public function sorokdva()
    {
        $users = DB::table('users')->whereBetween('age', [20, 30])->inRandomOrder()->get();
        $randomUser = DB::table('users')->whereBetween('age', [20, 30])->inRandomOrder()->first();
        return view('db.42', compact('users', 'randomUser'));
    }
    
    public function soroktri()
    {
        $users = DB::table('users')->limit(3)->get();
        return view('db.43', compact('users'));
    }
    
    public function sorokchet()
    {
        $users = DB::table('users')->where('age', 30)->limit(3)->get();
        return view('db.44', compact('users'));
    }
      
    public function sorokpyat()
    {
        $users = DB::table('users')->skip(4)->limit(10)->get();
        return view('db.45', compact('users'));
    }
       
    public function sorokshest()
    {
        $users = DB::table('users')->where('age', 30)->skip(2)->limit(10)->get();
        return view('db.46', compact('users'));
    }
       
    public function soroksem()
    {
        $id = DB::table('users')->insertGetId([
            'first_name' => 'Новый',
            'last_name' => 'Пользователь',
            'name' => 'newuser',
            'email' => 'new@example.com',
            'password' => bcrypt('password'),
            'phone' => '+79000000000',
            'address' => 'ул. Новая, д. 1',
            'birth_date' => '2000-01-01',
            'age' => 25,
            'salary' => 30000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return view('db.47', compact('id'));
    }
       
    public function sorokvosem()
    {
        $id = DB::table('users')->insertGetId([
            'first_name' => 'User',
            'last_name' => 'WithID',
            'name' => 'userid',
            'email' => 'userid@example.com',
            'password' => bcrypt('password'),
            'phone' => '+79001111111',
            'address' => 'ул. Тестовая, д. 10',
            'birth_date' => '1995-05-15',
            'age' => 28,
            'salary' => 40000,
            'created_at' => now(),
            'updated_at' => now(),
            ]);
            return view('db.48', compact('id'));
    }
    
    public function sorokdevyt()
    {
        DB::table('users')->insert([
        [
            'first_name' => 'Mass1', 'last_name' => 'One', 'name' => 'mass1', 'email' => 'mass1@example.com',
            'password' => bcrypt('pass'), 'phone' => '+79001111111', 'address' => 'ул. 1', 'birth_date' => '1990-01-01',
            'age' => 20, 'salary' => 20000, 'created_at' => now(), 'updated_at' => now()
        ],
        [
            'first_name' => 'Mass2', 'last_name' => 'Two', 'name' => 'mass2', 'email' => 'mass2@example.com',
            'password' => bcrypt('pass'), 'phone' => '+79002222222', 'address' => 'ул. 2', 'birth_date' => '1991-01-01',
            'age' => 21, 'salary' => 21000, 'created_at' => now(), 'updated_at' => now()
        ],
        [
            'first_name' => 'Mass3', 'last_name' => 'Three', 'name' => 'mass3', 'email' => 'mass3@example.com',
            'password' => bcrypt('pass'), 'phone' => '+79003333333', 'address' => 'ул. 3', 'birth_date' => '1992-01-01',
            'age' => 22, 'salary' => 22000, 'created_at' => now(), 'updated_at' => now()
        ],
        ]);
        $message = "Вставлено 3 пользователя";
        return view('db.49', compact('message'));
    }
    
    public function pyatdesyat()
    {
        DB::table('users')->where('id', 5)->update([
            'name' => 'Измененный пользователь',
            'updated_at' => now(),
        ]);
        $message = "Пользователь с ID=5 обновлен";
        return view('db.50', compact('message'));
    }

    public function pyatdesyatodin()
    {
        DB::table('users')->where('age', 30)->update(['salary' => 500]);
        $message = "Обновлены пользователи с возрастом 30";
        return view('db.51', compact('message'));
    }

    public function pyatdesyatdva()
    {
        DB::table('users')->where('id', 1)->increment('age');
        $message = "Возраст пользователя ID=1 увеличен на 1";
        return view('db.52', compact('message'));
    }

    public function pyatdesyatri()
    {
        DB::table('users')->where('age', 30)->increment('salary', 100);
        $message = "Зарплата увеличена на 100 у пользователей с возрастом 30";
        return view('db.53', compact('message'));
    }

    public function pyatdesyatchet()
    {
        DB::table('users')->where('id', 5)->delete();
        $message = "Пользователь с ID=5 удален";
        return view('db.54', compact('message'));
    }

    public function pyatdesyatpyat()
    {
        DB::table('users')->delete();
        $message = "Все пользователи удалены";
        return view('db.55', compact('message'));
    }
    
    public function pyatdesyatshest()
    {
        \Illuminate\Support\Facades\Schema::dropIfExists('cities');
        \Illuminate\Support\Facades\Schema::create('cities', function ($table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        
        $users = DB::table('users')->get();
        foreach ($users as $user) {
            DB::table('cities')->insert([
                'name' => 'Город ' . $user->id,
                'user_id' => $user->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        $message = "Таблица cities создана и заполнена тестовыми данными";
        return view('db.56', compact('message'));
    }
    
    public function pyatdesyatsem()
    {
        $users = DB::table('users')
            ->leftJoin('cities', 'users.id', '=', 'cities.user_id')
            ->select('users.*', 'cities.name as city')
            ->get();
        return view('db.57', compact('users'));
    }
}
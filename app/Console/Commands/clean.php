<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $user = new User();
        $user->name = 'Raheel Anwaar';
        $user->email = 'raheelanwaar0316@gmail.com';
        $user->phone = '0000 0000000';
        $user->address = '318 j.b';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = 'Nabeel Anwaar';
        $user->email = 'nabeelanwaar@gmail.com';
        $user->phone = '0000 0000000';
        $user->address = '318 j.b';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->save();

    }
}

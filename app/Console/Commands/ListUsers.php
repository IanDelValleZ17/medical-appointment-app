<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ListUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = \App\Models\User::all(['id', 'name', 'email']);
        
        if ($users->isEmpty()) {
            $this->info('No hay usuarios en la base de datos.');
            return 0;
        }

        $this->info('Usuarios encontrados:');
        $this->table(
            ['ID', 'Nombre', 'Email'],
            $users->map(function ($user) {
                return [$user->id, $user->name, $user->email];
            })->toArray()
        );

        return 0;
    }
}

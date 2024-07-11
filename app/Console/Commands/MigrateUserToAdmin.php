<?php

namespace App\Console\Commands;

use App\Models\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MigrateUserToAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:user-to-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to migrate all user to admin except cao phan sang';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $superAdmin = User::where('role', User::SUPER_ADMIN)->where('email', 'caophansang94@gmail.com')->first();

        DB::beginTransaction();
        try {
            if ($superAdmin) {
                User::where('id', '<>', $superAdmin->id)->update(['role' => User::ADMIN]);
            }
            DB::commit();
            $this->info('update successs');
        } catch (Exception $e) {
            DB::rollBack();
            $this->error($e);
        }
    }
}

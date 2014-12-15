<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->addUsers();
	}

    private function addUsers()
    {
        DB::table('users')->insert([
            'name' => 'Dave',
            'email' => 'dave@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Dave ....');

        DB::table('users')->insert([
            'name' => 'Bob',
            'email' => 'bob@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Bob ....');

        DB::table('users')->insert([
            'name' => 'Jim',
            'email' => 'jim@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Jim ....');

        DB::table('users')->insert([
            'name' => 'Joe',
            'email' => 'joe@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Joe ....');

        DB::table('users')->insert([
            'name' => 'Jack',
            'email' => 'jack@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Jack ....');

        DB::table('users')->insert([
            'name' => 'Mitch',
            'email' => 'mitch@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Mitch ....');

        DB::table('users')->insert([
            'name' => 'David',
            'email' => 'david@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('David ....');

        DB::table('users')->insert([
            'name' => 'Paul',
            'email' => 'paul@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Paul ....');

        DB::table('users')->insert([
            'name' => 'Rauf',
            'email' => 'rauf@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Rauf ....');

        DB::table('users')->insert([
            'name' => 'Salim',
            'email' => 'salim@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Salim ....');

        DB::table('users')->insert([
            'name' => 'Imran',
            'email' => 'imran@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Imran ....');

        DB::table('users')->insert([
            'name' => 'Irfan',
            'email' => 'irfan@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Irfan ....');

        DB::table('users')->insert([
            'name' => 'Vincent',
            'email' => 'vincent@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Vincent ....');

        DB::table('users')->insert([
            'name' => 'Kenny',
            'email' => 'kenny@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Kenny ....');

        DB::table('users')->insert([
            'name' => 'Karen',
            'email' => 'karen@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Karen ....');

        DB::table('users')->insert([
            'name' => 'Cris',
            'email' => 'cris@gmail.com',
            'password' => Hash::make('311311')
        ]);

        $this->command->info('Cris ....');

        $this->command->info('Seeding referrals ....');

        DB::table('user_referrals')->insert([
            'referral_id' => 1,
            'user_id' => 2,
            'email' => '',
            'tries' => 0
        ]);

        DB::table('user_referrals')->insert([
            'referral_id' => 1,
            'user_id' => 3,
            'email' => '',
            'tries' => 0
        ]);

        DB::table('user_referrals')->insert([
            'referral_id' => 2,
            'user_id' => 4,
            'email' => '',
            'tries' => 0
        ]);

        DB::table('user_referrals')->insert([
            'referral_id' => 2,
            'user_id' => 5,
            'email' => '',
            'tries' => 0
        ]);

        DB::table('user_referrals')->insert([
            'referral_id' => 3,
            'user_id' => 6,
            'email' => '',
            'tries' => 0
        ]);

        DB::table('user_referrals')->insert([
            'referral_id' => 3,
            'user_id' => 7,
            'email' => '',
            'tries' => 0
        ]);

        DB::table('user_referrals')->insert([
            'referral_id' => 4,
            'user_id' => 8,
            'email' => '',
            'tries' => 0
        ]);

        DB::table('user_referrals')->insert([
            'referral_id' => 4,
            'user_id' => 9,
            'email' => '',
            'tries' => 0
        ]);

        DB::table('user_referrals')->insert([
            'referral_id' => 5,
            'user_id' => 10,
            'email' => '',
            'tries' => 0
        ]);

        DB::table('user_referrals')->insert([
            'referral_id' => 5,
            'user_id' => 11,
            'email' => '',
            'tries' => 0
        ]);

        $this->command->info('Done ....');
    }

}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(UserDepartmentsTableSeeder::class);
        $this->call(ContributionTypesTableSeeder::class);
        $this->call(ContributionsTableSeeder::class);
        $this->call(WithdrawalsTableSeeder::class);
        $this->call(RollOversTableSeeder::class);
        $this->call(InterestsTableSeeder::class);
    }
}

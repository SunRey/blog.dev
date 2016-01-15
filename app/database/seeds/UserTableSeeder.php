<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        $user1 = new User();
        $user1->first_name = 'Jo';
        $user1->last_name = 'Adminstrator';
        $user1->username = 'admin';
        $user1->email = 'admin@blog.com';
        $user1->password = $_ENV['USER_PASS'];
        $user1->zipcode = $_ENV['USER_ZIPCODE'];
        $user1->save();

        $user2 = new User();
        $user2->first_name = 'Mary';
        $user2->last_name = 'User';
        $user2->username = 'MaryMe';
        $user2->email = 'user@blog.com';
        $user2->password = $_ENV['USER_PASS'];
        $user2->zipcode = $_ENV['USER_ZIPCODE'];
        $user2->save();

        $user3 = new User();
        $user3->first_name = 'Steve';
        $user3->last_name = 'Blogger';
        $user3->username = 'sBlogger';
        $user3->email = 'BlogS@blog.com';
        $user3->password = $_ENV['USER_PASS'];
        $user3->zipcode = $_ENV['USER_ZIPCODE'];
        $user3->save();

        $user4 = new User();
        $user4->first_name = 'Sarah';
        $user4->last_name = 'Nobody';
        $user4->username = 'SNObody';
        $user4->email = 'disMail@blog.com';
        $user4->password = $_ENV['USER_PASS'];
        $user4->zipcode = $_ENV['USER_ZIPCODE'];
        $user4->save();
    }
}
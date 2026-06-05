<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserExtra;
use App\Models\BvLog;
use App\Models\Transaction;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\UserLogin;
use App\Models\Plan;
use App\Constants\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Clear existing dummy tables (Admin is untouched)
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        UserExtra::truncate();
        BvLog::truncate();
        Transaction::truncate();
        Deposit::truncate();
        Withdrawal::truncate();
        UserLogin::truncate();
        Plan::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 2. Seed 5 Plans
        $plans = [
            [
                'id' => 1,
                'name' => 'Bronze Plan',
                'price' => 1000,
                'bv' => 10,
                'ref_com' => 100,
                'tree_com' => 5,
                'status' => Status::ENABLE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Silver Plan',
                'price' => 5000,
                'bv' => 50,
                'ref_com' => 500,
                'tree_com' => 25,
                'status' => Status::ENABLE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Gold Plan',
                'price' => 10000,
                'bv' => 100,
                'ref_com' => 1000,
                'tree_com' => 50,
                'status' => Status::ENABLE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Platinum Plan',
                'price' => 25000,
                'bv' => 250,
                'ref_com' => 2500,
                'tree_com' => 125,
                'status' => Status::ENABLE,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'VIP Plan',
                'price' => 50000,
                'bv' => 500,
                'ref_com' => 5000,
                'tree_com' => 250,
                'status' => Status::ENABLE,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }

        // 3. Seed 11 Users in a Binary Tree
        $usersData = [
            [
                'id' => 1, 'username' => 'username', 'email' => 'rootuser@username.com', 'firstname' => 'Root', 'lastname' => 'User',
                'ref_by' => 0, 'pos_id' => 0, 'position' => 0, 'plan_id' => 5, 'total_invest' => 50000, 'balance' => 12500
            ],
            [
                'id' => 2, 'username' => 'johndoe', 'email' => 'john.doe@example.com', 'firstname' => 'John', 'lastname' => 'Doe',
                'ref_by' => 1, 'pos_id' => 1, 'position' => 1, 'plan_id' => 3, 'total_invest' => 10000, 'balance' => 2500
            ],
            [
                'id' => 3, 'username' => 'janesmith', 'email' => 'jane.smith@example.com', 'firstname' => 'Jane', 'lastname' => 'Smith',
                'ref_by' => 1, 'pos_id' => 1, 'position' => 2, 'plan_id' => 4, 'total_invest' => 25000, 'balance' => 4800
            ],
            [
                'id' => 4, 'username' => 'michaelj', 'email' => 'michael.j@example.com', 'firstname' => 'Michael', 'lastname' => 'Jackson',
                'ref_by' => 2, 'pos_id' => 2, 'position' => 1, 'plan_id' => 1, 'total_invest' => 1000, 'balance' => 300
            ],
            [
                'id' => 5, 'username' => 'emilyb', 'email' => 'emily.b@example.com', 'firstname' => 'Emily', 'lastname' => 'Brown',
                'ref_by' => 2, 'pos_id' => 2, 'position' => 2, 'plan_id' => 2, 'total_invest' => 5000, 'balance' => 1200
            ],
            [
                'id' => 6, 'username' => 'davidw', 'email' => 'david.w@example.com', 'firstname' => 'David', 'lastname' => 'Wright',
                'ref_by' => 3, 'pos_id' => 3, 'position' => 1, 'plan_id' => 2, 'total_invest' => 5000, 'balance' => 1500
            ],
            [
                'id' => 7, 'username' => 'sarahm', 'email' => 'sarah.m@example.com', 'firstname' => 'Sarah', 'lastname' => 'Miller',
                'ref_by' => 3, 'pos_id' => 3, 'position' => 2, 'plan_id' => 3, 'total_invest' => 10000, 'balance' => 3200
            ],
            [
                'id' => 8, 'username' => 'jamesd', 'email' => 'james.d@example.com', 'firstname' => 'James', 'lastname' => 'Davis',
                'ref_by' => 4, 'pos_id' => 4, 'position' => 1, 'plan_id' => 1, 'total_invest' => 1000, 'balance' => 450
            ],
            [
                'id' => 9, 'username' => 'jessicag', 'email' => 'jessica.g@example.com', 'firstname' => 'Jessica', 'lastname' => 'Green',
                'ref_by' => 4, 'pos_id' => 4, 'position' => 2, 'plan_id' => 1, 'total_invest' => 1000, 'balance' => 200
            ],
            [
                'id' => 10, 'username' => 'robertm', 'email' => 'robert.m@example.com', 'firstname' => 'Robert', 'lastname' => 'Martin',
                'ref_by' => 5, 'pos_id' => 5, 'position' => 1, 'plan_id' => 0, 'total_invest' => 0, 'balance' => 0
            ],
            [
                'id' => 11, 'username' => 'karenr', 'email' => 'karen.r@example.com', 'firstname' => 'Karen', 'lastname' => 'Robinson',
                'ref_by' => 5, 'pos_id' => 5, 'position' => 2, 'plan_id' => 0, 'total_invest' => 0, 'balance' => 0
            ]
        ];

        foreach ($usersData as $ud) {
            User::create([
                'id' => $ud['id'],
                'username' => $ud['username'],
                'email' => $ud['email'],
                'firstname' => $ud['firstname'],
                'lastname' => $ud['lastname'],
                'ref_by' => $ud['ref_by'],
                'pos_id' => $ud['pos_id'],
                'position' => $ud['position'],
                'plan_id' => $ud['plan_id'],
                'total_invest' => $ud['total_invest'],
                'balance' => $ud['balance'],
                'password' => Hash::make('password'),
                'dial_code' => '91',
                'country_code' => 'IN',
                'mobile' => '98765432' . $ud['id'],
                'country_name' => 'India',
                'city' => 'Mumbai',
                'state' => 'Maharashtra',
                'zip' => '400001',
                'address' => '123 Business Street',
                'status' => Status::USER_ACTIVE,
                'ev' => Status::VERIFIED,
                'sv' => Status::VERIFIED,
                'kv' => Status::KYC_VERIFIED,
                'profile_complete' => Status::YES,
                'created_at' => now()->subDays(15),
                'updated_at' => now(),
            ]);
        }

        // 4. Seed UserExtra values
        $userExtras = [
            ['user_id' => 1, 'paid_left' => 4, 'paid_right' => 5, 'free_left' => 1, 'free_right' => 1, 'bv_left' => 650, 'bv_right' => 800],
            ['user_id' => 2, 'paid_left' => 2, 'paid_right' => 2, 'free_left' => 0, 'free_right' => 1, 'bv_left' => 200, 'bv_right' => 250],
            ['user_id' => 3, 'paid_left' => 2, 'paid_right' => 2, 'free_left' => 1, 'free_right' => 0, 'bv_left' => 250, 'bv_right' => 200],
            ['user_id' => 4, 'paid_left' => 1, 'paid_right' => 1, 'free_left' => 0, 'free_right' => 0, 'bv_left' => 10, 'bv_right' => 10],
            ['user_id' => 5, 'paid_left' => 1, 'paid_right' => 1, 'free_left' => 0, 'free_right' => 0, 'bv_left' => 10, 'bv_right' => 10],
            ['user_id' => 6, 'paid_left' => 0, 'paid_right' => 0, 'free_left' => 0, 'free_right' => 0, 'bv_left' => 0, 'bv_right' => 0],
            ['user_id' => 7, 'paid_left' => 0, 'paid_right' => 0, 'free_left' => 0, 'free_right' => 0, 'bv_left' => 0, 'bv_right' => 0],
            ['user_id' => 8, 'paid_left' => 0, 'paid_right' => 0, 'free_left' => 0, 'free_right' => 0, 'bv_left' => 0, 'bv_right' => 0],
            ['user_id' => 9, 'paid_left' => 0, 'paid_right' => 0, 'free_left' => 0, 'free_right' => 0, 'bv_left' => 0, 'bv_right' => 0],
            ['user_id' => 10, 'paid_left' => 0, 'paid_right' => 0, 'free_left' => 0, 'free_right' => 0, 'bv_left' => 0, 'bv_right' => 0],
            ['user_id' => 11, 'paid_left' => 0, 'paid_right' => 0, 'free_left' => 0, 'free_right' => 0, 'bv_left' => 0, 'bv_right' => 0],
        ];

        foreach ($userExtras as $ue) {
            UserExtra::create([
                'user_id' => $ue['user_id'],
                'paid_left' => $ue['paid_left'],
                'paid_right' => $ue['paid_right'],
                'free_left' => $ue['free_left'],
                'free_right' => $ue['free_right'],
                'bv_left' => $ue['bv_left'],
                'bv_right' => $ue['bv_right'],
                'created_at' => now()->subDays(15),
                'updated_at' => now(),
            ]);
        }

        // 5. Seed BvLog
        $bvLogs = [
            ['user_id' => 1, 'position' => 1, 'amount' => 300, 'trx_type' => '+', 'details' => 'Earned BV from John Doe and team purchase'],
            ['user_id' => 1, 'position' => 2, 'amount' => 450, 'trx_type' => '+', 'details' => 'Earned BV from Jane Smith and team purchase'],
            ['user_id' => 1, 'position' => 1, 'amount' => 150, 'trx_type' => '-', 'details' => 'Cut BV for Binary Matching Commission'],
            ['user_id' => 1, 'position' => 2, 'amount' => 150, 'trx_type' => '-', 'details' => 'Cut BV for Binary Matching Commission'],
            ['user_id' => 2, 'position' => 1, 'amount' => 100, 'trx_type' => '+', 'details' => 'Earned BV from Michael Jackson purchase'],
            ['user_id' => 2, 'position' => 2, 'amount' => 150, 'trx_type' => '+', 'details' => 'Earned BV from Emily Brown purchase'],
            ['user_id' => 2, 'position' => 1, 'amount' => 50, 'trx_type' => '-', 'details' => 'Cut BV for Binary Matching Commission'],
            ['user_id' => 2, 'position' => 2, 'amount' => 50, 'trx_type' => '-', 'details' => 'Cut BV for Binary Matching Commission'],
            ['user_id' => 3, 'position' => 1, 'amount' => 200, 'trx_type' => '+', 'details' => 'Earned BV from David Wright purchase'],
            ['user_id' => 3, 'position' => 2, 'amount' => 100, 'trx_type' => '+', 'details' => 'Earned BV from Sarah Miller purchase'],
            ['user_id' => 3, 'position' => 1, 'amount' => 80, 'trx_type' => '-', 'details' => 'Cut BV for Binary Matching Commission'],
            ['user_id' => 3, 'position' => 2, 'amount' => 80, 'trx_type' => '-', 'details' => 'Cut BV for Binary Matching Commission'],
        ];

        foreach ($bvLogs as $bl) {
            BvLog::create([
                'user_id' => $bl['user_id'],
                'position' => $bl['position'],
                'amount' => $bl['amount'],
                'trx_type' => $bl['trx_type'],
                'details' => $bl['details'],
                'created_at' => now()->subDays(rand(1, 10)),
                'updated_at' => now(),
            ]);
        }

        // 6. Seed Transactions
        $transactions = [
            // Purchases within 6 days
            ['user_id' => 1, 'amount' => 50000, 'charge' => 0, 'post_balance' => 12500, 'trx_type' => '-', 'remark' => 'purchased_plan', 'details' => 'Purchased VIP Plan', 'days_ago' => 2],
            ['user_id' => 2, 'amount' => 10000, 'charge' => 0, 'post_balance' => 2500, 'trx_type' => '-', 'remark' => 'purchased_plan', 'details' => 'Purchased Gold Plan', 'days_ago' => 3],
            ['user_id' => 4, 'amount' => 1000, 'charge' => 0, 'post_balance' => 300, 'trx_type' => '-', 'remark' => 'purchased_plan', 'details' => 'Purchased Bronze Plan', 'days_ago' => 1],
            ['user_id' => 6, 'amount' => 5000, 'charge' => 0, 'post_balance' => 1500, 'trx_type' => '-', 'remark' => 'purchased_plan', 'details' => 'Purchased Silver Plan', 'days_ago' => 4],

            // Purchases older than 6 days
            ['user_id' => 3, 'amount' => 25000, 'charge' => 0, 'post_balance' => 4800, 'trx_type' => '-', 'remark' => 'purchased_plan', 'details' => 'Purchased Platinum Plan', 'days_ago' => 10],
            ['user_id' => 5, 'amount' => 5000, 'charge' => 0, 'post_balance' => 1200, 'trx_type' => '-', 'remark' => 'purchased_plan', 'details' => 'Purchased Silver Plan', 'days_ago' => 8],
            ['user_id' => 7, 'amount' => 10000, 'charge' => 0, 'post_balance' => 3200, 'trx_type' => '-', 'remark' => 'purchased_plan', 'details' => 'Purchased Gold Plan', 'days_ago' => 9],
            ['user_id' => 8, 'amount' => 1000, 'charge' => 0, 'post_balance' => 450, 'trx_type' => '-', 'remark' => 'purchased_plan', 'details' => 'Purchased Bronze Plan', 'days_ago' => 11],
            ['user_id' => 9, 'amount' => 1000, 'charge' => 0, 'post_balance' => 200, 'trx_type' => '-', 'remark' => 'purchased_plan', 'details' => 'Purchased Bronze Plan', 'days_ago' => 12],

            // Referral commissions
            ['user_id' => 1, 'amount' => 1000, 'charge' => 0, 'post_balance' => 13500, 'trx_type' => '+', 'remark' => 'referral_commission', 'details' => 'Referral Commission from John Doe', 'days_ago' => 3],
            ['user_id' => 1, 'amount' => 2500, 'charge' => 0, 'post_balance' => 16000, 'trx_type' => '+', 'remark' => 'referral_commission', 'details' => 'Referral Commission from Jane Smith', 'days_ago' => 10],
            ['user_id' => 2, 'amount' => 100, 'charge' => 0, 'post_balance' => 2600, 'trx_type' => '+', 'remark' => 'referral_commission', 'details' => 'Referral Commission from Michael Jackson', 'days_ago' => 1],
            ['user_id' => 2, 'amount' => 500, 'charge' => 0, 'post_balance' => 3100, 'trx_type' => '+', 'remark' => 'referral_commission', 'details' => 'Referral Commission from Emily Brown', 'days_ago' => 8],
            ['user_id' => 3, 'amount' => 500, 'charge' => 0, 'post_balance' => 5300, 'trx_type' => '+', 'remark' => 'referral_commission', 'details' => 'Referral Commission from David Wright', 'days_ago' => 4],
            ['user_id' => 3, 'amount' => 1000, 'charge' => 0, 'post_balance' => 6300, 'trx_type' => '+', 'remark' => 'referral_commission', 'details' => 'Referral Commission from Sarah Miller', 'days_ago' => 9],

            // Binary commissions
            ['user_id' => 1, 'amount' => 750, 'charge' => 0, 'post_balance' => 16750, 'trx_type' => '+', 'remark' => 'binary_commission', 'details' => 'Binary Matching Commission', 'days_ago' => 5],
            ['user_id' => 2, 'amount' => 250, 'charge' => 0, 'post_balance' => 3350, 'trx_type' => '+', 'remark' => 'binary_commission', 'details' => 'Binary Matching Commission', 'days_ago' => 3],
            ['user_id' => 3, 'amount' => 400, 'charge' => 0, 'post_balance' => 6700, 'trx_type' => '+', 'remark' => 'binary_commission', 'details' => 'Binary Matching Commission', 'days_ago' => 6],
        ];

        foreach ($transactions as $index => $trx) {
            Transaction::create([
                'user_id' => $trx['user_id'],
                'amount' => $trx['amount'],
                'charge' => $trx['charge'],
                'post_balance' => $trx['post_balance'],
                'trx_type' => $trx['trx_type'],
                'trx' => 'TXN' . strtoupper(uniqid()) . $index,
                'remark' => $trx['remark'],
                'details' => $trx['details'],
                'created_at' => now()->subDays($trx['days_ago']),
                'updated_at' => now()->subDays($trx['days_ago']),
            ]);
        }

        // 7. Seed Deposits
        $depositsData = [
            ['user_id' => 1, 'amount' => 20000, 'charge' => 200, 'status' => 1, 'days_ago' => 12],
            ['user_id' => 1, 'amount' => 30000, 'charge' => 300, 'status' => 1, 'days_ago' => 5],
            ['user_id' => 2, 'amount' => 10000, 'charge' => 100, 'status' => 1, 'days_ago' => 8],
            ['user_id' => 3, 'amount' => 25000, 'charge' => 250, 'status' => 1, 'days_ago' => 11],
            ['user_id' => 4, 'amount' => 1500, 'charge' => 15, 'status' => 1, 'days_ago' => 6],
            ['user_id' => 5, 'amount' => 5000, 'charge' => 50, 'status' => 1, 'days_ago' => 9],
            ['user_id' => 6, 'amount' => 5000, 'charge' => 50, 'status' => 1, 'days_ago' => 7],
            ['user_id' => 7, 'amount' => 10000, 'charge' => 100, 'status' => 1, 'days_ago' => 10],
            ['user_id' => 8, 'amount' => 1000, 'charge' => 10, 'status' => 1, 'days_ago' => 13],
            ['user_id' => 9, 'amount' => 1000, 'charge' => 10, 'status' => 1, 'days_ago' => 14],

            // Pending
            ['user_id' => 2, 'amount' => 2500, 'charge' => 25, 'status' => 2, 'days_ago' => 1],
            ['user_id' => 3, 'amount' => 5000, 'charge' => 50, 'status' => 2, 'days_ago' => 2],
            ['user_id' => 6, 'amount' => 3000, 'charge' => 30, 'status' => 2, 'days_ago' => 1],

            // Rejected
            ['user_id' => 4, 'amount' => 4000, 'charge' => 40, 'status' => 3, 'days_ago' => 4],
            ['user_id' => 5, 'amount' => 6000, 'charge' => 60, 'status' => 3, 'days_ago' => 5],
        ];

        foreach ($depositsData as $index => $dep) {
            Deposit::create([
                'user_id' => $dep['user_id'],
                'method_code' => 1001,
                'amount' => $dep['amount'],
                'method_currency' => 'INR',
                'charge' => $dep['charge'],
                'rate' => 1.00000000,
                'final_amount' => $dep['amount'] + $dep['charge'],
                'detail' => null,
                'btc_amount' => 0,
                'btc_wallet' => '',
                'trx' => 'DEP' . strtoupper(uniqid()) . $index,
                'payment_try' => 1,
                'status' => $dep['status'],
                'from_api' => 0,
                'admin_feedback' => $dep['status'] == 3 ? 'Invalid receipt screenshot' : null,
                'created_at' => now()->subDays($dep['days_ago']),
                'updated_at' => now()->subDays($dep['days_ago'] - 1),
            ]);
        }

        // 8. Seed Withdrawals
        $withdrawalsData = [
            ['user_id' => 1, 'amount' => 5000, 'charge' => 50, 'status' => 1, 'days_ago' => 4],
            ['user_id' => 1, 'amount' => 2000, 'charge' => 20, 'status' => 1, 'days_ago' => 2],
            ['user_id' => 2, 'amount' => 1000, 'charge' => 10, 'status' => 1, 'days_ago' => 3],
            ['user_id' => 3, 'amount' => 3000, 'charge' => 30, 'status' => 1, 'days_ago' => 7],
            ['user_id' => 4, 'amount' => 500, 'charge' => 5, 'status' => 1, 'days_ago' => 1],
            ['user_id' => 5, 'amount' => 1200, 'charge' => 12, 'status' => 1, 'days_ago' => 6],
            ['user_id' => 6, 'amount' => 1500, 'charge' => 15, 'status' => 1, 'days_ago' => 5],
            ['user_id' => 7, 'amount' => 2500, 'charge' => 25, 'status' => 1, 'days_ago' => 8],

            // Pending
            ['user_id' => 2, 'amount' => 800, 'charge' => 8, 'status' => 2, 'days_ago' => 1],
            ['user_id' => 3, 'amount' => 1500, 'charge' => 15, 'status' => 2, 'days_ago' => 0],

            // Rejected
            ['user_id' => 4, 'amount' => 1000, 'charge' => 10, 'status' => 3, 'days_ago' => 3],
            ['user_id' => 5, 'amount' => 2000, 'charge' => 20, 'status' => 3, 'days_ago' => 4],
        ];

        foreach ($withdrawalsData as $index => $wth) {
            Withdrawal::create([
                'form_id' => 1,
                'method_id' => 1,
                'user_id' => $wth['user_id'],
                'amount' => $wth['amount'],
                'currency' => 'INR',
                'rate' => 1.00000000,
                'charge' => $wth['charge'],
                'trx' => 'WTH' . strtoupper(uniqid()) . $index,
                'final_amount' => $wth['amount'] - $wth['charge'],
                'after_charge' => $wth['amount'] - $wth['charge'],
                'withdraw_information' => null,
                'status' => $wth['status'],
                'admin_feedback' => $wth['status'] == 3 ? 'Incorrect bank details' : null,
                'created_at' => now()->subDays($wth['days_ago']),
                'updated_at' => now()->subDays($wth['days_ago'] - 1),
            ]);
        }

        // 9. Seed User logins for Browser, OS, and Country charts
        $browsers = ['Chrome', 'Firefox', 'Safari', 'Edge', 'Opera'];
        $oss = ['Windows 11', 'macOS Sonoma', 'Ubuntu 22.04', 'Android 14', 'iOS 17'];
        $countries = ['India', 'United States', 'United Kingdom', 'Canada', 'Australia'];
        $countryCodes = ['IN', 'US', 'GB', 'CA', 'AU'];

        for ($i = 0; $i < 40; $i++) {
            $countryIndex = rand(0, 4);
            UserLogin::create([
                'user_id' => rand(1, 11),
                'user_ip' => '192.168.1.' . rand(10, 250),
                'city' => 'Metro City',
                'country' => $countries[$countryIndex],
                'country_code' => $countryCodes[$countryIndex],
                'longitude' => '72.8777',
                'latitude' => '19.0760',
                'browser' => $browsers[rand(0, 4)],
                'os' => $oss[rand(0, 4)],
                'created_at' => now()->subDays(rand(0, 29))->subHours(rand(0, 23)),
                'updated_at' => now(),
            ]);
        }
    }
}

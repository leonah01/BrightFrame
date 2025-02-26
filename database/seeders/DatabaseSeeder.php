<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;
use App\Models\Client;
use App\Models\Invoice;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create a test user
        $user = User::firstOrCreate(
            ['email' => 'ldongo@brightframe.co.zw'],
            [
                'name' => 'Leonah Dongo',
                'password' => bcrypt('BR1GHTFR4M3@1005'),
                'role' => 'developer'
            ]
        );

        // Create a client (avoiding duplicate entry)
        $client = Client::firstOrCreate(
            ['email' => 'priscilla@solid-wedge.com'], 
            [
                'name' => 'Priscilla Chikuhwa',
                'phone' => '+27113145873',
                'company_name' => 'SolidWedge',
                'sales_rep_id' => $user->id
            ]
        );

        // Create an invoice for the client
        if ($client) {
            Invoice::create([
                'client_id' => $client->id,
                'amount' => 75.00,
                'status' => 'unpaid',
                'due_date' => now()->addDays(7)
            ]);

            // Fetch and display the client's invoices
            $clientInvoices = $client->invoices;
            dump($clientInvoices);
        } else {
            dd("Client does not exist.");
        }
    }
}

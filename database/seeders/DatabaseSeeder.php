use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;
use App\Models\Client;
use App\Models\Invoice;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@brightframe.co.zw',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        // Create Sample Projects
        Project::create([
            'name' => 'BrightFrame App',
            'description' => 'A project management system for BrightFrame',
            'status' => 'in-progress',
            'assigned_to' => 'Leonah',
            'github_repo' => 'https://github.com/leonah01/BrightFrame'
        ]);

        // Create Sample Client
        Client::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'company_name' => 'TechCorp',
            'sales_rep_id' => 'Takudzwa Mlambo'
        ]);

        // Create Sample Invoice
        Invoice::create([
            'client_id' => 'John Doe',
            'amount' => 2500.00,
            'status' => 'unpaid',
            'due_date' => now()->addDays(30)
        ]);
    }
}

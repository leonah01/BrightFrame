use Jenssegers\Mongodb\Eloquent\Model;

class Client extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'clients';

    protected $fillable = [
        'name', 'email', 'phone', 'company_name', 'sales_rep_id'
    ];
}

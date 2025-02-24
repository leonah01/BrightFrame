use Jenssegers\Mongodb\Eloquent\Model;

class Project extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'projects';

    protected $fillable = [
        'name', 'description', 'status', 'assigned_to', 'github_repo'
    ];
}

<?php
namespace App\Models;
use CodeIgniter\Model;

class PostsModel extends Model{
    protected $table="posts";
    protected $primaryKey="id";

    protected $returnType="array";
    protected $useSoftDeletes=true;
    protected $deletedField="deleted";

    protected $allowedFields = ["banner","title","intro","content","category","tags","created_at","created_by","slug"];
}
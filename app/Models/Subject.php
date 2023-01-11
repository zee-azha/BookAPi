<?php

namespace App\Models;

use CodeIgniter\Model;

class Subject extends Model
{

    protected $table            = 'books';
    protected $primaryKey       = 'book_id';
    protected $allowedFields    = ['title', 'year', 'author','publisher','status','price' ];
}

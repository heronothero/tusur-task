<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Math extends Model
{
    use HasFactory;
    protected $table = 'maths';
    protected $fillable = ['a', 'b', 'c', 'D', 'X1', 'X2'];
    public $timestamps = false;
}

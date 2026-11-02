<?php



namespace App\Models;

use App\Models\menus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class plats extends Model
{
    use HasFactory;

    public function menu()
    {
        return $this->belongsTo(menus::class);
    }

    }
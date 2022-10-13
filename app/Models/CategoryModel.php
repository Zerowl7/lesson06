<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MenuModel;

class CategoryModel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'description'];

    public function menus()
    {
        return $this->belongsToMany(MenuModel::class, 'category_menu','menu_id','category_id');
    }
}

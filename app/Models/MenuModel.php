<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryModel;

class MenuModel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'description', 'price'];

    public function categories()
    {
        return $this->belongsToMany(CategoryModel::class, 'category_menu','menu_id','category_id');

    }
}

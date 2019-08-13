<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $table = "pages";
    public $timestamps = false; // Migration içinde tanımlıdır (Migration oluşturmadık) 
}

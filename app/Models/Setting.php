<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'website_name',
        'website_url',
        'page_title',
        'meta_keywords',
        'meta_description',
        'email1',
        'email2',
        'phone1',
        'phone2',
        'addresss',
        'facebook',
        'twitter',
        'instagram',
        'youtube'
    ];
}

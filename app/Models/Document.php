<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    // protected $table = "document";

    protected $fillable = ['title', 'document_size', 'subscription_number', 'responsible_signature', 'number_pages'];
}

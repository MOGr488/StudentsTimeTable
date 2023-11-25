<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pdfFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'page_count',
        'size',
    ];
    public function sentences(): HasMany
    {
        return $this->hasMany(PdfSentence::class);
    }

}

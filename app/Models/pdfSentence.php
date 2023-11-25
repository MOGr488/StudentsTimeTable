<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pdfSentence extends Model
{
    use HasFactory;

    protected $fillable = [
        'pdf_file_id',
        'page_number',
        'sentence'
    ];


    public function pdfFile()
    {
        return $this->belongsTo(PdfFile::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $primaryKey = 'book_id';

    public function scopeActive($query){
        return $query->where('book_status',1);
    }

    public function getBookStatusTextAttribute(){
        if($this->book_status == 1) return 'Published';
        else return 'Pending';
    }

    protected $appends = ['book_status_Text'];

    protected $fillable = ['book_name','book_author','book_genre' , 'book_publisher' , 'book_price'];
}

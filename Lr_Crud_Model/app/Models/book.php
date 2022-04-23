<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class book extends Model
{
    use HasFactory , SoftDeletes , HasFactory,Sortable;

    protected $primaryKey = 'book_id';

    public function scopeActive($query){
        return $query->where('book_status',1);
    }

    // public function setBookNameAttribute($value){[
    //     $this->attributes['book_name'] = strtoupper($value),
    // ];
    // }

    public function setBookAuthorAttribute($value){[
        $this->attributes['book_author'] = strtoupper($value),
    ];
    }

    protected function bookName():Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtoupper($value),
            set: fn ($value) => strtolower($value),
        );
    }



    public function getBookStatusTextAttribute(){
        if($this->book_status == 1) return 'Published';
        else return 'Pending';
    }

    protected $appends = ['book_status_Text'];

    protected $fillable = ['book_name','book_author','book_genre' , 'book_publisher' , 'book_price', 'book_status'];

    public $sortable = ['book_name','book_author','book_genre' , 'book_publisher' , 'book_price', 'book_status'];
}

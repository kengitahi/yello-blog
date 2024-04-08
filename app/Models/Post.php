<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query)
    {
        $query->where('featured', true);
    }

    public function getExcerpt()
    {
        return Str::of(strip_tags($this->body))->words(30, '...');
    }

    public function getReadingTime()
    {
        //Humans read about 250 words per minute
        $avgWordsPerMinute = 250;
        //Get number of words in article body and divide by the average number of words read per minute. Round up the result
        $readingTime = round(str_word_count($this->body) / $avgWordsPerMinute);
        //Return 1 if reading time is less than a minute, otherwise return calculated reading time
        return ($readingTime <= 1) ? 1 : $readingTime;
    }
}

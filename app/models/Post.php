<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    protected $fillable = array('title', 'description');

    public static $rules = array(
        'title'      => 'required|min:5|max:150',
        'description'       => 'required|min:10|max:10000'
    );

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value) . '-' . uniqid();
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}
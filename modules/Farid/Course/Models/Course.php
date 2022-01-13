<?php


namespace Farid\Course\Models;


use Farid\Media\Models\Media;
use Farid\User\Models\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    const TYPE_FREE = 'free';
    const TYPE_PREMIUM = 'premium';
    const STATUS_COMPLETED = 'completed';
    const STATUS_NOTCOMPLETED = 'not-completed';
    const STATUS_LOCKED = 'locked';
    static $types = [self::TYPE_FREE, self::TYPE_PREMIUM];
    static $statuses = [self::STATUS_COMPLETED, self::STATUS_NOTCOMPLETED, self::STATUS_LOCKED];
    protected $guarded = [];

    public function media()
    {
        return $this->belongsTo(Media::class, 'banner_id');
    }

    public function teacher()
    {
       return $this->belongsTo(User::class,'teacher_id');
    }

    public function getThumbAttribute()
    {
        return $this->media->files[300];
    }
}

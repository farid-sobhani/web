<?php

namespace Farid\Media\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
protected $casts=[
    'files'=>'json'
];
}

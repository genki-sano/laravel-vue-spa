<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /** @var array JSONに含める属性 */
    protected $visible = [
        'author',
        'content',
    ];

    /**
     * リレーションシップ - photosテーブル
     *
     * @return BelongsTo
     */
    public function photo()
    {
        return $this->belongsTo(Photo::class, 'photo_id');
    }
}

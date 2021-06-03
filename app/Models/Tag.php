<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Tag
 *
 * @property int $id
 * @property string $name 태그명
 * @property int $on 태그 사용여부
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|\App\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @method static \Database\Factories\TagFactory factory(...$parameters)
 * @method static Builder|Tag newModelQuery()
 * @method static Builder|Tag newQuery()
 * @method static Builder|Tag query()
 * @method static Builder|Tag whereCreatedAt($value)
 * @method static Builder|Tag whereId($value)
 * @method static Builder|Tag whereName($value)
 * @method static Builder|Tag whereOn($value)
 * @method static Builder|Tag whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'on',
    ];

    protected $attributes = [
        'on' => true,
    ];

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}

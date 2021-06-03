<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Post
 *
 * @property int $id
 * @property int $user_id
 * @property string $title 제목
 * @property string $contents 내용
 * @property int $is_public 공개글 여부
 * @property int $views 조회수
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\PostFactory factory(...$parameters)
 * @method static Builder|Post isPrivate()
 * @method static Builder|Post isPublic()
 * @method static Builder|Post newModelQuery()
 * @method static Builder|Post newQuery()
 * @method static \Illuminate\Database\Query\Builder|Post onlyTrashed()
 * @method static Builder|Post query()
 * @method static Builder|Post whereContents($value)
 * @method static Builder|Post whereCreatedAt($value)
 * @method static Builder|Post whereDeletedAt($value)
 * @method static Builder|Post whereId($value)
 * @method static Builder|Post whereIsPublic($value)
 * @method static Builder|Post whereTitle($value)
 * @method static Builder|Post whereUpdatedAt($value)
 * @method static Builder|Post whereUserId($value)
 * @method static Builder|Post whereViews($value)
 * @method static \Illuminate\Database\Query\Builder|Post withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Post withoutTrashed()
 * @mixin Eloquent
 */
class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'contents',
        'is_public',
        'views',
    ];

    protected $attributes = [
        'is_public' => true,
        'views' => 0,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeIsPublic(Builder $builder): Builder
    {
        return $builder->where('is_public', true);
    }

    public function scopeIsPrivate(Builder $builder): Builder
    {
        return $builder->where('is_public', false);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}

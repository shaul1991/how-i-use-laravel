<?php

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    public function up(): void
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->foreignIdFor(Post::class)->index();
            $table->foreignIdFor(Tag::class)->index();
            $table->unique([(new Post())->getForeignKey(), (new Tag())->getForeignKey()], 'post_tag_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
}

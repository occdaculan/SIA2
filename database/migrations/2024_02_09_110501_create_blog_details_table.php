<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Blogs;
use App\Models\BlogDetails;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $faker = Faker\Factory::create();
        Schema::create('blog_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');
            $table->longText('content'); 
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->timestamps();
        });

        for ($i=0; $i < 10; $i++) { 
            $blog = new Blogs();
            $blog->blog_name = $faker->sentence(3) . $i;
            $blog->amount = 10;
            $blog->description = 'This is a sample blog content. '. $i;
            $blog->save();

            for ($i2=0; $i2 < 2; $i2++) { 
                $blogDetails = new BlogDetails();
                $blogDetails->content = 'Sample Blog' . $i2;
                $blogDetails->blog_id = $blog->id;
                $blogDetails->save();
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_details');
    }
};

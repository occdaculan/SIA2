<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Blogs;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $faker = Faker\Factory::create();
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_name', 100);
            $table->double('amount');
            $table->longText('description'); 	
            $table->timestamps();
        });
        // for ($i=0; $i < 10; $i++) { 
        //     $blog = new Blogs();
        //     $blog->blog_name =  $faker->sentence(3) . $i;
        //     $blog->amount = $faker->randomDigit();
        //     $blog->description = 'This is a sample blog content. ';
        //     $blog->save();
     

        // }
       
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

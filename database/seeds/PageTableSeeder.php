<?php
use Illuminate\Database\Seeder;
class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();
        DB::table('pages')->insert([
            [
                'title' => 'About',
                'url' => 'about',
                'content' => 'This is the about page.'
            ],
            [
                'title' => 'Contact',
                'url' => 'contact',
                'content' => 'This is the contact page.'
            ],
            [
                'title' => 'FAQ',
                'url' => 'faq',
                'content' => 'This is the faq page.'
            ],
            [
                'title' => 'Home',
                'url' => '/',
                'content' => 'This is the home page.'
            ],
            [
                'title' => 'Blog',
                'url' => 'archive',
                'content' => 'This is the blog page.',

            ],
            [
                'title' => 'Blog Post',
                'url' => 'article/{id}/{slug}',
                'content' => 'This is the blog post page.',
  
            ]
        ]);
    }
}
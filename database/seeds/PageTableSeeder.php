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
                'content' => 'This is the about page.',
                'parent_id' => null,
                'lft' => 3,
                'rgt' => 8,
                'depth' => 0,
                'template' => null,
                'name' => null
            ],
            [
                'title' => 'Contact',
                'url' => 'contact',
                'content' => 'This is the contact page.',
                'parent_id' => 1,
                'lft' => 4,
                'rgt' => 5,
                'depth' => 1,
                'template' => null,
                'name' => null
            ],
            [
                'title' => 'FAQ',
                'url' => 'faq',
                'content' => 'This is the faq page.',
                'parent_id' => 1,
                'lft' => 6,
                'rgt' => 7,
                'depth' => 1,
                'template' => null,
                'name' => null
            ],
            [
                'title' => 'Home',
                'url' => '/',
                'content' => 'This is the home page.',
                'parent_id' => null,
                'lft' => 1,
                'rgt' => 2,
                'depth' => 0,
                'template' => 'home',
                'name' => null
            ],
            [
                'title' => 'Blog',
                'url' => 'archive',
                'content' => 'This is the blog page.',
                'parent_id' => null,
                'lft' => 9,
                'rgt' => 12,
                'depth' => 0,
                'template' => 'blog',
                'name' => null
            ],
            [
                'title' => 'Blog Post',
                'url' => 'article/{id}/{slug}',
                'content' => 'This is the blog post page.',
                'parent_id' => 5,
                'lft' => 10,
                'rgt' => 11,
                'depth' => 1,
                'template' => 'blog.post',
                'name' => 'blog.post'
            ],
        ]);
    }
}
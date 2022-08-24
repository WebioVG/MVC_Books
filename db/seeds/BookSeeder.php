<?php


use Phinx\Seed\AbstractSeed;

class BookSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'title' => 'L\'homme qui voulait être heureux',
                'price' => 10,
                'isbn' => '4-1532-1564-5',
                'author' => 'Laurent Gounelle',
                'releasedAtYear' => 2008,
                'image' => ''
            ],[
                'title' => 'Comment je vois le monde',
                'price' => 15,
                'isbn' => '8-4562-9813-4',
                'author' => 'Albert Einstein',
                'releasedAtYear' => 1934,
                'image' => ''
            ],[
                'title' => 'Poussières d\'étoiles',
                'price' => 8,
                'isbn' => '6-1284-6742-3',
                'author' => 'Hubert Reeves',
                'releasedAtYear' => 1984,
                'image' => ''
            ],[
                'title' => 'Chroniques du ciel et de la vie',
                'price' => 15,
                'isbn' => '4-1986-7183-7',
                'author' => 'Hubert Reeves',
                'releasedAtYear' => 2005,
                'image' => ''
            ],[
                'title' => 'Chroniques des atomes et des galaxies',
                'price' => 22,
                'isbn' => '2-8165-9813-0',
                'author' => 'Hubert Reeves',
                'releasedAtYear' => 2007,
                'image' => ''
            ]
        ];

        $posts = $this->table('book');
        $posts->insert($data)
              ->saveData();
    }
}

<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Article seed.
 */
class ArticleSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];

        for ($i = 0; $i <= 10000; $i++) {
            $data[] = [
                'title' => $faker->text,
                'content' => $faker->sentence,
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s"),
            ];
        }
        $table = $this->table('article');
        $table->insert($data)->save();
    }
}

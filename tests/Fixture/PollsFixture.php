<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PollsFixture
 */
class PollsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'photo_url' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-05-02 10:13:11',
            ],
        ];
        parent::init();
    }
}

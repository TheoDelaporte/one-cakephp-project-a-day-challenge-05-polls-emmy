<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResponsesFixture
 */
class ResponsesFixture extends TestFixture
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
                'option_id' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-05-02 10:13:24',
            ],
        ];
        parent::init();
    }
}

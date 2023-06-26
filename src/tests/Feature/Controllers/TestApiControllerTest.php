<?php
declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class TestApiControllerTest extends TestCase
{
    /**
     * index test 200
     * @return void
     */
    public function testIndex200(): void
    {
        // Act
        $res = $this->getJson('/api/test');

        // Assert
        $res->assertStatus(200);
        $res->assertJson([
            [
                'key1' => 'hoge',
                'key2' => 'fuga',
            ],
            [
                'key1' => 'foo',
                'key2' => 'bar',
            ]
        ]);
    }
}

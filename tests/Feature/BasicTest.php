<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMultipleInput()
    {
           $this->visit('/')
            ->type('php', 'q')
            ->type('en', 's')
            ->press('submit')
            ->seePageIs('/search');
    }

    public function testLanguageInput()
    {
           $this->visit('/')
            ->type('en', 's')
            ->press('submit')
            ->seePageIs('/search');
    }
    public function testProgrammingLanguageInput()
    {
           $this->visit('/')
            ->type('php', 'q')
            ->press('submit')
            ->seePageIs('/search');
    }
      public function testIndex()
    {
       $this->visit('/')
            ->press('submit')
            ->see('')
            ->seePageIs('/search');
    }
  
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Learnings;

class ModelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_model_learnings()
    {
        // $learning = Learnings::create([
        //     'judul' => "Belajar",
        //     'konten' => "Belajar adalah memanusiakan manusia",
        //     'created_at' => "2017-06-15"
        // ]);

        $this->assertDatabaseHas('learnings', [
            'judul' => "Belajar",
            'konten' => "Belajar adalah memanusiakan manusia",
            'created_at' => "2017-06-15"
        ]);
    }
}

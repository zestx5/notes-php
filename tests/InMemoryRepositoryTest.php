<?php
namespace Zeth\NotesPhp\Tests;

use PHPUnit\Framework\TestCase;
use Zeth\NotesPhp\Models\Note;
use Zeth\NotesPhp\Repositories\InMemoryRepository;


final class InMemoryRepositoryTest extends TestCase
{

    public function testSaveFunctionWorksAsExpected(): void
    {
        $repo = new InMemoryRepository();
        $want = Note::createNote("test");

        $repo->save($want);
        $got = $repo->getAll()[0];
        $this->assertEquals($got, $want);
    }

}

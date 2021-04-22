<?php

namespace Tests\Feature\Http;

use Tests\TestCase;

class ExamplesTest extends TestCase
{
    public function testIndexHasOkStatus()
    {
        $response = $this->get('/examples');

        $response->assertOk();
    }

    public function testSnippetHasOkStatus()
    {
        $response = $this->get('/examples/snippet');

        $response->assertOk();
    }

    public function testSnippetHasContent()
    {
        $response = $this->get('/examples/snippet');

        $response->assertSee('This is my first snippet');
    }

    public function testSnippetFromCacheHasOkStatus()
    {
        $response = $this->get('/examples/snippet-from-cache');

        $response->assertOk();
    }

    public function testSnippetFromCacheHasContent()
    {
        $response = $this->get('/examples/snippet-from-cache');

        $response->assertSee('This is my first snippet');
    }

    public function testSnippetWithParamsHasOkStatus()
    {
        $response = $this->get('/examples/snippet-with-params');

        $response->assertOk();
    }

    public function testSnippetWithParamsHasContent()
    {
        $response = $this->get('/examples/snippet-with-params');

        $response->assertSee('This foo is bar');
    }

    public function testSnippetsHasOkStatus()
    {
        $response = $this->get('/examples/snippets');

        $response->assertOk();
    }

    public function testSnippetsHasContent()
    {
        $response = $this->get('/examples/snippets');

        $response->assertSee('This is my first snippet');
        $response->assertSee('This is ');
    }

    public function testSnippetsFromCacheHasOkStatus()
    {
        $response = $this->get('/examples/snippets-from-cache');

        $response->assertOk();
    }

    public function testSnippetsFromCacheHasContent()
    {
        $response = $this->get('/examples/snippets-from-cache');

        $response->assertSee('This is my first snippet');
        $response->assertSee('This is ');
    }

    public function testSnippetsWithParamsHasOkStatus()
    {
        $response = $this->get('/examples/snippets-with-params');

        $response->assertOk();
    }

    public function testSnippetsWithParamsHasContent()
    {
        $response = $this->get('/examples/snippets-with-params');

        $response->assertSee('This is my first snippet');
        $response->assertSee('This foo is bar');
    }
}

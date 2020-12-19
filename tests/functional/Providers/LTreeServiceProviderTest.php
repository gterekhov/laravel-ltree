<?php

declare(strict_types=1);

namespace Umbrellio\LTree\tests\functional\Providers;

use Illuminate\Support\Facades\App;
use Umbrellio\LTree\Interfaces\LTreeServiceInterface;
use Umbrellio\LTree\Services\LTreeService;
use Umbrellio\LTree\tests\FunctionalTestCase;

class LTreeServiceProviderTest extends FunctionalTestCase
{
    /**
     * @test
     */
    public function testProviderInit(): void
    {
        $service = App::make(LTreeServiceInterface::class);
        $this->assertInstanceOf(LTreeService::class, $service);
    }
}

<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;

class WelcomeTest extends TestCase
{
    public function testWelcomeResponse()
    {
        // When
        $response = $this->call('POST', route('welcome'));
        $welcomeString = $response->getContent();
        $welcomeResponse = new SimpleXMLElement($welcomeString);

        // Then
        $this->assertEquals(1, $welcomeResponse->children()->count());

        $gatherCommand = $welcomeResponse->Gather;
        $this->assertEquals('Gather', $gatherCommand->getName());
        $this->assertEquals(1, $gatherCommand->children()->count());

        $playCommand = $welcomeResponse->Gather->Play;
        $this->assertEquals('Play', $playCommand->getName());
    }
}

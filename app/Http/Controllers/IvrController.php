<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Services_Twilio_Twiml;

class IvrController extends Controller
{
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function showWelcome()
    {
        $response = new Services_Twilio_Twiml;
        $gather = $response->gather(
            ['numDigits' => 1,
             'action' => route('menu-response', [], false)]
        );

        $gather->play(
            'http://howtodocs.s3.amazonaws.com/et-phone.mp3',
            ['loop' => 3]
        );

        return $response;
    }

    /**
     * Responds to selection of an option by the caller
     *
     * @return \Illuminate\Http\Response
     */

    public function showMenuResponse(Request $request)
    {
        return "something";
    }

}

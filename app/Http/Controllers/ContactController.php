<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private const SUB_HEADING = 'CONTACT';

    public function create()
    {
        return view('content.contact')->with(['subHeading' => self::SUB_HEADING, 'subHeading', self::SUB_HEADING, 'contentBoxTitle' => "Billy Twigg", 'contentBoxContent' => "Writer, Illustrator and Creator of Raging Destiny.\n Since the age of eleven, Billy has had a story to tell. The goal is to simply have his story printed in book form and standing side by side on his book shelf. If others happen to enjoy the story along the way, then that is a delightful bonus."]);
    }
}

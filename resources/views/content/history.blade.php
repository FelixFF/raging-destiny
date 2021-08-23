@extends('layouts.app')

@section('content')
    <div id="history" class="content-section-style style-history">
        <img class="header-image" src="\img/content/box-banner.png" alt="News Banner">
        <div class="history">
            Part 1: Sonic the Comic
            At the age of eleven I already knew what I wanted to be when I grew up, a Video Game Designer. Being a huge fan of games since the age of four I had been sketching level designs and instruction manuals for years and at that age the game I thought that would be cooler than any other was a Streets of Rage game with characters and worlds from Sonic the Hedgehog. I was a huge fan of the UK publication of Sonic The Comic, it’s amazing art by Richard Elson and Nigel Dobbyn, along with it’s
            In depth story lines, surprisingly adult for its target audience filled my childhood with excitement and adventure as I rushed to the shop each and every fortnight for the next issue. Using these characters from the comic I loved, I began a project to turn Sonic into an Arcade beat’em up.
            With the help of my best friend Matthew, we had it all planned, levels, moves, special attacks, story. Many weekends, for months we spent drawing out our designs for this game, talking over how
            it would play and what would make it the coolest game ever!
            Then one day my Mum said something that made me think very hard about my project, she said, “Wouldn’t it be cooler if you made a game with your own characters?”
        </div>
        {{-- <div class="history">
            Part 2: Beyond the Bookcase.
            “Wouldn’t it be cooler if you made a game with your own characters?”
            This really hit home, only problem is at the age of eleven I just couldn’t imagine cooler characters then the ones on my video games. Until, my teacher at the time, Mr. Smith, gave us an English project to complete, it involved a beginning to a story that was pre-written and a title, Beyond the Bookcase. The task was to use this short beginning to the story and finish it off, it outlined no main characters or plot besides the mysterious book case.
            I remember sitting there for a while, taking this task very seriously, watching everyone around me scribbling away with not a single word on my page. I was stuck, the problem was again characters. I had a story, I had designed magical items for the characters to use, rooms they would come across beyond this book case, just no main characters. The problem was, how would a character react in these situations? What would they say? How would they feel? I was told after several lessons I really needed to make a start but I couldn’t get past this issue, seems dumb now but back then it was very important to me and very interesting.
            Then it hit me. I wouldn’t know what made up characters would do in strange situations, but I did know what I would do. In every situation if I asked myself, what would I do? Say? Feel? I would have my main character. Same goes for the other characters, basing them on my best friends Granville and Matthew, I would know what they would do and say. So with that in mind I wrote my first story, Beyond the Bookcase, starring myself and my two best friends, we actually created the books and put them in the classroom library. I remember my book being the most popular, my classmates enjoying the adventure I had written with Me, Granville and Matthew, or maybe more so the puzzles and games I had created in the back of the book. Still it was a start and gave me a valuable lesson.
            If you write yourself as the main character, you never will hit the wall of what to do, or say or feel. You just put yourself in that situation and ask, what would you do? Raging Destiny was born.
        </div>
        <div class="history">
            Part 3: Dedo the Platypus
            Dedo was my first ever original character, (I will upload an image of him one day.) Basically a green Platypus, with a black leather jacket and hoverboard, Dedo was my attempt at making an original character for the world that myself and my friend Matthew had created originally for the Arcade fighting game based in Sonic the Hedgehogs world.
            Dedo is colourful, cartooney and would fit right in with all the other animal/human style characters of the 90′s. (See any video game trying to get some of Sonic the Hedgehog’s limelight.) I chose a Platypus due to the fact no one at the time has chosen that animal and I couldn’t understand why? Cool tail, can swim great and in a unique style. Still apart from trying to force him into a game that wasn’t designed for him and a few early posters and comic strips, Dedo has sat on the shelf for many many years.
            Often spoken of when I talk about game ideas using him as an Avatar to get my ideas across, I never really found a home for him. Until recently. Dedo is a creation I am very fond of. It was my first step down the road of originality and my buddy when I can’t think of anyone to fill a role at a time. He is my blank canvas and starting point. Hopefully one day getting a chance to be in the spotlight.
            Without creating a character like Dedo I wouldn't have been able to envision action scenes, fight sequences, funny moments, backgrounds. When making something of the scale of RD, Dedo was a big help. You need a starting point, even if you will never use that point in the final product, it is vital to get you going in the right direction.
            Dedo will be making his first appearance in the upcoming release of Raging Destiny 2: Undying Pain, in a cameo role and I look to make him pop up from time to time.

        </div> --}}
    </div>


<style>
    .style-history {
        display: flex;
        flex-direction: column;
        max-width: 80%
    }

    .header-image {
        max-width: 40%;
        float: left;
    }

    .history {
        border: 2px whitesmoke solid;
        padding: 10px;
        /* overflow-y: scroll; */
        background-color: rgba(55, 65, 81, 1);
        font-size: 20px;

    }
</style>
@endsection

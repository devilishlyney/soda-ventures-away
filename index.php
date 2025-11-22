<?php

$siteTitle = "Soda Ventures Away";
$pageTitle = "At Home";
$pageContent = "The time is 1:04 AM. You can't sleep, you feel an overwhelming sense of discomfort. You ponder your options carefully.
You could stay home and brew a cup of coffee, and get some work done in advance to lighten your workload.
Or you could go for a walk to the park nearby, though you don't know what you're hoping to encounter there.
Or you could just keep trying to sleep, despite the fact that it hasn't proven to be a success so far.";

$choice = [
    [
        "pick" => "I'll get some work done at home.",
        "link" => "index.php?c1=work"
    ],
    [
        "pick" => "I'll head out for a walk.",
        "link" => "index.php?c1=walk"
    ],
    [
        "pick" => "I'll try to go back to sleep.",
        "link" => "index.php?c1=sleep"
    ]
];

if(isset($_GET["c1"]))
    {
        $pick = $_GET["c1"];

        if($pick === "work")
        {
            $pageTitle = "At Home";
            $pageContent = "You decide to stay home and get some work done. You brew a cup of coffee and sit down at your desk.
            As you work, you find that the quiet environment allows you to focus better.
            You make significant progress on your tasks and feel a sense of accomplishment.
            After a few hours, you decide it's time to stop and maybe go back to sleep.
            However, you notice your phone buzzing. Your friend is calling out of the blue.";

            $choice = [
                [
                    "pick" => "It's so late. I'll just go back to sleep.",
                    "link" => "index.php?c2=sleep"
                ],
                [
                    "pick" => "I'll answer the call. Surely they need something important.",
                    "link" => "index.php?c2=answer_call"
                ]
            ];

            
        }
        elseif($pick === "walk")
        {
            $pageTitle = "Outside";
            $pageContent = "You step outside, not feeling so safe due to the late hour, but the cool night air is refreshing.
            As you walk towards the park, you hear a faint meowing sound coming from a nearby tree.
            Upon closer inspection, you see an injured kitten stuck up in the branches, clearly in distress.
            You contemplate the situation; you have vertigo, you're scared of heights.";

            $choice = [
                [
                    "pick" => "I'll climb the tree. The kitty's life depends on it.",
                    "link" => "index.php?c3=save_kitty"
                ],
                [
                    "pick" => "I can't do it. I'll keep walking.",
                    "link" => "index.php?c3=keep_walking"
                ]
            ];
        }
        elseif($pick === "sleep")
        {
            $pageTitle = "At Home";
            $pageContent = "You decide to keep trying to sleep. The discomfort remains, but you manage to eventually drift off.
            You wake up the next morning feeling not so rested.
            You can't shake off the feeling that you missed out on something important.
            You check the local news and see that a small kitten was found dead in the park last night.
            It seems like you might have made the wrong choice by not going for that walk.
            You might have been able to save it, had you gone out. Regret fills your heart as you start your day.
            <br><br>Ending 1: True Neutral Ending - You neither helped nor harmed anyone, but you are left with a sense of regret.";

            $choice = [
            [
                "pick" => "I'll pray Dialga to turn back the hands of time.",
                "link" => "index.php"
            ]
            ];
        }

        
    }

if(isset($_GET["c2"]))
    {
        $pick = $_GET["c2"];

        if($pick === "sleep")
        {
            $pageTitle = "At Home";
            $pageContent = "You decide to ignore the call and go to sleep. If it's so important, they'll leave a voicemail.
            You eventually fall asleep, after a while. However, you wake up the next morning feeling uneasy.
            You check your phone and see a missed call and a voicemail from your friend.
            In the voicemail, they sound distressed and mention that they found an injured kitten stuck in a tree nearby last night.
            They couldn't reach you and or anyone else to help them.
            Sadly, the kitten didn't survive the night.
            You feel a deep sense of guilt for not answering the call.
            <br><br>Ending 3: Neutral Bad Ending - Your inaction led to a tragic outcome, leaving you with a heavy conscience.";

            $choice = [
            [
                "pick" => "I'll pray Dialga to turn back the hands of time.",
                "link" => "index.php"
            ]
            ];
        }
        elseif($pick === "answer_call")
        {
            $pageTitle = "Outside";
            $pageContent = "You answer the call, and it's your friend in a panic.
            They tell you that they found a small kitten stuck in a tree nearby and can't reach it.
            They beg for your help, explaining how no one else would pick up their phone so late at night.
            You quickly get dressed and head out to meet them.
            Together, you manage to rescue the kitten. It's injured but alive.
            Your friend insists you bring the kitten to an animal shelter.
            A sense of relief hits you, though part of you feels somewhat sad, knowing you likely won't see the kitty again.
            <br><br>Ending 2: Neutral Good Ending - You did a good deed by helping the kitten, even if it meant parting ways with it.";

            $choice = [
            [
                "pick" => "I'll pray Dialga to turn back the hands of time.",
                "link" => "index.php"
            ]
            ];
        }
    }

if(isset($_GET["c3"]))
    {
        $pick = $_GET["c3"];

        if($pick === "save_kitty")
        {
            $pageTitle = "Outside";
            $pageContent = "You gather your courage and climb up the tree to aid the kitty.
            You manage to rescue it, and proceed to take it to the vet.
            It receives treatment and over time, fully recovers. You bring it home, give it a name, and keep caring for it.
            Soda is a really well-behaved kitty. Soda was worth saving that night. Soda is now your best friend forever.
            <br><br>Ending 4: Good Ending - You came looking for copper, and found gold. Soda has a bright life ahead of him.";

            $choice = [
                [
                    "pick" => "I'll pray Dialga to turn back the hands of time.",
                    "link" => "index.php"
                ]
                ];
        }
        elseif($pick === "keep_walking")
        {
            $pageTitle = "At Home";
            $pageContent = "You chose to keep walking.
            As you walk past the tree, the kitten lets out a desperate, exhausted whine, but you made your choice.
            You eventually get back home, but for the rest of the night, you are unable to fall asleep, tormented by your choice.
            It's likely too late now.
            <br><br> Ending 5: Bad Ending - You let your fear dictate your actions, despite a life and death situation.";

            $choice = [
                [
                    "pick" => "I'll pray Dialga to turn back the hands of time.",
                    "link" => "index.php"
                ]
                ];
        }
    }

require "templates/layout.phtml";
?>
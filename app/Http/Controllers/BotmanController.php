<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Message\Incoming\Answer;

class BotmanController extends Controller
{
    public function handle()
    {
        $botman=app('botman');
        $botman->hears("{message}",function($botman,$message){
            if($message=="hi"){
                $this->askName($botman);
            } 
            elseif($message=='Timing' OR $message=='timing'){
                $botman->reply("7am to 11pm");
            }
            elseif($message=="Location" OR $message=='location'){
                $botman->reply("KM marg, Udupi");
            }
            elseif($message=="Any other branch?"){
                $botman->reply("Yes in mangalore");
            }
            elseif($message=="year of service"){
                $botman->reply("20 years of provinding authentic taste of india");
            }
            else{
                $botman->reply("How can i help u");
            }
        });
        $botman->listen();
    }
public function askName($botman)
{
    $botman->ask("Hello! What is your name?",function($answer){
        $name= $answer->getText();
        $this->say('Nice to meet you '.$name);
    });
}
}

<?php
trait A {
    public function smallTalk() {
        var_dump('a');
    }
    public function bigTalk() {
        var_dump('A');
    }
}

trait B {
    public function smallTalk() {
        var_dump('b');
    }
    public function bigTalk() {
        var_dump('B');
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
        A::smallTalk as smallTalkA;
    }
}

$talker = new Talker();
$talker->smallTalk(); // b
$talker->bigTalk(); // A

$aliasedTalker = new Aliased_Talker();
$aliasedTalker->smallTalk(); // b
$aliasedTalker->bigTalk(); // A
$aliasedTalker->talk(); // B
$aliasedTalker->smallTalkA(); // a

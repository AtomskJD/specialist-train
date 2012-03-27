<?php
class Subject implements SplSubject {
    private $observers, $value;
    public function __construct()
    {
        $this->observers = array();
    }
    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }
    public function detach(SplObserver $observer)
    {
        if ($id = array_search($observer, $this->observers, true)){
            unset($this->observers[$id]);
        }
    }
    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }
    public function setValue($value)
    {
        $this->value = $value;
        $this->notify();
    }
    public function getValue()
    {
        return $this->value;
    }
}
class Observer implements SplObserver {
    public function update(SplSubject $subject)
    {
        echo "<p>Новое значение равно : " . $subject->getValue() ."</p>";
    }
}
$subject = new Subject();
$observer = new Observer();
$subject->attach($observer);
$subject->setValue("New Subject");
?>
<?php

interface ManageableInterface {
    public function beManaged();
}

interface Workable {
    public function work();
}

interface SleepableInterface {
    public function sleep();
}

class Labourer implements Workable, SleepableInterface, ManageableInterface {
    public function work()
    {
        return 'Human Working';
    }

    public function sleep()
    {
        return 'Human sleeping';
    }

    public function beManaged()
    {
        $this->work();
        $this->sleep();
    }
}

class AndroidWorker implements Workable, ManageableInterface {

    public function work()
    {
        return 'Android working';
    }

    public function beManaged()
    {
        $this->work();
    }
}

class Captain {
    public function hire(ManageableInterface $worker)
    {
        $worker->beManaged();
    }
}

<?php
class Horde_Core_Binder_Editor implements Horde_Injector_Binder
{
    public function create(Horde_Injector $injector)
    {
        return new Horde_Core_Factory_Editor($injector);
    }

    public function equals(Horde_Injector_Binder $binder)
    {
        return false;
    }
}

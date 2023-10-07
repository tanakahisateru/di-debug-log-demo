<?php

namespace App;

class App
{
    public function __construct(
        private ServiceLocatorDemo $serviceLocatorDemo,
        private ConstructorInjectionDemo $constructorInjectionDemo,
        private SetterInjectionDemo $setterInjectionDemo,
        private AttributeInjectionDemo $attributeInjectionDemo,
    ) { }

    public function run()
    {
        $this->serviceLocatorDemo->run();
        $this->constructorInjectionDemo->run();
        $this->setterInjectionDemo->run();
        $this->attributeInjectionDemo->run();
    }
}
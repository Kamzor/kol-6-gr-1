<?php

namespace spec\AppBundle\Form;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KamzorCuboidTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('AppBundle\Form\KamzorCuboidType');
    }
}

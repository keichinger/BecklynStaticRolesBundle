<?php

namespace Becklyn\StaticRolesBundle\Tests\Role;

use Becklyn\StaticRolesBundle\Role\Role;


/**
 *
 */
class RoleTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testConfigurationFromArray ()
    {
        $role = Role::createFromConfiguration("ROLE_TEST", [
            "title" => "title",
            "description" => "description"
        ]);

        $this->assertEquals("description", $role->getDescription());
        $this->assertEquals("title", $role->getTitle());
        $this->assertEquals("ROLE_TEST", $role->getRole());
    }



    public function testEmptyConfigurationFromArray ()
    {
        $role = Role::createFromConfiguration("ROLE_TEST", []);

        $this->assertNull($role->getTitle());
        $this->assertNull($role->getDescription());
    }
}

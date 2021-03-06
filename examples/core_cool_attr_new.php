<?php
// core_cool_attr_new.php
// TODO: get this working
namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
<<ORM\Table(
	name="users", 
	uniqueConstraints={
		#[ORM\UniqueConstraint(
			name="users_user_key", 
			columns={"userKey"})]
		}
),
ORM\Entity("Application\Entity\Users")>>
class Users
{
	@@var("int")
	@@ORM\Column(name="id", type="integer", nullable=false)
	@@ORM\Id
	@@ORM\GeneratedValue(strategy="IDENTITY")
    private $id;

	@@var("string|null")
	@@ORM\Column(name="name", type="string", length=24, nullable=true)
    private $name;
}

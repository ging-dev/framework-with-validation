<?php

namespace App\Model;

use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\LessThan;

class User
{
	#[Length(min: 2, max: 18, minMessage: 'Tên quá ngắn', maxMessage: 'Tên quá dài')]
	private string $name;

	#[GreaterThanOrEqual(18, message: 'Bạn phải đủ 18 tuổi')]
	#[LessThan(100, message: 'Bạn không thuộc server trái đất?')]
	private int $age;

	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function getAge(): int
	{
		return $this->age;
	}

	public function setAge(int $age): self
	{
		$this->age = $age;
		return $this;
	}
}
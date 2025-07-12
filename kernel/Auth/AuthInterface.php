<?php 

namespace App\Kernel\Auth;

interface AuthInterface
{
    public function attempt(string $username, string $password): bool;
    public function logout();
    public function check(): bool;
    public function user(): ?User;
    public function table() :string;
    public function username() :string;
    public function password() :string;
    public function sessionField() :string;


}
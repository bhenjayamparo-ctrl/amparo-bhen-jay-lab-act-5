<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthModel extends Model
{
    protected $table = 'users';

    public function find_by_username(string $username)
    {
        return $this->db
            ->table($this->table)
            ->where('username', $username)
            ->get();
    }
}

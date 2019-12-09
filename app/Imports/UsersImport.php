<?php
namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
        'user_name' => $row[0],
        'phone' => $row[1],
        'email' => $row[2],
        'email_verified_at' => $row[3],
        'password' => Hash::make($row[4]),
        'remember_token' => $row[5],
        'api_token' => $row[6],
        'role_id' => $row[7],
        'online' => $row[8],
        ]);
    }

}
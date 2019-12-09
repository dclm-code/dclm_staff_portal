<?php
namespace App\Imports;

use App\Message;
use Maatwebsite\Excel\Concerns\ToModel;

class MessagesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Message([
        'sender' => $row[0],
        'receiver' => $row[1],
        'subject' => $row[2],
        'message' => $row[3],
        'date_sent' => $row[4],
        'date_read' => $row[5],
        'replied' => $row[6],
        'readstate' => $row[7],
        'deleted' => $row[8],
        'forwarded' => $row[9],
        'forwardedto' => $row[10],
        ]);
    }

}
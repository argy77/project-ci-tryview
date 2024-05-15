<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilLabModel extends Model
{
    protected $table = 'hasil_lab_waynacom';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'orderDateSystem', 'visitNumber', 'LisRegNo', 'LisTestID', 'HisRegNo',
        'TestName', 'Result', 'ResultComment', 'ResultNote', 'PathologistNote',
        'ReferenceValue', 'ReferenceNote', 'TestFlagSign', 'TestUnitsName',
        'InstrumentName', 'AuthorizationDate', 'AuthorizationUser', 'GreaterthanValue',
        'LessthanValue', 'AgeYear', 'AgeMonth', 'AgeDays', 'TestFlagTextNote',
        'HisTestIDOrder', 'TransferFlag'
    ];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilLabModel extends Model
{
    protected $table = 'permintaan_lab_waynacom';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'orderDateSystem', 'outletId', 'orderNumber', 'orderDT', 'visitNumber',
        'patientId', 'patientName', 'sexId', 'sexName', 'dob',
        'addressName', 'cityId', 'cityName', 'mobileNumber',
        'phoneNumber', 'faxNumber', 'email', 'idNIK',
        'idSIM', 'idPassport', 'physicianId', 'physicianName', 'isCito',
        'diagnoseId', 'diagnoseName', 'guarantorId', 'guarantorName', 'agreementId', 'agreementName',
        'serviceUnitId', 'serviceUnitName', 'wardPoliId', 'wardPoliName', 'roomId',
        'roomName', 'bedName',
        'classId', 'className', 'regUserId', 'regUserName', 'status_kirim',
        'receivedDT', 'lisRegNo', 'hasil'
    ];
}

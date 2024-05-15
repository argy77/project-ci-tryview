<?php

namespace App\Controllers;

// use App\Models\PermintaanLabModel;
use App\Models\HasilLabModel;
use DateTime;

class HasilLabController extends BaseController
{
    public function showAllData()
    {
        $model = new HasilLabModel();
        $data['hasil_lab'] = $model->findAll();
        return view('pages/index', $data);
    }

    public function search()
    {
        $model = new HasilLabModel();
        $keyword = $this->request->getVar('keyword');
        $data['hasil_lab'] = $model->like('OrderDateSystem', $keyword)
            ->orLike('visitNumber', $keyword)
            ->orLike('HisRegNo', $keyword)
            ->findAll();
        return view('pages/index', $data);
    }


    public function showByDate()
    {
        $model = new HasilLabModel();
        date_default_timezone_set('Asia/Jakarta');
        $date = new DateTime('today');
        $data['hasil_lab'] = $model->where('OrderDateSystem', $date->format('Y-m-d'))
            ->findAll();
        return view('pages/index', $data);
    }

    public function showViewLab()
    {
        // $model = new HasilLabModel();
        // $db      = \Config\Database::connect();
        // $db->table('permintaan_lab_wynacom');
        // date_default_timezone_set('Asia/Jakarta');
        // $date = new DateTime('today');
        // $data['hasil_lab'] = $model->join('permintaan_lab_wynacom', 'hasil_lab_wynacom.HisRegNo = permintaan_lab_wynacom.orderNumber', 'inner')
        //     ->where('OrderDateSystem', $date->format('Y-m-d'));
        // return view('pages/index', $data);
    }
}

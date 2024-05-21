<?php

namespace App\Controllers;

// use App\Models\PermintaanLabModel;
use App\Models\HasilLabModel;
use DateTime;

class HasilLabController extends BaseController
{
    public function showAllData()
    {
        // $model = new HasilLabModel();
        // $data['hasil_lab'] = $model->findAll();
        // return view('pages/index', $data);

        // coba 1
        // $db      = \Config\Database::connect();
        // $builder = $db->table('permintaan_lab_wynacom');
        // $builder->select('*');
        // $builder->join('hasil_lab_waynacom', 'hasil_lab_waynacom.HisRegNo = permintaan_lab_wynacom.orderNumber', 'left');
        // $query = $builder->get();
        // $data['hasil_lab'] = $query->getResultArray();
        // return view('pages/index', $data);

        // Real one
        $db      = \Config\Database::connect();
        $builder = $db->table('permintaan_lab_wynacom');
        $builder->select('*');
        $query = $builder->get();
        $d['hasil_lab'] = $query->getResultArray();
        return view('pages/index', $d);
    }

    // public function search()
    // {
    //     $model = new HasilLabModel();
    //     $keyword = $this->request->getVar('keyword');
    //     $data['hasil_lab'] = $model->like('OrderDateSystem', $keyword)
    //         ->orLike('visitNumber', $keyword)
    //         ->orLike('HisRegNo', $keyword)
    //         ->findAll();
    //     return view('pages/index', $data);
    // }


    public function showByDate()
    {
        // coba 1
        $db      = \Config\Database::connect();
        date_default_timezone_set('Asia/Jakarta');
        $date = new DateTime('today');
        $builder = $db->table('permintaan_lab_wynacom');
        $builder->select('*');
        $builder->where('permintaan_lab_wynacom.orderDateSystem', $date->format('Y-m-d'));
        $query = $builder->get();
        $d['hasil_lab'] = $query->getResultArray();
        return view('pages/index', $d);
    }

    public function getLabResults($orderNumber = '')
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('hasil_lab_waynacom');
        $builder->select('*');
        $builder->join('permintaan_lab_wynacom', 'hasil_lab_waynacom.HisRegNo = permintaan_lab_wynacom.orderNumber', 'left');
        $builder->where('permintaan_lab_wynacom.orderNumber', $orderNumber);
        $query = $builder->get();
        $data = $query->getResultArray();
        return $this->response->setJSON($data);
    }
}

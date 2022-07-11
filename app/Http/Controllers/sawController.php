<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Model\Sapi;
class sawController extends Controller
{
    //
    public function get_matrix_nilai()
    {
        # code...
        $sapi = Sapi::all();
        foreach ($sapi as $key) {
            # code...
            preg_match_all('/[0-9]{3,}/m', $key->bobot, $matches, PREG_SET_ORDER, 0);
            $key->l_susu = $key->susu;
            $key->l_price = $key->Price_rupiah;
            $key->l_konsumsi = (float) filter_var($key->konsumsi, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
            $key->l_umur = preg_replace('/\D/', '', $key->umur);   
            $key->l_bobot = $matches[0][0];
        }
        return $sapi->all();
    }
    public function get_matrix_normalisasi()
    {
        # code...
        $options = \App\Model\Setting::getAllKeyValue();
        $c1 = json_decode($options['c1']);
        $c2 = json_decode($options['c2']);
        $c3 = json_decode($options['c3']);
        $c4 = json_decode($options['c4']);
        $c5 = json_decode($options['c5']);
        $sapi = $this->get_matrix_nilai();
        $temp_susu = [];
        $temp_price = [];
        $temp_konsumsi = [];
        $temp_umur = [];
        $temp_bobot = [];
        foreach ($sapi as $key) {
            # code...
            $temp_susu[] = $key->l_susu;
            $temp_price[] = $key->l_price;
            $temp_konsumsi[] = $key->l_konsumsi;
            $temp_umur[] = $key->l_umur;
            $temp_bobot[] = $key->l_bobot;
        }
        foreach ($sapi as $key) {
            # code...
            $key->n_susu = ($c1->is_cost) ? min($temp_susu)/$key->l_susu : $key->l_susu/max($temp_susu);
            $key->n_konsumsi = ($c2->is_cost) ? min($temp_konsumsi)/$key->l_konsumsi : $key->l_konsumsi/max($temp_konsumsi);
            $key->n_umur = ($c3->is_cost) ? min($temp_umur)/$key->l_ram : $key->l_umur/max($temp_umur);
            $key->n_bobot = ($c4->is_cost) ? min($temp_bobot)/$key->l_bobot : $key->l_bobot/max($temp_bobot);
            $key->n_price = ($c5->is_cost) ? min($temp_price)/$key->l_price : $key->l_price/max($temp_price);

        }
        return $sapi;
    }public function get_matrix_preferensi()
    {
        # code...
        $options = \App\Model\Setting::getAllKeyValue();
        $c1 = json_decode($options['c1']);
        $c2 = json_decode($options['c2']);
        $c3 = json_decode($options['c3']);
        $c4 = json_decode($options['c4']);
        $c5 = json_decode($options['c5']);
        $sapi = $this->get_matrix_normalisasi();
        foreach ($sapi as $key) {
            # code...
            $key->b_susu = $key->n_susu*$c1->weight;
            $key->b_konsumsi = $key->n_konsumsi*$c2->weight;
            $key->b_umur = $key->n_umur*$c3->weight;
            $key->b_bobot = $key->n_bobot*$c4->weight;
            $key->b_price = $key->n_price*$c5->weight;
            $key->nilai_preferensi = $key->b_susu+$key->b_konsumsi+$key->b_umur+$key->b_bobot+$key->b_price;
        }
        return $sapi;
    }

    public function matrix_nilai()
    {
        # code...
        $sapi = $this->get_matrix_nilai();
        return Datatables::of($sapi)
                ->setRowId(function(Sapi $sapi){
                    return $sapi->id;
                })->make(true);
    }
    public function matrix_normalisasi()
    {
        # code...
        $sapi = $this->get_matrix_normalisasi();
        return Datatables::of($sapi)
                ->setRowId(function(Sapi $sapi){
                    return $sapi->id;
                })->make(true);
    }public function matrix_preferensi()
    {
        # code...
        $sapi = $this->get_matrix_preferensi();
        return Datatables::of($sapi)
                ->setRowId(function(Sapi $sapi){
                    return $sapi->id;
                })->addColumn('aksi','admin.saw.action-button2')
                ->rawColumns(['aksi'])->make(true);
    }
}

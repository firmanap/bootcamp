<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Nilai;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function score(Request $request)
    {
        $jawaban = Jawaban::all();
        $nilai = Nilai::where('id_user', session()->get('id_user'))->where('id_materi', $request->materi)->get()->first();
        $data = 0;

        for ($x=1; $x<=100; $x++){
            $p = 'p'.$x;
            foreach ($jawaban as $val) {
                if ($request->$p == $val['id']){
                    if ($val['status'] == true ? $score = +(100/(count($request->all())-2)) : $score = +0);
                    $data += $score;
                }
            }
        }
        $score = round($data);


        if (!isset($nilai)) {
            Nilai::firstOrCreate(
              array(
                  'id_user' => session()->get('id_user'),
                  'id_materi' => $request->materi,
                  'nilai' => $score,
              )
            );
        }
        else {
            Nilai::updateOrCreate([
                'id' => $nilai['id'],
            ],
                [
                    'id_user' => session()->get('id_user'),
                    'id_materi' => $request->materi,
                    'nilai' => $score,
                ]
            );
        }

        return view('score')->with('score', $score);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Materi;
use App\Models\Ujian;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $materi = Materi::all();
        $ujian = Ujian::all();
        $jawaban = Jawaban::all();

        return view('ujian')->with('materi', $materi)->with('ujian', $ujian)->with('jawaban', $jawaban);
    }

    public function ujian(Request $request, $id)
    {
        $ujian = Ujian::where('id_materi', $id)->get();
        $jawaban = Jawaban::all();
        $id_materi = $id;

        return view('form-ujian', compact('ujian', 'jawaban', 'id_materi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $materi = Materi::all();

        return view('add-ujian')->with('materi', $materi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $ujian = new Ujian;
        $ujian->id_materi = $request->judul;
        $ujian->pertanyaan = $request->pertanyaan;
        $ujian->save();

        for ($x = 1; $x <= 2; $x+=1) {
            $jawaban = new Jawaban;

            $jawaban->id_ujian = $ujian->id;
            if ($x == 1) {
                $jawaban->jawaban = $request->jawaban1;
            } else {
                $jawaban->jawaban = $request->jawaban2;
            }
            if ($request->jawaban == $x) {
                $jawaban->status = true;
            } else {
                $jawaban->status = false;
            }

            $jawaban->save();
        }

        return redirect(route('ujian.index'))->with('success', 'Data materi berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param Ujian $ujian
     * @return Response
     */
    public function show(Ujian $ujian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Ujian $ujian
     * @return Response
     */
    public function edit(Ujian $ujian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Ujian $ujian
     * @return Response
     */
    public function update(Request $request, Ujian $ujian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Ujian $ujian
     * @return \Illuminate\Http\RedirectResponse|Response
     */
    public function destroy(Ujian $ujian)
    {
        $ujian->delete();

        return redirect()->back()->with('success', 'Data murid berhasil dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $description = "Menampilkan daftar siswa yang terdaftar";

        return view('students.index', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function show(string $id)
    {
        $title = "Sistem Sekolah - Detail Siswa";
        $description = "Menampilkan daftar siswa yang terdaftar";

        return view('students.show', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Menambahkan Siswa";
        $description = "Menampilkan daftar siswa yang terdaftar";

        return view('students.create', [
            'title' => $title,
            'description' => $description,
        ]);
    } 

    public function edit(string $id)
    {
        $title = "Sistem Sekolah - Edit Siswa";
        $description = "Menampilkan daftar siswa yang terdaftar";

        return view('students.edit', [
            'title' => $title,
            'description' => $description,
        ]);
    } 

    public function store()
    {
        return "Menambah data siswa baru";
    } 

    public function update(string $id)
    {
        return "Mengubah data siswa dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // 1. Endpoint Health Check (Wajib) 
    public function healthCheck()
    {
        return response()->json([
            'pesan' => 'API Katalog Buku',
            'status' => 'sehat',
            'versi' => '1.0.0'
        ], 200);
    }

    // 2. Endpoint List Semua Buku (GET) 
    public function index()
    {
        $books = Book::all();
        return response()->json($books, 200);
    }

    // 3. Endpoint Tambah Buku (POST) 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'tahun_terbit' => 'required|integer',
        ]);

        $book = Book::create($validated);
        return response()->json($book, 201);
    }

    // 4. Endpoint Detail Buku (GET) 
    public function show($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Buku tidak ditemukan'], 404);
        }
        return response()->json($book, 200);
    }
}
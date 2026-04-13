@extends('admin.layouts.app')

@section('content')
<div class="space-y-8">
    <!-- Page Header -->
    <div class="bg-white/80 backdrop-blur-xl rounded-2xl shadow-lg p-6 border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-800 tracking-tight">Data Transaksi</h1>
                <p class="text-gray-500 mt-1">Kelola data transaksi keluar dan masuk</p>
            </div>
            <div class="flex items-center space-x-3">
                <button class="px-4 py-2 bg-gradient-to-r from-indigo-500 to-purple-500 text-white text-sm font-semibold rounded-xl shadow-lg shadow-indigo-500/30">
                    + Tambah Transaksi
                </button>
            </div>
        </div>
    </div>

    <!-- Content Placeholder -->
    <div class="bg-white/80 backdrop-blur-xl rounded-2xl shadow-lg p-8 border border-gray-100">
        <div class="text-center py-12">
            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-indigo-500/30">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Data Transaksi</h3>
            <p class="text-gray-500">Halaman untuk mengelola data transaksi keluar dan masuk</p>
        </div>
    </div>
</div>
@endsection

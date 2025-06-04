@extends('layouts.app')
@section('title', 'List Produk')
@section('page_title', 'List Produk')
@section('content')

<!-- Display success/error messages -->
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        {{ session('error') }}
    </div>
@endif

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">Id</th>
                <th scope="col" class="px-6 py-3">Nama Produk</th>
                <th scope="col" class="px-6 py-3">Deskripsi Produk</th>
                <th scope="col" class="px-6 py-3">Harga</th>
                <th scope="col" class="px-6 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($nama) && count($nama) > 0)
                @foreach ($nama as $index => $item)
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $index + 1 }}
                    </th>
                    <td class="px-6 py-4">{{ $item }}</td>
                    <td class="px-6 py-4">{{ $desc[$index] }}</td>
                    <td class="px-6 py-4">Rp {{ number_format($harga[$index], 0, ',', '.') }}</td>
                    <td class="px-6 py-4 inline-flex">
                        <!-- Edit Button -->
                        <button onclick="editProduct({{ $id[$index] }})" 
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" 
                                type="button">
                            Edit
                        </button>
                        
                        <!-- Delete Button -->
                        <form method="post" action="{{ route('produk.delete', [$id[$index]]) }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" 
                                    type="submit" 
                                    onclick="return confirm('Are you sure you want to delete {{ $item }}?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                        Tidak ada data produk
                    </td>
                </tr>
            @endif
        </tbody>
    </table>

    <!-- Edit Modal -->
    <div id="edit-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-black bg-opacity-50 backdrop-blur-sm">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow-lg border border-gray-200 transform transition-all duration-300 ease-in-out scale-95 opacity-0" id="modal-content">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Edit Data Produk</h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" onclick="closeModal()">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Batal</span>
                    </button>
                </div>

                <form id="edit-form" class="p-4 md:p-5" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="edit-nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                            <input type="text" name="nama" id="edit-nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nama Produk" required>
                        </div>
                        <div class="col-span-2">
                            <label for="edit-harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                            <input type="number" name="harga" id="edit-harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="150000" required>
                        </div>
                        <div class="col-span-2">
                            <label for="edit-deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                            <textarea id="edit-deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Deskripsi Produk" required></textarea>                    
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Update Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mt-10">
    <h1 class="text-4xl font-black text-gray-900 text-center my-10">Tambah Produk</h1>
    <form method="POST" action="{{ route('produk.simpan') }}" class="max-w-sm mx-auto">
        @csrf
        <div class="mb-5">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
            <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Tambah nama produk" required />
        </div>
        <div class="mb-5">
            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Produk</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tambah deskripsi produk..." required></textarea>
        </div>
        <div class="mb-5">
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
            <input type="number" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="150000" required />
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tambah</button>
    </form>
</div>

<script>
function editProduct(id) {
    // Fetch product data
    fetch(`/listproduk/${id}/edit`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Fill the form with product data
                document.getElementById('edit-nama').value = data.data.nama;
                document.getElementById('edit-harga').value = data.data.harga;
                document.getElementById('edit-deskripsi').value = data.data.deskripsi;
                
                // Set form action
                document.getElementById('edit-form').action = `/listproduk/${id}`;
                
                // Show modal with animation
                showModal();
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat mengambil data produk');
        });
}

function showModal() {
    const modal = document.getElementById('edit-modal');
    const modalContent = document.getElementById('modal-content');
    
    // Show modal
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    
    // Add animation classes with slight delay for smooth transition
    setTimeout(() => {
        modalContent.classList.remove('scale-95', 'opacity-0');
        modalContent.classList.add('scale-100', 'opacity-100');
    }, 10);
    
    // Prevent body scrolling when modal is open
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('edit-modal');
    const modalContent = document.getElementById('modal-content');
    
    // Add closing animation
    modalContent.classList.remove('scale-100', 'opacity-100');
    modalContent.classList.add('scale-95', 'opacity-0');
    
    // Hide modal after animation completes
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        
        // Restore body scrolling
        document.body.style.overflow = 'auto';
    }, 300);
}

// Close modal when clicking outside
document.getElementById('edit-modal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        const modal = document.getElementById('edit-modal');
        if (!modal.classList.contains('hidden')) {
            closeModal();
        }
    }
});
</script>

@endsection
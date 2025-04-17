<!DOCTYPE html>
<html lang="en" data-theme="nord">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <script src="{{ asset('style/tailwindcss@4.js') }}"></script>
    <!-- Daisyui CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {},
            }
        }
    </script>
    <title>Daisyui with Tailwind CSS</title>
</head>
<body>
    <nav>
        <div class="navbar bg-white shadow-sm">
            <div class="flex-2">
                <img src="{{ asset('images/voltrans-green.png') }}" alt="Vpoltrans logo" class="w-10 h-10">
                <a class="text-2xl font-extrabold">Voltrans</a>
            </div>
            <div class="flex-none">
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /> </svg>
                        <span class="badge badge-sm indicator-item">8</span>
                    </div>
                    </div>
                    <div
                    tabindex="0"
                    class="card card-compact dropdown-content bg-base-100 z-1 mt-3 w-52 shadow">
                    <div class="card-body">
                        <span class="text-lg font-bold">8 Items</span>
                        <span class="text-info">Subtotal: $999</span>
                        <div class="card-actions">
                        <button class="btn btn-primary btn-block">View cart</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img
                            alt="Tailwind CSS Navbar component"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                    <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-emerald-700 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li>
                        <a class="justify-between">
                        Profile
                        <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main>
        {{-- Sidebar --}}
        <div class="flex">
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-blue-950 text-white h-[calc(100vh-2rem)] w-full max-w-[20rem] p-4 shadow-xl shadow-blue-gray-900/5">
                <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-white">
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-gray-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
                    <div class="grid place-items-center mr-4">
                        <i class="fa-solid fa-grip"></i>
                    </div>
                    <span class="font-bold">Dashboard</span>
                </div>
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
                    <div class="grid place-items-center mr-4">
                        <i class="fa-solid fa-car"></i>
                    </div>Data Kendaraan
                </div>
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
                    <div class="grid place-items-center mr-4">
                        <i class="fa-solid fa-users"></i>
                    </div>Data Customer 
                    <div class="grid place-items-center ml-auto justify-self-end">
                        <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-blue-200 text-blue-900 py-1 px-2 text-xs rounded-full" style="opacity: 1;">
                            <span>{{$data['jml_pengguna']}} </span>
                        </div>
                    </div>
                </div>
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
                    <div class="grid place-items-center mr-4">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>Data Pesanan
                </div>
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
                    <div class="grid place-items-center mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd"></path>
                    </svg>
                    </div>Pengaturan
                </div>
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-blue-50 hover:bg-opacity-80 focus:bg-blue-50 focus:bg-opacity-80 active:bg-blue-50 active:bg-opacity-80 hover:text-blue-900 focus:text-blue-900 active:text-blue-900 outline-none">
                    <div class="grid place-items-center mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z" clip-rule="evenodd"></path>
                    </svg>
                    </div>Log Out
                </div>
                </nav>
            </div>
        <div class="flex flex-col w-full p-4">
            <div class="overflow-hidden rounded-lg bg-white shadow-md">
                <div class="p-4">
                    <h2 class="font-bold">Dashboard</h2>
                    <p class="mt-2 text-gray-600">Welcome to your dashboard!</p>
                </div>
                <div class="p-4">
                    <div class="w-full self-end flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                        @foreach ($data as $item)
                        <div class="mb-5 p-5 lg:w-1/3 md:w-1/2"> 
                            <div class="flex flex-col bg-blue-900 rounded-3xl">
                                <div class="px-6 py-8 sm:p-10 sm:pb-6">
                                    <div class="grid items-center justify-center w-full grid-cols-1 text-left">
                                    <div class="text-center">
                                        <p class="mt-2 text-sm text-white">Data Pelanggan</p>
                                    </div>
                                    <div class="mt-6">
                                        <p class="text-center">
                                            <span class="text-5xl font-bold tracking-tight text-white">
                                                150
                                            </span>
                                        </p>
                                    </div>
                                    </div>
                                </div>
                                <div class="flex px-6 pb-8 sm:px-8">
                                    <a
                                    aria-describedby="tier-company"
                                    class="flex font-bold items-center justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-blue-200 border-2 border-black rounded-full inline-flex hover:bg-blue-500 hover:border-black hover:text-white focus:outline-none focus-visible:outline-black text-sm focus-visible:ring-black"
                                    href="#"
                                    >
                                    Cek
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>
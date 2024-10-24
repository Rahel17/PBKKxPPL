<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catatan Uang</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      <!-- Desktop sidebar -->
      <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
      >
        <div class="py-4 px-4 text-gray-500 dark:text-gray-400">
          <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#" style="display: flex; align-items: center;">
            <img src="{{ asset('assets/img/logo-himatif.png') }}" alt="" style="width: 40px; height: 40px; margin-right: 10px; object-fit: contain;">
            <h1 class="sitename">AdminKeu HIMATIF</h1>
        </a>
        
          <ul class="mt-6"></ul>
          <ul>
            <li class="relative px-3 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="forms.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  ></path>
                </svg>
                <span class="ml-4">Catatan Uang</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="cards.html"
              >
             </a>
            </li>
            
        </div>
      </aside>
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
      <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      ></div>
      <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            <img src="{{ asset('assets/img/logo-himatif.png') }}" alt="">
            <h1>class="sitename">AdminKeu HIMATIF</h1>
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="index.html"
              >
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="forms.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  ></path>
                </svg>
                <span class="ml-4">Catatan Uang</span>
              </a>
            </li>
            </li>
          </ul>
          <div class="px-6 my-6">
          </div>
        </div>
      </aside>
      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
          >
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu"
            >
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
          </div>
        </header>
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Catatan Uang
            </h2>

            <!-- Button Create Data Baru -->
            <div class="mb-4">
              <a href="{{ route('create') }}" class="px-4 py-2 font-semibold text-white bg-purple-600 rounded-lg hover:bg-purple-700">
                Masukkan Data Baru
              </a>
            </div>

            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">No</th>
                      <th class="px-4 py-3">HariTanggal</th>
                      <th class="px-4 py-3">Uraian</th>
                      <th class="px-4 py-3">Bidang</th>
                      <th class="px-4 py-3">Pemasukan</th>
                      <th class="px-4 py-3">Pengeluaran</th>
                      <th class="px-4 py-3">Total</th>
                      {{-- <th class="px-4 py-3">PenerimaPemberi</th> --}}
                      <th class="px-4 py-3">Panerima/Pemberi</th>
                      <th class="px-4 py-3">Bukti</th>
                      <th class="px-4 py-3">StatusSPJ</th>
                      <th class="px-4 py-3">Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @if (session('sukses'))
                        <div>{{ session('sukses') }}</div>
                    @endif
                    <tr class="text-gray-700 dark:text-gray-400">
                      @foreach ($data as $dt)
                      <td class="px-4 py-3", class="font-semibold">{{ $loop->iteration }}</td>
                      <td class="px-4 py-3 text-sm">{{ $dt->hari_tanggal }}</td>
                      <td class="px-4 py-3 text-sm">{{ $dt->uraian }}</td>
                      <td class="px-4 py-3 text-sm">{{ $dt->bidang }}</td>
                      <td class="px-4 py-3 text-sm">{{ 'Rp ' . number_format($dt->pemasukan, 0, ',', '.') }}</td>
                      <td class="px-4 py-3 text-sm">{{ 'Rp ' . number_format($dt->pengeluaran, 0, ',', '.') }}</td>
                      <td class="px-4 py-3 text-sm">{{ 'Rp ' . number_format($dt->total, 0, ',', '.') }}</td>
                      {{-- <td class="px-4 py-3 text-sm">{{ $dt->penerima_pemberi }}</td> --}}
                      <td class="px-4 py-3 text-sm">{{ $dt->anggota->nama }}</td>
                      <td class="px-4 py-3 text-sm">{{ $dt->bukti_transaksi ? 'Ada' : 'Tidak Ada' }}</td>
                      <td class="px-4 py-3 text-sm">{{ $dt->status_spj }}</td>
                      <td class="px-4 py-3 flex space-x-2">
                        <!-- Edit Button -->
                        <a href="{{ route('edit', $dt->id) }}" class="flex items-center px-3 py-1 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors duration-150">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.414 2.586a2 2 0 010 2.828l-9.828 9.828a1 1 0 01-.293.293l-4 2a1 1 0 01-1.316-1.316l2-4a1 1 0 01.293-.293l9.828-9.828a2 2 0 012.828 0zM15 6.414L13.586 5 5 13.586V15h1.414L15 6.414z" />
                          </svg>
                          Edit
                        </a>
                  
                        <!-- Delete Button -->
                        <form action="{{ route('destroy', $dt->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="flex items-center px-3 py-1 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition-colors duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M6 2a1 1 0 011-1h6a1 1 0 011 1v1h5a1 1 0 110 2H4a1 1 0 110-2h2V2zm1 4a1 1 0 00-1 1v9a1 1 0 001 1h6a1 1 0 001-1V7a1 1 0 00-1-1H7z" clip-rule="evenodd" />
                            </svg>
                            Delete
                          </button>
                        </form>
                      </td>
                    </tr>
                      @endforeach
                  </tbody>
                </table>
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>

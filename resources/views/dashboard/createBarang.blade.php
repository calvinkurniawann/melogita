<x-app-layout>
    <x-slot name="header">
        <p class="text-3xl">Create Barang</p>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5">
                <form class="max-w-sm mx-auto" action="/dashboard/barang" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="nama"
                            class="block mb-2 text-[15px] font-medium text-gray-900">Nama Produk:
                        </label>
                        <input type="text" id="nama" name="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-[15px] rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Vintera® II '70s Telecaster® Deluxe with Tremolo" required>
                    </div>
                    <div class="mb-5">
                        <label
                          for="deskripsi"
                          class="block mb-2 text-sm font-medium text-gray-900 "
                          >Deskripsi produk: </label
                        >
                        <textarea
                          id="deskripsi"
                          rows="4"
                          name="deskripsi"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Gitar ramah kantong pelajar."
                        ></textarea>
                      </div>
                    <div class="mb-5">
                        <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                        <select name="category_id" id="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                         @endforeach
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="harga"
                            class="block mb-2 text-[15px] font-medium text-gray-900 ">Harga Produk:
                        </label>
                        <input type="number" id="harga" name="harga"
                            class="bg-gray-50 border border-gray-300 text-white text-[15px] rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="19000000" required>
                    </div>
                    <div class="mb-5">
                        <label for="stok"
                            class="block mb-2 text-[15px] font-medium text-gray-900 ">Stok Produk:
                        </label>
                        <input type="number" id="stok" name="stok"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-[15px] rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="2" required>
                    </div>
                    <div class="mb-5">
                        <label for="gambar"
                            class="block mb-2 text-[15px] font-medium text-gray-900">Gambar Produk:
                        </label>
                        <input type="file" id="gambar" name="gambar"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-[15px] rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="2" required>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[15px] w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

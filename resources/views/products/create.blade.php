<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Product
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="/products" method="POST">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                                    <select id="type" name="type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>Book</option>
                                        <option>CD</option>
                                    </select>
                                </div>

                                <div class="col-span-6">
                                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                    <input type="text" name="title" id="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                           value="">
                                    @error('title')
                                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                                    <input type="text" name="author" id="author" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                           value="">
                                    @error('author')
                                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="other" class="block text-sm font-medium text-gray-700">Page/Play Length</label>
                                    <input type="text" name="other" id="other" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                           value="">
                                    @error('other')
                                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                    <input type="text" name="price" id="price" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                           value="">
                                    @error('price')
                                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="py-2"></div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

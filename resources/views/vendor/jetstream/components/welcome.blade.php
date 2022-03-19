<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        {{--        <x-jet-application-logo class="block h-12 w-auto" />--}}
    </div>

    <div class="mt-2 text-2xl">
        Welcome to your product application, {{ Auth::user()->name }}!
    </div>

    <div class="mt-2 text-gray-500">
    </div>
</div>

<div class="flex items-top min-h-screen bg-gray-50 dark:bg-gray-100">
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-2xl font-bold mb-4">General Statistics</h1>
        <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-4">
            <div class="p-5 bg-white rounded shadow-sm">
                <div class="text-base text-gray-400 ">Total Products</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">{{ \App\Models\Product::count() }}</div>
                </div>
            </div>
            <div class="p-5 bg-white rounded shadow-sm">
                <div class="text-base text-gray-400 ">Total Tasks</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">{{ \App\Models\Task::count() }}</div>
                </div>
            </div>
            <div class="p-5 bg-white rounded shadow-sm">
                <div class="text-base text-gray-400 ">Total Staff</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">{{ \App\Models\User::count() }}</div>
                </div>
            </div>
        </div>
        <br/>
        <div class="grid grid-cols-1 divide-y divide-black-500">
            <div></div>
            <div></div>
        </div>
        <br/>
        <h1 class="text-2xl font-bold mb-4">Stock Information</h1>
        <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-4">
            <div class="p-5 bg-white rounded shadow-sm">
                <div class="text-base text-gray-400 ">Total Stock Cost</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">£{{ \App\Models\Product::sum('price') }}</div>
                </div>
            </div>
            <div class="p-5 bg-white rounded shadow-sm">
                <div class="text-base text-gray-400 ">Min Product Price</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">£{{ \App\Models\Product::min('price') }}</div>
                </div>
            </div>
            <div class="p-5 bg-white rounded shadow-sm">
                <div class="text-base text-gray-400 ">Avg Product Price</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">£{{ substr(\App\Models\Product::avg('price'),0, 5) }}</div>
                </div>
            </div>
            <div class="p-5 bg-white rounded shadow-sm">
                <div class="text-base text-gray-400 ">Max Product Price</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 ">£{{ \App\Models\Product::max('price') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

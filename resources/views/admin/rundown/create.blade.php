@extends('admin.components.callback')

@section('title', 'Create Rundown')

@section('create_product')
    <div class="col-span-2">
        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h3 class="mb-4 text-xl font-semibold dark:text-white">Create New Rundown</h3>
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-6">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Short Description</label>
                        <textarea name="description" id="tinymce"></textarea>
                    </div>
                    <div class="col-span-6">
                        <label for="details_product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Details Full Product</label>
                        <textarea name="details_product" id="tinymce"></textarea>
                    </div>
                    <div class="col-span-6">
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">slug Product</label>
                        <input type="text" name="slug" id="slug" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Price Product" required>
                    </div>
                    <div class="col-span-6">
                        <label for="alt_text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">alt text</label>
                        <input type="text" name="alt_text" id="alt_text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Stock Product" required>
                    </div>
                    <div class="col-span-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="images">Upload file Product</label>
                        <input type="file" name="images" id="images" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" required accept="image/png, image/jpeg">
                    </div>
                    <div class="col-span-6">
                        <label for="pdf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload PDF</label>
                        <input type="file" name="pdf" id="pdf" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" accept="application/pdf">
                    </div>
                    <div class="col-span-6">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select name="category_id" id="category" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-6">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md">Create Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection



@section('scripts')
    <script>
        // Check for success message in session
        let successMessage = '{{ session('warning') }}';
        if (successMessage) {
            Toastify({
                text: successMessage,
                duration: 3000, // Duration in milliseconds
                gravity: 'top', // 'top' or 'bottom'
                position: 'center', // 'left', 'center', or 'right'
                backgroundColor: 'red', // Background gradient
                stopOnFocus: true, // Prevents dismissing of toast on hover
            }).showToast();
        }
    </script>
@endsection

@extends('admin.components.callback')

@section('title', 'Edit Rundown')

@section('agenda_create')
    <div class="col-span-2">
        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h3 class="mb-4 text-xl font-semibold dark:text-white">Edit Rundown</h3>
            <form action="{{ route('admin.agenda.update', $agenda->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Agenda</label>
                        <input type="text" name="date" id="date" value="{{ old('date', $agenda->date) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="col-span-6">
                        <label for="agenda" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agenda Acara</label>
                        <textarea name="agenda" id="tinymce">{{ old('agenda', $agenda->agenda) }}</textarea>
                    </div>
                    <div class="col-span-6">
                        <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time Agenda</label>
                        <input type="text" name="time" id="time" value="{{ old('time', $agenda->time) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="col-span-6">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md">Update Agenda</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts_tinymce')
    <script src="https://cdn.tiny.cloud/1/{{ env('TINYMCE_API_KEY') }}/tinymce/6/tinymce.min.js" referrerpolicy="origin">
    </script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#tinymce',
            width: 600,
            height: 300,
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen',
                'insertdatetime',
                'media', 'table', 'emoticons', 'template', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {
                    title: 'My Favorites',
                    items: 'code visualaid | searchreplace | emoticons'
                }
            },
            menubar: 'favs file edit view insert format tools table help',
        });
    </script>
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


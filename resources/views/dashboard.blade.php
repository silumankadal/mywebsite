<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                    <form action="{{ route('createproject') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label for="name" class="text-gray-900 dark:text-gray-100"><b>Project name</b></label>
                            <div class="col-lg-4 col-md-6 text-gray-900">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="text-gray-900 dark:text-gray-100"><b>language</b></label>
                            <div class="col-lg-4 col-md-6 text-gray-900">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="languages" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="text-gray-900 dark:text-gray-100"><b>category</b></label>
                            <div class="col-lg-4 col-md-6 text-gray-900">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="category" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="text-gray-900 dark:text-gray-100"><b>desc</b></label>
                            <div class="col-lg-4 col-md-6 text-gray-900">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="desc" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="text-gray-900 dark:text-gray-100"><b>thumnail</b></label>
                            <div class="col-lg-4 col-md-6 text-gray-900">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="thumbnail" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <button type="submit" class="btn btn-light btn-outline-dark btn-submit">Submit</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>

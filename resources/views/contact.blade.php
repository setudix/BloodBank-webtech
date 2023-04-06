<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex-col justify-center">
                <h3 class="m-4 font-semibold text-xl text-gray-800 leading-tight">
                    Contact Info
                </h3>
                
                <div class="flex justify-center">
                
                <table class="w-3/6 content-center text-sm text-left text-gray-500 dark:text-gray-400">
                    <tbody>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{$user->name}}
                            </th>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Blood Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{$user->blood_type}}
                            </th>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Zilla
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ isset($user->zilla->name) ? $user->zilla->name : '' }}

                            </th>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Thana
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ isset($user->thana->name) ? $user->thana->name : '' }}

                            </th>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{$user->email}}
                            </th>
                        </tr>
                
                    </tbody>
                </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
   <div class="max-w-3xl bg-white rounded p-8 shadow mx-auto mt-12">
    <form class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200">
            <div class="pt-8">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Personal Information
                    </h3>
                </div>
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="first_name" class="block text-sm font-medium text-gray-700">
                            First name
                        </label>
                        <div class="mt-1">
                            <input name="first_name" id="first_name" autocomplete="given-name" {{ implode(' ', $attributes->first_name) }}
                                class="shadow-sm border h-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="last_name" class="block text-sm font-medium text-gray-700">
                            Last name
                        </label>
                        <div class="mt-1">
                            <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                                class="shadow-sm border h-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email address
                        </label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email"
                                class="shadow-sm border h-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="button"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>
   </div>

</body>

</html>

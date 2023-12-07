<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title >Lab8</title>
</head>

<body class="text-[#303030] font-roboto">
    <nav class="fixed flex justify-between items-center h-16 border-b-2 z-30 w-full bg-white">
        <a class="mx-8 flex items-center font-black uppercase text-2xl" href="/">Lab 8</a>
        <ul class="flex space-x-6 mr-6 text-md items-center">
        </ul>
    </nav>



    <aside id="default-sidebar"
        class="fixed top-16 left-0 z-40 w-56 h-screen transition-transform -translate-x-full sm:translate-x-0 border-r-2"
        aria-label="Sidebar">
        <div class="h-full px-2 py-4 overflow-y-auto bg-gray-50 light:bg-gray-800">
            <ul class="text-sm h-full flex flex-col gap-1">
                <li class="px-2 rounded-lg uppercase font-bold">
                    Students
                </li>
                <li class="px-2 rounded-lg">
                    <a href="/"
                        class="flex items-center p-3 hover:bg-onHover rounded-lg group">
                        <i class="fa-solid fa-user pr-2"></i>
                        <span class="uppercase">
                            Students
                        </span>
                    </a>
                </li>
                <li class="px-2 rounded-lg">
                    <a href="/search"
                        class="flex items-center p-3 hover:bg-onHover rounded-lg group">
                        <i class="fa-solid fa-user pr-2"></i>
                        <span class="uppercase">
                            Search
                        </span>
                    </a>
                </li>
                <li class="px-2 rounded-lg uppercase font-bold">
                    Bank???
                </li>
                <li class="px-2 rounded-lg">
                    <a href="/account"
                        class="flex items-center p-3 hover:bg-onHover rounded-lg group">
                        <i class="fa-solid fa-user pr-2"></i>
                        <span class="uppercase">
                            Account
                        </span>
                    </a>
                </li>
                <li class="px-2 rounded-lg">
                    <a href="/transaction"
                        class="flex items-center p-3 hover:bg-onHover rounded-lg group">
                        <i class="fa-solid fa-user pr-2"></i>
                        <span class="uppercase">
                            Transaction
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main>
        <div {{ $attributes->merge(['class' => 'pt-4 absolute top-16 left-56 right-0 h-max bg-neutral']) }}>
        <div>
            {{ $slot }}
        </div>
    </main>

    {{-- <x-success />
    <x-alert />
    <x-warning /> --}}
</body>

</html>

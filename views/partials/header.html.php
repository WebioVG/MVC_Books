<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Kranky&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <title>MVC - Books</title>
</head>

<body>
    <header class="fixed w-full flex items-center justify-between h-[10vh] px-12 text-white text-lg bg-emerald-600 z-10">
        <a href="<?= BASE_URL ?>" class="font-['Kranky'] text-3xl">Books</a>
        <nav>
            <ul class="flex gap-8">
                <li><a href="<?= BASE_URL ?>/list" class="pb-1 hover:border-b">Our books</a></li>
                <li><a href="<?= BASE_URL ?>/add" class="pb-1 hover:border-b">Add a reference</a></li>
                <li><a href="<?= BASE_URL ?>/cart/list" class="pb-1 hover:border-b">Cart</a></li>
            </ul>
        </nav>
    </header>
    <div class="h-[10vh] mb-4"></div>

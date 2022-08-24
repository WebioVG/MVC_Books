<!DOCTYPE html>
<html>
<head>
    <title>MVC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <header class="flex items-center justify-between h-[10vh] px-6 text-lg bg-slate-200 mb-4">
        <h1>Logo</h1>
        <nav>
            <ul class="flex gap-4">
                <li><a href="<?= BASE_URL ?>">Home</a></li>
                <li><a href="<?= BASE_URL ?>/list">List</a></li>
                <li><a href="<?= BASE_URL ?>/add">Add</a></li>
            </ul>
        </nav>
    </header>

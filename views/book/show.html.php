<?php require __DIR__.'/../partials/header.html.php'; ?>
    
    <main class="flex items-center justify-center p-4">
        <section class="w-[500px] bg-slate-400 rounded p-3" href="<?= BASE_URL ?>/show/<?= $book->id ?>">
            <h3 class="font-bold text-center text-lg"><?= $book->title ?></h3>
            <hr class="block my-3">
            <p><span class="font-semibold">Price:</span> <?= $book->getPriceWithTaxes(20) ?>€</p>
            <p><span class="font-semibold">ISBN:</span> <?= $book->isbn ?></p>
            <p><span class="font-semibold">Author:</span> <?= $book->author ?></p>
            <p><span class="font-semibold">Released:</span> <?= $book->releasedAtYear ?></p>
        </section>
    </main>

<?php require __DIR__.'/../partials/footer.html.php'; ?>

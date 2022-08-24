<?php require __DIR__.'/../partials/header.html.php'; ?>
    
    <main class="grid grid-cols-4 gap-10 p-4">
        <?php if (! empty($books)) {
            foreach ($books as $book) { ?>
                <section class="bg-slate-400 rounded p-3">
                    <h3 class="font-bold"><?= $book->title ?></h3>
                    <hr class="block my-3">
                    <p><span class="font-semibold">Price:</span> <?= $book->price ?>€</p>
                    <p><span class="font-semibold">ISBN:</span> <?= $book->isbn ?></p>
                    <p><span class="font-semibold">Author:</span> <?= $book->author ?></p>
                    <p><span class="font-semibold">Released:</span> <?= $book->releasedAtYear ?></p>
                </section>
            <?php }
        } ?>
    </main>

<?php require __DIR__.'/../partials/footer.html.php'; ?>

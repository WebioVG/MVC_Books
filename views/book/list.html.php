<?php require __DIR__.'/../partials/header.html.php'; ?>

    <h2 class="text-center text-3xl font-bold mb-10">Our books</h2>
    
    <main class="grid grid-cols-3 gap-10 p-4 max-w-[1000px] mx-auto">
        <?php if (! empty($books)) {
            foreach ($books as $book) { ?>
                <section class="bg-slate-100/50 border rounded drop-shadow-lg backdrop-blur-xl">
                    <?php if ($book->image !== '') { ?>
                        <img class="rounded-t" src="<?= $book->image ?>" alt="book cover">
                    <?php } ?>
                    <div class="p-4">
                        <h3 class="font-bold text-xl text-center my-3"><?= $book->title ?></h3>

                        <hr class="block mb-5">

                        <div class="mb-5">
                            <p><span class="font-semibold">Price:</span> <?= $book->getPriceWithTaxes(20) ?>€</p>
                            <p><span class="font-semibold">ISBN:</span> <?= $book->isbn ?></p>
                            <p><span class="font-semibold">Author:</span> <?= $book->author ?></p>
                            <p><span class="font-semibold">Released:</span> <?= $book->releasedAtYear ?></p>
                        </div>
    
                        <div class="text-center mb-3">
                            <a class="inline-block rounded font-semibold px-4 py-1 text-white text-lg bg-emerald-600 duration-200 border border-2 border-emerald-600 hover:border-red-600" href="<?= BASE_URL ?>/cart/<?= $book->id ?>/add">Add to cart</a>
                        </div>

                        <div class="flex justify-around">
                            <a class="inline-block border border-emerald-600 rounded-xl px-4 py-1 hover:border-red-600" href="<?= BASE_URL ?>/show/<?= $book->id ?>">See</a>
                            <a class="inline-block border border-emerald-600 rounded-xl px-4 py-1 hover:border-red-600" href="<?= BASE_URL ?>/book/<?= $book->id ?>/edit">Edit</a>
                            <a class="inline-block border border-emerald-600 rounded-xl px-4 py-1 hover:border-red-600" href="<?= BASE_URL ?>/book/<?= $book->id ?>/delete">Delete</a>
                        </div>
                    </div>
                </section>
            <?php }
        } ?>
    </main>

<?php require __DIR__.'/../partials/footer.html.php'; ?>

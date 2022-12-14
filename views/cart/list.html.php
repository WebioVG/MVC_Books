<?php require __DIR__.'/../partials/header.html.php'; ?>
    
    <main class="p-4">
        <h2 class="text-center font-bold text-3xl mb-10">Cart</h2>

        <?php if (! empty($books)) { ?>
            <section class="border rounded p-4 max-w-[800px] mx-auto">
                <?php foreach ($books as $book) { ?>
                    <article class="flex justify-between border-b py-2">
                        <div class="flex">
                            <?php if ($book['book']->image !== '') { ?>
                                <img class="h-[100px] mr-4" src="../<?= $book['book']->image ?>" alt="book cover">
                            <?php } ?>
                            <div class="flex flex-col">
                                <h3 class="text-lg mb-1"><?= $book['book']->title ?></h3>
                                <span class="font-bold"><?= $book['book']->getPriceWithTaxes(20) ?>€</span>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div class="flex flex-col items-center justify-center gap-2">
                                <span class="italic">x<?= $book['quantity'] ?></span>
                                <span class="font-bold"><?= $cart->price($book['book']) ?>€</span>
                            </div>
                            <a href="<?= BASE_URL ?>/cart/<?= $book['book']->id ?>/delete" class="flex items-center">
                                <svg width="25" height="25" fill="#000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php } ?>
                <article class="text-end border-b py-2">
                    <div class="font-bold flex flex-col">
                        <span>Total</span>
                        <span class="text-lg"><?= $cart->total() ?>€</span>
                    </div>
                </article>
            </section>
        <?php } ?>
    </main>

<?php require __DIR__.'/../partials/footer.html.php'; ?>

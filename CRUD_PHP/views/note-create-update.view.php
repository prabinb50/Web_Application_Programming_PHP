<?php
  include 'partials/header.view.php';
  include 'partials/nav.view.php';
  include 'partials/banner.view.php';
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST">
      <div class="space-y-12">
        <div class="col-span-full">
          <input type="hidden" name="id" value="<?=
          // ---- Only needed for updating a note ----
          $note['id']
          // ------------------------------------------
          ?? '' ?>">

          <!-- ------ Only needed for updating a note ------ -->
          <?php if (isset($note['id'])) : ?>
            <input type="hidden" name="_method" value="PUT">
          <?php endif; ?>
          <!-- -------------------------------------------- -->

          <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
          <div class="mt-2">
            <textarea name="body" id="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?=
            // ---- Prefill the textarea with the note's body ----
            $_POST['body']
            // ---------------------------------------------------

            // ---- Only needed for updating a note ----
            ?? $note['body']
            // ------------------------------------------

            ?? '' ?></textarea>
            <?php if (isset($errors['body'])) : ?>
              <p class="text-red-500 text-sm"><?= $errors['body'] ?></p>
            <?php endif; ?>
          </div>
        </div>

        <button type="submit" class="rounded-md bg-indigo-600 mt-4 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          <?= isset($note['id']) ? 'Update' : 'Create' ?>
        </button>
      </div>
    </form>
  </div>
</main>

<?php
  include 'partials/footer.view.php';
?>
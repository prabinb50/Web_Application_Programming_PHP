
<?php
include 'views/partials/header.view.php';
include 'views/partials/nav.view.php';
include 'views/partials/banner.view.php';
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <a href="note-create.php" class="hover:underline text-blue-500">Create</a>

    <div class="space-y-4 mt-6">
      <?php foreach($notes as $note) : ?>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
          <p class="text-gray-800 text-lg leading-relaxed"><?=$note['body']?></p>

          <a href="note-update.php?id=<?=$note['id']?>" class="rounded-md bg-blue-600 mt-4 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>

          <form method="POST" class="inline">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?=$note['id']?>">
            <button type="submit" class="rounded-md bg-red-600 mt-4 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php
include 'views/partials/footer.view.php';
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/users.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/post.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/like.php'; ?>

<?php $auth = getAuth(); ?>

<div class="card post-item">

    <img src="https://via.placeholder.com/500x300?text=<?php echo $post['body']; ?>"
         class="card-img-top" alt="">

    <div class="card-body">

        <form action="../api/likes/store.php?id=<?php echo $post['id'] ?>" method="POST"
              class="mb-3 d-flex align-items-center">
            <button type="submit" class="btnpost btn btn-outline-danger btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
            </button>

            <span class="ms-2 text-muted">0 likes</span>
        </form>

        <p class="mb-0"><?php echo $post['body']; ?></p>
    </div>

    <div class="card-footer d-flex align-items-center justify-content-between">
        <small class="text-muted">il y a 10 min</small>
        <?php if ($auth['id'] === $post['user_id']): ?>
            <a class="btn btn-sm btn-outline-warning"
               href="/api/posts/edit.php?id=<?php echo $post['id'] ?>">Modifier</a>
        <?php endif; ?>
    </div>

</div>

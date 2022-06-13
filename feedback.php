<?php include 'inc/header.php'; ?>

<?php
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


  <h2>Past Feedback</h2>

    <?php if (empty($feedback)): ?>
        <p class="lead mt3">No feedback yet.</p>
    <?php else: ?>

    <?php foreach ($feedback as $fb): ?>
      <div class="card my-3 w-75 text-center">
      <div class="card-body">
        <?php echo $fb['body']; ?>
        <div class="text-secondary mt-2">
          <p>by <strong><?php echo $fb['name']; ?></strong> on <?php echo $fb['date']; ?></p>
        </div>
      </div>
    </div>
   <?php endforeach; ?>

   <?php endif; ?>
   
   <?php include 'inc/footer.php'; ?>
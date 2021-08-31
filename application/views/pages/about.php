<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="row mt-5 pt-5 d-flex justify-content-between">
        <div class="card" style="width: 28rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data['title']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo SITE_NAME; ?> app</h6>
                <p class="card-text"><?php echo $data['description'] ?></p>
            </div>
        </div>
        <div class="card" style="width: 28rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data['contacts']->title; ?></h5>
                <?php foreach($data['contacts'] as $key => $value) : ?>
                <?php if($key != 'title') echo '<p class="card-text">' . $key . ': ' . $value . '</p>'; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
  <h1></h1>
  <p class="lead"></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>
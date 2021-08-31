<?php require APPROOT . '/views/inc/header.php'; ?>
   
<div class="row mt-5 pt-4">
    <div class="col">
        <?php require APPROOT . '/views/inc/sidebar.php';  ?>
    </div>
    <div class="col">
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php  
                foreach ($data as $obj ) :?>
            <tr>
            <td><?php echo $obj->name; ?></td>
            <td><?php echo $obj->quantity . ' ' . $obj->unit; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>

    
<?php require APPROOT . '/views/inc/footer.php'; ?>
    
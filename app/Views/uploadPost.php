<?php
//print_r($categories);
?>
<section class="s-featured">
    <div class="row">
        <div class="col-full">
            <form action="" method="post" enctype="multipart/form-data">
                <input placeholder="Post title" type="text" name="title">
                <input placeholder="Post intro" type="text" name="intro">
                <textarea placeholder="Post content" name="content" id="summernote"></textarea>
                <select name="category">
                    <?php
                        foreach ($categories as $c) {
                            echo "<option value='".$c['id']."'>".$c['name']."</option>";
                        }
                    ?>

                </select>
                <input placeholder="Tags" type="text" name="tags">

                <input type="file" name="banner" required><br>
                <input type="submit" value="Send">

            </form>
        </div>
    </div>
</section>


<script type="text/javascript">
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
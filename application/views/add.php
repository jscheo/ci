<form action="/ci/index.php/topic/add" method="post" class="">
    <?php echo validation_errors(); ?>
    <input type="text" name="title" placeholder="제목" class="" />
    <textarea name="description" placeholder="본문" class="" rows="15" ></textarea>
    <input class="btn btn-primary" type="submit" />
</form>
<script>
    CKEDITOR.replace( 'description', {
        'filebrowserUploadMethod': 'form',
        'filebrowserUploadUrl' : '/ci/index.php/topic/upload_receive_from_ck'
    } );
</script>
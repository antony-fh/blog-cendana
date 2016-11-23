<?php include('bagian/header.php');
$id=$_GET['id'];
include_once('sc/model-blog.php');
use sc\_model_blog\model_blog as Blog; 
    $blog = new Blog;
    $data_blog = $blog->SELECT_BY_ID($id);
?>

<section id="hero">
</section>

<section id="content">
    <div class="container">
<section id="mainbar">
    
    <div class="blog-wrapper">
        
        <div class="blog-item">
            <h1 class="blog-title"><?php echo $data_blog['blog_judul']?></h1>
            <div class="blog-meta"><?php echo $data_blog['blog_tanggal']?></div>
            <p class="blog-content">
                <?php echo $data_blog['blog_isi']?>
            </p>
            <div class="blog-author">Wawan Kretek</div>
        </div>

    </div>

</section>

<?php include('bagian/sidebar.php');?>
<?php include('bagian/footer.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <section id="hero" class="hero">
        <div class="hero-1">
            <h1>Great design is invisible</h1>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <button>Button</button>
        </div>
        <div class="hero-2">
           <img src="image/header.png" alt="Header Pic">
        </div>
    </section>
    <section id="latest-blog" class="latest-blog">
        <h2 style="margin-bottom: 60px; margin-top: 60px;" >Latest Blog</h2>
        <div class="blog-posts">
            <?php include 'includes/data.php'; ?>
            <?php foreach ($blogPosts as $post): ?>
                <div class="post">
                    <img src="image/blog.png" alt="Blog Image">
                    <h3><?php echo $post['title']; ?></h3>
                    <p><?php echo $post['content']; ?></p>
                    <a href="<?php echo $post['link']; ?>">Learn more</a>
                </div>
            <?php endforeach; ?>
        </div>
        <button style="margin-top: 40px;">Button</button>
    </section>
    <section id="strategy" class="strategy">
        <h2>Our business strategy has helped many businesses across the globe</h2>
        <p>Lorem ipsum dolor sit amet consectetur. Elementum nisl duis tortor sed. Suspendisse lobortis vitae quis vehicula pellentesque sit id.</p>
        <img src="image/business.png" alt="Strategy Image">
    </section>
    <section id="partners" class="partners">
        <h2>Our Partners</h2>
        <div class="logos">
            <img src="image/partner.png" alt="Partner Logo">
            <img src="image/partner.png" alt="Partner Logo">
            <img src="image/partner.png" alt="Partner Logo">
            <img src="image/partner.png" alt="Partner Logo">
            <img src="image/partner.png" alt="Partner Logo">
        </div>
    </section>
    <section id="clients" class="clients">
        <h2>Our happy clients</h2>
        <div class="testimonials">
            <div class="testimonial">
                <p>Lorem ipsum dolor sit amet consectetur. Condimentum eget vitae ligula sed urna et sagittis interdum a. Blandit mattis mattis lobortis orci. Facilisis dui sagittis tempor egestas pellentesque eu maecenas. Risus lectus nisl.</p>
                <div class="client-info">
                    <img src="image/client0.png" alt="Client">
                    <p>Jacqueline Wright</p>
                    <p>Customer</p>
                </div>
            </div>
            <div class="testimonial">
                <p>Lorem ipsum dolor sit amet consectetur. Condimentum eget vitae ligula sed urna et sagittis interdum a. Blandit mattis mattis lobortis orci. Facilisis dui sagittis tempor egestas pellentesque eu maecenas. Risus lectus nisl.</p>
                <div class="client-info">
                    <img src="image/client.png" alt="Client">
                    <p>Hiek Dyna</p>
                    <p>Customer</p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php'; ?>
    <script src="scripts.js"></script>
</body>
</html>

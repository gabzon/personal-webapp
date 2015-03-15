<section id="home-header">
    <div class="ui vertical segment center aligned">
        <div class="ui page grid">
            <div class="column">
                <div class="ui two column grid stackable">
                    <div class="column right aligned">
                        <h1 class="grande">Creativity</h1>
                    </div>
                    <div class="column">
                        <h3>Inventing, experimenting, having fun, making mistakes, breaking rules, discovering</h3>
                    </div>
                    <div class="column right aligned">
                        <h1 class="grande">Leadership</h1>
                    </div>
                    <div class="column">
                        <h3>Listening, commucating, influencing, inspiring, learning, growing, serving</h3>
                    </div>
                </div>
                <hr>
                <h1 class="inmenso ui">Innovation</h1>
            </div>
        </div>
    </div>
</section>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

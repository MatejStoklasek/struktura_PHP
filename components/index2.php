<?php
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/../components/header.php";
?>

    <section>
        <?php
        $posts = [
                [
                'title' => 'Post 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                ],
                ["title" => "Post 1", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."],
        ];
        foreach ($posts as $post) {

            $title = $post['title'];
            $content = $post['content'];

            require __DIR__ . "/../components/post.php";
        }
        ?>
    </section>

<?php
require_once __DIR__ . "/../components/footer.php";
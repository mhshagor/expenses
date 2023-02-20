<!-- == Review part == -->
<?php
$reviews = [
    [
        'icon' => 'far fa-lightbulb',
        'review-count' => 73,
        'title' => 'Project Done'
    ],
    [
        'icon' => 'far fa-heart',
        'review-count' => 70,
        'title' => 'Satisfied clients'
    ],
    [
        'icon' => 'fas fa-magic',
        'review-count' => 50,
        'title' => 'Awards'
    ],
    [
        'icon' => 'fas fa-grin-alt',
        'review-count' => 73,
        'title' => 'Happy clients'
    ]
]
?>


<section id="review" class="bg-no-repeat bg-size-cover bg-position-center py-5" style="background-image: url('images/demo/review.jpg')">
    <div class="container-lg p-2">
        <div class="row">
            <?php
            foreach ($reviews as $items) {
            ?>
                <div class="col-3 text-center">
                    <i class="text-warning mb-3 fa-2x <?php echo $items['icon']?? '' ?>"></i>
                    <h3 class="font-weight-bold text-white mb-2"><?php echo $items['review-count']?? '' ?></h3>
                    <h6 class="text-white"><?php echo $items['title']?? '' ?></h6>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
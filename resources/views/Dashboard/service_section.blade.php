<!-- == Service Part == -->
<?php
$servicess = [
    [
        'icon' => 'fas fa-list',
        'title' => 'Professional Code',
        'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
    ],
    [
        'icon' => 'far fa-lightbulb',
        'title' => 'Creative Ideas',
        'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
    ],
    [
        'icon' => 'far fa-clone',
        'title' => 'SEO',
        'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
    ],
    [
        'icon' => 'far fa-heart',
        'title' => 'User Friendly',
        'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
    ],
    [
        'icon' => 'fas fa-magic',
        'title' => 'Web development',
        'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
    ],
    [
        'icon' => 'fas fa-sliders-h',
        'title' => 'Portfolio Option',
        'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
    ]
]
?>

<section id="services" class="bg-no-repeat bg-size-cover bg-position-center bg-attachment-fixed py-5" style="background-image: url('images/demo/serve.jpg')">
    <div class="container-lg">
        <div class="text-center">
            <h6 class="text-primary mb-0 font-weight-normal">My Services</h6>
            <h1 class="text-uppercase text-white mb-4">What I do</h1>
        </div>
        <!-- Service Content -->
        <div class="row g-2 g-lg-3 text-white justify-content-center">
            <!-- Service 1 -->
            <?php
            foreach ($servicess as $items) {
            ?> <div class="col-md-4 col-sm-6 col-11">
                    <div class="card p-5 bg-white bg-opacity-25 text-center h-100 border-0 hover-bg-opacity-0 transition-500">
                        <h2 class="text-warning mb-4 <?php echo $items['icon'] ?? '' ?>"></h2>
                        <h3 class="mb-4"><?php echo $items['title'] ?? '' ?></h3>
                        <p class="px-2"><?php echo $items['details'] ?? '' ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
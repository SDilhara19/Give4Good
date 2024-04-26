<div class="all-merchs" id="all-merchs">
    <h1>Buy and Help</h1>
    <?php foreach ($data['merchandise'] as $merch) { ?>
        <div class="fundraiser-merch">
            <div class="fundraiser-merch-container">
                
                <div class="fundraiser-merch-right">
                    <div class="merch-right-top">
                        <h2><?php echo $merch->product_name; ?></h2>

                        <div class="merch-description">
                            <p class="text-4" style="text-align: justify"> <?php echo $merch->description; ?></p>
                        </div>
                    </div>

                    <div class="merch-right-bottom">
                        <div class="merch-price">
                            <h1><?php echo "Rs. " . $merch->price; ?></h1>
                            <p class="text-4 color-green">
                                <?php echo $merch->percent_for_fund . '%' ?> of this product is for the fundraiser
                            </p>
                        </div>
                        <div class="merch-buy-button">
                            <button class="main-color-button" onclick="window.location.href = '<?php echo URLROOT ?>/Merchandise/buy/<?php echo $merch->id; ?>'">
                                Buy NOW!
                            </button>
                            <?php if ($merch->stock == 0) { ?>
                                <p class="text-4 color-red"> Stock not Available</p>
                            <?php } else if ($merch->stock <= 20) { ?>
                                    <p class="text-4 color-yellow"> Limited stock Available</p>
                            <?php } ?>

                        </div>

                    </div>

                </div>
                <div class="fundraiser-merch-left">
                    <div class="merch-img-container">
                        <img src="<?php echo URLROOT . $merch->merch_image ?>" alt="merch-image">
                    </div>
                </div>
            </div>

        </div>
    <?php } ?>

</div>
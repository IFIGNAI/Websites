<div class="tips_sect">
    <h1>TIPS FOR <?php echo $pageTitleCaps ?></h1>
    <p>SOME SIMPLE & HELPFUL TIPS</p>

    <div class="tips_block">
        <input type="checkbox" id="tip1" class="tip-checkbox" onchange="toggleTip('tip1_content')">
        <label for="tip1" class="tips_open">
            <p>TIP ONE: <?php echo $tipOneTitle ?></p>
            <span class="plus-icon">+</span>
        </label>
        <div id="tip1_content" class="tips_hidden">
            <p><?php echo $tipOne ?></p>
        </div>
    </div>

    <div class="tips_block">
        <input type="checkbox" id="tip2" class="tip-checkbox" onchange="toggleTip('tip2_content')">
        <label for="tip2" class="tips_open">
            <p>TIP TWO: <?php echo $tipTwoTitle ?></p>
            <span class="plus-icon">+</span>
        </label>
        <div id="tip2_content" class="tips_hidden">
            <p><?php echo $tipTwo ?></p>
        </div>
    </div>

    <div class="tips_block">
        <input type="checkbox" id="tip3" class="tip-checkbox" onchange="toggleTip('tip3_content')">
        <label for="tip3" class="tips_open">
            <p>TIP THREE: <?php echo $tipThreeTitle ?></p>
            <span class="plus-icon">+</span>
        </label>
        <div id="tip3_content" class="tips_hidden">
            <p><?php echo $tipThree ?></p>
        </div>
    </div>

    <div class="tips_block">
        <input type="checkbox" id="tip4" class="tip-checkbox" onchange="toggleTip('tip4_content')">
        <label for="tip4" class="tips_open">
            <p>TIP FOUR: <?php echo $tipFourTitle ?></p>
            <span class="plus-icon">+</span>
        </label>
        <div id="tip4_content" class="tips_hidden">
            <p><?php echo $tipFour ?></p>
        </div>
    </div>
</div>

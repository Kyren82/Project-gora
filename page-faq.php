<?php get_header(); ?>
<div class="faq-bg">
    <div class="faq-panel">
        <ul class="faq-list">
            <li><h2 class="faq-list-title">FAQ - Pytania i odpowiedzi</h2></li>
            <?php
            $faq_list = get_field("faq-list", "option");
            foreach($faq_list as $el) : ?>
                <li class="faq-list-li">
                    <p class="faq-question">
                        <?php echo($el['faq-li-question']) ?>
                    </p>
                    <div class="faq-list-line"></div>
                    <p class="answer">
                        <?php echo($el['faq-li-answer']) ?>
                    </p>
                </li>
            <?php endforeach; ?>
            
        </ul>
    </div>
</div> 
<?php get_footer(); ?>
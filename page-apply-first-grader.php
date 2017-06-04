<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="post-single">
                    <header>
                        <div class="page-header" style="margin-bottom: 36px;">
                            <h1 class="h2">Документи для зарахування до 1 класу</h1>
                        </div>
                    </header>
                    <div>
                        <p class="h5 text-center">
<?php
$curr_time = time();
$curr_year = date('Y');
$jan = mktime(0, 0, 0, 1, 1, $curr_year);
// useless $dec = mktime(23, 59, 59, 12, 31, $curr_year);
$april = mktime(0, 0, 0, 4, 1, $curr_year);
$sep = mktime(0, 0, 0, 9, 1, $curr_year);

if ($curr_time > $jan && $curr_time < $april) {
    echo 'З 1 квітня ' . $curr_year . ' року<br>розпочнеться прийом документів до 1 класу<br>на ' . $curr_year . '-' . ($curr_year + 1) . ' навчальний рік';
} else if ($curr_time > $april && $curr_time < $sep) {
    echo '1 квітня ' . $curr_year . ' року<br>розпочався прийом документів до 1 класу<br>на ' . $curr_year . '-' . ($curr_year + 1) . ' навчальний рік';
} else {
    echo 'З 1 квітня ' . ($curr_year + 1) . ' року<br>розпочнеться прийом документів до 1 класу<br>на ' . ($curr_year + 1) . '-' . ($curr_year + 2) . ' навчальний рік';
}
?>
                        </p>
                        <p style="margin-bottom: 8px;">Перелік документів, необхідних для прийому дитини до 1 класу Академічного ліцею</p>
                        <ul>
                            <li>Заява батьків або осіб, що їх замінюють.</li>
                            <li>Копія свідоцтва про народження дитини.</li>
                            <li>Медичні карти дитини (ф. № 26, ф. № 63).</li>
                            <li>Копія довідки про присвоєння дитині ідентифікаційного коду (<span style="border-bottom: 1px dotted #000;">якщо дитині вже присвоєний</span>).</li>
                        </ul>
                        <p class="alert alert-info">Зарахування дитини до навчального закладу відбувається на підставі медичних документів</p>
                        <p class="h4 text-center">Дні прийому документів</p>
                        <p>Понеділок – п’ятниця: з 09<sup>00</sup> до 17<sup>00</sup> год.</p>
                        <p><b>Звертатися:</b> 2-й поверх, приймальна директора,<br>
                            телефон для довідок  <kbd>62-30-51</kbd>
                        </small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
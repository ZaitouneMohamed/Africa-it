<?php

function GetStarsIcon($stars)
{
    $stars_var = "a";
    if ($stars >= 1 && $stars < 1.5) {
        $stars_var = `<i class='fas fa-star'></i>`;
    } elseif ($stars >= 1.5 && $stars < 2) {
        $stars_var = `<i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>`;
    }elseif ($stars >= 2 && $stars < 2.5) {
        $stars_var = `<i class="fas fa-star"></i><i class="fas fa-star"></i>`;
    }elseif ($stars >= 2.5 && $stars < 3) {
        $stars_var = `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>`;
    }elseif ($stars >= 3 && $stars < 3.5) {
        $stars_var = `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>`;
    }elseif ($stars >= 3.5 && $stars < 4) {
        $stars_var = `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>`;
    }elseif ($stars >= 4 && $stars < 4.5) {
        $stars_var = `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>`;
    }elseif ($stars >= 4.5 && $stars < 5) {
        $stars_var = `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>`;
    }else {
        $stars_var = `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>`;
    }
    // return $stars_var;
    return $stars;
}

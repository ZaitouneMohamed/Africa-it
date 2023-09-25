<?php

function GetStarsIcon($stars)
{
    if ($stars >= 1 && $stars < 1.5) {
        return  `<i class='fas fa-star'></i>`;
    } elseif ($stars >= 1.5 && $stars < 2) {
        return  `<i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>`;
    } elseif ($stars >= 2 && $stars < 2.5) {
        return  `<i class="fas fa-star"></i><i class="fas fa-star"></i>`;
    } elseif ($stars >= 2.5 && $stars < 3) {
        return  `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>`;
    } elseif ($stars >= 3 && $stars < 3.5) {
        return  `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>`;
    } elseif ($stars >= 3.5 && $stars < 4) {
        return  `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>`;
    } elseif ($stars >= 4 && $stars < 4.5) {
        return  `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>`;
    } elseif ($stars >= 4.5 && $stars < 5) {
        return  `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>`;
    } else {
        return  `<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>`;
    }
}

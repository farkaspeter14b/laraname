<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/doctor-house', function () {
    return 'Nemcsak az emberek megalazásával lehet gőzt kiereszteni; mondják, hogy a bowling jobb még ennél is.
    ';
});

Route::get('/uvegtigris/csoki', function () {
    return 'Mennyire vagy túsz ? Sörhöz odaférsz?';
});

Route::get('/ugegtigris/lali', function () {
    return 'Az egybubis az egy kicsit drágább, mert hát abból ki kellett vennem a többi bubit.';
});

Route::get('.modern-family', function () {
    return 'A siker mindig 1 százalék ihlet, plusz 98 százalék verejték, végül
    pedig 2 százalék odafigyelés.';
});

Route::get('.harry-potter.hermione', function () {
    return 'Még egy ilyen remek ötlet, és mindhárman meghalunk, vagy akár ki
    is csaphatnak!';
});

Route::get('.modern-family', function () {
    return 'A siker mindig 1 százalék ihlet, plusz 98 százalék verejték, végül
    pedig 2 százalék odafigyelés.';
});

Route::get('.harry-potter.fred-es-george', function () {
    return '– Mindig is tudtuk hol a határ - bólintott Fred
    - És csak óvatosan léptük át - tette hozzá George.';
});

Route::get('/naptar/ma', function () {
    $pbjDateTime = new DateTime('NOW');
    return 'Y-M-D';
});

Route::get('/naptar/holnap', function () {
    $pbjDateTime = new DateTime('NOW');
    $pbjDateTime->sub(new DateInterval('P1D'));
    return $pbjDateTime->format('Y-M-D');
});

Route::get('/naptar/tegnap', function () {
    $pbjDateTime = new DateTime('NOW');
    $pbjDateTime->sub(new DateInterval('P1D'));
    return $pbjDateTime->format('Y-M-D');
});

Route::get('/szamologep/{szam1}{muvelet}{szam2}', function ($szam1, $muvelet, $szam2) {
    $szam = 0;
    switch ($muvelet) {
        case '+':
            $szam = $szam1 + $szam2;
        break;
        case '-':
            $szam = $szam1 - $szam2;
        break;
        case '*':
            $szam = $szam1 * $szam2;
            break;
        default:
            # code...
            break;
    }
});

Route::get('/szamologep/{szam1}{szam2}', function ($szam1, $szam2) {
    return $szam1 / $szam2;
}

Route::get('', function ($nap) {
    $be = $nap;
    switch ($be) {
        case 'hétfő':
            return 1;
            break;
            case 'kedd':
                return 2;
                break;
                case 'szerda':
                    return 3;
                    break;
                    case 'csütörtök':
                        return 4;
                        break;
                        case 'péntek':
                            return 5;
                            break;
                            case 'szombat':
                                return 6;
                                break;
                                case 'vasárnap':
                                    return 7;
                                    break;
        
        default:
            return 'no';
            break;
    }
}

Route::get('', function ($nap) {
    $be = $nap;
    switch ($be) {
        case 1:
            return 'hétfő';
            break;
            case 'kedd':
                return 1;
                break;
                case 'szerda':
                    return 1;
                    break;
                    case 'csütörtök':
                        return 1;
                        break;
                        case 5:
                            return 'péntek';
                            break;
                            case 6:
                                return 'szombat';
                                break;
                                case 7:
                                    return 'vasárnap';
                                    break;
        
        default:
            return 'no';
            break;
    }
}
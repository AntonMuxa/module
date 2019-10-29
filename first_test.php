<?php

    require_once("utils.php");

    /**
     * Function receives an array with integer numbers,
     * should return its sum. It is not alowed to use built-in php functions.
     *
     * Функция получает на вход массив чисел, должна вернуть сумму этих чисел.
     * Не использовать встроенные функции суммирования php.
     *
     * @param array $arr
     * @return integer
     */
    function my_sum($arr) {
		$total_sum = 0;
        foreach($arr as $item) {
			$total_sum += $item;
		}
		return (int)$total_sum;
    }


    /**
     * Function receives a long string with many words.
     * It should return the same string, but words,
     * larger then 6 symbols, should be changed, symbols
     * after the sixth one should be replaced by symbol *
     *
     * Функция получает на вход длинную строку с множеством слов.
     * Она должна вернуть ту же строку, но в словах, которые длиннее 6 символов,
     * функция должна вместо всех символов после шестого поставить одну звездочку.
     * Пример: Из слова 'verwijdering' должно получиться 'verwij*'
     *
     * @param string $shortMe
     * @return string
     */
    function shortener($shortMe) {
		$arr = [];
	    foreach(explode(' ', $shortMe) as $item) {
		    $length = strlen($item);
		    if($length > 6) {
				$word = substr($item, 0, 6) . '*';
				$arr[] = $word;
		    } else {
				$arr[] = $item;
		    }
	    }
	    return implode(' ', $arr);
    }
    /**
     * Function receives an array of strings.
     * Please return number of strings, which
     * length is at least 2 symbols and first character
     * is equal to the last character
     *
     * Функция получает на вход массив строк. Вернуть надо количество строк,
     * которые не короче двух символов и у которых первый и последний
     * символ совпадают.
     *
     * @param array $arr
     * @return number
     */
    function compare_ends($arr) {
		$counter = 0;
        foreach($arr as $item) {
			if(strlen($item) >= 2 && substr($item, 0, 1) == substr($item, -1)) {
				$counter++;
			}
		}
		return $counter;
    }



    /**
     * Function receives a string, should return this string reversed.
     *
     * Функция получает на вход строку, должна вернуть ее перевернутой.
     *
     * @param string $str
     * @return string
     */
    function reverse_string($str) {
		$str_arr = str_split($str);
		$new_arr = [];
        for($i = count($str_arr)-1; $i >= 0; $i--) {
			$new_arr[] = $str_arr[$i];
		}
		return implode($new_arr);
    }
	
	function arrays_compare($arr1, $arr2) {
		return max(array_map(function($a, $b) { return abs(strlen($a)-strlen($b)); }, $arr1, $arr2));
	}

test_shortener();

test_compare_ends();

test_my_sum();

test_reverse_string();

test_arrays_compare();











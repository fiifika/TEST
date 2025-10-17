<?php
// File: Validator.php
function validateAge($age) {
    if (!is_numeric($age)) {
        throw new InvalidArgumentException("Umur harus berupa angka");
    }
    if ($age < 0) {
        throw new InvalidArgumentException("Umur tidak boleh negatif");
    }
    return true;
}

function validateName($name) {
    // Nama tidak boleh berupa angka
    if (is_numeric($name)) {
        throw new InvalidArgumentException("Nama tidak boleh berupa angka");
    }

    // Nama tidak boleh kosong setelah di-trim
    if (trim($name) === '') {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }

   return true;
}
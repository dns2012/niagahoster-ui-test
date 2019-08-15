<?php 

$data = array(
    array(
        "package_name"  =>  "Bayi",
        "fake_price"    =>  19900,
        "price"         =>  14900,
        "registered"    =>  938,
        "power"         =>  "0.5X RESOURCE POWER",
        "features"      =>  array(
            "<strong>500 MB</strong> Disk Space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> Database",
            "<strong>1</strong> Domain",
            "<strong>Instant</strong> Backup",
            "<strong>Unlimited</strong> SSL Gratis Selamanya"
        ),
        "best"          =>  0,
        "button_text"    =>  "Pilih Sekarang"
    ),
    array(
        "package_name"  =>  "Pelajar",
        "fake_price"    =>  46900,
        "price"         =>  23450,
        "registered"    =>  4168,
        "power"         =>  "1X RESOURCE POWER",
        "features"      =>  array(
            "<strong>Unlimited</strong> Disk Space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> POP3 Email",
            "<strong>Unlimited</strong> Databases",
            "<strong>10</strong> Addon Domains",
            "<strong>Instant</strong> Backup",
            "<strong>Domain</strong> Gratis Selamanya",
            "<strong>Unlimited</strong> SSL Gratis Selamanya"
        ),
        "best"          =>  0,
        "button_text"    =>  "Pilih Sekarang"
    ),
    array(
        "package_name"  =>  "Personal",
        "fake_price"    =>  58900,
        "price"         =>  38900,
        "registered"    =>  10017,
        "power"         =>  "2X RESOURCE POWER",
        "features"      =>  "",
        "features"      =>  array(
            "<strong>Unlimited</strong> Disk Space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> POP3 Email",
            "<strong>Unlimited</strong> Databases",
            "<strong>Unlimited</strong> Addon Domains",
            "<strong>Instant</strong> Backup",
            "<strong>Domain</strong> Gratis Selamanya",
            "<strong>Unlimited</strong> SSL Gratis Selamanya",
            "<strong>Private</strong> Name Server",
            "<strong>SpamAssasin</strong> Mail Protection"
        ),
        "best"          =>  1,
        "button_text"    =>  "Pilih Sekarang"
    ),
    array(
        "package_name"  =>  "Bisnis",
        "fake_price"    =>  109900,
        "price"         =>  65900,
        "registered"    =>  3552,
        "power"         =>  "3X RESOURCE POWER",
        "features"      =>  array(
            "<strong>Unlimited</strong> Disk Space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> POP3 Email",
            "<strong>Unlimited</strong> Databases",
            "<strong>Unlimited</strong> Addon Domains",
            "<strong>Magic Auto</strong> Backup & Restore",
            "<strong>Domain</strong> Gratis Selamanya",
            "<strong>Unlimited</strong> SSL Gratis Selamanya",
            "<strong>Private</strong> Name Server",
            "<strong>Prioritas</strong> Layanan Support",
            "<strong>SpamExpert</strong> Pro Mail Protection"
        ),
        "best"          =>  0,
        "button_text"    =>  "Diskon 40%"
    ),
);

echo json_encode($data);
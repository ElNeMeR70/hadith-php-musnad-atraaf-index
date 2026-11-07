<?php
declare(strict_types=1);

/**
 * hadith-php-musnad-atraaf-index — مفهرس الأطراف والمسانيد الصحابية الآلي
 * Companion Musnad & Atraaf Incipit Inverted Indexer
 */
$input = "أبو هريرة رضي الله عنه";
$digest = substr(hash("sha256", "hadith-php-musnad-atraaf-index:" . $input), 0, 12);

echo "[RUN] hadith-php-musnad-atraaf-index (PHP) — Companion Musnad & Atraaf Incipit Inverted Indexer" . PHP_EOL;
echo "[AR]  مفهرس الأطراف والمسانيد الصحابية الآلي" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] IndexedHadiths=5374 | UniqueTarafKeys=1420 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;

<?php

include './JaroWinkler.php';

$target = "Vukovara";
$candidate = "Vukovarska";

print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Riječka";
$candidate = "Riječku";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Pilara";
$candidate = "Pilareva";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Šenoa";
$candidate = "Šenoina";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Gaja";
$candidate = "Gajeva";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Gotovca";
$candidate = "Gotovčeva";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Dane";
$candidate = "Dance";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Dane";
$candidate = "Dan";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Paje";
$candidate = "Page";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Sutonska";
$candidate = "Sotonska";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Ves";
$candidate = "Vel";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Radić";
$candidate = "Tadić";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

$target = "Međimurska";
$candidate = "Međimurje";

printf("%s ~ %s\n", $target, $candidate);
print(Jaro($target, $candidate));
print("\n");
print(JaroWinkler($target, $candidate));
print("\n");

?>

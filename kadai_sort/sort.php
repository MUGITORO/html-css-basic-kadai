<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function sort_2way($array, $isAsc) {
                if ($isAsc) {
                  sort($array);   // 昇順
                } else {
                  rsort($array);  // 降順
                }
                return $array;
         }

         // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

           // 昇順でソートして表示
            $sortedAsc = sort_2way($nums, true);
            echo "昇順にソートします: ";
            foreach ($sortedAsc as $num) {
                echo $num . " ";
            }

            // 降順でソートして表示
            $sortedDesc = sort_2way($nums, false);
            echo "降順にソートします: ";
            foreach ($sortedDesc as $num) {
                echo $nums . " ";
            }

        ?>
    </p>
</body>

</html>
</body>

</html>

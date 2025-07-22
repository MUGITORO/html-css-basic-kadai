<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

         function sort_2way($array, $order) {
             if ($order === 'asc') {
                 sort($array);  // 昇順ソート
             } elseif ($order === 'desc') {
                 rsort($array); // 降順ソート
             } else {
                 return;
             }

             return $array;
         }

         // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

            // 昇順にソート
            $sortedAsc = sort_2way($nums, 'asc');
            echo '昇順にソートします';

            print_r($sortedAsc);

            // 昇順にソート
           $sortedDesc = sort_2way($nums, 'desc');
            echo '降順にソートします';

            print_r($sortedDesc);

        ?>
    </p>
</body>

</html>

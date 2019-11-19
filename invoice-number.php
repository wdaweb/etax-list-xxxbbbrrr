<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>開奬號碼輸入</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="item">
        <li><a href="./invoice-number-list.php">開奬號碼查詢</a></li>
        <li><a href="./index.html">回首頁</a></li>
    </div>

    <h1>發票中獎號碼單</h1>
    <div class="item">
        <form action="./invoice-number-received.php" method="POST">
            <table border=1>
                <tr>
                    <td colspan="3">
                        年度：<input type="text" name="year" id="year">
                    </td>
                </tr>
                <tr>
                    <td>月份</td>
                    <td>
                        <select name="month" id="month">
                            <option value="1">1~2月</option>
                            <option value="2">3~4月</option>
                            <option value="3">5~6月</option>
                            <option value="4">7~8月</option>
                            <option value="5">9~10月</option>
                            <option value="6">11~12月</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>特別獎</td>
                    <td>
                        <input type="text" name="number1">
                    </td>
                </tr>
                <tr>
                    <td>特獎</td>
                    <td>
                        <input type="text" name="number2">
                    </td>
                </tr>
                <tr>
                    <td>頭獎</td>
                    <td>
                        <input type="text" name="number3"><br>
                        <input type="text" name="number4"><br>
                        <input type="text" name="number5">
                    </td>
                </tr>
                <tr>
                    <td>二獎</td>
                    <td>末 7 位數號碼與頭獎中獎號碼末 7 位相同者</td>
                </tr>
                <tr>
                    <td>三獎</td>
                    <td>末 6 位數號碼與頭獎中獎號碼末 6 位相同者</td>
                </tr>
                <tr>
                    <td>四獎</td>
                    <td>末 5 位數號碼與頭獎中獎號碼末 5 位相同者</td>
                </tr>
                <tr>
                    <td>五獎</td>
                    <td>末 4 位數號碼與頭獎中獎號碼末 4 位相同者</td>
                </tr>
                <tr>
                    <td>六獎</td>
                    <td>末 3 位數號碼與頭獎中獎號碼末 3 位相同者</td>
                </tr>
                <tr>
                    <td>增開六獎</td>
                    <td>
                        <input type="text" name="number6"><br>
                        <input type="text" name="number7"><br>
                        <input type="text" name="number8">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" value="送出">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
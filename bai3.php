<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 3</title>
</head>
<body>
    <h1>Bài 3</h1>
    <form method="post" action="">
        <label for="number1">Nhập số thứ nhất:</label>
        <input type="number" name="number1" id="number1" required><br><br>
        
        <label for="number2">Nhập số thứ hai:</label>
        <input type="number" name="number2" id="number2" required><br><br>
        
        <label for="operation">Chọn phép tính:</label>
        <select name="operation" id="operation">
            <option value="add">Tính tổng</option>
            <option value="subtract">Tính hiệu</option>
            <option value="multiply">Tính tích</option>
            <option value="divide">Tính thương</option>
            <option value="is_prime">Kiểm tra nguyên tố (số thứ nhất)</option>
            <option value="is_even">Kiểm tra chẵn/lẻ (số thứ nhất)</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Thực hiện">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number1 = $_POST['number1'];
        $number2 = isset($_POST['number2']) ? $_POST['number2'] : 0;
        $operation = $_POST['operation'];
        
        // Hàm tính tổng
        function add($a, $b) {
            return $a + $b;
        }

        // Hàm tính hiệu
        function subtract($a, $b) {
            return $a - $b;
        }

        // Hàm tính tích
        function multiply($a, $b) {
            return $a * $b;
        }

        // Hàm tính thương
        function divide($a, $b) {
            if ($b == 0) {
                return "Lỗi: Không thể chia cho 0!";
            }
            return $a / $b;
        }

        // Hàm kiểm tra số nguyên tố
        function is_prime($n) {
            if ($n < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        // Hàm kiểm tra số chẵn
        function is_even($n) {
            return $n % 2 == 0;
        }

        // Xử lý phép toán
        switch ($operation) {
            case 'add':
                echo "Kết quả: " . add($number1, $number2);
                break;
            case 'subtract':
                echo "Kết quả: " . subtract($number1, $number2);
                break;
            case 'multiply':
                echo "Kết quả: " . multiply($number1, $number2);
                break;
            case 'divide':
                echo "Kết quả: " . divide($number1, $number2);
                break;
            case 'is_prime':
                echo $number1 . (is_prime($number1) ? " là số nguyên tố." : " không phải là số nguyên tố.");
                break;
            case 'is_even':
                echo $number1 . (is_even($number1) ? " là số chẵn." : " là số lẻ.");
                break;
            default:
                echo "Vui lòng chọn một phép tính hợp lệ.";
        }
    }
    ?>
</body>
</html>

</body>
</html>
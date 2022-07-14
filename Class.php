<?php
class Storage
{
    protected array $prices;

    /**
     * Метод для внесения данных
     */
    public function SetValue($price, $date)
    {
        $this->prices[] = array(
            'price' => $price,
            'date' => $date
        );
    }
    
    /**
     * Метод для отображения цен
     */
    public function DisplayPrice()
    {
        $prices = $this->prices;
        $five = date('Y-m-d H:i:s', strtotime('-5 minutes'));
        $fifteen = date('Y-m-d H:i:s', strtotime('-15 minutes'));
        $hour = date('Y-m-d H:i:s', strtotime('-1 hour'));
        $four = date('Y-m-d H:i:s', strtotime('-4 hour'));
        $day = date('Y-m-d H:i:s', strtotime('-1 day'));
        $i = 0;
        foreach ($prices as $price) {
            if ($price['date'] > $five) {
                $prices_five[$i]['price'] = $price['price'];
                $i++;
            }
            if ($price['date'] > $fifteen) {
                $prices_fifteen[$i]['price'] = $price['price'];
                $i++;
            }
            if ($price['date'] > $hour) {
                $prices_hour[$i]['price'] = $price['price'];
                $i++;
            }
            if ($price['date'] > $four) {
                $prices_four[$i]['price'] = $price['price'];
                $i++;
            }
            if ($price['date'] > $day) {
                $prices_day[$i]['price'] = $price['price'];
                $i++;
            }
        }

        echo 'Максимальное в промежутке 5 минут: ' . implode('', max($prices_five)) . '</br>';
        echo 'Минимальное в промежутке 5 минут: ' . implode('', min($prices_five)) . '</br>';

        echo 'Максимальное в промежутке 15 минут: ' . implode('', max($prices_fifteen)) . '</br>';
        echo 'Минимальное в промежутке 15 минут: ' . implode('', min($prices_fifteen)) . '</br>';

        echo 'Максимальное в промежутке 1 часа: ' . implode('', max($prices_hour)) . '</br>';
        echo 'Минимальное в промежутке 1 часа: ' . implode('', min($prices_hour)) . '</br>';

        echo 'Максимальное в промежутке 4 часов: ' . implode('', max($prices_four)) . '</br>';
        echo 'Минимальное в промежутке 4 часов: ' . implode('', min($prices_four)) . '</br>';

        echo 'Максимальное в промежутке 1 дня: ' . implode('', max($prices_day)) . '</br>';
        echo 'Минимальное в промежутке 1 дня: ' . implode('', min($prices_day)) . '</br>';

    }
}
$test = new Storage();
$test->SetValue(45, date('Y-m-d H:i:s', strtotime("now")));
$test->SetValue(20, date('Y-m-d H:i:s', strtotime("now")));
$test->SetValue(112, date('Y-m-d H:i:s', strtotime("now")));
$test->SetValue(150, date('Y-m-d H:i:s', strtotime("-15 minutes")));
$test->SetValue(5, date('Y-m-d H:i:s', strtotime("-15 minutes")));
$test->SetValue(250, date('Y-m-d H:i:s', strtotime("-1 day")));
$test->SetValue(170, date('Y-m-d H:i:s', strtotime("-4 hours")));
$test->SetValue(3, date('Y-m-d H:i:s', strtotime("-3 hours")));
$test->SetValue(50, date('Y-m-d H:i:s', strtotime("-45 minutes")));
$test->SetValue(90, date('Y-m-d H:i:s', strtotime('now')));
$test->SetValue(60, date('Y-m-d H:i:s', strtotime('-15 minutes')));
$test->DisplayPrice();

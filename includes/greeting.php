       <?php
        date_default_timezone_set('Europe/Bucharest');

        $hour = date("g");
        $m = date("A");

        if ($m == "AM") {
            if ($hour == 12) {
                echo "Good Night!";
            } elseif ($hour < 4) {
                echo "Good Evening!";
            } elseif ($hour > 3) {
                echo "Good Morning!";
            }
        } elseif ($m == "PM") {
            if ($hour == 12) {
                echo "Good Afternoon!";
            } elseif ($hour < 6) {
                echo "Good Afternoon!";
            } elseif ($hour > 5) {
                echo "Good Evening!";
            }
        }

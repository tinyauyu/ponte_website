<?php // Prepare GET data
    
    $OR = intval($_GET['OR']);
    $ORB = intval($_GET['ORB']);
    $CR = intval($_GET['CR']);
    $CRB = intval($_GET['CRB']);

    if($OR+$ORB+$CR+$CRB == 0){
        header("Location: http://www.pontesingers.org/payment/2016_payment.php?error=zeroquantity");
        exit();
    }

    $i = 1;

    $query = array();
    // $query['notify_url'] = 'http://jackeyes.com/ipn';
    $query['cmd'] = '_cart';
    $query['charset'] = 'utf-8';
    $query['upload'] = '1';
    $query['business'] = 'ponte.singers@gmail.com';
    $query['currency_code'] = 'HKD';
    $query['lc'] = 'zh_HK';
    $query['return'] = 'http://www.pontesingers.org/payment/success.php';
    
    if(isset($_GET['OR']) && $OR > 0){
        $query['item_name_'.$i] = '普通 Ordinary - 奧．蹟 Mysterium misericordiæ';
        $query['item_number_'.$i] = 'Ponte2016-OR';
        $query['amount_'.$i] = '280.00';
        $query['quantity_'.$i] = $OR;
        $i = $i + 1;
    }

    if(isset($_GET['ORB']) && $ORB > 0){
        $query['item_name_'.$i] = '普通 (視線受阻) Ordinary (Sight Line Blocking) - 奧．蹟 Mysterium misericordiæ';
        $query['item_number_'.$i] = 'Ponte2016-ORB';
        $query['amount_'.$i] = '160.00';
        $query['quantity_'.$i] = $ORB;
        $i = $i + 1;
    }

    if(isset($_GET['CR']) && $CR > 0){
        $query['item_name_'.$i] = '優惠 Concessionary - 奧．蹟 Mysterium misericordiæ';
        $query['item_number_'.$i] = 'Ponte2016-CR';
        $query['amount_'.$i] = '200.00';
        $query['quantity_'.$i] = $CR;
        $i = $i + 1;
    }

    if(isset($_GET['CRB']) && $CRB > 0){
        $query['item_name_'.$i] = '優惠 (視線受阻) Concessionary (Sight Line Blocking) - 奧．蹟 Mysterium misericordiæ';
        $query['item_number_'.$i] = 'Ponte2016-CRB';
        $query['amount_'.$i] = '100.00';
        $query['quantity_'.$i] = $CRB;
    }

    // Prepare query string
    $query_string = http_build_query($query);

    header('Location: https://www.paypal.com/cgi-bin/webscr?' . $query_string);

?>
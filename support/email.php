<?php // Prepare GET data

    $displayName_type = $_POST['displayName_type'];
    $displayName = "無名氏 Anonymous";
    if( $displayName_type=="Chinese" ){
      $displayName = $_POST['displayName_chi'];
    } else if( $displayName_type=="English" ){
      $displayName = $_POST['displayName_eng'];
    } else if( $displayName_type=="Anonymous" ){
      $displayName = "無名氏 Anonymous";
    }

    $query = array();
    
    $query['from'] = $_POST['email'];
    $query['subject'] = '[Online Donation Form] 來自 '.$_POST['name'].' 的 $'.$_POST['donation_amount'].' 捐款';
    $query['return_url'] = 'http://www.pontesingers.org/support/success.php';

    $query['text'] = "<table class='table'>
              <tbody>
                <tr>
                  <td>我希望支持 Ponte Singers，現捐助 $ 港幣<br>I would like to support Ponte Singers, in the donation of $ HK</td>
                  <td class='center'>".$_POST['donation_amount']."</td>

                </tr>
                <tr>
                  <td>
                    <h5 style='font-weight:bold;'>捐款人資料 Benefactor's information</h5>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>姓名<br>Name</td>
                  <td class='center'>".$_POST['name']."</td>
                </tr>
                <tr>
                  <td>機構名稱<br>Organization Name</td>
                  <td class='center'>".$_POST['organization_name']."</td>
                </tr>
                <tr>
                  <td>電話<br>Tel</td>
                  <td class='center'>".$_POST['tel']."</td>
                </tr>
                <tr>
                  <td>電郵<br>E-mail</td>
                  <td class='center'>".$_POST['email']."</td>
                </tr>
                <tr>
                  <td>刊登於場刊之鳴謝姓名<br>Name to be acknowledged in house programme (more than HK$500)</td>
                  <td>".$displayName."</td>
                </tr>
              </tbody>
            </table>";
    
    // Prepare query string
    $query_string = http_build_query($query);

    header('Location: https://ponte-emailservice.herokuapp.com/email?' . $query_string);

?>
<?php
$field_email = $_POST['email'];
$field_name = $_POST['employee-name'];
$field_search = $_POST['search']; 
$field_full_item_name = $_POST['full-item-name'];
$field_pattern = $_POST['pattern'];
$field_ply = $_POST['ply'];
$field_speed_rating = $_POST['speed-rating'];
$field_type = $_POST['type'];
$field_manufacturer_code = $_POST['manufacturer-code'];
$field_item_brand = $_POST['item-brand'];
$field_supplier_name = $_POST['supplier-name'];
$field_base_unit = $_POST['base-unit'];
$field_tread_depth = $_POST['tread-depth'];
$field_selling_price = $_POST['selling-price'];
 
$mail_to = 'james.muthii@tireworld.co.ke';
$subject = 'Please Create '.$field_full_item_name;

$body_message = 'From: '.$field_name."\n";
$body_message = 'From: '.$field_email."\n";
$body_message .= 'Have I Searched? '.$field_email."\n";
$body_message .= 'Item Name: '.$field_full_item_name;
$body_message = 'Pattern: '.$field_pattern."\n";
$body_message = 'Ply rating: '.$field_ply."\n";
$body_message = 'Speed rating: '.$field_speed_rating."\n";
$body_message = 'Product Type: '.$field_type."\n";
$body_message = 'Manufacturer\'s code: '.$field_manufacturer_code."\n";
$body_message = 'Item brand: '.$field_item_brand."\n";
$body_message = 'Supplier name: '.$field_supplier_name."\n";
$body_message = 'Base unit: '.$field_base_unit."\n";
$body_message = 'Tread depth: '.$field_tread_depth."\n";
$body_message = 'Selling price: '.$field_selling_price."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you for the feedback.');
        window.location = 'index.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Something went wrong. Please try again or contact at myPersonalEmail@email.com');
        window.location = 'index.html';
    </script>
<?php
}

?>
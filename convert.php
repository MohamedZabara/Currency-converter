

<?php
if (isset($_POST["submit"])) {
    $from = $_POST["from"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];
    $string = $from . "_" . $to;

    $curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_URL => "https://free.currconv.com/api/v7/convert?q=$string&compact=ultra&apiKey=fd55cfc3414a85420588",
	    CURLOPT_RETURNTRANSFER => 1
	));

	$response = curl_exec($curl);
  $response = json_decode($response, true);
	$rate = $response[$string];
	$total = $rate * $amount;
  $value = "  $amount $from to $to = $total " ;

}else{
  $value="  Enter your info.  ";
}
?>


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</br>
</br>
<h2 style="text-align:center">Currency converter</h2>
</br>
<div class="container">
  <form method="POST">
    <div class="form-group">
      <p style="font-family:verdana">From</p>

        <select name="from" class="browser-default custom-select custom-select-lg mb-3">

      <option selected>USD</option>
      <option value="EUR">EUR</option>
      <option value="AUD">AUD</option>
      <option value="EGP">EGP</option>
      <option value="JPY">JPY</option>
      <option value="TRY">TRY</option>
      <option value="AED">AED</option>
      <option value="CAD">CAD</option>
      <option value="DZD">DZD</option>
      <option value="KWD">KWD</option>
      <option value="SYB">SYB</option>
      <option value="ZAR">ZAR</option>
      <option value="BHD">BHD</option>
      <option value="IDR">IDR</option>
      <option value="SAR">SAR</option>
      <option value="MAD">MAD</option>
      <option value="CNY">CNY</option>
      <option value="KRW">KRW</option>
      <option value="KPW">KPW</option>
      <option value="LBP">LBP</option>
      <option value="MYR">MYR</option>
      <option value="XCD">XCD</option>
      <option value="SEK">SEK</option>
      <option value="BND">BND</option>
      <option value="IRR">IRR</option>
      <option value="IQD">IQD</option>
      <option value="INR">INR</option>
      <option value="LYD">LYD</option>
      <option value="NZD">NZD</option>
      <option value="QAR">QAR</option>
      <option value="OMR">OMR</option>
      <option value="RSD">RSD</option>
      <option value="TZS">TZS</option>
      <option value="AMD">AMD</option>
      <option value="JOD">JOD</option>
      <option value="PKR">PKR</option>
      <option value="BTC">BTC</option>
      </select>
</select>
    </div>

    <div class="form-group">
      <p style="font-family:verdana">To</p>
      <select name="to" class="browser-default custom-select custom-select-lg mb-3">
  <option selected>EGP</option>
  <option value="EUR">EUR</option>
  <option value="AUD">AUD</option>
  <option value="USD">USD</option>
  <option value="JPY">JPY</option>
  <option value="TRY">TRY</option>
  <option value="AED">AED</option>
  <option value="CAD">CAD</option>
  <option value="DZD">DZD</option>
  <option value="KWD">KWD</option>
  <option value="SYB">SYB</option>
  <option value="ZAR">ZAR</option>
  <option value="BHD">BHD</option>
  <option value="IDR">IDR</option>
  <option value="SAR">SAR</option>
  <option value="MAD">MAD</option>
  <option value="CNY">CNY</option>
  <option value="KRW">KRW</option>
  <option value="KPW">KPW</option>
  <option value="LBP">LBP</option>
  <option value="MYR">MYR</option>
  <option value="XCD">XCD</option>
  <option value="SEK">SEK</option>
  <option value="BND">BND</option>
  <option value="IRR">IRR</option>
  <option value="IQD">IQD</option>
  <option value="INR">INR</option>
  <option value="LYD">LYD</option>
  <option value="NZD">NZD</option>
  <option value="QAR">QAR</option>
  <option value="OMR">OMR</option>
  <option value="RSD">RSD</option>
  <option value="TZS">TZS</option>
  <option value="AMD">AMD</option>
  <option value="JOD">JOD</option>
  <option value="PKR">PKR</option>
  <option value="BTC">BTC</option>
</select>


    </div>

    <div class="form-group">
      <p style="font-family:verdana">Amount</p>
        <input class="form-control" type="number" value="1" min="1" name="amount" placeholder="Amount" /> <br />
    </div>

    <input class="btn btn-success" type="submit" value="Convert" name="submit" /> <br />
 </br>
 </br>
    <label style="margin-left: 250px; background-color:#d5f4e6; font-family:courier; font-size:270%;" class="control-label"><?php echo $value; ?></label>
  <form/>
</div>

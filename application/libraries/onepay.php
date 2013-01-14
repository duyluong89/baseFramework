<?php
/**
 * OnePay Class - Tich hop trong thanh toan truc tuyen.
 * @author: Vo Hoang Tuan
 * @copyright 2012 Vo Hoang Tuan
 * @version 2.1: class.onepay.php
**/
class Onepay
{
	//private $onepay_url = 'http://mtf.onepay.vn/onecomm-pay/vpc.op';
	// link that thanh toan noi dia
	private $onepay_url = 'https://onepay.vn/onecomm-pay/vpc.op';
	
	// Get and URL Encode the AgainLink. Add the AgainLink to the array
	// Shows how a user field (such as application SessionIDs) could be added
	//$_POST['AgainLink']=urlencode($HTTP_REFERER);
	
	// Khóa bí mật - được cấp bởi OnePAY
	private $secure = '';
	
	// Mã merchante site 
	private $merchant = '';	// được cấp bởi OnePAY

	// Mật khẩu bảo mật
	private $access = ''; // được cấp bởi OnePAY
	
	// function cài đặt cac bien private trong class
	public function setupMerchant($merchant, $access, $secure)
	{
		$this->merchant = $merchant;
		$this->access = $access;
		$this->secure = $secure;
	}
	public function build_link($order_id, $total_amount, $order_info, $url_return)
	{
		// tạo chuỗi dữ liệu được bắt đầu bằng khóa bí mật
		$md5HashData = $this->secure;
		// sắp xếp dữ liệu theo thứ tự a-z trước khi nối lại
		// arrange array data a-z before make a hash
		
		$mang = array
		(
			'Title' => 'VPC 3-Party',
			'vpc_Merchant' => $this->merchant,
			'vpc_AccessCode' => $this->access,
			'vpc_MerchTxnRef' => $order_id,
			'vpc_OrderInfo' => $order_info,
			'vpc_Amount' => $total_amount*100,
			'vpc_ReturnURL' => $url_return,
			'vpc_Version' => '1',
			'vpc_Command' => 'pay',
			'vpc_Locale' => 'en',
			'vpc_Currency' => 'USD'
		);
		ksort($mang);
		$vpcURL = '';
		foreach($mang as $key => $value)
		{
			$vpcURL .= '&' . urlencode($key) . "=" . urlencode($value);
			$md5HashData .= $value;
		}
		$vpcURL = ltrim($vpcURL, '&');
		$vpcURL = $this->onepay_url . '?' . $vpcURL;
		if( strlen($this->secure) > 0)
		{
			$vpcURL .= "&vpc_SecureHash=" . strtoupper(md5($md5HashData));
		}
		return $vpcURL;
	}
	public function validate($mang)
	{
		$vpc_Txn_Secure_Hash = $mang["vpc_SecureHash"];
		unset($mang["vpc_SecureHash"]);
		
		// set a flag to indicate if hash has been validated
		$errorExists = false;
		
		if (strlen ($this->secure) > 0 && $mang["vpc_TxnResponseCode"] != "7" && $mang["vpc_TxnResponseCode"] != "No Value Returned")
		{
			$md5HashData = $this->secure;
			
			// sort all the incoming vpc response fields and leave out any with no value
			foreach($mang as $key => $value)
			{
				if($key != "vpc_SecureHash" || strlen($value) > 0) $md5HashData .= $value;
			}
			
			// Validate the Secure Hash (remember MD5 hashes are not case sensitive)
			// This is just one way of displaying the result of checking the hash.
			// In production, you would work out your own way of presenting the result.
			// The hash check is all about detecting if the data has changed in transit.
			if (strtoupper($vpc_Txn_Secure_Hash) == strtoupper(md5($md5HashData))) {
				// Secure Hash validation succeeded, add a data field to be displayed
				// later.
				$hashValidated = "CORRECT";
			} else {
				// Secure Hash validation failed, add a data field to be displayed
				// later.
				$hashValidated = "INVALID HASH";
			}
		} else {
			// Secure Hash was not validated, add a data field to be displayed later.
			$hashValidated = "INVALID HASH";
		}
		return $hashValidated;
	}
	// This method uses the QSI Response code retrieved from the Digital
	// Receipt and returns an appropriate description for the QSI Response Code
	//
	// @param $responseCode String containing the QSI Response Code
	//
	// @return String containing the appropriate description
	//
	public function getResponseDescription($responseCode) {
		
		switch ($responseCode) {
			case "0" :
				$result = "Giao dịch thành công - Approved";
				break;
			case "1" :
				$result = "Ngân hàng từ chối giao dịch - Bank Declined";
				break;
			case "3" :
				$result = "Mã đơn vị không tồn tại - Merchant not exist";
				break;
			case "4" :
				$result = "Không đúng access code - Invalid access code";
				break;
			case "5" :
				$result = "Số tiền không hợp lệ - Invalid amount";
				break;
			case "6" :
				$result = "Mã tiền tệ không tồn tại - Invalid currency code";
				break;
			case "7" :
				$result = "Lỗi không xác định - Unspecified Failure ";
				break;
			case "8" :
				$result = "Số thẻ không đúng - Invalid card Number";
				break;
			case "9" :
				$result = "Tên chủ thẻ không đúng - Invalid card name";
				break;
			case "10" :
				$result = "Thẻ hết hạn/Thẻ bị khóa - Expired Card";
				break;
			case "11" :
				$result = "Thẻ chưa đăng ký sử dụng dịch vụ - Card Not Registed Service(internet banking)";
				break;
			case "12" :
				$result = "Ngày phát hành/Hết hạn không đúng - Invalid card date";
				break;
			case "13" :
				$result = "Vượt quá hạn mức thanh toán - Exist Amount";
				break;
			case "21" :
				$result = "Số tiền không đủ để thanh toán - Insufficient fund";
				break;
			case "99" :
				$result = "Người sủ dụng hủy giao dịch - User cancel";
				break;
			default :
				$result = "Giao dịch thất bại - Failured";
		}
		return $result;
	}
	
	//  -----------------------------------------------------------------------------
	// If input is null, returns string "No Value Returned", else returns input
	public function null2unknown($data) {
		if ($data == "") {
			return "No Value Returned";
		} else {
			return $data;
		}
	}
	//  ----------------------------------------------------------------------------

}
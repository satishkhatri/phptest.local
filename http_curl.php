<?php
/**
 * Created by PhpStorm.
 * User: skhatri
 * Date: 11/05/2016
 * Time: 14:33
 */

global $market_opt;
$monthly_income=$_POST['monthly_income'];

if (isset($_POST['marketing_opt_in'])) { $market_opt = 0; }
else { $market_opt = 1; }
function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") { $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]; }
    else { $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; }
    return $pageURL;
}
if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $client_ip = $_SERVER['HTTP_CLIENT_IP']; }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR']; }
else { $client_ip = $_SERVER['REMOTE_ADDR']; }

$client_ip = preg_replace("#/[^/]+#", "", $client_ip);
$client_ip = preg_replace('/^([^,]*).*$/', '$1', $client_ip);

$data = array();
$data["campaign_code"] = $_POST['campaign_code'];
$data["mode"] = $_POST['mode'];
$data["affiliate_app_id"] = $_POST['affiliate_app_id'];
$data["loan_amount"] = $_POST['loan_amount'];
$data["loan_term"] = $_POST['loan_term'];
$data["loan_purpose"] = $_POST['loan_purpose'];
$data["first_name"] = $_POST['first_name'];
$data["last_name"] = $_POST['last_name'];
$data["gender"] = $_POST['gender'];
$data["dob"] = $_POST['dob_year'] . "-" . $_POST['dob_month'] . "-" . $_POST['dob_day'];
$data["marital_status"] = $_POST['marital_status'];
$data["dependent_number"] = $_POST['dependent_number'];
$data["email"] = $_POST['email'];
$data["home_phone"] = $_POST['home_phone'];
$data["mobile_phone"] = $_POST['mobile_phone'];
$data["residence_type"] = $_POST['residence_type'];
$data["postcode"] = $_POST['postcode'];
$data["address1"] = $_POST['address1'];
$data["address2"] = $_POST['address2'];
$data["city"] = $_POST['city'];
$data["county"] = $_POST['county'];
$data["months_at_address"] = $_POST ["months_at_address"] + $_POST['years_at_address']*12;
$data["home_value"] = $_POST['home_value'];
$data["prev_postcode"] = $_POST['prev_postcode'];
$data["prev_address1"] = $_POST['prev_address1'];
$data["prev_address2"] = $_POST['prev_address2'];
$data["prev_city"] = $_POST['prev_city'];
$data["prev_county"] = $_POST['prev_county'];
$data["prev_residence_type"] = $_POST['prev_residence_type'];
$data["prev_months_at_address"] = $_POST ["prev_months_at_address"] + $_POST['prev_years_at_address']*12;
$data['has_other_household_income'] = $_POST['has_other_household_income'];
$data['remaining_mortgage'] = $_POST['remaining_mortgage'];
$data['benefits'] = $_POST['benefits'];
$data["income_source"] = $_POST['income_source'];
$data["employer_name"] = $_POST['employer_name'];
$data["work_phone"] = $_POST['work_phone'];
$data["months_at_employer"] = $_POST['months_at_employer']+$_POST['years_at_employer']*12;
$data["monthly_income"] = preg_replace("/[^0-9]/", "", $monthly_income);
$data["employment_industry"] = $_POST['employment_industry'];
$data["income_pay_frequency"] = $_POST['income_pay_frequency'];
$data['income_payment_type'] = $_POST['income_payment_type'];
$data['next_pay_date'] = $_POST['next_pay_date_year'] . "-" . $_POST['next_pay_date_month'] . "-" . $_POST['next_pay_date_day'];
$data['has_pension'] = $_POST['has_pension'];
$data['other_income'] = $_POST['other_income'];
$data["rental_mortgage_payments"] = $_POST['rental_mortgage_payments'];
$data["existing_loan_payments"] = $_POST['existing_loan_payments'];
$data['bank_account_type'] = $_POST['bank_account_type'];
$data['bank_account_number'] = $_POST['bank_account_number'];
$data['bank_sort_code'] = $_POST['bank_sort_code'];
$data['additional_job_income'] = $_POST['additional_job_income'];
$data['pension_income'] = $_POST['pension_income'];
$data['rental_income'] = $_POST['rental_income'];
$data['additional_job_income'] = $_POST['additional_job_income'];
$data['home_value'] = $_POST['home_value'];
$data["marketing_opt_in"] = $market_opt;
$data["bills"] = $_POST['bills'];
$data["site_url"] = curPageURL();
$data["site_ip"] = $_SERVER['REMOTE_ADDR'];
$data["client_ip"] = $client_ip;
$data["client_agent"] = $_SERVER['HTTP_USER_AGENT'];
$data["network"] = $_POST['network'];
$data["device"] = $_POST['device'];
$data["gclid"] =  $_POST['gclid'];
$data["v1"] = $_POST['v1'];
$data["v2"] = $_POST['v2'];
$data["v3"] = $_POST['v3'];
$data["v4"] = $_POST['v4'];
$data["v5"] = $_POST['v5'];
$data["i1"] = $_POST['i1'];
$data["i2"] = $_POST['i2'];
$data["i3"] = $_POST['i3'];
$data["i4"] = $_POST['i4'];
$data["i5"] = $_POST['i5'];
$data["terms_consent"] = $_POST['terms_consent'];
$data["other_expenses"] = $_POST['other_expenses'];
$data["transport"] = $_POST['transport'];
$data["food"] = $_POST['food'];

function post($data) {
    $api_url = 'https://www.kredito24.pl/broker/submission/quint?';
    $request_string = http_build_query($data, '', '&');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$api_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request_string);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response_string = curl_exec($ch);
    if (curl_errno($ch)) {
        $code = 0; // network error
        $state = "ERROR";
        $message = 'Network Error';
        $error[] = curl_error($ch);
        var_dump($error);
    } else { parse_response($response_string); }
    curl_close($ch);
}

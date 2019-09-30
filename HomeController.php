<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

//use IP2LocationLaravel class
use IP2LocationLaravel;			

class HomwController extends Controller
{
        public function index(Request $request){
		
		// fetch the ip address of the visitor 
		$strIP = $request->server('REMOTE_ADDR');
		
		// pass the visitor ip address to ip2location
		$arrLocation = IP2LocationLaravel::get($strIP);

		echo 'IP Number             : ' . $arrLocation['ipNumber'] . "<br>";
		echo 'IP Version            : ' . $arrLocation['ipVersion'] . "<br>";
		echo 'IP Address            : ' . $arrLocation['ipAddress'] . "<br>";
		echo 'Country Code          : ' . $arrLocation['countryCode'] . "<br>";
		echo 'Country Name          : ' . $arrLocation['countryName'] . "<br>";
		echo 'Region Name           : ' . $arrLocation['regionName'] . "<br>";
		echo 'City Name             : ' . $arrLocation['cityName'] . "<br>";
		echo 'Latitude              : ' . $arrLocation['latitude'] . "<br>";
		echo 'Longitude             : ' . $arrLocation['longitude'] . "<br>";
		echo 'Area Code             : ' . $arrLocation['areaCode'] . "<br>";
		echo 'IDD Code              : ' . $arrLocation['iddCode'] . "<br>";
		echo 'Weather Station Code  : ' . $arrLocation['weatherStationCode'] . "<br>";
		echo 'Weather Station Name  : ' . $arrLocation['weatherStationName'] . "<br>";
		echo 'MCC                   : ' . $arrLocation['mcc'] . "<br>";
		echo 'MNC                   : ' . $arrLocation['mnc'] . "<br>";
		echo 'Mobile Carrier        : ' . $arrLocation['mobileCarrierName'] . "<br>";
		echo 'Usage Type            : ' . $arrLocation['usageType'] . "<br>";
		echo 'Elevation             : ' . $arrLocation['elevation'] . "<br>";
		echo 'Net Speed             : ' . $arrLocation['netSpeed'] . "<br>";
		echo 'Time Zone             : ' . $arrLocation['timeZone'] . "<br>";
		echo 'ZIP Code              : ' . $arrLocation['zipCode'] . "<br>";
		echo 'Domain Name           : ' . $arrLocation['domainName'] . "<br>";
		echo 'ISP Name              : ' . $arrLocation['isp'] . "<br>";
	}
}
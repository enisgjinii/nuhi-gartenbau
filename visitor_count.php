<?php
// Define the path to the CSV file
$csv_file = 'visitor_logs.csv';

// Get visitor information and save it to the CSV file
$visitor_info = getVisitorInfo();
$current_count = saveVisitorInfo($csv_file, $visitor_info);

// Function to get visitor information
function getVisitorInfo()
{
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $timestamp = date("Y-m-d H:i:s");

    $location = getLocation($ip_address);
    $browser = getBrowser($user_agent);
    $os = getOS($user_agent);

    return [
        'ip_address' => $ip_address,
        'browser' => $browser,
        'os' => $os,
        'location' => $location,
        'timestamp' => $timestamp
    ];
}

// Function to get visitor location using an IP geolocation API
function getLocation($ip_address)
{
    $api_url = "http://ip-api.com/json/{$ip_address}?fields=country,regionName,city,zip,lat,lon,isp,org,as";
    $location_data = json_decode(file_get_contents($api_url), true);

    return [
        'country' => $location_data['country'] ?? 'Unknown',
        'region' => $location_data['regionName'] ?? 'Unknown',
        'city' => $location_data['city'] ?? 'Unknown',
        'zip' => $location_data['zip'] ?? 'Unknown',
        'lat' => $location_data['lat'] ?? 'Unknown',
        'lon' => $location_data['lon'] ?? 'Unknown',
        'isp' => $location_data['isp'] ?? 'Unknown',
        'org' => $location_data['org'] ?? 'Unknown',
        'as' => $location_data['as'] ?? 'Unknown',
    ];
}

// Function to parse the user agent string to get the browser
function getBrowser($user_agent)
{
    $browsers = ['Firefox', 'Chrome', 'Safari', 'MSIE', 'Trident'];

    foreach ($browsers as $browser) {
        if (strpos($user_agent, $browser) !== false) {
            return $browser === 'MSIE' || $browser === 'Trident' ? 'Internet Explorer' : $browser;
        }
    }

    return 'Other';
}

// Function to parse the user agent string to get the operating system
function getOS($user_agent)
{
    $os_platforms = [
        'Linux' => '/linux/i',
        'Mac' => '/macintosh|mac os x/i',
        'Windows' => '/windows|win32/i'
    ];

    foreach ($os_platforms as $os => $regex) {
        if (preg_match($regex, $user_agent)) {
            return $os;
        }
    }

    return 'Other';
}

// Function to save visitor information to the CSV file
function saveVisitorInfo($csv_file, $visitor_info)
{
    $file_exists = file_exists($csv_file);
    $file = fopen($csv_file, 'a');

    if (!$file_exists) {
        fputcsv($file, [
            'Count',
            'IP Address',
            'Browser',
            'Operating System',
            'Country',
            'Region',
            'City',
            'ZIP',
            'Latitude',
            'Longitude',
            'ISP',
            'Organization',
            'AS',
            'Timestamp'
        ]);
        $current_count = 1;
    } else {
        $current_count = getLastCount($csv_file) + 1;
    }

    fputcsv($file, array_merge([$current_count], [
        $visitor_info['ip_address'],
        $visitor_info['browser'],
        $visitor_info['os'],
        $visitor_info['location']['country'],
        $visitor_info['location']['region'],
        $visitor_info['location']['city'],
        $visitor_info['location']['zip'],
        $visitor_info['location']['lat'],
        $visitor_info['location']['lon'],
        $visitor_info['location']['isp'],
        $visitor_info['location']['org'],
        $visitor_info['location']['as'],
        $visitor_info['timestamp']
    ]));
    fclose($file);

    return $current_count;
}

// Function to get the last count from the CSV file
function getLastCount($csv_file)
{
    $file = fopen($csv_file, 'r');
    $last_row = null;
    while (($row = fgetcsv($file)) !== false) {
        $last_row = $row;
    }
    fclose($file);

    return $last_row[0] ?? 0;
}
?>

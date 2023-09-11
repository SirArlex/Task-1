<?php
if (isset($_GET['slack_name']) && isset($_GET['track'])) {
    // Retrieve the values in the GET request
    $slack_name = $_GET['slack_name'];
    $track = $_GET['track'];
	// Assign status code
	
	
	$currentDayOfWeek = gmdate('l');
	$utcTime = gmdate("Y-m-d\TH:i:s\Z");
	$githubFileUrl = 'https://github.com/SirArlex/Task-1/blob/main/endpoint.php';
	$githubRepoUrl = 'https://github.com/SirArlex/Task-1';

	$response = array(
    'slack_name' => $slack_name,
    'current_day' => $currentDayOfWeek,
    'utc_time' => $utcTime,
	'track' => $track,
    'github_file_url' => $githubFileUrl,
    'github_repo_url' => $githubRepoUrl,
    'status_code' => 200
);
    header('Content-Type: application/json');

    echo json_encode($response);
} else {
    // error message
    $errorResponse = array('error' => 'name and track required.');
    header('Content-Type: application/json');
    echo json_encode($errorResponse);
}
?>

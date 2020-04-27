<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
    header("location: index.php"); // Redirecting To Home Page
}

$sql = "SELECT member_id FROM Login where netID = $netid";
$memberId = $conn->query($sql);

$sql = "SELECT member_name FROM Org_Member";
$memberName = $conn->query($sql);

$sql = "SELECT graduation_year FROM Org_Member";
$gradYear = $conn->query($sql);

$sql = "SELECT member_status FROM Org_Member";
$memberStatus = $conn->query($sql); //boolean value
if(!$memberstatus)
    $status = "You are not a member of this organization.";
else 
    $status = "You are a member of " + $orgName; 

$sql = "SELECT paid_dues FROM Org_Member";
$memberPaidDues = $conn->query($sql); //boolean value
if($memberPaidDues)
    $dues = "You have paid your organization's dues.";
else 
    $dues = "Organization dues are unpaid.";

$sql = "SELECT email FROM Org_Member";
$memberEmail = $conn->query($sql);

$sql = "SELECT org_id FROM Org_Member";
$orgId = $conn->query($sql);

$sql = "SELECT org_name FROM Organization where org_id = $orgId";
$orgName = $conn->query($sql);

$sql = "SELECT officer_status FROM Org_Member where member_id = $memberId";
$officerStatus = $conn->query($sql); //boolean value

if($officerStatus){
    $sql = "SELECT officer_position FROM Officer where member_id = $memberId";
    $stats = $conn->query($sql);
    $sql = "SELECT officer_email FROM Officer where member_id = $memberId";
    $officerEmail = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Your Profile Page</title>
        <link href="profile.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    </head>
    <body style="background-color:#501214;"></bodystyle>
        <i><?php echo $login_session; ?></i>
        <b id="logout"><a href="logout.php">Log Out</a></b>
        <div class="row">
            <div class="profile">
                <img src="bobcat.jpg" alt="profile image" class="profile__image">
                <div class="profile__name">@member_name</div>
                <div class="profile__detail"> 
                    Email Address: $memberEmail<br>
                    Graduation Year: $gradYear<br>
                </div>
            </div>
            <div class="organization">
                <img src="bobcat.jpg" alt="profile image" class="profile__image">
                <div class="profile__org">$orgName</div>
                <div class="profile__detail"> 
                    Paid Dues?	$dues<br>
                    Member Status:	$status<br>
                </div>
            </div>
        </div>
    </body>
</html>
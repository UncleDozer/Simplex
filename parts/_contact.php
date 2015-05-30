<?php

function contact(  ) {
        $message = $_REQUEST['message'];
        $from = $_REQUEST['name'];
        $fromMail = $_REQUEST['email'];
        $to = $GLOBALS['email'];
        $mailSubject = "Message from Webtastic-Development.net";
        $headers = "From: $from <$fromMail>";
        $subject = "$mailSubject";
        $toEmail = "$to";
        $message = "$fromMail\n" . $message;
        mail( $toEmail, $subject, $message, $headers );
        header( $_SERVER[ 'SERVERNAME' ] );
}

?>

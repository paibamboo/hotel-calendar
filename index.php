﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Zen Rooms</title>
    <link rel="icon" type="image/png" href="favicon.ico">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="two-rows border-btm">
                <div class="col-full highlight">Room / Price</div>
            </div>
            <div class="row">
                <div class="col-full highlight">Double</div>
            </div>
            <div class="row">
                <div class="col-full" style="font-size: 14px;">Rooms Available</div>
            </div>
            <div class="row">
                <div class="col-full" style="font-size: 14px;">Price</div>
            </div>
            <div class="row">
                <div class="col-full highlight">Single</div>
            </div>
            <div class="row">
                <div class="col-full" style="font-size: 14px;">Rooms Available</div>
            </div>
            <div class="row">
                <div class="col-full" style="font-size: 14px;">Price</div>
            </div>
        </div>
        <div class="right">
            <div class="row border-btm">
                <div class="col-full highlight" style="position: relative;">
                    <span class="arrow arrow-left clickable" id="month-nav-left"></span>
                    <span id="cal-heading"></span>
                    <span class="arrow arrow-right clickable" id="month-nav-right"></span>
                </div>
            </div>
            <div class="date-nav-left-container clickable">
                <span class="arrow arrow-left" id="date-nav-left"></span>
            </div>
            <div class="date-nav-right-container clickable">
                <span class="arrow arrow-right" id="date-nav-right"></span>
            </div>
            <div id="all-dates-container">
                <div id="all-dates" class="transition-margin-left" style="margin-left: 0px;">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/data-factory.min.js"></script>
    <script type="text/javascript" src="js/calendar.min.js"></script>
	<script type="text/javascript" src="js/update-popup.min.js"></script>
    <script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>
